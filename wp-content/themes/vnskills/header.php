<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header-wrap">
    <?php
      $header_options = get_field('header_options', 'option');
      print('<pre>');
      print_r($header_options);
      print('</pre>');
      
      $header_logo_url = $header_options['header_logo'] ? $header_options['header_logo']['url'] : get_template_directory_uri() . '/logo.jpg';
      $header_logo_alt = $header_options['header_logo'] ? $header_options['header_logo']['title'] : get_bloginfo('name');

      if  ($header_options['header_top_notification']):
    ?>
    <div class="header-top">
      <div class="header-top-notification"><?php print($header_options['header_top_notification']); ?></div>
    </div>
    <?php endif; ?>
    
    <div class="header">
      <div class="logo">
        <a href="<?php print(get_home_url()); ?>" id="logo">
          <img src="<?php print($header_logo_url); ?>" alt="<?php print($header_logo_alt); ?>" width="<?php print($header_options['header_logo_width']); ?>">
        </a>
      </div>
    </div>
  </header>