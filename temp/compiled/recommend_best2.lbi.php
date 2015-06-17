
<?php if ($this->_var['best_goods']): ?>
<div class="pro_box">
 
   <h2 class="top10" style="position:relative">
      <a href="search.php" target="_blank" style="display: block;width: 50px;height: 18px;right: 17px;
      position: absolute;top: 25px;">
      </a>
    </h2>
 <div id="slides" class="slides_boxs">
      
          <div class="slides_control" >    
               <div class="slide" style="overflow:hidden; zoom:1;" >
                   
                   <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['best_goods']['iteration']++;
?>
  
                 <div class="item">
                   <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"   /></a> 
                   <p><?php echo $this->_var['goods']['short_style_name']; ?></p>
                   <p><?php echo $this->_var['goods']['goods_brief']; ?>
                        
                  <span class="price">
                   <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                <?php echo $this->_var['goods']['promote_price']; ?>
                  <?php else: ?>
                  <?php echo $this->_var['goods']['shop_price']; ?>
                  <?php endif; ?>
                   </span>
                  </p>
                                     
                   </div>        
         
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                 
                    
               </div>
   
          </div>

				<a  class="prev">Prev</a>			
				<a  class="next">Next</a>
      
       <?php endif; ?>
         <script type="text/javascript">
          jQuery(".slides_boxs").slide({mainCell:".slides_control .slide",autoPage:true,effect:"leftLoop",
		  scroll:5,vis:5,easing:"easeOutCirc",delayTime:700})
		</script>
  </div>      