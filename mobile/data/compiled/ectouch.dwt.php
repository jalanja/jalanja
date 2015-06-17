<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> Touch</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script> 
</head>
<body>

 
<?php if ($this->_var['action'] == 'contact'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="./"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['contact_us']; ?> </h1>
</header>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div class="hd"> <span><?php echo $this->_var['lang']['welcome']; ?><?php echo $this->_var['shop_name']; ?></span>
      <ul>
        <li><a href="javascript:void(0)"><?php echo $this->_var['lang']['contact_us']; ?></a></li>
        <li><a href="javascript:void(0)"><?php echo $this->_var['lang']['about_us']; ?></a></li>
      </ul>
    </div>
    <div class="blank2"></div>
    <div class="bd" id="tabBox1-bd">
      <ul style="padding:0; margin:0;">
        <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
        	<?php if ($this->_var['service_phone']): ?>
        	<a href="tel:<?php echo $this->_var['service_phone']; ?>" class="clearfix"> <span class="ico_touch ico_touch_01"></span><span><?php echo $this->_var['lang']['hot_line']; ?>：<?php echo $this->_var['service_phone']; ?></span><i></i> </a>
            <?php endif; ?>
            <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
            <?php if ($this->_var['im']): ?>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=<?php echo $this->_var['shop_name']; ?>&menu=yes" class="clearfix"> <span class="ico_touch ico_touch_02"></span><span>在线咨询：<?php echo $this->_var['im']; ?></span><i></i> </a> 
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <a href="ectouch.php?act=map&address=<?php echo $this->_var['shop_country']; ?><?php echo $this->_var['shop_province']; ?><?php echo $this->_var['shop_city']; ?><?php echo $this->_var['shop_address']; ?>" class="clearfix"> <span class="ico_touch ico_touch_03"></span><span><?php echo $this->_var['lang']['a_address']; ?>：<?php echo $this->_var['shop_country']; ?><?php echo $this->_var['shop_province']; ?><?php echo $this->_var['shop_city']; ?><?php echo $this->_var['shop_address']; ?></span><i></i> </a> 
            <a class="clearfix" href="#" onclick="openWin()"> Start Live Chat</a>
            </div>
            
        <script>
        function openWin()
        {
        var myWindow = window.open("https://v2.zopim.com/widget/popout.html?key=2j44BuVfJJ9ekzijXoJXA2USW7qm5kXj","","width=500,height=500");
        }
        </script>
             
      </ul>
      <ul>
        <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0; font-size:0.8rem; line-height:1.5rem; padding:0.8rem"><?php echo $this->_var['article']['content']; ?></div>
      </ul>
    </div>
  </div>
</section>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script> 
<script type="text/javascript">TouchSlide({slideCell:"#leftTabBox",effect:"leftLoop"}); </script> 
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'share'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.back();"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['share_to']; ?> </h1>
</header>
<div class="blank3"></div>
<section class="wrap">
  <div class="bdsharebuttonbox share box1 radius10 padd1">
<span class='st_sharethis_large' displayText='ShareThis'></span><br><br>
<span class='st_facebook_large' displayText='Facebook'></span><br><br>
<span class='st_googleplus_large' displayText='Google +'></span><br><br>
<span class='st_twitter_large' displayText='Tweet'></span><br><br>
<span class='st_email_large' displayText='Email'></span>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "fba29a19-5122-4acc-8362-42b7bd6be269", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

  </div>
</section>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"<?php echo $_GET['content']; ?>","bdMini":"2","bdMiniList":false,"bdPic":"<?php echo $this->_var['shop_url']; ?><?php echo $_GET['pic']; ?>","bdUrl":"<?php echo $this->_var['HTTP_REFERER']; ?>","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'map'): ?>
<!-- <style type="text/css">
html,body {margin:0px; padding:0px; height:100%}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?type=quick&ak=1v0DK2dBBCvzXILG5P7nMsz1&v=2.0"></script>
<div id="allmap" style="width:100%; height:100%"></div>
<script type="text/javascript">
// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(116.331398,39.897445);
map.centerAndZoom(point,12);
map.addControl(new BMap.ZoomControl()); //添加地图缩放控件

// 创建地址解析器实例
var myGeo = new BMap.Geocoder();
// 将地址解析结果显示在地图上,并调整地图视野
myGeo.getPoint("<?php echo $_GET['address']; ?>", function(point){
  if (point) {
    map.centerAndZoom(point, 16);
    map.addOverlay(new BMap.Marker(point));
  }
});
</script>   --> 
<?php endif; ?> 
 

</body>
</html>
