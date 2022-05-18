<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">


  <!-- フォントの設定 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <?php 
  wp_enqueue_scripts();
  wp_head();
  ?>
  
</head>
<header class="header">
  <div class="header__wrapper">
    <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $html_tag; ?> class="site-title wrapper">
      <a href="#"><h1 class="header__logo">OK CODE</h1></a>
    </<?php echo $html_tag; ?>>
    <nav class="header__navi">
      <ul class="header-list">
        <li class="header-list__item"><a href="#works">Works</a></li>
        <li class="header-list__item"><a href="#service">Service</a></li>
        <li class="header-list__item"><a href="#about">About</a></li>
        <li class="header-list__item"><a href="#price">Price</a></li>
        <li class="header-list__item"><a href="#flow">Flow</a></li>
        <li class="header-list__item"><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
  <div class="hamburger-icon">
    <span class="hamburger-icon__line"></span>
    <span class="hamburger-icon__line"></span>
    <span class="hamburger-icon__line"></span>
  </div>
</header>