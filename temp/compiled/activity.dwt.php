<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['activity']['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['activity']['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php if ($this->_var['act_id'] > 0): ?>
 <style type="text/css">
 body{background:#f2f2f0}
 ul.gbox{width:960px;}
 ul.gbox li{width:220px;border:3px solid #efefef;float:left;margin-right:14px;margin-top:15px;background:#ffffff}
 ul.gbox li:hover{border:3px solid #ff5771}
 ul.gbox li img{border-bottom:1px solid #e4e4e4}
 #leftTime{font-size:24px;color:#ff4560;font-weight:bold}
 #leftTime font{font-size:12px;color:#333;}
 </style>
 <div style="width:100%;height:350px;background:url(<?php echo $this->_var['activity']['banner']; ?>) no-repeat center top"></div>
 <div class="block" style="width:946px">
  <div class="block" style="width:946px;margin-top:15px;">
   <div style="margin:3px;background:#fff;padding:10px;">
	<div class="f_l" style="width:460px;padding-right:100px;padding-left:30px;border-right:1px solid #f2f2f0">
	 <div style="height:40px;line-height:40px">
	  <span style="font-weight:bold;font-size:18px;color:#333;"><?php echo $this->_var['activity']['act_name']; ?></span>
	 </div>
	 <div style="line-height:20px;">
	  <p><?php echo $this->_var['lang']['label_min_amount']; ?> <font color="#ff4560"><?php echo $this->_var['activity']['min_amount']; ?></font>，<?php echo $this->_var['lang']['label_user_rank']; ?> <font color="#ff4560"><?php echo $this->_var['activity']['user_rank']; ?></font></p>
	  <p><?php echo $this->_var['activity']['intro']; ?></p>
	 </div>
	</div>
	<div class="f_l" style="height:40px;line-height:40px;margin-left:40px;">
	   <?php if ($this->_var['now_time'] < $this->_var['activity']['start_time']): ?>
	   <p style="border-bottom:1px dashed #e4e4e4"><?php echo $this->_var['lang']['act_start_time']; ?>：</p>
	   <span style="font-size:24px;color:#ff4560;font-weight:bold"><?php echo $this->_var['activity']['start_time_format']; ?></span>
	  <?php elseif ($this->_var['now_time'] < $this->_var['activity']['end_time']): ?>
	   <p style="border-bottom:1px dashed #e4e4e4"><?php echo $this->_var['lang']['act_end_time']; ?>：</p>
	   <span id="leftTime"></span>
	  <?php else: ?>
	    <span style="line-height:100px;font-size:24px;"><?php echo $this->_var['lang']['y_ended']; ?></span>
	  <?php endif; ?> 
	 </div>
	<div class="clearfix"></div>
   </div>
  </div>
  <ul class="gbox">
  <?php $_from = $this->_var['activity']['act_range_ext']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'g');if (count($_from)):
    foreach ($_from AS $this->_var['g']):
?>
   <li>
    <a href="<?php echo $this->_var['g']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['g']['goods_thumb']; ?>" width="220"/></a>
    <div style="padding:10px">
	 <div><p class="y_proName" style="padding:0"><a href="<?php echo $this->_var['g']['url']; ?>" target="_blank"><?php echo $this->_var['g']['goods_name']; ?></a></p></div>
	 <div><?php echo $this->_var['lang']['shop_price']; ?><span class="y_price" style="padding:0"><?php echo $this->_var['g']['price']; ?></span></div>
	</div> 
   </li>	
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <div class="clearfix"></div>
  <?php if (! empty ( $this->_var['activity']['gift'] )): ?> 
  <div style="font-size:24px;color:#ff4560;padding:15px 0 10px 0;border-bottom:3px solid #ff4560;"><?php echo $this->_var['lang']['fat_goods']; ?></div>
  <ul class="gbox">
  <?php $_from = $this->_var['activity']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'g');if (count($_from)):
    foreach ($_from AS $this->_var['g']):
?>
   <li>
   <a href="<?php echo $this->_var['g']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['g']['thumb']; ?>" /></a>
   <div style="padding:10px">
    <div><p class="y_proName" style="padding:0"><a href="<?php echo $this->_var['g']['url']; ?>" target="_blank"><?php echo $this->_var['g']['name']; ?></a></p></div>
	<div><p class="y_price" style="padding:0"><?php if ($this->_var['g']['price'] == "0"): ?><?php echo $this->_var['lang']['for_free']; ?><?php else: ?><?php echo $this->_var['g']['price']; ?><?php endif; ?></p></div>
   </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <?php endif; ?>
 </div> 
<?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
<script type="text/javascript">
var gmt_end_time = <?php echo empty($this->_var['activity']['end_time']) ? '0' : $this->_var['activity']['end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  try { 
     onload_leftTime(); 
  }
  catch (e){
     //todo
  }
}
</script>
<?php else: ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block">
  <h5><span><?php echo $this->_var['lang']['activity_list']; ?></span></h5>
  <div class="blank"></div>
   <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_name']; ?></th>
      <td colspan="3" bgcolor="#ffffff"><?php echo $this->_var['val']['act_name']; ?></td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_start_time']; ?></th>
      <td width="200" bgcolor="#ffffff"><?php echo $this->_var['val']['start_time']; ?></td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_max_amount']; ?></th>
      <td bgcolor="#ffffff">
        <?php if ($this->_var['val']['max_amount'] > 0): ?>
        <?php echo $this->_var['val']['max_amount']; ?>
        <?php else: ?>
        <?php echo $this->_var['lang']['nolimit']; ?>
        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_end_time']; ?></th>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['end_time']; ?></td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_min_amount']; ?></th>
      <td width="200" bgcolor="#ffffff"><?php echo $this->_var['val']['min_amount']; ?></td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_range']; ?></th>
      <td bgcolor="#ffffff">
        <?php echo $this->_var['val']['act_range']; ?>
        <?php if ($this->_var['val']['act_range'] != $this->_var['lang']['far_all']): ?>
        :<br />
        <?php $_from = $this->_var['val']['act_range_ext']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ext');if (count($_from)):
    foreach ($_from AS $this->_var['ext']):
?>
        <a href="<?php echo $this->_var['val']['program']; ?><?php echo $this->_var['ext']['id']; ?>" taget="_blank" class="f6"><span class="f_user_info"><u><?php echo $this->_var['ext']['name']; ?></u></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
      </td>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_user_rank']; ?></th>
      <td bgcolor="#ffffff">
        <?php $_from = $this->_var['val']['user_rank']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
        <?php echo $this->_var['user']; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <tr>
      <th bgcolor="#ffffff"><?php echo $this->_var['lang']['label_act_type']; ?></th>
      <td colspan="3" bgcolor="#ffffff">
        <?php echo $this->_var['val']['act_type']; ?><?php if ($this->_var['val']['act_type'] != $this->_var['lang']['fat_goods']): ?><?php echo $this->_var['val']['act_type_ext']; ?><?php endif; ?>
      </td>
    </tr>
    <?php if ($this->_var['val']['gift']): ?>
    <tr>
      <td colspan="4" bgcolor="#ffffff">
      <?php $_from = $this->_var['val']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <table border="0" style="float:left;">
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></a></td>
        </tr>
        <tr>
          <td align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['id']; ?>" class="f6"><?php echo $this->_var['goods']['name']; ?></a></td>
        </tr>
        <tr>
          <td align="center">
            <?php if ($this->_var['goods']['price'] > 0): ?>
            <?php echo $this->_var['goods']['price']; ?><?php echo $this->_var['lang']['unit_yuan']; ?>
            <?php else: ?>
            <?php echo $this->_var['lang']['for_free']; ?>
            <?php endif; ?>
          </td>
        </tr>
      </table>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </td>
    </tr>
    <?php endif; ?>
  </table>
  <div class="blank5"></div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?>
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