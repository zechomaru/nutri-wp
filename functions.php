<?php

add_theme_support( 'post-thumbnails' );
function custom_excerpt_length( $length ) {
  if (is_category(2)) {
    # code...
  return 20;
  }
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 10 );
add_filter('excerpt_more', 'new_excerpt_more');


function new_excerpt_more($more) {
       global $post;
  if (is_category(2)) {
    return '<a class="" href="'. get_permalink($post->ID) . '"> Ver Más...</a>';
  }

}

function register_my_menus()
{
  register_nav_menus(
    array(
      'menu-header' => __('Menu Header'),
      'menu-footer' => __('Menu Footer'),
      )
  );
}
add_action( init, register_my_menus );