<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> Touch</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header id="header" >
  <div class="header_l header_return"> <a class="ico_10"  href="javascript:history.back(-1)"> <?php echo $this->_var['lang']['back_up_page']; ?> </a> </div>
  <h1> <?php echo $this->_var['lang']['article_detail']; ?> </h1>
  <div class="header_r"> <a class="ico_15" href="ectouch.php?act=share&content=<?php echo $this->_var['article']['title']; ?>"> <?php echo $this->_var['lang']['y_share_to']; ?> </a> </div>
</header>
<div class="blank3"></div>
<section class="wrap">
  <div class="art_content radius10">
    <h2><span><?php echo $this->_var['article']['title']; ?></span> <?php echo $this->_var['article']['add_time']; ?></h2>
    <div>
      <p> <?php echo $this->_var['article']['content']; ?> </p>
    </div>
  </div>
</section>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
