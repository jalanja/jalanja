<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
         alert("<?php echo $this->_var['lang']['y_add_fail']; ?>");
     }
  }
}
</script>
<div class="header ">
  <div class="headBody">
    <div class="heads">
      <div class="bookmail">
        <ul>
          <li class="background_ico"><a href="http://m.jalanja.com" target="_blank" rel="nofollow"><?php echo $this->_var['lang']['y_view_by_mobile']; ?></a></li>
          <li class="background_line"><a href="<?php echo $this->_var['lang']['y_ssl_url']; ?>user.php?act=affiliate" target="_blank" rel="nofollow"><?php echo $this->_var['lang']['y_invite_friends']; ?></a>  
          <li><a href="javascript:void(0);" onclick="AddFavorite('Favourate',location.href)"><?php echo $this->_var['lang']['y_add_favourate']; ?></a></li>
          <li class="background_pay"><?php echo $this->_var['lang']['y_follow_us']; ?><span class="arrow"></span>
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
          <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
          <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js,ecmoban_common.js')); ?> 
          <font id="ECS_MEMBERZONE" style="display:block; float:left;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
          <?php if ($this->_var['navigator_list']['top']): ?>
          <li id="topNav" class="clearfix">
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" 
            <?php if ($this->_var['nav']['opennew'] == 1): ?>
            target="_blank"
            <?php endif; ?>
            ><?php echo $this->_var['nav']['name']; ?></a>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
            |
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <div class="topNavR"></div>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="headBox">
      <div class="logo"><a href="http://www.jalanja.com" name="top"><img src="themes/miqinew/images/logo.gif" /></a></div>
      
      <div id="search"  class="headSearch">
        <form id="searchForm" name="searchForm" method="get" action="<?php echo $this->_var['lang']['y_ssl_url']; ?>search.php" onSubmit="return checkSearchForm()"  >
          <div class="headSearch_input">
            <input name="keywords" type="text" id="keyword" value="<?php echo $this->_var['lang']['search_goods']; ?>" onclick="javascript:if(this.value=='<?php echo $this->_var['lang']['search_goods']; ?>')this.value=''"  />
          </div>
          <div class="headSearch_btn">
            <input name="imageField" type="submit" value=""  style="cursor:pointer;" />
          </div>
        </form>
      </div>
      
      <div class="shop_txt_out" id="ECS_CARTINFO" >
       <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      </div>
    </div>
    <div class="headNav" style="position:relative;">
      <div class="classNav"> <a class="classNav_a" href="#"><?php echo $this->_var['lang']['y_all_goods_cat']; ?></a> 
      
      
      <div class="left_nav" style="position:absolute; left:0; top:33px;">
        <div class="leftNav" id="J_mainCata">
          <ul>
            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_pro']['iteration']++;
?>
            <li>
              <p class="leftNav_p0<?php echo $this->_foreach['categories_pro']['iteration']; ?>"><a class="a1" href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></p>
              <div class="childer_hide" >
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                <a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </div>
        <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
        <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        

          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></p>
                <dl>
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                  <dd><a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['childer']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <div class="blank"></div>
                </dl>
              </div>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
      
            <div class="leftSubNav_list_right">
              <dl>
                <?php $_from = $this->_var['cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                <dd>
                  <?php if ($this->_var['brand']['brand_logo']): ?>
                  <a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['brand']['url']; ?>" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?> (<?php echo $this->_var['brand']['goods_num']; ?>)" /></a>
                  <?php else: ?>
                  <a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['brand']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a>
                  <?php endif; ?>
                </dd>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </dl>
            </div>
          </div>
       
         
        </div>
    <div class="blank"></div>
            </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        
        
      </div>
      
      
      
      
      
      </div>
      <div class="subNav">
        <ul>
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <li <?php if ($this->_var['nav']['active'] == 1): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
          <?php if ($this->_var['nav']['cat_list']): ?>
<div class='sub_nav'>
<dl>
<?php $_from = $this->_var['nav']['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
<dd>
<a class="t" href="<?php echo $this->_var['lang']['y_global_url']; ?><?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
</dd>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
</div>
<?php endif; ?>
          
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="rightNav">
        <ul>
          <li><a href="<?php echo $this->_var['lang']['y_global_url']; ?>article-9.html">Help Center</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
