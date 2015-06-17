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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script>
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
<script type="text/javascript">
function $id(element)
{
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str)
{
  var bt=$id(str+"_b").getElementsByTagName("h2");

  for(var i=0;i<bt.length;i++)
  {
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";

    bt[i].onclick=function()
    {
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;

      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++)
      {
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }

  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->smarty_insert_scripts(array('files'=>'magiczoom.js,miqi_goods.js,magiczoomplus.js')); ?> 
<script>
$(function(){
	/*放大镜缩略图左右切换效果*/
	$("#detail_img_slider").slide({
			mainCell:"#J_tabSlider ul",
			vis:5,
			prevCell:".pre_btn",
			nextCell:".next_btn",
			effect:"leftLoop"
	})
	/*放大镜缩略图点击选中效果*/
	$("#J_tabSlider ul li a").click(function(){
		$("#J_tabSlider ul li").removeClass("cur");
		$(this).parent().addClass("cur");
	})	
})
</script>

<div class="content_title">
  <div class="block">
    <div id="ur_here"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
  </div>
</div>

<div class="blank"></div>
<div class="content_detailed">
<div class="block clearfix">

<div class="contentBody" >
  <div class="mainBody">
  <div id="goodsInfo" class="clearfix">
      
      
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
     
      

      <div class="textInfo" style="width:700px;">
      <form action="exchange.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
            
         <div class="center_title"><?php echo $this->_var['goods']['goods_style_name']; ?></div>
        
           <div class="detail_center">
              <div class="center_txt">
                <div class="center_text">     

        
          <?php if ($this->_var['cfg']['show_goodssn']): ?>
          <p class="clearfix">
           
              <strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?>
           
          </p>
          <?php endif; ?>
          <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
          <p class="clearfix">
           
              <strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
            
          </p>
          <?php endif; ?>
          <?php if ($this->_var['cfg']['show_goodsweight']): ?>
          <p class="clearfix">
          
            <strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?>
          
          </p>
          <?php endif; ?>
          <p class="clearfix">
          
            <strong><?php echo $this->_var['lang']['exchange_integral']; ?></strong><font class="shop"><?php echo $this->_var['goods']['exchange_integral']; ?></font><br />
           
          </p>
          
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <p class="clearfix">
                
                <dd> <strong style="float:left; width:60px; padding-top:5px; font-size:13px; color:#999; font-weight:normal;"><?php echo $this->_var['spec']['name']; ?>：</strong>
                  <div style="float:left; width:360px;"> 
                     
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                    <div class="catt"> 
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                      <a style=" text-decoration:none" <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?>
                      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a> 
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    </div>
                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php else: ?>
                    <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?> 
                    <?php else: ?> 
                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?> 
                  </div>
                </dd>
                </p>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
          <Div class="blank"></Div>
          <Div class="blank"></Div>
          <p style=" " >
            <input type="hidden" name="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
            <input type="submit" value="<?php echo $this->_var['lang']['exchange_goods']; ?>" class="bnt_blue_1"/>
          </p>
       
        </div>
        </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
  
  <div class="AreaL">
  
<?php echo $this->fetch('library/category_tree.lbi'); ?>

  
  
  
  <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  

  
  <div class="AreaR">

    
    <div class="box">
      <div class="box_1">
        <div style="background: url(themes/miqinew/images/fixedNavBg.gif) repeat-x; height:35px;">
          <div id="com_b" class="history clearfix">
            <h2><?php echo $this->_var['lang']['goods_brief']; ?></h2>
            <h2 class="h2bg"><?php echo $this->_var['lang']['goods_attr']; ?></h2>
          </div>
        </div>

        <div id="com_v" class="boxCenterList RelaArticle"></div>

        <div id="com_h">
          <blockquote>
            <?php echo $this->_var['goods']['goods_desc']; ?>
          </blockquote>

          <blockquote>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
              <tr>
                <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
              </tr>
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
                <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo htmlspecialchars($this->_var['property']['value']); ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          </blockquote>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>

    <div class="blank"></div>
    

  </div>
  
</div>
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

<script type="text/javascript">

onload = function()
{
  fixpng();
}

</script>
</html>
