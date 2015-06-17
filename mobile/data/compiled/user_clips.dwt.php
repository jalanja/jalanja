<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> <?php echo $this->_var['lang']['touch_version']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js')); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
</head>
<body>
 
<?php if ($this->_var['action'] == 'default'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="./"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['user_center']; ?> </h1>
</header>
<dl class="user_top">
  <dt> <?php if ($this->_var['info']['avatar'] != ''): ?><img src="<?php echo $this->_var['info']['avatar']; ?>"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"><?php endif; ?> </dt>
  <dd>
    <p><?php echo $this->_var['info']['username']; ?></p>
    <p><span><?php echo $this->_var['rank_name']; ?></span></p>
  </dd>
  <div class="user_top_list">
    <ul>
      <li> <a href="user.php?act=order_list"> <strong><?php echo $this->_var['info']['order_count']; ?></strong> <img  src="<?php echo $this->_var['ectouch_themes']; ?>/images/ico_user_01.png"> <span><?php echo $this->_var['lang']['label_order']; ?></span> </a> </li>
      <li> <a href="javascript:;"> <strong><?php echo $this->_var['info']['integral']; ?></strong> <img  src="<?php echo $this->_var['ectouch_themes']; ?>/images/ico_user_02.png"> <span><?php echo $this->_var['lang']['your_integral']; ?></span> </a> </li>
      <li> <a href="javascript:;"> <strong><?php echo $this->_var['info']['surplus']; ?></strong> <img  src="<?php echo $this->_var['ectouch_themes']; ?>/images/ico_user_03.png"> <span><?php echo $this->_var['lang']['account_balance']; ?></span> </a> </li>
      <li> <a class="fragment" href="user.php?act=bonus"> <strong><?php echo $this->_var['info']['bonus']; ?></strong> <img  src="<?php echo $this->_var['ectouch_themes']; ?>/images/ico_user_04.png"> <span><?php echo $this->_var['lang']['user_bonus']; ?></span> </a> </li>
    </ul>
  </div>
  <div class="quan1"></div>
  <div class="quan2"></div>
  <div class="quan3"></div>
</dl>
<div class="blank3"></div>
<section class="wrap">
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> <a href="user.php?act=profile" class="clearfix"> <span><?php echo $this->_var['lang']['label_profile']; ?></span><i></i> </a> <a href="user.php?act=order_list" class="clearfix"> <span><?php echo $this->_var['lang']['label_order']; ?></span><i></i> </a> <a href="user.php?act=address_list"  class="clearfix"> <span><?php echo $this->_var['lang']['label_address']; ?></span><i></i> </a> <a href="user.php?act=collection_list"  class="clearfix"> <span><?php echo $this->_var['lang']['label_collection']; ?></span><i></i> </a> </div>
  <div class="blank3"></div>
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> <a href="user.php?act=message_list" class="clearfix"> <span><?php echo $this->_var['lang']['label_message']; ?></span><i></i> </a> <a href="user.php?act=affiliate" class="clearfix"> <span><?php echo $this->_var['lang']['label_affiliate']; ?></span><i></i> </a> <a href="user.php?act=comment_list"  class="clearfix"> <span><?php echo $this->_var['lang']['label_comment']; ?></span><i></i> </a> </div>
  <div class="blank3"></div>
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> 
    <!-- <a href="user.php?act=track_packages" class="clearfix">
				<span><?php echo $this->_var['lang']['label_track_packages']; ?></span><i></i>
			</a>  --> 
    <a href="user.php?act=logout" class="clearfix"> <span><?php echo $this->_var['lang']['label_logout']; ?></span><i></i> </a> </div>
</section>

<?php endif; ?> 
 
 
<?php if ($this->_var['action'] == 'message_list'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['label_message']; ?> </h1>
</header>
<section class="wrap message_list">
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
        <td class="message"></td>
    </tr>
  </table>
  </section>
  <a href="javascript:;" style="text-align:center" class="get_more"></a>
  <section class="order_box padd1 radius10">
  <form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onSubmit="return submitMsg()">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <?php if ($this->_var['order_info']): ?>
      <tr>
        <td> <?php echo $this->_var['lang']['order_number']; ?> <a href ="<?php echo $this->_var['order_info']['url']; ?>"><img src="themes/miqinew/images/note.gif" /><?php echo $this->_var['order_info']['order_sn']; ?></a>
          <input name="msg_type" type="hidden" value="5" />
          <input name="order_id" type="hidden" value="<?php echo $this->_var['order_info']['order_id']; ?>" class="inputBg_touch" /></td>
      </tr>
      <?php else: ?>
      <tr>
        <td><input name="msg_type" type="radio" value="0" checked="checked" />
          <?php echo $this->_var['lang']['type']['0']; ?>
          <input type="radio" name="msg_type" value="1" />
          <?php echo $this->_var['lang']['type']['1']; ?>
          <input type="radio" name="msg_type" value="2" />
          <?php echo $this->_var['lang']['type']['2']; ?>
          <input type="radio" name="msg_type" value="3" />
          <?php echo $this->_var['lang']['type']['3']; ?>
          <input type="radio" name="msg_type" value="4" />
          <?php echo $this->_var['lang']['type']['4']; ?> </td>
      </tr>
      <?php endif; ?>
      <tr>
        <td><input name="msg_title" type="text" placeholder="<?php echo $this->_var['lang']['message_title']; ?>" class="inputBg_touch" /></td>
      </tr>
      <tr>
        <td><textarea name="msg_content" placeholder="<?php echo $this->_var['lang']['message_content']; ?>" cols="50" rows="4" wrap="virtual" style="border: 1px #DDD solid; width: 90%;"></textarea></td>
      </tr>
      <tr>
        <td><input type="hidden" name="act" value="act_add_message" />
          <input type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="c-btn3" /></td>
      </tr>
    </table>
  </form>
  </section>
</section>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script>
<script type="text/javascript">
jQuery(function($){
    $('.message_list').more({'address': 'user.php?act=async_message_list', amount: 5, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});	
});
</script>
<?php endif; ?> 
 
 
<?php if ($this->_var['action'] == 'comment_list'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['label_comment']; ?> </h1>
</header>
<section class="wrap comment_list">
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
        <td class="comment"></td>
    </tr>
  </table>
  </section>
  <a href="javascript:;" style="text-align:center" class="get_more"></a>
</section>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script>
<script type="text/javascript">
jQuery(function($){
    $('.comment_list').more({'address': 'user.php?act=async_comment_list', amount: 5, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'collection_list'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['label_collection']; ?> </h1>
</header>
<section class="wrap collection_list">
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
        <td class="collection"></td>
    </tr>
  </table>
</section>
<a href="javascript:;" style="text-align:center" class="get_more"></a>
</section>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script>
<script type="text/javascript">
jQuery(function($){
    $('.collection_list').more({'address': 'user.php?act=async_collection_list', amount: 5, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
<?php endif; ?> 
 
 
<?php if ($this->_var['action'] == 'booking_list'): ?>
<header id="header">
  <div class="c-inav">
    <section>
      <button class="back">
      <span><em></em></span><a href="javascript:history.go(-1)"><?php echo $this->_var['lang']['back_up_page']; ?></a>
      </button>
    </section>
    <section> <span style="font-size:14px; color:#333; font-weight:normal"><?php echo $this->_var['lang']['label_booking']; ?></span> </section>
    <section></section>
  </div>
</header>
<div class="blank"></div>
<div class="fullscreen">
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></td>
      <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?></td>
      <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_time']; ?></td>
      <td width="25%" bgcolor="#ffffff"><?php echo $this->_var['lang']['process_desc']; ?></td>
      <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
    </tr>
    <?php $_from = $this->_var['booking_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <tr>
      <td align="center" bgcolor="#ffffff"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" class="f6"><?php echo $this->_var['item']['goods_name']; ?></a></td>
      <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['goods_number']; ?></td>
      <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['booking_time']; ?></td>
      <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['dispose_note']; ?></td>
      <td align="center" bgcolor="#ffffff"><a href="javascript:if (confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) location.href='user.php?act=act_del_booking&id=<?php echo $this->_var['item']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'add_booking'): ?>
<header id="header">
  <div class="c-inav">
    <section>
      <button class="back">
      <span><em></em></span><a href="javascript:history.go(-1)"><?php echo $this->_var['lang']['back_up_page']; ?></a>
      </button>
    </section>
    <section> <span style="font-size:14px; color:#333; font-weight:normal">{<?php echo $this->_var['lang']['add']; ?><?php echo $this->_var['lang']['label_booking']; ?></span> </section>
    <section></section>
  </div>
</header>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['booking_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="fullscreen">
  <div class="blank"></div>
  <form action="user.php" method="post" name="formBooking" onsubmit="return addBooking();">
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['info']['goods_name']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?>:</td>
        <td bgcolor="#ffffff"><input name="number" type="text" value="<?php echo $this->_var['info']['goods_number']; ?>" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?>:</td>
        <td bgcolor="#ffffff"><textarea name="desc" cols="50" rows="5" wrap="virtual" class="B_blue"><?php echo $this->_var['goods_attr']; ?><?php echo htmlspecialchars($this->_var['info']['goods_desc']); ?></textarea></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_username']; ?>:</td>
        <td bgcolor="#ffffff"><input name="linkman" type="text" value="<?php echo htmlspecialchars($this->_var['info']['consignee']); ?>" size="25"  class="inputBg"/></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
        <td bgcolor="#ffffff"><input name="email" type="text" value="<?php echo htmlspecialchars($this->_var['info']['email']); ?>" size="25" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_phone']; ?>:</td>
        <td bgcolor="#ffffff"><input name="tel" type="text" value="<?php echo htmlspecialchars($this->_var['info']['tel']); ?>" size="25" class="inputBg" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff">&nbsp;</td>
        <td bgcolor="#ffffff"><input name="act" type="hidden" value="act_add_booking" />
          <input name="id" type="hidden" value="<?php echo $this->_var['info']['id']; ?>" />
          <input name="rec_id" type="hidden" value="<?php echo $this->_var['info']['rec_id']; ?>" />
          <input type="submit" name="submit" class="submit" value="<?php echo $this->_var['lang']['submit_booking_goods']; ?>" />
          <input type="reset" name="reset" class="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" /></td>
      </tr>
    </table>
  </form>
</div>
<?php endif; ?> 
 
<?php if ($this->_var['affiliate']['on'] == 1): ?> 
<?php if ($this->_var['action'] == 'affiliate'): ?> 
<?php if (! $this->_var['goodsid'] || $this->_var['goodsid'] == 0): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['label_affiliate']; ?> </h1>
</header>
<section class="wrap message_list">
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" class="ectouch_table">
    <tr align="left">
      <td><?php echo $this->_var['affiliate_intro']; ?></td>
    </tr>
  </table>
  </section>
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr align="center">
      <td><?php echo $this->_var['lang']['affiliate_lever']; ?></td>
      <td><?php echo $this->_var['lang']['affiliate_num']; ?></td>
      <td><?php echo $this->_var['lang']['level_point']; ?></td>
      <td><?php echo $this->_var['lang']['level_money']; ?></td>
    </tr>
    <?php $_from = $this->_var['affdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('level', 'val');$this->_foreach['affdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['affdb']['total'] > 0):
    foreach ($_from AS $this->_var['level'] => $this->_var['val']):
        $this->_foreach['affdb']['iteration']++;
?>
    <tr align="center">
      <td><?php echo $this->_var['level']; ?></td>
      <td><?php echo $this->_var['val']['num']; ?></td>
      <td><?php echo $this->_var['val']['point']; ?></td>
      <td><?php echo $this->_var['val']['money']; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  </section>
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr align="center">
      <td><?php echo $this->_var['lang']['affiliate_code']; ?><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a> Or share to social network</td>
    </tr>
  </table>
  
  </section>
</section>

<?php endif; ?> 
<?php endif; ?> 

<?php endif; ?> 

 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
