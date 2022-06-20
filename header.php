<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">

  <!-- フォントの設定 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <?php 
  wp_enqueue_scripts();
  wp_head();
  ?>
  
</head>

<body <?php body_class();?>>
  <header class="header">
    <div class="header__wrapper">
      <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
      <<?php echo $html_tag; ?> class="site-title wrapper">
        <a href="<?php echo home_url(); ?>" class="header__logo">OK CODE</a>
      </<?php echo $html_tag; ?>>
      <nav class="header__nav">
        <ul class="header-list">
          <li class="header-list__item"><a href="<?php echo home_url('/work-list'); ?>">Works</a></li>
          <li class="header-list__item"><a href="<?php echo home_url('#service'); ?>">Service</a></li>
          <li class="header-list__item"><a href="<?php echo home_url('#about'); ?>">About</a></li>
          <li class="header-list__item"><a href="<?php echo home_url('/price-flow'); ?>">Price</a></li>
          <li class="header-list__item"><a href="<?php echo home_url('/price-flow#flow'); ?>">Flow</a></li>
          <li class="header-list__item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="hamburger-icon" id="hamburger-icon">
      <span class="hamburger-icon__line"></span>
      <span class="hamburger-icon__line"></span>
      <span class="hamburger-icon__line"></span>
    </div>
    <div class="hamburger__mask" id="hamburger__mask">
      <nav class="hamburger__nav">
        <ul class="hamburger__list">
          <li class="hamburger__item"><a href="<?php echo home_url('/work-list'); ?>">Works</a></li>
          <li class="hamburger__item"><a href="<?php echo home_url('#service'); ?>">Service</a></li>
          <li class="hamburger__item"><a href="<?php echo home_url('#about'); ?>">About</a></li>
          <li class="hamburger__item"><a href="<?php echo home_url('/price-flow'); ?>">Price</a></li>
          <li class="hamburger__item"><a href="<?php echo home_url('/price-flow#flow'); ?>">Flow</a></li>
          <li class="hamburger__item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>