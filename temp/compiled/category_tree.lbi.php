
<div class="navBar">

  <div id="cate">
  <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_38861600_1434346308');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_38861600_1434346308']):
        $this->_foreach['categories_pro']['iteration']++;
?>

		<h1  class="h1">
		<dt > <a href="javascript:;" ><?php echo htmlspecialchars($this->_var['cat_0_38861600_1434346308']['name']); ?> <span class="searchLeft"></span></a> </dt>
		</h1>
		<ul <?php if ($this->_var['cat_0_38861600_1434346308']['id'] == $this->_var['parent_id_show']): ?>style="display:block"<?php endif; ?>>
		 <?php $_from = $this->_var['cat_0_38861600_1434346308']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_38872200_1434346308');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_38872200_1434346308']):
?>
          <?php $_from = $this->_var['child_0_38872200_1434346308']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_38876000_1434346308');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_38876000_1434346308']):
?>
		<li><a href="<?php echo $this->_var['childer_0_38876000_1434346308']['url']; ?>" <?php if ($this->_var['childer_0_38876000_1434346308']['id'] == $this->_var['category']): ?>class="current"<?php endif; ?>><?php echo htmlspecialchars($this->_var['childer_0_38876000_1434346308']['name']); ?></a></li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div style="clear:both"></div>
	

	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>

</div>
<div class="blank"></div>
<div class="blank"></div>