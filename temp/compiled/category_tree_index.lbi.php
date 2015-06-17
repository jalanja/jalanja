<div class="left_nav">
        <div class="leftNav" id="J_mainCata">
          <ul>
            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_82512900_1434346542');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_82512900_1434346542']):
        $this->_foreach['categories_pro']['iteration']++;
?>
            <li>
              <p class="leftNav_p0<?php echo $this->_foreach['categories_pro']['iteration']; ?>"><a class="a1" href="<?php echo $this->_var['cat_0_82512900_1434346542']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat_0_82512900_1434346542']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat_0_82512900_1434346542']['name']); ?></a></p>
              <div class="childer_hide" >
                <?php $_from = $this->_var['cat_0_82512900_1434346542']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_82528100_1434346542');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_82528100_1434346542']):
?>
                <?php $_from = $this->_var['child_0_82528100_1434346542']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_82533600_1434346542');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_82533600_1434346542']):
?>
                <a href="<?php echo $this->_var['childer_0_82533600_1434346542']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer_0_82533600_1434346542']['name']); ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </div>
			  <div class="J_arrowBtn" style="top: 19px; display: block;"></div>
			  <div class="leftSubNav" id="J_subCata" style="opacity: 1; left: 220px; display: block; top: 0px;">
        

          <div class="leftSubNav_list" >
            <div class="leftSubNav_left">
			          <?php $_from = $this->_var['cat_0_82512900_1434346542']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_82545100_1434346542');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_82545100_1434346542']):
?>
              <div class="leftSubNav_left_txt none">
                <p class="p1" style=" background:none;"><a href="<?php echo $this->_var['child_0_82545100_1434346542']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child_0_82545100_1434346542']['name']); ?></a></p>
                <dl>
                  <?php $_from = $this->_var['child_0_82545100_1434346542']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_82557000_1434346542');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_82557000_1434346542']):
?>
                  <dd><a href="<?php echo $this->_var['childer_0_82557000_1434346542']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['childer_0_82557000_1434346542']['name']); ?></a></dd>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  <div class="blank"></div>
                </dl>
              </div>
			     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
			
            <div class="leftSubNav_list_right">
              <dl>
                <?php $_from = $this->_var['cat_0_82512900_1434346542']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_0_82569000_1434346542');if (count($_from)):
    foreach ($_from AS $this->_var['brand_0_82569000_1434346542']):
?>
                <dd>
                  <?php if ($this->_var['brand_0_82569000_1434346542']['brand_logo']): ?>
                  <a href="<?php echo $this->_var['brand_0_82569000_1434346542']['url']; ?>" target="_blank" ><img border="0" width="78" height="38" src="data/brandlogo/<?php echo $this->_var['brand_0_82569000_1434346542']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand_0_82569000_1434346542']['brand_name']); ?> (<?php echo $this->_var['brand_0_82569000_1434346542']['goods_num']; ?>)" /></a>
                  <?php else: ?>
                  <a href="<?php echo $this->_var['brand_0_82569000_1434346542']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand_0_82569000_1434346542']['brand_name']); ?></a>
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