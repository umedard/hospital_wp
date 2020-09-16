
  <?php get_header(); ?>
  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>
    <div class="wrapper wrapper__main">
      <div class="wrapper__body">
          <?php
      
// WP_Query arguments
$args = array(
	'post_type'              => array( 'page', ' post' ),
	'nopaging'               => false,
	'posts_per_page'         => '5',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		the_title();
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();


			// if ( have_posts() ) : while ( have_posts() ) : the_post();
      //   get_template_part( 'template-parts/content', "search" );
			// endwhile; endif;
      // ?>
      </div>
 <?php get_template_part( 'template-parts/sidebar', 'page' ); ?>
    </div>
 



  </main>

    <?php get_footer(); ?>
