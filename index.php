
  <?php get_header(); ?>

  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>

    <div class="wrapper wrapper__main">
      <div class="wrapper__body">
          <?php
      
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', get_post_format() );
			endwhile; endif;
      ?>
      </div>
     
    
       <?php get_template_part( 'template-parts/sidebar', 'page' ); ?>
    </div>
 



  </main>

    <?php get_footer(); ?>
