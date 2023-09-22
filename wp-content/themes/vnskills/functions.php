<?php
/**
 * Theme Support
 */
if ( !function_exists('vnskills_theme_supports') ) {
	function vnskills_theme_supports() {
    add_theme_support('menus');
    
    register_nav_menus(
      array (
        'main-menu' => translate('Main Menu'),
        'footer-menu' => translate('Footer Menu')
      )
    );
	}
	add_action( 'after_setup_theme', 'vnskills_theme_supports', 0 );
}

/**
 * Stylesheet
 *
 * @return Stylesheet
 */
if ( !function_exists('vnskills_stylesheet') ) {
  function vnskills_stylesheet() {
    wp_register_style('vnskills_style', get_stylesheet_directory_uri() . '/access/css/vnskills-styles.css', array(), '1.0', 'all');
    wp_enqueue_style('vnskills_style');
  }
  add_action('init', 'vnskills_stylesheet');
}

/**
 * Flexible content
 *
 * @param String $component
 * @return ComponentData
 */
if ( !function_exists('vnskills_flexible_content') ) {
  function vnskills_flexible_content($component) {
    global $post;
    $fc = get_field( $component, $post->ID );

    if (!empty($fc)) {
      foreach ($fc as $fields) {
        $layout = $fields['acf_fc_layout'];
        
        switch ($layout) {        
          case 'hero_banner':
            if(!is_admin()) {
              wp_register_script('component-js_slick', get_stylesheet_directory_uri() . '/templates/components/hero_banner/libs/slick/slick.min.js', array('jquery'), '1.8.1', true);
              wp_enqueue_script('component-js_slick');

              wp_register_style('component-css_slick', get_stylesheet_directory_uri() . '/templates/components/hero_banner/libs/slick/slick.css', array(), '1.8.1', 'all');
              wp_enqueue_style('component-css_slick');

              wp_register_style('component-theme_slick', get_stylesheet_directory_uri() . '/templates/components/hero_banner/libs/slick/slick-theme.css', array(), '1.8.1', 'all');
              wp_enqueue_style('component-theme_slick');

              wp_register_script('component-js_hero_banner', get_stylesheet_directory_uri() . '/templates/components/hero_banner/hero_banner.js', array('jquery'), '1.0', true);
              wp_enqueue_script('component-js_hero_banner');

              wp_register_style('component-hero_banner', get_stylesheet_directory_uri() . '/templates/components/hero_banner/hero_banner.css', array(), '1.0', 'all');
              wp_enqueue_style('component-hero_banner');
            }
            get_template_part('templates/components/hero_banner/hero_banner', null, array(
              'banner_items' => $fields['banner_item']
            ));
            break;
          
          default:
          if ( locate_template(array('/templates/components/'.$layout.'/'.$layout.'.php')) ) {
            if(!is_admin()) {
              wp_register_style('component-'.$layout, get_stylesheet_directory_uri() . '/templates/components/'.$layout.'/'.$layout.'.css', array(), '1.0', 'all');
              wp_enqueue_style('component-'.$layout);
            }
            get_template_part('templates/components/'.$layout.'/'.$layout, null, array($fields));
          } elseif ( locate_template(array('/templates/components/component-default.php')) ) {
            get_template_part('templates/components/component-default', null, array($fields));
          } else {
            get_template_part('templates/components/component-404', null, array('template' => $layout));
          }
            break;
        }
      }
    }

    return;
  }
}
