
  <?php get_header(); ?>

  <main >
    <?php get_template_part( 'template-parts/searchbar', 'page' ); ?>
     <?php get_template_part( 'template-parts/banner', 'page' ); ?>

    <div class="wrapper wrapper__main">
        <div class="errorpage">
               <p>Błąd. Nie znaleziono takiej strony.</p>
               <?php get_search_form(); ?>
               <h1><?php echo get_option( 'medard_option' ); ?></h1>
        </div>
     
     
    
     
    </div>
 



  </main>

    <?php get_footer(); ?>
