
<?php $_from = $this->_var['history_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_10619700_1434347152');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_10619700_1434347152']):
?>

<li>
  <div class="white_img"> <a href="<?php echo $this->_var['goods_0_10619700_1434347152']['url']; ?>"> <img src="<?php echo $this->_var['goods_0_10619700_1434347152']['goods_thumb']; ?>" border="0" width="170" height="170"> </a> </div>
  <div class="white_txt"> <b><a href="<?php echo $this->_var['goods_0_10619700_1434347152']['url']; ?>"><?php echo $this->_var['goods_0_10619700_1434347152']['short_name']; ?></a></b>
    <p><?php echo $this->_var['goods_0_10619700_1434347152']['shop_price']; ?><font><?php echo $this->_var['goods_0_10619700_1434347152']['market_price']; ?></font></p>
  </div>
</li>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

