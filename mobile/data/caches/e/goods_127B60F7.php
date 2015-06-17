<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:59:"/home/indojalanja_gmail_com/mobile/themes/miqinew/goods.dwt";i:1;s:70:"/home/indojalanja_gmail_com/mobile/themes/miqinew/library/comments.lbi";i:2;s:73:"/home/indojalanja_gmail_com/mobile/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1434294010;s:8:"maketime";i:1434290410;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>NAN HA 2, 6-12 Bulan 400gr_Khusus Alergi_Susu Bayi_Baby Feeding_Tempat Belanja Susu dan Popok Bayi Online Terlengkap | Jalanja Touch Screen</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/miqinew/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/miqinew/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/miqinew/ectouch.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="data/static/js/common.js"></script><script type="text/javascript" src="themes/miqinew/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="cat_all.php"> Back </a> </div>
  <h1> Product detail </h1>
  <div class="header_r header_search"> <a class="ico_15" href="ectouch.php?act=share&content=NAN HA 2, 6-12 Bulan 400gr&pic=images/201505/source_img/2011_G_1432604793032.jpg"> Share </a> </div>
</header>
 
<script src="themes/miqinew/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="images/201505/thumb_img/2011_thumb_G_1432604793667.jpg"  alt="NAN HA 2, 6-12 Bulan 400gr" /></a></div>-->
      <ul>
        <li><a href="javascript:showPic()"><img alt="" src="http://www.jalanja.com/images/201505/source_img/2011_G_1432604793032.jpg"/></a></li>
         
         
         
         
              </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
         
         
        <i class="current"></i> 
         
              </ul>
    </div>
  </div>
  <div class="blank2"></div>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:false //自动播放
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 
<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(2011)" style="display: inline;"></a>
  <div class="title">
    <h1> NAN HA 2, 6-12 Bulan 400gr </h1>
  </div>
  <ul>
        <li>Jalanja Price: <b class="price">Rp<span>171,000</span></b>　    <del>Rp<span>205,200</span></del> 
    </li>
     
	  </ul>
      
  <ul>
  <!--  <li>Sold0pcs</li>    stop sales count first-->
  </ul>
</section>
<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div><span></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(2011)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
     <div class="fields">	 
        <ul class="ul1">
          <li>Total：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
          <li></li>
        </ul>
        <ul class="ul2">
           
           
          
        </ul>
        <ul class="quantity">
          <h2>Quantity</h2>
          <div class="items"> <span class="ui-number radius5"> 
                        <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="100" type="number" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
             
            </span> </div>
        </ul>
      </div>
      <div class="option" > 
        <script type="text/javascript">
            function showDiv(){
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
        <button type="button" class="btn buy radius5" onClick="addToCart_quick(2011)">Checkout now</button>
        <button type="button" class="btn cart radius5" onclick="addToCart(2011);">
        <div class="ico_01"></div>
        Put in Cart</button>
        
        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>View Cart</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="http://www.jalanja.com/images/201505/source_img/2011_G_1432604793032.jpg"> </div>
            <div id="right">
              <p>NAN HA 2, 6-12 Bulan 400gr</p>
              <span> Quantity: <b id="cartNum"></b></span> <span> Subtotal: <b id="cartPrice"></b></span> 
            </div>
          </div>
          <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);">Shopping </a> <a class="bnt2 flex_in radius5" href="flow.php">Checkout now</a> </div>
        </div>
         
      </div>
    </form>
  </section>
  <div class="guarantee">Free shipping in Great Jakarta(>Rp150,000)</div>
</div>
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> Detail </li>
      <li id="tabs2" onClick="tab(2)" class=""> Review <span class="review-count">(0)</span> </li>
      <li id="tabs3" onClick="tab(3)" class=""> Hot Items </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <p>&nbsp;<em style="color: rgb(0, 100, 0); font-family: Arial, Helvetica, sans-serif; border: 0px; margin: 0px; padding: 0px;"><strong style="border: 0px; margin: 0px; padding: 0px;">NAN HA 2 400gr.</strong></em></p>
<p style="border: 0px; margin: 0px 0px 20px; padding: 0px; font-family: Arial, Helvetica, sans-serif;"><span style="border: 0px; margin: 0px; padding: 0px; color: rgb(0, 100, 0);">Merupakan susu formula untuk bayi usia 6 bulan sampai dengan 1 tahun. Diformulasikan dengan kandungan OPTIPRO HA Protein hypoallergenic, Bifidobacterium Lactis, dan DHA yang akan memberikan asupan penting bagi tubuh anak.&nbsp;</span></p>    </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="data/static/js/transport.js"></script><script type="text/javascript" src="data/static/js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";s:4:"2011";}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
         
        <li class="flex_in  "    > <a href="">
        <div class="summary radius5"> <img src="http://www.jalanja.com/images/201504/thumb_img/567_thumb_G_1429671203597.jpg" alt=""/>
          <div class="price"> 
            
             
            Rp<span>269,000</span> 
             
            
          </div>
        </div>
         
        </a>
        </li>
         
        <li class="flex_in  "    style="float:right"  > <a href="">
        <div class="summary radius5"> <img src="http://www.jalanja.com/images/201505/thumb_img/974_thumb_G_1432678815113.jpg" alt=""/>
          <div class="price"> 
            
             
            Rp<span>132,000</span> 
             
            
          </div>
        </div>
         
        </a>
        </li>
         
        <li class="flex_in  "    > <a href="">
        <div class="summary radius5"> <img src="http://www.jalanja.com/images/201504/thumb_img/1575_thumb_G_1429151540981.jpg" alt=""/>
          <div class="price"> 
            
             
            Rp<span>258,000</span> 
             
            
          </div>
        </div>
         
        </a>
        </li>
         
        <li class="flex_in  "    style="float:right"  > <a href="">
        <div class="summary radius5"> <img src="http://www.jalanja.com/images/201504/thumb_img/1650_thumb_G_1429662414747.jpg" alt=""/>
          <div class="price"> 
            
             
            Rp<span>42,500</span> 
             
            
          </div>
        </div>
         
        </a>
        </li>
         
        <li class="flex_in  "    > <a href="">
        <div class="summary radius5"> <img src="http://www.jalanja.com/images/201504/thumb_img/1716_thumb_G_1429648531141.jpg" alt=""/>
          <div class="price"> 
            
             
            Rp<span>61,000</span> 
             
            
          </div>
        </div>
         
        </a>
        </li>
              </ul>
    </div>
  </div>
</section>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="Search" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="http://www.jalanja.com/?computer=1"> Desktop </a> <a href="./" style="border-right:none"> Touch </a></p>
  <p class="region"> 
     
    &copy; 2014-2015 Jalanja Copyright, All Rights Reserved. </p>
  <!--<div class="favLink region"> </a> </div>-->
</div>
<link href="themes/miqinew/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">Home</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">Category</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">Search</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">Cart</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php?act=order_list" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">Order</span>
            </a>
        </div>
    </div>
    <div class="global-nav__operate-wrap">
        <span class="global-nav__yhd-logo"></span>
        <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
    </div>
</div>
<script type="text/javascript" src="themes/miqinew/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> 
 
<script type="text/javascript">
var goods_id = 2011;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "Day";
var hour = "Hour";
var minute = "Minute";
var second = "Sec";
var end = "Closed";
var goodsId = 2011;
var now_time = 1434265210;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</body>
</html>