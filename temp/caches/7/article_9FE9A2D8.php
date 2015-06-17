<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:54:"/home/indojalanja_gmail_com/themes/miqinew/article.dwt";i:1;s:66:"/home/indojalanja_gmail_com/themes/miqinew/library/page_header.lbi";i:2;s:62:"/home/indojalanja_gmail_com/themes/miqinew/library/ur_here.lbi";i:3;s:64:"/home/indojalanja_gmail_com/themes/miqinew/library/left_help.lbi";i:4;s:66:"/home/indojalanja_gmail_com/themes/miqinew/library/page_footer.lbi";}s:7:"expires";i:1434366633;s:8:"maketime";i:1434363033;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>Ruam Popok atau Diaper Rash_Blog_Tempat Belanja Susu dan Popok Bayi Online Terlengkap | Jalanja</title>
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
  <span>Your position:</span> <a href=".">Home</a> <code>&gt;</code> <a href="article_cat-14.html">Blog</a> <code>&gt;</code> Ruam Popok atau Diaper Rash
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
			<h2 class=''><em></em><a  href='article_cat-10.html' title="Payment">Payment</a></h2>
			<ul style="display:none">
            				<li><a  href="article-19.html" title="Confirm Payment"> Confirm Payment</a></li>
                				<li><a  href="article-20.html" title="Payment Methhod"> Payment Methhod</a></li>
                				<li><a  href="article-39.html" title="Shipping Method"> Shipping Method</a></li>
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
         <p>Ruam Popok atau Diaper Rash</p> <b>Jalanja / 01-04-2015</b>
         </div>
         <div class="blank"></div>
         <div class="content_right">
                   <h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Seperti Apa Itu Ruam Popok Pada Bayi?</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Apabila anda melihat ada iritasi kulit dan berwarna kemerahan disekitar popok/diaper terpasang, kemungkinan besar itulah adalah ruam popok. Kulit terasa lebih tebal dan hangat ketika disentuh.<span class="Apple-converted-space">&nbsp;</span><strong style="padding: 0px; margin: 0px; box-sizing: border-box; font-weight: bold;">Ruam popok</strong><span class="Apple-converted-space">&nbsp;</span>yang lebih ringan juga terlihat seperti bintik-bintik merah dikulit pada area kecil ataupun agak lebar di sekitar perut dan paha buah hati anda.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Timbulnya ruam popok merupakan bagian dari perawatan bayi yang perlu kita hindari terutama pada tahun-tahun pertama.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Kenapa Anak Saya Bisa Terkena Ruam Popok?</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Ruam popok bisa ditimbulkan dari makanan yang baru dikonsumsinya atau mungkin juga dari urin. Berikut ini adalah beberapa kemungkinan penyebab timbulnya ruam popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><a href="http://www.jalanja.com/popok" target="_blank" style="padding: 0px; margin: 0px; box-sizing: border-box; touch-action: manipulation; color: rgb(108, 108, 108); text-decoration: none;">Popok bayi</a><span class="Apple-converted-space">&nbsp;</span>yang memiliki daya serap tinggi pun masih dapat membuat kulit bayi kita menjadi lembab. Ketika urin dan bayi bercampur dengan bakteri ketika dia duduk di suatu tempat, hal itu bisa membentuk kadar amonia yang tinggi.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Bayi yang sering buang air besar atau diare lebih rentan terkena ruam popok. Sebagai orang tua, kita semestinya lebih sering memeriksa apakah popok yang digunakan sudah harus diganti atau tidak. Jangan sampai anak kita dibiarkan menggunakan popok yang sudah dipernuhi oleh urin apalagi kotoran. Bayi yang memiliki kulit sensitif bisa terkena ruam meskipun popoknya rajin diganti.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Sensitifitas Bahan Kimia Dan Gesekan.</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Ruam popok juga mungkin disebabkan oleh gesekan antara kulit bayi dengan popok yang digunakan. Hal ini diperburuk lagi jika kulit bayi sangat sensitif terhadap bahan kimia yang terdapat pada popok sekali pakai atau deterjen yang digunakan oleh popok kain. Bisa juga penggunaan lotion atau bedak yang tidak cocok dengan kulit bayi anda.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Makanan Yang Baru Pertama Kali Dikonsumsi.</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Bayi biasanya terkena ruam popok setelah mereka mulai makan makanan padat atau ketika pertama kali mengkonsumsi makanan baru.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Asam dalam makanan tertentu seperti stroberi dan jus buah dapat membuat beberapa bayi susah buang air besar. Namun makanan baru yang lain juga dapat mereka lebih sering buang air besar. Jika bayi anda masih minum ASI, kulitnya dapat bereaksi terhadap apa yang dimakan ibunya.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Infeksi</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Dalam<span class="Apple-converted-space">&nbsp;</span><a href="http://www.jalanja.com/popok" target="_blank" style="padding: 0px; margin: 0px; box-sizing: border-box; touch-action: manipulation; color: rgb(108, 108, 108); text-decoration: none;">popok bayi</a><span class="Apple-converted-space">&nbsp;</span>yang hangat dan lembab menjadi tempat yang cocok untuk bakteri dan jamur untuk berkembang disana dan dapat menyebabkan ruam, terutama di daerah lipatan-lipatan<br style="padding: 0px; margin: 0px; box-sizing: border-box;" />
