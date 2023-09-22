<?php
// Add Typescript
add_action('wp_enqueue_scripts', function(): void {
  $script_args = include( get_template_directory() . '/assets/public/scripts.asset.php');
  wp_enqueue_script('wp-typescript', get_template_directory_uri() . '/assets/public/scripts.js', $script_args['dependencies'], $script_args['version'] ); 
});

// Add theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Tạo Sidebar
register_sidebar(
    array(
        'name' => 'Sidebar Left',
        'id' => 'sidebar-left',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )
);

// Flexible content
function flexible_content($component) {
  global $post;
  $fc = get_field( $component, $post->ID );

  if (!empty($fc)) {
    foreach ($fc as $fields) {
      $layout = $fields['acf_fc_layout'];
      
      switch ($layout) {        
        // case 'faqs':
        //   wp_register_style('component-faqs', get_stylesheet_directory_uri() . '/templates/components/faqs/faqs.css', array(), '1.0', 'all');
        //   wp_enqueue_style('component-faqs');
        //   get_template_part('templates/components/faqs/faqs', null, array(
        //     'block_title' => $fields['block_title'],
        //     'faq_items' => $fields['faq_items']
        //   ));
        //   break;
        
        default:
        if (locate_template(array('/templates/components/'.$layout.'/'.$layout.'.php'))) {
          wp_register_style('component-'.$layout, get_stylesheet_directory_uri() . '/templates/components/'.$layout.'/'.$layout.'.css', array(), '1.0', 'all');
          wp_enqueue_style('component-'.$layout);
          get_template_part('templates/components/'.$layout.'/'.$layout, null, array($fields));
        } else {
          get_template_part('templates/components/component-404', null, array('template' => $layout));
        }
          break;
      }
    }
  }

  return;
}
