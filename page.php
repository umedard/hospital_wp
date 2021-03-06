
  <?php get_header(); ?>

  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>

    <div class="wrapper wrapper__main">
      <div <?php post_class( 'wrapper__body'); ?>>
          <p><?php the_tags(); ?></p>
       
          <?php
      
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', "page" );
			endwhile; endif;
      ?>
      </div>
     
    
       <?php get_template_part( 'template-parts/sidebar', '' ); ?>
    </div>
 



  </main>

    <?php get_footer(); ?>