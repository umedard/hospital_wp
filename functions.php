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

/**  
 * 
 * first - widget registration - adds menu to admin section
 * 
 */ 

function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
    widget_registration('Footer widget 1', 'footer-sidebar-1', 'test', '', '', '', '');
    widget_registration('Footer widget 2', 'footer-sidebar-2', 'test', '', '', '', '');

}
 
add_action('widgets_init', 'multiple_widget_init');

/**  
 * 
 * creates a new widgets
 * 
 */ 

class HW_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'hw_Widget', // Base ID
            'HW_Widget', // Name
            array( 'description' => __( 'HW_Widget', 'text_domain' ), ) // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        echo __( 'Hello, World!', 'text_domain' );
        echo $after_widget;
    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'text_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
 
} // class Foo_Widget

add_action( 'widgets_init', 'register_foo' );
     
function register_foo() { 
    register_widget( 'HW_Widget' ); 
}

function my_custom_post_product() {
  $labels = array(
    'name'               => _x( 'Products', 'post type general name' ),
    'singular_name'      => _x( 'Product', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Product' ),
    'edit_item'          => __( 'Edit Product' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Product' ),
    'search_items'       => __( 'Search Products' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Products'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'product', $args ); 
}
// add_action( 'init', 'my_custom_post_product', 10 );

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'taxonomy', array( 'post', ' page' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

function custom_callback() {
  echo "Hello world!";

}

add_action('init', 'custom_callback');


add_theme_support(
    'editor-color-palette',
    array(
        array(
            'name'  => __( 'Dark Gray', 'twentynineteen' ),
            'slug'  => 'dark-gray',
            'color' => '#111',
        ),
        array(
            'name'  => __( 'Light Gray', 'twentynineteen' ),
            'slug'  => 'light-gray',
            'color' => '#767676',
        ),
        array(
            'name'  => __( 'White', 'twentynineteen' ),
            'slug'  => 'white',
            'color' => '#FFF',
        ),
        array(
            'name'  => __( 'Red', 'twentynineteen' ),
            'slug'  => 'red',
            'color' => '#b71e3f',
        ),
    )
);


?>