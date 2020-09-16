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

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
  if ( ! is_single() ) {
      $more = sprintf( '<a class="post__more" href="%1$s">%2$s</a>',
          get_permalink( get_the_ID() ),
          __( 'Więcej...', 'textdomain' )
      );
  }

  return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


?>