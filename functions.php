<?php 

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu-desktop' => __( 'Main-menu disktop' ),
      'main-meni-mobile' => __( 'Main-menu mobile' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

function theme_slug_excerpt_length( $length ) {
        if ( is_admin() ) {
                return $length;
        }
        return 20;
}
add_filter( 'excerpt_length', 'theme_slug_excerpt_length', 999 );

function search_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_search) {
      $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
      $query->set('posts_per_page',6);
    }
  }
}

// how to add an action


?>