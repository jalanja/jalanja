<?php if ($this->_var['promotion_goods']): ?>
<div class="picScroll-left">
  <div class="hd">
    <div class="title_txt"> <img src="themes/miqinew/images/title_txt01.jpg" border="0"> </div>
    <div class="title_more"> <a href="search.php?intro=promotion"><?php echo $this->_var['lang']['y_more']; ?></a> </div>
    <div class="title_btn">
      <div class="title_btn_right"> <a class="next"></a> </div>
      <ul>
      </ul>
      <div class="title_btn_left"> <a class="prev"></a> </div>
    </div>
  </div>
  <div class="bd">
    <ul class="picList">
      <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
      <li>
        <div class="time_num">
          <p class="endtime" value="<?php echo $this->_var['goods']['promote_end_date']; ?>"></p>
        </div>
        <div class="time_center">
          <div class="time_img"> <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"  width="200" height="200"/></a> </div>
          <div class="time_price"><b><?php echo $this->_var['lang']['y_price_promote']; ?></b>
            <p><?php echo $this->_var['goods']['zhekou']; ?><font style="font-size:13px"><?php echo $this->_var['lang']['y_discount']; ?></font></p>
          </div>
        </div>
        <div class="time_txt"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_style_name']); ?></a> </div>
        <div class="time_btn"> <a href="<?php echo $this->_var['goods']['url']; ?>"></a> </div>
        <div class="time_bottom"> <b><span><?php echo $this->_var['goods']['sales_volume']; ?></span><?php echo $this->_var['lang']['y_count_buy']; ?></b>   
          <p><?php echo $this->_var['lang']['y_quick_buy']; ?></p>
        </div>
        <div style="clear:both;"></div>
        
       <div class="sucess_joinCart" id="addtocartdialog_retui_<?php echo $this->_var['goods']['id']; ?>"> </div>
      </li>  
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
</div>
<script type="text/javascript">
	jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",vis:5,scroll:5,easing:"easeOutBounce",delayTime:0,trigger:"click"});
	
	$(function(){
		var datename = new Date();
		var Offset = datename.getTimezoneOffset() * 28800;
		
		setInterval(function(){
		  $(".endtime").each(function(){
			var obj = $(this);
			var endTime = new Date(parseInt(obj.attr('value')) * 1000 - Offset) ;
			var show_day =  obj.attr('showday');
			var nowTime = new Date();
			var nMS=endTime.getTime() - nowTime.getTime();
			var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
			var myH_show=Math.floor(nMS/(1000*60*60) % 24);
			var myH=Math.floor(nMS/(1000*60*60));
			var myM=Math.floor(nMS/(1000*60)) % 60;
			var myS=Math.floor(nMS/1000) % 60;
			var myMS=Math.floor(nMS/100) % 10;
			
			if(myS>=0){
				if(show_day == 'show')
				{
					var str = '<strong class="tcd-d">'+myD+'</strong><?php echo $this->_var['lang']['y_day']; ?><strong class="tcd-h">'+myH_show+'</strong><?php echo $this->_var['lang']['y_hour']; ?><strong class="tcd-m">'+myM+'</strong><?php echo $this->_var['lang']['y_minute']; ?><strong class="tcd-s">'+myS+'</strong><?php echo $this->_var['lang']['y_second']; ?>';
				}
				else
				{
					var str = '<span>'+myH+'</span><?php echo $this->_var['lang']['y_hour']; ?><span>'+myM+'</span><?php echo $this->_var['lang']['y_minute']; ?><span>'+myS+'</span><?php echo $this->_var['lang']['y_second']; ?>';
				}
			}else{
				var str = "<?php echo $this->_var['lang']['y_ended']; ?>";	
			}
			obj.html(str);
		  });
		}, 100);
	})
	
</script> 
<?php endif; ?>