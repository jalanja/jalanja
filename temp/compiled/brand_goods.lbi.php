<div class="user_loves lshadow">
 <h2 class="mall_leftTitle c333"><?php echo $this->_var['lang']['y_brand_promote']; ?></h2>
     <ul class="pro_list">
  
      <?php $_from = $this->_var['brand_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_05302900_1434346299');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_05302900_1434346299']):
?>
     <li >
           <a href="<?php echo $this->_var['goods_0_05302900_1434346299']['url']; ?>" class="pro_pic"><img src="<?php echo $this->_var['goods_0_05302900_1434346299']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_05302900_1434346299']['name']); ?>"  width="120" height="120" /></a><br />
           <a href="<?php echo $this->_var['goods_0_05302900_1434346299']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_05302900_1434346299']['name']); ?>" class="pro_title"><?php echo htmlspecialchars($this->_var['goods_0_05302900_1434346299']['short_name']); ?></a>
            <p class="already_sold"><?php echo $this->_var['lang']['y_sold']; ?> <?php echo $this->_var['goods_0_05302900_1434346299']['sales_volume']; ?> <?php echo $this->_var['lang']['y_a_piece']; ?></p>
             <p class="pro_price">
              <a>
            <?php if ($this->_var['goods_0_05302900_1434346299']['promote_price'] != ""): ?>
            <font class="shop_s"><?php echo $this->_var['goods_0_05302900_1434346299']['promote_price']; ?></font>
            <?php else: ?>
            <font class="shop_s"><?php echo $this->_var['goods_0_05302900_1434346299']['shop_price']; ?></font>
            <?php endif; ?>
            </a>
            </p>
        </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <div class="more"><a href="<?php echo $this->_var['goods_brand']['url']; ?>"><?php echo $this->_var['lang']['y_more']; ?></a></div>
 </ul>
</div>
<div class="blank5"></div>
