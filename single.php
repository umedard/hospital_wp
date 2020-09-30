
  <?php get_header(); ?>

  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>

    <div class="wrapper wrapper__main">
      <div <?php post_class( 'wrapper__body'); ?>>
         
          <?php
      
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', "single" );
			endwhile; endif;
      ?>

<?php
/*
    if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
 */

 ?>
      </div>
     
    
       <?php get_template_part( 'template-parts/sidebar', '' ); ?>

     
       
    </div>
 



  </main>

    <?php get_footer(); ?>