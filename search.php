
  <?php get_header(); ?>
  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>
    <div class="wrapper wrapper__main">
      <div class="wrapper__body">
          <?php
      
      if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content', "search" );
    endwhile; endif;
    the_posts_pagination( array(
      'mid_size'  => 2,
      'prev_text' => __( 'Back', 'textdomain' ),
      'next_text' => __( 'Onward', 'textdomain' ),
    ) );
    next_posts_link(); 
    previous_posts_link(); 
		?>
      </div>
 <?php get_template_part( 'template-parts/sidebar', 'page' ); ?>
    </div>
 



  </main>

    <?php get_footer(); ?>
