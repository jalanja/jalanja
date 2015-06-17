<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:54:"/home/indojalanja_gmail_com/themes/miqinew/article.dwt";i:1;s:66:"/home/indojalanja_gmail_com/themes/miqinew/library/page_header.lbi";i:2;s:62:"/home/indojalanja_gmail_com/themes/miqinew/library/ur_here.lbi";i:3;s:64:"/home/indojalanja_gmail_com/themes/miqinew/library/left_help.lbi";i:4;s:66:"/home/indojalanja_gmail_com/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1434366461;s:8:"maketime";i:1434362861;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>Shipping Method_Payment_Help Center_Info Center_Tempat Belanja Susu dan Popok Bayi Online Terlengkap | Jalanja</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/miqinew/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<div class="body_user ">
<script type="text/javascript">
var process_request = "Please wait...";
</script>
<script type="text/javascript">
//Save us
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("Maaf, Browser anda tidak support\n\n Gagal mem-bookmark, gunakan Ctrl+D");
     }
  }
}
</script>
<div class="header ">
  <div class="headBody">
    <div class="heads">
      <div class="bookmail">
        <ul>
          <li class="background_ico"><a href="http://m.jalanja.com" target="_blank" rel="nofollow">Mobile version</a></li>
          <li class="background_line"><a href="https://www.jalanja.com/user.php?act=affiliate" target="_blank" rel="nofollow">Invite Friend</a>  
          <li><a href="javascript:void(0);" onclick="AddFavorite('Favourate',location.href)">+ Favorit</a></li>
          <li class="background_pay">Link us<span class="arrow"></span>
            <div class="bookmail_more">
              <ul>
                <li class="more01"><a href="https://www.facebook.com/jalanjaindonesia?fref=ts" target="_blank"><img src="themes/miqinew/images/facebook.png"></a></li>
                <li class="more02"><img src="themes/miqinew/images/bbm-barcode.png"></a></li>
                <li class="more03"><img src="themes/miqinew/images/wechat-barcode.png"></a></li>
              </ul>
            </div>
          </li>
          <li><a href="#" onclick="javascript:mShowDiv(550,150);">Track Shipping</a></li>            
        </ul>
      </div>
	  <div id="alert_box" class="alert_hide">
                   <div id="alert_header">
                    <div id="alert_title">Order tracking</div>
                    <a id="alert_close" href="javascript:void(0);">x</a>
                   </div>
                   <div id="alert_content">
                   <div id="as-root">&nbsp;Silahkan Masukkan Nomor Resi Pengiriman Anda, kemudian klik "Track". &nbsp; </div>
				   <p style="height:10px"></p>	 
                   <script type="text/javascript">// <![CDATA[
                  (function(e,t,n){var r,i=e.getElementsByTagName(t)[0];if(e.getElementById(n))return;r=e.createElement(t);r.id=n;r.src="//apps.aftership.com/all.js";i.parentNode.insertBefore(r,i)})(document,"script","aftership-jssdk")
                  // ]]></script>
                  <div class="as-track-button" data-slug="jne" data-support="true" data-width="400" data-size="normal"></div>
                  </div>
                  </div> 
 <script>
 /**
  * alertDiv
 */
 function alertDiv(){
   var a = document.getElementById("alert_box");
   var header = document.getElementById("alert_header");
   var oClose = document.getElementById("alert_close");
   var bDrag = false;
   var disX = disY = 0;
   
   this.show = function(width, height){
        var scrollTop = window.pageYOffset  
                || document.documentElement.scrollTop  
                || document.body.scrollTop  
                || 0;
    a.className = "alert_show";
    a.style.width = width +"px";
    a.style.height = height+"px"; 
    a.style.left=(document.documentElement.clientWidth/4-width/2-8)+"px";
    a.style.top=(scrollTop+document.documentElement.clientHeight/3-height/2-8)+"px";
   }
  oClose.onclick = function ()
  {
    a.className = "alert_hide";
    
  };
  oClose.onmousedown = function (event)
  {
    (event || window.event).cancelBubble = true;
  };
  header.onmousedown = function (event)
  {   
    var event = event || window.event;
    bDrag = true;
    disX = event.clientX - a.offsetLeft;
    disY = event.clientY - a.offsetTop;   
    this.setCapture && this.setCapture();   
    return false
  };
  document.onmousemove = function (event)
  {
    if (!bDrag) return;
    var event = event || window.event;
    var iL = event.clientX - disX;
    var iT = event.clientY - disY;
    var maxL = document.documentElement.clientWidth - a.offsetWidth;
    var maxT = document.documentElement.clientHeight - a.offsetHeight;    
    iL = iL < 0 ? 0 : iL;
    //iL = iL > maxL ? maxL : iL;     
    iT = iT < 0 ? 0 : iT;
    //iT = iT > maxT ? maxT : iT;
    
    a.style.marginTop = a.style.marginLeft = 0;
    a.style.left = iL + "px";
    a.style.top = iT + "px";    
    return false
  };
  document.onmouseup = window.onblur = header.onlosecapture = function ()
  {
    bDrag = false;
    header.releaseCapture && header.releaseCapture();
  };
  } 
 /**
  * instantiation
 */
 function mShowDiv(width, height){
    var malert = new alertDiv();
  malert.show(width, height);
 }
