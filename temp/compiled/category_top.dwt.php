<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block clearfix">
  <div id="dingji_top">
    <div id="category_tree_index"> 
      <?php $_from = $this->_var['categories_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?> 
      <?php if ($this->_var['cat']['cat_id']): ?>
      <dl>
        <dt class="dt_<?php echo $this->_foreach['cat']['iteration']; ?>" ><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
        <dd> 
          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no']['iteration']++;
?> 
          <a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?> 
          <!-- <span>|</span>--> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </dd>
      </dl>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <div class="hstyle_banner">
      <div class="twoindex_focusbox">
        <div class="focus_picbox">
          <div style="display: block;" id="focus_pic1">
            <?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_1'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?>
          </div>
          <div id="focus_pic2" style="display: none;">  <?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_2'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?></div>
          <div id="focus_pic3" style="display: none;">  <?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_3'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?> </div>
        </div>
        <div class="focus_point">
          <ul>
            <li class="lion" id="pointer1" onmouseover="showfocuspic(1,1);" onmouseout="startpic();"><span> </span></li>
            <li class="" id="pointer2" onmouseover="showfocuspic(2,1);" onmouseout="startpic();"><span>  </span></li>
            <li class="" style="border-right:none" id="pointer3" onmouseover="showfocuspic(3,1);" 
                     onmouseout="startpic();"><span> </span></li>
          </ul>
        </div>
        <script>
					var time=1;
					function showfocuspic(n,num){
						if(num==1){clearInterval(id);}
						if(n>3)
							n=1;
						time=n;
						for(var p=1; p<=3;p++)	{
							if(p==n){	
								if(p%3==0){$("#focus_pic"+p).fadeIn("slow");
									$("#focus_pic"+p).css("display","block");
									$("#pointer"+p).addClass("lion");
									
								}
								else{
									$("#focus_pic"+p).fadeIn("slow");
									$("#focus_pic"+p).css("display","block");
									$("#pointer"+p).addClass("lion");
								}
							}
							else{
								$("#focus_pic"+p).css("display","none");
								$("#pointer"+p).removeClass("lion");
							}
						}
					}
					var id=window.setInterval("showfocuspic(time+1)",3000);
					function startpic()	{
						id=window.setInterval("showfocuspic(time+1)",3000);
					}
				</script> 
      </div>
    </div>
  </div>
  <div class="section">
    <div class="hstyle_sad"> <div style="display: block;">
            <?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'sad_1'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?>
          </div></div>
    <div class="hstyle_sad"> <div style="display: block;">
            <?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'sad_2'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?>
          </div> </div>
    
     <?php echo $this->fetch('library/ad_top.lbi'); ?>
    
  </div>
  <?php echo $this->fetch('library/recommend_best2.lbi'); ?> 
  
  <?php $_from = $this->_var['categories_child_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat_goods']):
        $this->_foreach['no']['iteration']++;
?>
  <div class="bigBrandSample_item  block">
    <div class="bigBrandSample_item_title"> <strong><a href="<?php echo $this->_var['cat_goods']['url']; ?>"><?php echo $this->_var['cat_goods']['name']; ?></a></strong>
      <div class="f_r"> 
        <?php $_from = $this->_var['cat_goods']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_cat');if (count($_from)):
    foreach ($_from AS $this->_var['child_cat']):
?><span><a href="<?php echo $this->_var['child_cat']['url']; ?>" target="_blank"><?php echo $this->_var['child_cat']['name']; ?></a></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
    </div>
    <ul class="bigBrandSample_list clearfix">
      <?php $_from = $this->_var['cat_goods']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_goods');if (count($_from)):
    foreach ($_from AS $this->_var['child_goods']):
?>
      <li>
        <div class="bigBrandSample_list_img"> <a href="<?php echo $this->_var['child_goods']['url']; ?>" title="<?php echo $this->_var['child_goods']['short_name']; ?>" class="link_pro"><img src="<?php echo $this->_var['child_goods']['thumb']; ?>"/> </a> </div>
        <div class="bigBrandSample_list_text"> <a href="<?php echo $this->_var['child_goods']['url']; ?>" title="<?php echo $this->_var['child_goods']['short_name']; ?>"  class="bigBrandSample_list_text_name"><?php echo $this->_var['child_goods']['name']; ?></a>
          <p class="bigBrandSample_list_text_price"><?php echo $this->_var['child_goods']['shop_price']; ?><span class="originalPrice">Rp
          <?php echo $this->_var['child_goods']['market_price']; ?></span></p>
           </div>
      </li>
      
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div class="blank"></div>
</div>
<div class="blank5"></div>

<div class="footer">
  <div class="footerBody">
    <Div class="block"> 
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
     </Div>
  </div>
</div>
</body>
</html>
