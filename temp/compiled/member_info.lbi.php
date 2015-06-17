<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>

 <li><?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！</li>
<li><a href="<?php echo $this->_var['lang']['y_ssl_url']; ?>user.php"><?php echo $this->_var['lang']['user_center']; ?></a></li>
<li> <a href="<?php echo $this->_var['lang']['y_ssl_url']; ?>user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>

<?php else: ?>
 
 <li><a href="<?php echo $this->_var['lang']['y_ssl_url']; ?>user.php"><?php echo $this->_var['lang']['y_login']; ?></a></li>
 <li><a href="<?php echo $this->_var['lang']['y_ssl_url']; ?>user.php?act=register"><?php echo $this->_var['lang']['y_register']; ?></a></li>
<?php endif; ?>