</script>		  
      <div class="user_control">
        <ul>
          <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>          <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/ecmoban_common.js"></script> 
          <font id="ECS_MEMBERZONE" style="display:block; float:left;">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
                    <li id="topNav" class="clearfix">
                        <a href="https://www.jalanja.com/flow.php" 
                        >Cart</a>
                                    <div class="topNavR"></div>
          </li>
                  </ul>
      </div>
    </div>
    <div class="headBox">
      <div class="logo"><a href="http://www.jalanja.com" name="top"><img src="themes/miqinew/images/logo.gif" /></a></div>
      
      <div id="search"  class="headSearch">
        <form id="searchForm" name="searchForm" method="get" action="https://www.jalanja.com/search.php" onSubmit="return checkSearchForm()"  >
          <div class="headSearch_input">
            <input name="keywords" type="text" id="keyword" value="Search Here" onclick="javascript:if(this.value=='Search Here')this.value=''"  />
          </div>
          <div class="headSearch_btn">
            <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
          </div>
        </form>
      </div>
      
      <div class="shop_txt_out" id="ECS_CARTINFO" >
       554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca      </div>
    </div>
    <div class="headNav" style="position:relative;">
      <div class="classNav"> <a class="classNav_a" href="#">All Category</a> 
      
      
      <div class="left_nav" style="position:absolute; left:0; top:33px;">
        <div class="leftNav" id="J_mainCata">
          <ul>
                        <li>
              <p class="leftNav_p01"><a class="a1" href="http://www.jalanja.com/category-153-b0.html" title="Baby Feeding">Baby Feeding</a></p>
              <div class="childer_hide" >
                                                <a href="http://www.jalanja.com/category-166-b0.html" target="_blank">0-6 Bulan</a>
                                <a href="http://www.jalanja.com/category-167-b0.html" target="_blank">6-12 Bulan</a>
                                <a href="http://www.jalanja.com/category-183-b0.html" target="_blank">Susu Anak</a>
                                <a href="http://www.jalanja.com/category-145-b0.html" target="_blank">Khusus Alergi</a>
                                <a href="http://www.jalanja.com/category-192-b0.html" target="_blank">PRE</a>
                                                                <a href="http://www.jalanja.com/category-193-b0.html" target="_blank">Biskuit &amp; Snack</a>
                                <a href="http://www.jalanja.com/category-198-b0.html" target="_blank">Bubur</a>
                                <a href="http://www.jalanja.com/category-195-b0.html" target="_blank">Cream</a>
                                              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-165-b0.html" target="_blank">Susu Bayi</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-166-b0.html" target="_blank">0-6 Bulan</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-167-b0.html" target="_blank">6-12 Bulan</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-183-b0.html" target="_blank">Susu Anak</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-145-b0.html" target="_blank">Khusus Alergi</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-192-b0.html" target="_blank">PRE</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-194-b0.html" target="_blank">Food</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-193-b0.html" target="_blank">Biskuit &amp; Snack</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-198-b0.html" target="_blank">Bubur</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-195-b0.html" target="_blank">Cream</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                       </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b71.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426577567392483224.png" alt="Similac (12)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b72.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426577705970256383.png" alt="Friso (8)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b76.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426644283592757217.png" alt="Nutrilon (35)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b78.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426578053473698335.png" alt="Bebelac (24)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b79.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426578160916274570.png" alt="Dancow (30)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b80.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426644443670218706.png" alt="Enfamil (30)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b82.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426578396660490999.png" alt="Morinaga (33)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b83.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427016938084142554.png" alt="Neocate (3)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b84.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426643021867567461.png" alt="Pediasure (16)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b85.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427064227059422246.jpg" alt="S26 (27)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b91.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426658566478555926.jpg" alt="Anmum (9)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b92.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426670259470995815.jpg" alt="Lactogen (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b93.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426720107986535255.jpg" alt="NAN (7)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b102.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427614304124439693.png" alt="Appeton (3)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b96.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426732294873851067.png" alt="Frisian Flag (8)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b97.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426734278227573952.png" alt="Vidoran (4)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b104.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427838944339387094.png" alt="Sustagen (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b94.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426727018066963707.gif" alt="Zee (4)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b105.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427837395547174746.png" alt="HiLo (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-153-b115.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1433027582025373822.png" alt="Nutrinidrink (1)" /></a>
                                  </dd>
                              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p02"><a class="a1" href="http://www.jalanja.com/category-154-b0.html" title="Perlengkapan Baby">Perlengkapan Baby</a></p>
              <div class="childer_hide" >
                                                <a href="http://www.jalanja.com/category-155-b0.html" target="_blank">NB</a>
                                <a href="http://www.jalanja.com/category-156-b0.html" target="_blank">S</a>
                                <a href="http://www.jalanja.com/category-161-b0.html" target="_blank">M</a>
                                <a href="http://www.jalanja.com/category-162-b0.html" target="_blank">L</a>
                                <a href="http://www.jalanja.com/category-163-b0.html" target="_blank">XL</a>
                                <a href="http://www.jalanja.com/category-164-b0.html" target="_blank">XXL</a>
                                <a href="http://www.jalanja.com/category-181-b0.html" target="_blank">XXXL</a>
                                <a href="http://www.jalanja.com/category-196-b0.html" target="_blank">Cream&amp;Rash</a>
                                <a href="http://www.jalanja.com/category-191-b0.html" target="_blank">Tissue</a>
                                                                <a href="http://www.jalanja.com/category-199-b0.html" target="_blank">Baby Oil</a>
                                <a href="http://www.jalanja.com/category-202-b0.html" target="_blank">Shower</a>
                                                                <a href="http://www.jalanja.com/category-205-b0.html" target="_blank">Clothes</a>
                                <a href="http://www.jalanja.com/category-206-b0.html" target="_blank">Dishes</a>
                                              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-152-b0.html" target="_blank">Popok</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-155-b0.html" target="_blank">NB</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-156-b0.html" target="_blank">S</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-161-b0.html" target="_blank">M</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-162-b0.html" target="_blank">L</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-163-b0.html" target="_blank">XL</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-164-b0.html" target="_blank">XXL</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-181-b0.html" target="_blank">XXXL</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-196-b0.html" target="_blank">Cream&amp;Rash</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-191-b0.html" target="_blank">Tissue</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-197-b0.html" target="_blank">Baby Bath</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-199-b0.html" target="_blank">Baby Oil</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-202-b0.html" target="_blank">Shower</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-204-b0.html" target="_blank">Cleaning</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-205-b0.html" target="_blank">Clothes</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-206-b0.html" target="_blank">Dishes</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                       </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b73.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426642878765570083.png" alt="MamyPoko (36)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b74.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426642888422253566.png" alt="Merries (7)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b75.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426642908107459795.png" alt="Pampers (16)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b81.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426578249033817079.png" alt="Goo.n (13)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b103.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427673444480591143.png" alt="Nepia (8)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b98.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426828808462510832.png" alt="Sweety (7)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b106.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1430769708866571594.png" alt="Konicare (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b109.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1430769725313979392.png" alt="Sebamed (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b110.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1430781817344648615.png" alt="Pigeon (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-154-b111.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1430954241825336060.jpg" alt="Sleek (4)" /></a>
                                  </dd>
                              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p03"><a class="a1" href="http://www.jalanja.com/category-157-b0.html" title="Mama Product">Mama Product</a></p>
              <div class="childer_hide" >
                                                <a href="http://www.jalanja.com/category-180-b0.html" target="_blank">Susu Ibu Hamil</a>
                                <a href="http://www.jalanja.com/category-186-b0.html" target="_blank">Lain</a>
                                              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-173-b0.html" target="_blank">Food</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-180-b0.html" target="_blank">Susu Ibu Hamil</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-186-b0.html" target="_blank">Lain</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                       </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b71.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426577567392483224.png" alt="Similac (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b72.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426577705970256383.png" alt="Friso (1)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b78.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426578053473698335.png" alt="Bebelac (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b91.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1426658566478555926.jpg" alt="Anmum (5)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b99.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427063639460758725.jpg" alt="Diabetasol (2)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b102.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427614304124439693.png" alt="Appeton (4)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-157-b104.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1427838944339387094.png" alt="Sustagen (1)" /></a>
                                  </dd>
                              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p04"><a class="a1" href="http://www.jalanja.com/category-226-b0.html" title="Life Style">Life Style</a></p>
              <div class="childer_hide" >
                                                <a href="http://www.jalanja.com/category-176-b0.html" target="_blank">Perawatan Rambut</a>
                                <a href="http://www.jalanja.com/category-189-b0.html" target="_blank">Lensa</a>
                                                                                                                                              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-174-b0.html" target="_blank">Kecantikan</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-176-b0.html" target="_blank">Perawatan Rambut</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-189-b0.html" target="_blank">Lensa</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-177-b0.html" target="_blank">Mesin Mie</a></p>
                <dl>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-179-b0.html" target="_blank">Water Purifier</a></p>
                <dl>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-227-b0.html" target="_blank">Electronical</a></p>
                <dl>
                            <div class="blank"></div>
                </dl>
              </div>
                       </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
                        <li>
              <p class="leftNav_p05"><a class="a1" href="http://www.jalanja.com/category-207-b0.html" title="中国食品/日用品">中国食品/日用品</a></p>
              <div class="childer_hide" >
                                                <a href="http://www.jalanja.com/category-212-b0.html" target="_blank">调味品</a>
                                <a href="http://www.jalanja.com/category-214-b0.html" target="_blank">肉类</a>
                                <a href="http://www.jalanja.com/category-217-b0.html" target="_blank">米/面/杂粮</a>
                                                                <a href="http://www.jalanja.com/category-215-b0.html" target="_blank">肉类/豆类</a>
                                <a href="http://www.jalanja.com/category-218-b0.html" target="_blank">坚果炒货</a>
                                <a href="http://www.jalanja.com/category-219-b0.html" target="_blank">果脯蜜饯</a>
                                <a href="http://www.jalanja.com/category-220-b0.html" target="_blank">糖果糕点</a>
                                                                <a href="http://www.jalanja.com/category-221-b0.html" target="_blank">好日子</a>
                                <a href="http://www.jalanja.com/category-223-b0.html" target="_blank">其他烟类</a>
                                <a href="http://www.jalanja.com/category-224-b0.html" target="_blank">利群</a>
                                                                <a href="http://www.jalanja.com/category-228-b0.html" target="_blank">日用品</a>
                                <a href="http://www.jalanja.com/category-229-b0.html" target="_blank">净水</a>
                                              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        
          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-208-b0.html" target="_blank">调料干货</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-212-b0.html" target="_blank">调味品</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-214-b0.html" target="_blank">肉类</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-217-b0.html" target="_blank">米/面/杂粮</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-209-b0.html" target="_blank">休闲零食</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-215-b0.html" target="_blank">肉类/豆类</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-218-b0.html" target="_blank">坚果炒货</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-219-b0.html" target="_blank">果脯蜜饯</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-220-b0.html" target="_blank">糖果糕点</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-210-b0.html" target="_blank">烟酒茶</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-221-b0.html" target="_blank">好日子</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-223-b0.html" target="_blank">其他烟类</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-224-b0.html" target="_blank">利群</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                         <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="http://www.jalanja.com/category-211-b0.html" target="_blank">洗护用品</a></p>
                <dl>
                                    <dd><a href="http://www.jalanja.com/category-228-b0.html" target="_blank">日用品</a></dd>
                                    <dd><a href="http://www.jalanja.com/category-229-b0.html" target="_blank">净水</a></dd>
                            <div class="blank"></div>
                </dl>
              </div>
                       </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                                <dd>
                                    <a href="http://www.jalanja.com/category-207-b112.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1432081621165394534.png" alt="老干妈 (7)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-207-b113.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1432081639974645321.jpg" alt="有友 (8)" /></a>
                                  </dd>
                                <dd>
                                    <a href="http://www.jalanja.com/category-207-b114.html" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/1432081665369017050.png" alt="海天 (5)" /></a>
                                  </dd>
                              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
                      </ul>
        </div>
        
        
      </div>
      
      
      
      
      
      </div>
      <div class="subNav">
        <ul>
                    <li ><a href="http://www.jalanja.com/category-165-b0.html" target="_blank" >Baby Formula</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="http://www.jalanja.com/category-166-b0.html">0-6 Bulan</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-167-b0.html">6-12 Bulan</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-183-b0.html">Susu Anak</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-145-b0.html">Khusus Alergi</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-192-b0.html">PRE</a>
</dd>
</dl>
</div>
          
          </li>
                    <li ><a href="http://www.jalanja.com/category-152-b0.html" target="_blank" >Diapers</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="http://www.jalanja.com/category-155-b0.html">NB</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-156-b0.html">S</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-161-b0.html">M</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-162-b0.html">L</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-163-b0.html">XL</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-164-b0.html">XXL</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-181-b0.html">XXXL</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-196-b0.html">Cream&amp;Rash</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-191-b0.html">Tissue</a>
</dd>
</dl>
</div>
          
          </li>
                    <li ><a href="http://www.jalanja.com/exchange.php" >Points</a>
                    
          </li>
                    <li ><a href="http://www.jalanja.com/category-207-b0.html" target="_blank" >中国产品专区</a>
          <div class='sub_nav'>
<dl>
<dd>
<a class="t" href="http://www.jalanja.com/category-208-b0.html">调料干货</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-209-b0.html">休闲零食</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-210-b0.html">烟酒茶</a>
</dd>
<dd>
<a class="t" href="http://www.jalanja.com/category-211-b0.html">洗护用品</a>
</dd>
</dl>
</div>
          
          </li>
                  </ul>
      </div>
      <div class="rightNav">
        <ul>
          <li><a href="http://www.jalanja.com/article-9.html">Help Center</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<div class="content">
<div class="contentBody">
<div class="block_s">
 <div id="ur_here">
  <span>Your position:</span> <a href=".">Home</a> <code>&gt;</code> <a href="article_cat-1.html">Info Center</a> <code>&gt;</code> <a href="article_cat-3.html">Help Center</a> <code>&gt;</code> <a href="article_cat-10.html">Payment</a> <code>&gt;</code> Shipping Method
</div>
<div class="blank"></div>
  
  <div class="help_left">
  
<div class="sideMenu" style="margin:0 auto">
			<h2 class=''><em></em><a  href='article_cat-5.html' title="Shopping Guide">Shopping Guide</a></h2>
			<ul style="display:none">
            				<li><a  href="article-9.html" title="How to Register"> How to Register</a></li>
                				<li><a  href="article-10.html" title="FAQ"> FAQ</a></li>
                				<li><a  href="article-40.html" title="Cara Membeli"> Cara Membeli</a></li>
                				<li><a  href="article-49.html" title="GET poin"> GET poin</a></li>
                				<li><a  href="article-58.html" title="购买须知"> 购买须知</a></li>
                			</ul>
			<h2 class=''><em></em><a  href='article_cat-6.html' title="Service">Service</a></h2>
			<ul style="display:none">
            				<li><a  href="article-12.html" title="Return policy"> Return policy</a></li>
                				<li><a  href="article-41.html" title="Order Status"> Order Status</a></li>
                				<li><a  href="article-43.html" title="Point mall"> Point mall</a></li>
                				<li><a  href="article-46.html" title="What is Angpao?"> What is Angpao?</a></li>
                			</ul>
			<h2 class=''><em></em><a  href='article_cat-7.html' title="Information">Information</a></h2>
			<ul style="display:none">
            				<li><a  href="article-16.html" title="Facebook"> Facebook</a></li>
                				<li><a  href="article-17.html" title="Blog"> Blog</a></li>
                			</ul>
			<h2  class="on"><em></em><a  href='article_cat-10.html' title="Payment">Payment</a></h2>
			<ul style="display:block">
            				<li><a  href="article-19.html" title="Confirm Payment"> Confirm Payment</a></li>
                				<li><a  href="article-20.html" title="Payment Methhod"> Payment Methhod</a></li>
                				<li><a  class="sell"  href="article-39.html" title="Shipping Method"> Shipping Method</a></li>
                				<li><a  href="article-51.html" title="Shipping Cost"> Shipping Cost</a></li>
                			</ul>
			<h2 class=''><em></em><a  href='article_cat-8.html' title="About Jalanja ">About Jalanja </a></h2>
			<ul style="display:none">
            				<li><a  href="article-21.html" title="Contact Us"> Contact Us</a></li>
                				<li><a  href="article-22.html" title="Jalanja.com"> Jalanja.com</a></li>
                				<li><a  href="article-23.html" title="Kebijakan Privasi"> Kebijakan Privas...</a></li>
                			</ul>
			<h2 class=''><em></em><a  href='article_cat-9.html' title="Join Jalanja">Join Jalanja</a></h2>
			<ul style="display:none">
            				<li><a  href="article-37.html" title="Become Partner"> Become Partner</a></li>
                			</ul>
		
		</div>
		<script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h2", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				defaultIndex:0,//默认是否执行效果（默认true）
				delayTime:300,//鼠标从.sideMen移走后返回默认状态（默认false）
				trigger:"click"
				});
		</script>
        
    
  </div>
  
  
  <div class="help_right_out">
    <div class="help_right">
     
     
         <div class="help_right_title " >
         <p>Shipping Method</p> <b>Jalanja / 18-03-2015</b>
         </div>
         <div class="blank"></div>
         <div class="content_right">
                   <div><font><font>Kami menyediakan layanan pengiriman <span class="Apple-converted-space">&nbsp;</span></font><font>produk/barang langsung ke tempat anda</font></font>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Jalanja.com telah bekerjasama dengan perusahaan logistik : <br />
- JNE<br />
</font></font></p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>- A Commerce</font></font></p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font><font><font>kami akan menjalin kerja sama dengan perusahaan logistik lainnya agar membuat cepat pengiriman barang. Kami akan memberikan pelayanan yang terbaik untuk anda.</font></font></font></font></p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);">&nbsp;</p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);">Estimasi Waktu Pengiriman :</p>
<br />
<br />
<table border="1px">
    <tbody>
        <tr>
            <td>No</td>
            <td width="170px">Province</td>
            <td width="130px">Estimate time</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Bali</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bangka Belitung</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Banten</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bengkulu</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>5</td>
            <td>D.I Yogyakarta</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>6</td>
            <td>DKI Jakarta</td>
            <td>1-2 work day</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Gorontalo</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Jambi</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Jawa Barat</td>
            <td>2-6 work day</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Jawa tengah</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>11</td>
            <td>Jawa Timur</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Kalimantan Barat</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Kalimantan Selatan</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Kalimantan Tengan</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Kalimantan Timur</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>16</td>
            <td>Kalimantan Utara</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>17</td>
            <td>Kepulauan Riau</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>18</td>
            <td>Lampung</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>19</td>
            <td>Maluku</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Maluku Utara</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>21</td>
            <td>Nanggroe Aceh darussalam</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>22</td>
            <td>NTT</td>
            <td>3-7 work day</td>
        </tr>
        <tr>
            <td>23</td>
            <td>NTB</td>
            <td>3-6 work day</td>
        </tr>
        <tr>
            <td>24</td>
            <td>Papua</td>
            <td>5-10 work day</td>
        </tr>
        <tr>
            <td>25</td>
            <td>Papua Barat</td>
            <td>6-9 work day</td>
        </tr>
        <tr>
            <td>26</td>
            <td>Riau</td>
            <td>36 work day</td>
        </tr>
        <tr>
            <td>27</td>
            <td>Sumatra Barat</td>
            <td>2-6 work day</td>
        </tr>
        <tr>
            <td>28</td>
            <td>Sumatra Selatan</td>
            <td>2-6 work day</td>
        </tr>
        <tr>
            <td>29</td>
            <td>Sumatra Utara</td>
            <td>2-6 work day</td>
        </tr>
        <tr>
            <td>30</td>
            <td>Sulawesi Utara</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>31</td>
            <td>Sulawesi Barat</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>32</td>
            <td>Sulawesi Selatan</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>33</td>
            <td>Sulawesi Tenggara</td>
            <td>5-7 work day</td>
        </tr>
        <tr>
            <td>34</td>
            <td>Sulawesi Tengah</td>
            <td>5-7 work day</td>
        </tr>
    </tbody>
</table>
<div>
<p style="font-size: 14px;"><b>Layanan Cash On Delivery/COD</b></p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Untuk layanan COD kami bisa melakukan di area Jabodetabek. Dan apabila anda melakukan transaksi sebelum jam 11.00 pesanan anda akan kami kirim hari tersebut, jika anda melakukan transaksi setelah jam 11.00 pesanan anda akan kami kirim di hari selanjutnya. untuk lebih jelas silahkan klik di <a href="http://www.jalanja.com/article-20.html" style="color:#ff4560;"><span style="color: rgb(255, 0, 0);">sini</span></a>.  </font></font> <br />
<br area="" cod="" />
<table>
</table>
</p>
<div style="width:500px">
<table>
    <tbody>
        <tr>
            <th>Jakarta</th>
            <th>Bogor</th>
            <th>Depok</th>
            <th>Tangerang</th>
            <th>Bekasi</th>
        </tr>
        <tr>
            <td width="100px">Jakarta Barat<br />
            Jakarta Pusat<br />
            Jakarta Timur<br />
            Jakarta Utara<br />
            Jakarta Selatan</td>
            <td width="100px" valign="top">Bogor Kota<br />
            Ciawi<br />
            Cibinong</td>
            <td width="100px" valign="top">Depok Kota</td>
            <td width="100px" valign="top">Tangerang Kota<br />
            Ciputat<br />
            Tangerang<br />
            Karawaci</td>
            <td width="100px" valign="top">Bekasi Kota<br />
            Cikarang<br />
            Cibitung</td>
        </tr>
    </tbody>
</table>
</div>
<p>&nbsp;</p>
</div>
<div class="content_list border_none list_top_txt" style="margin: 0px; padding: 25px 0px 15px;border: none; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><font><font><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Kapan Produk/Barang Pesanan Saya Dikirim? <span class="Apple-converted-space">&nbsp;</span></font></font></b></font></font><font><font>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font><font><font>Setelah Anda berhasil melakukan pemesanan, tim  Customer Service kami akan melakukan proses verifikasi dan akan  memberikan informasi terbaru kepada Anda segera melalui email / SMS,  Pesanan Anda akan kami proses maksimal 28 jam. </font></font></font></font></p>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Produk/Barang pesanan anda akan kami kirim pukul 16.00, untuk anda yang sudah memesan dan belum membayar,segera melakukan pembayaran sesuai metode pembayaran yang anda pilih dan lakukan konfirmasi pesanan di <a href="#">sini</a> sebelum pukul 11.00 Agar kami segera langsung mengirim pesanan Anda, Apabila anda membayar dan mengkonfirmasi pesanan setelah pukul 11.00 maka pesanan anda akan kami kirim di hari selanjutnya.</font></font><font><font><font> Untuk menginput nomor resi pengiriman akan di input esok hari nya / maksimal 40 jam setelah pengiriman,</font></font></font></p>
</font></font></div>
<font>
<div class="content_list" style="margin: 0px; padding: 15px 0px; border-top-width: 1px; border-top-color: rgb(230, 230, 230); border-top-style: solid; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><font><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Bagaimana Saya Menghubungi jalanja.com?</font></font></b>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font><br />
Hari dan jam Operasional jalanja.com : <br />
Senin - Sabtu pukul 08.30 s/d 18.00 <span style="color: rgb(255, 0, 0);"><strong><font>021 - 2933 76 77</font></strong></span></font><br />
E-mail : service@jalanja.com<br />
Live chat di bagian bawah web jalanja.com<br />
Hari minggu dan Hari besar(tanggal merah) kami tidak melakukan pengiriman / libur. <br />
Apabila di luar waktu tersebut akan kami kirimkan di hari berikutnya, kami akan menerima pertanyaan,kritik dan saran anda dengan senang hati.</font></p>
</font></div>
<div class="content_list" style="margin: 0px; padding: 15px 0px;  border-top-width: 1px; border-top-color: rgb(230, 230, 230); border-top-style: solid; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Bisakah Saya Menjadwalkan Pesanan Saya?</font></font></b>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Pelayanan kurir kami tidak dapat menjadwalkan pengiriman, oleh karena itu kami tidak dapat menjamin pengiriman pesanan Anda di Tanggal dan jam yang ditentukan.  Namun, kami dapat meyakinkan Anda bahwa kami bekerjasama dengan mitra kami untuk memberikan pelayanan yang lebih baik di masa depan.<br />
</font></font></p>
</div>
<div class="content_list" style="margin: 0px; padding: 15px 0px;border-top-width: 1px; border-top-color: rgb(230, 230, 230); border-top-style: solid; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Bagaimana Bila Barang Sampai,Saya Tidak Ada Di Tempat?</font></font></b>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Anda harus memberi tahu orang terdekat anda apabila anda telah memesan barang secara online,dan akan di kirim dalam waktu dekat dan minta tolong agar menerima barang tersebut atau juga bisa membuat surat kuasa untuk menerima barang tersebut. Anda juga dapat menghubungi customer service kami di www.jalanja.com/contact segera setelah melakukan pemesanan. Pihak kedua harus memperlihatkan tanda pengenal bersamaan dengan surat kuasa dari Anda.</font></font></p>
</div>
<div class="content_list" style="margin: 0px; padding: 15px 0px;  border-top-width: 1px; border-top-color: rgb(230, 230, 230); border-top-style: solid; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Bagaimana cara membatalkan pesanan?</font>Apakah Ada Wilayah/Daerah Yang Tidak Termasuk Area Pengiriman?</font></b>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Jalanja dapat mengirimkan ke semua wilayah Indonesia, sekarang hanya buka Pulau Jawa,Bangka Belitung, Sumatra Selatan.<br />
Kami telah membuat kerjasama dengan kurir JNE dan A commerce, kami akan menjalin kerja sama dengan perusahaan logistik lainnya agar membuat cepat pengiriman barang. Kami akan memberikan pelayanan yang terbaik untuk anda. </font></font></p>
</div>
<div class="content_list" style="margin: 0px; padding: 15px 0px; border-top-width: 1px; border-top-color: rgb(230, 230, 230); border-top-style: solid; line-height: 24px; float: left; color: rgb(102, 102, 102); font-family: 微软雅黑, 宋体, Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><b style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(33, 33, 33);"><font><font>Bisakan Di Kirim Ke Kantor?</font></font></b><font><font>
<p style="margin: 0px; padding: 0px; font-size: 14px; color: rgb(76, 76, 76);"><font><font>Barang akan kami kirim sesuai dengan alamat yang kami terima dari pelanggan, baik alamat rumah atau alamat kantor </font></font></p>
</font></font></div>
</font></div>
<p>&nbsp;</p>                            </div>
           <div class="blank"></div>
         <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #e6e6e6 ;">
         
                      Next :<a href="article-51.html" class="f6">Shipping Cost</a><br />
                    
                      Pre:<a href="article-20.html" class="f6">Payment Methhod</a>
                   </div>
     
   
  
  <div class="blank"></div>
  
</div>
  </div>
  
</div>
</div>
</div>
<div class="blank5"></div>
<div class="flow">
<div class="footer">
<div class="footerBody">
<Div class="block_s">
<div class="footTop "> 
    <ul>
    <li  class="foot_help foot_help_1 "><a href='http://www.jalanja.com/article_cat-5.html' title="Shopping Guide">Shopping Guide</a></li>
        <li><a href="http://www.jalanja.com/article-9.html" title="How to Register">How to Register</a></li>
        <li><a href="http://www.jalanja.com/article-10.html" title="FAQ">FAQ</a></li>
        <li><a href="http://www.jalanja.com/article-40.html" title="Cara Membeli">Cara Membeli</a></li>
        <li><a href="http://www.jalanja.com/article-49.html" title="GET poin">GET poin</a></li>
        <li><a href="http://www.jalanja.com/article-58.html" title="购买须知">购买须知</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_2 "><a href='http://www.jalanja.com/article_cat-6.html' title="Service">Service</a></li>
        <li><a href="http://www.jalanja.com/article-12.html" title="Return policy">Return policy</a></li>
        <li><a href="http://www.jalanja.com/article-41.html" title="Order Status">Order Status</a></li>
        <li><a href="http://www.jalanja.com/article-43.html" title="Point mall">Point mall</a></li>
        <li><a href="http://www.jalanja.com/article-46.html" title="What is Angpao?">What is Angpao?</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_3 "><a href='http://www.jalanja.com/article_cat-7.html' title="Information">Information</a></li>
        <li><a href="http://www.jalanja.com/article-16.html" title="Facebook">Facebook</a></li>
        <li><a href="http://www.jalanja.com/article-17.html" title="Blog">Blog</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_4 "><a href='http://www.jalanja.com/article_cat-10.html' title="Payment">Payment</a></li>
        <li><a href="http://www.jalanja.com/article-19.html" title="Confirm Payment">Confirm Payment</a></li>
        <li><a href="http://www.jalanja.com/article-20.html" title="Payment Methhod">Payment Methhod</a></li>
        <li><a href="http://www.jalanja.com/article-39.html" title="Shipping Method">Shipping Method</a></li>
        <li><a href="http://www.jalanja.com/article-51.html" title="Shipping Cost">Shipping Cost</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_5 "><a href='http://www.jalanja.com/article_cat-8.html' title="About Jalanja ">About Jalanja </a></li>
        <li><a href="http://www.jalanja.com/article-21.html" title="Contact Us">Contact Us</a></li>
        <li><a href="http://www.jalanja.com/article-22.html" title="Jalanja.com">Jalanja.com</a></li>
        <li><a href="http://www.jalanja.com/article-23.html" title="Kebijakan Privasi">Kebijakan Privas...</a></li>
      </ul>
    <ul>
    <li  class="foot_help foot_help_6 "><a href='http://www.jalanja.com/article_cat-9.html' title="Join Jalanja">Join Jalanja</a></li>
        <li><a href="http://www.jalanja.com/article-37.html" title="Become Partner">Become Partner</a></li>
      </ul>
   
</div>
<div class="footBottom_blog clearfix">
  <div class="footBlog_01"> </div>
  <div class="footBlog_02"> <a href="http://www.jalanja.com" target="_blank"></a> </div>
  <div class="footBlog_03"> <a href="#" target="_blank"></a> </div>
  <div class="footBlog_04"> </div>
</div>
<div class="footBottom_line">
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_01.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_02.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_03.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_04.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_07.gif" border="0"> </div>
  <div class="footLine_list"> <img src="themes/miqinew/images/foot_08.gif" border="0"> </div>
</div>
<div class="footer_txt">
  <p><span class="arial">© </span><span class="weiruan">2015 Jalanja.com</span> All Right Reserved. <a href="http://www.jalanja.com" target="_blank" style="color:#666;">Waktu online: 09:00-22:00, senin-Minggu</a>  Telephone：021-2933-7677(WIB 09:00-18:00)</p>
  <p class="lightGrey">PT. Jalanja eCommerce;Grand Slipi Tower Lt. 42, DKI Jakarta,Indonesia, 11480</p>
</div>
<div class="footBottom_list">
  <ul>
    <li>
      <div class="two"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
    <li>
      <div class="three"><a href="#" target="_blank"></a></div>
    </li>
    <li>
      <div class="four"><a href="#"></a></div>
    </li>
    <li>
      <div class="five"><a href="#" rel="nofollow" target="_blank"></a></div>
    </li>
  </ul>
</div>
 
 
<div id="bottomNav" class="box" style="display:none">
  <div class="bNavList clearfix">
    <div class="f_l"> 
       
    </div>
  </div>
</div>
<div class="blank"></div>
<div id="footer" style="height:1px; width:1px; overflow:hidden; background:none;">
  <div class="text"> &copy; 2014-2015 Jalanja Copyright, All Rights Reserved.<br />
    Grand Slipi Tower, Lt. 42, Jakarta Barat, 11480  
     
    Tel: 021-2933 7677 
     
     
    E-mail: service@jalanja.com<br />
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
         
	    <div align="left"><link rel="alternate" href="http://www.jalanja.com" hreflang="id-id" />
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57758029-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?2j44BuVfJJ9ekzijXoJXA2USW7qm5kXj";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
var google_tag_params = {
ecomm_prodid: 'REPLACE_WITH_VALUE',
ecomm_pagetype: 'REPLACE_WITH_VALUE',
ecomm_totalvalue: 'REPLACE_WITH_VALUE',
dynx_itemid: 'REPLACE_WITH_VALUE',
dynx_itemid2: 'REPLACE_WITH_VALUE',
dynx_pagetype: 'REPLACE_WITH_VALUE',
dynx_totalvalue: 'REPLACE_WITH_VALUE',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 956881076;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/956881076/?value=0&guid=ON&script=0"/>
</div>
</noscript>
<!-- Facebook Conversion Code for Promo Mesin Jahit -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033412347720', {'value':'1.00','currency':'IDR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033412347720&cd[value]=1.00&cd[currency]=IDR&noscript=1" /></noscript>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '707403076054335']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=707403076054335&ev=PixelInitialized" /></noscript>
<!-- Facebook Conversion Code for Mesin Mie -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033819169120', {'value':'1.00','currency':'IDR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033819169120&cd[value]=1.00&cd[currency]=IDR&noscript=1" /></noscript>
<!-- Facebook Conversion Code for Timbangan Dpur -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033825675520', {'value':'1.00','currency':'IDR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033825675520&cd[value]=1.00&cd[currency]=IDR&noscript=1" /></noscript>
<!-- Facebook Conversion Code for View of HD CCTV Blue Mirror -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033902019120', {'value':'1.00','currency':'IDR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033902019120&cd[value]=1.00&cd[currency]=IDR&noscript=1" /></noscript></div>
        <div align="left"  id="rss"><a href="http://www.jalanja.com/"><img src="themes/miqinew/images/xml_rss2.gif" alt="rss" /></a></div>
  </div>
</div>
<div id="topcontrol" style="width:60px;">
  <div class="nreturn"> 
  <a target="_blank" id="sider_talkonline" href="https://www.jalanja.com/flow.php" class="ntel buy" style="display: block;">Cart</a>
  <a id="sider_talkonline" href="#" onclick="openWin()" class="ntel kf " style="display: block;">Chat</a> 
    <script>
        function openWin()
        {
        var myWindow = window.open("https://v2.zopim.com/widget/popout.html?key=2j44BuVfJJ9ekzijXoJXA2USW7qm5kXj","","width=500,height=500");
        }
    </script>
  <a id="sider_addmark" href="javascript:void(0);" onclick="AddFavorite('Favourate',location.href)" class="ntel sider_addmark" style="display: block;">+ Favorit</a> 
  <a id="sider_returntop" href="javascript:void(0);" class="ntel sider_returntop" style="display: block;">Top</a> </div>
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script></Div>
</div>
</div>
</div>
</body>
</html>