kulit bayi.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><em style="padding: 0px; margin: 0px; box-sizing: border-box;">Thrush</em><span class="Apple-converted-space">&nbsp;</span>adalah sejenis jamur mulut, jamur yang sama dapat berkembang di dalam popok bayi.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Antibiotik</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Bayi yang menyusui dari ibu yang mengkonsumsi obat antibiotik dapat terinfeksi jamur karena obat ini mengurangi jumlah bakteri menguntungkan yang membantu memghancurkan bakteri berbahaya, akibatnya dapat menyebabkan diare yang berdampak pada timbulnya ruam popok.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Haruskah Saya Membawa Anak Saya Ke Dokter?</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Hal ini mungkin tidak diperlukan, dengan beberapa tindakan sederhana, dalam beberapa hari kita dapat menghilangkan ruam popok ini.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Anda perlu menghubungi dokter jika ruam terlihat seolah-olah seperti infeksi (tanda-tanda infeksi seperti lecet, jerawat berisi nanah, adanya bercak kekuning-kuningan atau luka terbuka. Dokter mungkin saja memberikan resep antibiotik untuk dioleskan di kulit atau yang diminum. Untuk ruam yang disebabkan oleh infeksi jamur, dokter mungkin akan memberikan resep obat krim anti jamur.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Apabila ruam popok anak anda tidak juga sembuh dalam beberapa hari penanganan sendiri di rumah atau bahkan jika menjadi demam, secepatnya bawa ke dokter.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Cara Terbaik Untuk Mengatasi Ruam Popok.</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Langkah-langkah yang harus anda lakukan adalah:</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jaga kebersihan popok anak anda dengan baik seperti sering menggantinya secara berkala.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Bilas area tubuh anak setiap kali mengganti popok, jangan menggunakan tisu yang mengandung alkohol atau pewangi. Lebih baik menggunakan kapas dan air hangat untuk membasuhnya.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Pastikan kulit bayi anda kembali kering setelah dibasuh.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Gunakan salep/krim yang dapat melindungi kulit bayi anda yang iritasi dari kotoran dan urin setiap kali habis mengganti popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Gunakan popok yang sedikit agak besar atau tidak terlalu ketat agar sirkulasi udara lebih baik. Apabila menggunakan popok sekali pakai, anda dapat mencoba beberapa merk yang mungkin lebih dapat meminimalisir ruam popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Beberapa tipe yang khusus dirancang untuk kulit sensitif seperti adanya bahan penyerap tambahan dapat menjaga kelembaban kulit bayi anda.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Sesekali waktu tidak perlu gunakan popok dan krim, ketika anak anda bermain di ruang terbuka atau lantai. Paparan udara akan mempercepat penyembuhan ruam.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Selain itu sementara waktu biarkan anak anda tidur tanpa mengenakan celana ketika menderita ruam.</p>
<h2 style="padding: 0px; margin: 0px 0px 0.5em; box-sizing: border-box; font-size: 24px; font-weight: 400; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-style: normal; line-height: 1.2; text-rendering: optimizelegibility; text-transform: capitalize; font-variant: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Cara Pencegahan Ruam Popok.</h2>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Tahap-tahap pencegahannya adalah sebagai berkut:</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Ganti<span class="Apple-converted-space">&nbsp;</span><a href="http://www.jalanja.com/popok" target="_blank" style="padding: 0px; margin: 0px; box-sizing: border-box; touch-action: manipulation; color: rgb(108, 108, 108); text-decoration: none;">popok bayi</a><span class="Apple-converted-space">&nbsp;</span>anda secara berkala sebelum basah atau bocor untuk menjaga kulit bayi tetap kering.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Bersihkan bagian vital bayi anda secara menyeluruh sehabis mengganti<span class="Apple-converted-space">&nbsp;</span><a href="http://www.jalanja.com/popok" target="_blank" style="padding: 0px; margin: 0px; box-sizing: border-box; touch-action: manipulation; color: rgb(108, 108, 108); text-decoration: none;">diaper</a>.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Pastikan kulit bayi anda kering sehabis membersihkan, namun jangan digosok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Apabila anak anda rentan terkena ruam popok, gunakan krim pelindung setiap kali mengganti popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Hindari penggunaan bedak, karena debunya bisa membahayakan paru-paru bayi. Jika memang tetap ingin menggunakan bedak pelembab, gunakan yang terbua dari tepung jagung.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jauhkan dari anak anda ketika menaburkan ke tangan. dan jauhkan dari jangkauannya ketika menyimpan. Perhatikan juga tumpukan bedak yang mungkin menggumpal dalam lipatan kulit<br style="padding: 0px; margin: 0px; box-sizing: border-box;" />
anda.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Ketika si kecil mulai makan makanan yang padat, coba salah satu makanan pada jangka waktu tertentu. Hal ini akan mempermudah kita dalam melihat reaksi tubuhnya apakah makanan tersebut mempengaruhi terjadinya ruam popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jangan memasang<span class="Apple-converted-space">&nbsp;</span><a href="http://www.jalanja.com/popok" target="_blank" style="padding: 0px; margin: 0px; box-sizing: border-box; touch-action: manipulation; color: rgb(108, 108, 108); text-decoration: none;">diaper</a><span class="Apple-converted-space">&nbsp;</span>terlalu ketat atau yang berukuran lebih kecil untuk tubuhnya. Hal ini untuk memberikan ventilasi yang cukup pada area diaper.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jangan mencuci diaper kain dengan detergen yang mengandung pewangi dan tidak perlu menggunakan softener atau pelembut pakaian. Zat yang terdapat pada kedua benda tersebut dapat</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">mengakibatkan iritasi pada kulit bayi anda. GUnakan air hangat dan lakukan dua kali pencucian popok. Anda juga bisa menambahkan setengah cangkir cuka ke bilasan pertama untuk menghilangkan iritasi basa.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Sebisa mungkin berikan ASI kepada anak anda, sampai kira-kira selama dua tahun. ASI dapat meningkatkan ketahanan anak terhadap infeksi pada umumnya.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jika terpaksa anak anda harus mengkonsumsi antibiotik, tanyakan juga ke dokter agar dapat memberikan probiotik juga. Probiotik meningkatkan pertumbuhan bakteri yg diperlukan oleh pencernaan, yang dapat meminimalisir peluang terjadinya ruam popok.</p>
<p style="padding: 0px; margin: 0px 0px 1.5em; box-sizing: border-box; color: rgb(99, 99, 99); font-family: Arial, Verdana, Arial, sans-serif; font-size: 14.3000001907349px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 21.4500007629395px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">- Jika anak Anda dititipkan pada tempat penitipan anak atau prasekolah, pastikan bahwa pengasuh nya memahami pentingnya mengambil langkah-langkah untuk mencegah ruam popok.</p>                            </div>
           <div class="blank"></div>
         <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #e6e6e6 ;">
         
                      Next :<a href="article-57.html" class="f6">Sari Buah dan Air Putih</a><br />
                    
                      Pre:<a href="article-54.html" class="f6">Delapan Jenis Zat yang terkandung dalam Susu Formula</a>
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
