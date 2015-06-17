<?php

/**
 * ECSHOP 付款信息管理插件
 *
 * $Author: yuanjiang 04.26.2015
 * $932625974@qq.com
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'languages/' .$GLOBALS['_CFG']['lang']. '/admin/order.php');

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'query'){
    /* 检查权限 */
    admin_priv('order_view');  
	
	$_LANG['ycs'][1] = $_LANG['cs'][OS_UNCONFIRMED];
    $_LANG['ycs'][2] = $_LANG['os'][OS_CONFIRMED];
    $_LANG['ycs'][3] = $_LANG['cs'][OS_INVALID];
	
    $payinfos = get_order_payment();
    $smarty->assign('payinfo_list',   $payinfos['res']);
    $smarty->assign('filter',       $payinfos['filter']);
    $smarty->assign('record_count', $payinfos['record_count']);
    $smarty->assign('page_count',   $payinfos['page_count']);
	$smarty->assign('lang',     $_LANG);
    make_json_result($smarty->fetch('order_payinfo.htm'), '', array('filter' => $payinfos['filter'], 'page_count' => $payinfos['page_count']));
}

/*------------------------------------------------------ */
//-- 编辑支付信息
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='operate'){
    $pay_id = empty($_REQUEST['pay_id']) ? 0 : intval($_REQUEST['pay_id']);
	$status = isset($_REQUEST['confirm']) ? 2 : (isset($_REQUEST['invalid']) ? 3 : 1) ;
	$note = empty($_REQUEST['action_note']) ? "" : htmlspecialchars($_REQUEST['action_note']);
	if(empty($note)){
	     sys_msg($_LANG['js_languages']['pls_input_note']);
	}
	elseif($status<=1){
	     //todo
	}
	else{
	   $sql = "update ".$ecs->table('order_payinfo')." set status = $status, operate_note = '".$note."', operate_time = ".gmtime()." where id = $pay_id";
	   $link[] = array('text' => $_LANG['go_back'], 'href' => 'payinfo.php?act=list');
	   if($db->query($sql)){
	       sys_msg($_LANG['act_ok'],0,$link);
	   }
	   else{
	       sys_msg($_LANG['act_false'],0,$link);
	   }
	}
}

/*------------------------------------------------------ */
//-- 支付详情
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='info'){
    /* 检查权限 */
    admin_priv('order_view'); 
	$pay_id = empty($_REQUEST['pay_id']) ? 0 : intval($_REQUEST['pay_id']);
	$row = array();
	if($pay_id>0){
	   $row = get_payment_info($pay_id);
	}
	$smarty->assign('row',$row);
    
	$_LANG['ycs'][1] = $_LANG['cs'][OS_UNCONFIRMED];
    $_LANG['ycs'][2] = $_LANG['os'][OS_CONFIRMED];
    $_LANG['ycs'][3] = $_LANG['cs'][OS_INVALID];
	
    $smarty->assign('status_list', $_LANG['ycs']);   // 状态语言
	

    $smarty->assign('ur_here',      $_LANG['11_order_payment']);
    $smarty->assign('action_link',  array('text' => $_LANG['11_order_payment'], 'href'=>'payinfo.php?act=list'));
	$smarty->assign('lang',     $_LANG);
	$smarty->display('order_payinfo_info.htm');	
}

/*------------------------------------------------------ */
//-- 订单支付信息
/*------------------------------------------------------ */
elseif ($_REQUEST['act']=='list'){
    
	/* 检查权限 */
    admin_priv('order_view');

    /* 模板赋值 */
    $smarty->assign('ur_here', $_LANG['11_order_payment']);
    $smarty->assign('action_link', array('href' => 'order.php?act=list', 'text' => $_LANG['02_order_list']));
	
	$_LANG['ycs'][1] = $_LANG['cs'][OS_UNCONFIRMED];
    $_LANG['ycs'][2] = $_LANG['os'][OS_CONFIRMED];
    $_LANG['ycs'][3] = $_LANG['cs'][OS_INVALID];
	
    $smarty->assign('status_list', $_LANG['ycs']);   // 状态语言

    $smarty->assign('full_page',        1);

    $payinfos = get_order_payment(); 
    $smarty->assign('payinfo_list',   $payinfos['res']); 
    $smarty->assign('filter',       $payinfos['filter']);
    $smarty->assign('record_count', $payinfos['record_count']);
    $smarty->assign('page_count',   $payinfos['page_count']);
	$smarty->assign('lang',     $_LANG);

    /* 显示模板 */
    assign_query_info();
    $smarty->display('order_payinfo.htm');     
}


/**
 * 获取支付列表
 * 
 * @access private
 * @return Array
 */
function get_order_payment(){
        
		/* 订单号 */
		$filter['order_sn'] = empty($_REQUEST['order_sn']) ? '' : trim($_REQUEST['order_sn']);
	
	    /* 当前页 */
        $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);

        /* 支付状态 */
		$filter['status'] = empty($_REQUEST['composite_status']) || (intval($_REQUEST['composite_status']) <= 0) ? 0 : intval($_REQUEST['composite_status']);

        if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0)
        {
            $filter['page_size'] = intval($_REQUEST['page_size']);
        }
        elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0)
        {
            $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
        }
        else
        {
            $filter['page_size'] = 15;
        }
		
		/* 查询条件 */
		$where = "";
		if(!empty($filter['order_sn'])){
		   $where .= "and order_sn like '%".$filter['order_sn']."%' ";
		}
		
		if($filter['status']>0){
		   $where .= "and status = ".$filter['status']." ";
		}
		
		/* 记录总数 */
        $filter['record_count']   = $GLOBALS['db']->getOne("select count(*) from ".$GLOBALS['ecs']->table('order_payinfo')." where 1 $where");
		$filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;
			
        $sql = "select * from ".$GLOBALS['ecs']->table('order_payinfo')." where 1 ".
		       $where.
		       "order by id desc limit ".($filter['page']-1)*$filter['page_size'].", ".$filter['page_size']."";  
		
		$res = $GLOBALS['db']->getAll($sql);
		
		foreach($res as $k=>$v){
		   $res[$k]['user_name'] = $GLOBALS['db']->getOne("select user_name from ".$GLOBALS['ecs']->table('users')." where user_id = ".$v['user_id'].""); 
		}
	
	    $arr = array('res' => $res, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

        return $arr;
}

/**
 * 获取支付详情
 * 
 * @access private
 * @return Array
 */
function get_payment_info($pay_id){
        $sql = "select * from ".$GLOBALS['ecs']->table('order_payinfo')." where id = $pay_id ";
		$row = $GLOBALS['db']->getRow($sql);
		$row['user_name'] = $GLOBALS['db']->getOne("select user_name from ".$GLOBALS['ecs']->table('users')." where user_id = ".$row['user_id'].""); 
		$row['add_time'] = local_date($GLOBALS['_CFG']['time_format'],$row['add_time']);
		$row['operate_time'] = local_date($GLOBALS['_CFG']['time_format'],$row['operate_time']); 
		return $row; 
}
?>