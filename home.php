
  <?php get_header(); ?>

  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>

    <div class="wrapper wrapper__main">
      <div class="wrapper__body">
          <?php get_template_part( 'template-parts/home/home', 'news' ); ?>
      </div>
     
    
     
    </div>
 



  </main>

    <?php get_footer(); ?>
