<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php print(get_template_directory_uri() . '/access/images/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?php print(get_template_directory_uri() . '/access/images/favicon.ico'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
  <title><?php bloginfo('name'); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header-wrap">
    <?php
      $header_options = get_field('header_options', 'option');
      
      $header_logo_url = $header_options['header_logo'] ? $header_options['header_logo']['url'] : get_template_directory_uri() . '/logo.jpg';
      $header_logo_alt = $header_options['header_logo'] ? $header_options['header_logo']['title'] : get_bloginfo('name');

      if  ($header_options['header_top_notification']):
    ?>
    <div class="header-top">
      <div class="container">
        <div class="header-top-notification text-center"><?php print($header_options['header_top_notification']); ?></div>
      </div>
    </div>
    <?php endif; ?>
    
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-2 logo">
            <a href="<?php print(get_home_url()); ?>" id="logo">
              <img src="<?php print($header_logo_url); ?>" alt="<?php print($header_logo_alt); ?>" width="<?php print($header_options['header_logo_width']); ?>">
            </a>
          </div>
          <div class="col-8 main-menu">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'main-menu', // tên location cần hiển thị
                'container' => 'nav', // thẻ container của menu
                'container_class' => 'main-menu', //class của container
                'menu_class' => 'menu menu-main-menu clearfix' // class của menu bên trong
              ));
            ?>
          </div>
          <div class="col-2 header-user-menu">
            <ul class="user-menu-list">
              <li class="user-menu-item item-menu-search">
                <a href="<?php print(esc_url( home_url( '/?s=' ) )); ?>" target="_blank"><i class="fa-solid fa-magnifying-glass"></i></a>
              </li>
              <li class="user-menu-item item-menu-wishlist">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              </li>
              <li class="user-menu-item item-memu-account">
                <a href=""><i class="fa-regular fa-user"></i></a>
              </li>
              <li class="user-menu-item item-memu-cart">
                <a href=""><i class="fa-solid fa-cart-plus"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>