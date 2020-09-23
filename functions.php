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

// change read more text
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

// support thumbnails

add_theme_support( 'post-thumbnails' );


// import google fonts
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Poppins:wght@300;400;700&display=swap', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function medard_book_init() {
    $labels = array(
        'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Books', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Book', 'textdomain' ),
        'new_item'              => __( 'New Book', 'textdomain' ),
        'edit_item'             => __( 'Edit Book', 'textdomain' ),
        'view_item'             => __( 'View Book', 'textdomain' ),
        'all_items'             => __( 'All Books', 'textdomain' ),
        'search_items'          => __( 'Search Books', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Books:', 'textdomain' ),
        'not_found'             => __( 'No books found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        // enables Gutenberg
        'show_in_rest' => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'book', $args );
}
// add_action( 'init', 'medard_book_init' );

add_action( 'init', 'wpshout_add_taxonomies_to_books' );
function wpshout_add_taxonomies_to_books() {
	register_taxonomy_for_object_type( 'category', 'book' );
	// register_taxonomy_for_object_type( 'difficulty', 'book' );
	// register_taxonomy_for_object_type( 'post_tag', 'book' );
}
 


add_filter( 'pre_get_posts', 'wpshout_add_custom_post_types_to_query' );
function wpshout_add_custom_post_types_to_query( $query ) {
	if( 
		is_archive() &&
		$query->is_main_query() &&
		empty( $query->query_vars['suppress_filters'] )
	) {
		$query->set( 'post_type', array( 
			'post',
			'book'
		) );
	}
}

function newWidgetInit() {
  
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar1'
  ));
}

add_action('widgets_init', 'newWidgetInit')

?>