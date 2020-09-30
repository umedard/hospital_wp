<section class="pagebanner">
    <div class="pagebanner__container">
        <div class="container">
                 <h1 class="pagebanner__header"> 
                     
                 <?php if (is_search()) {
                    echo "Wyniki wyszukiwania";
                 } elseif (is_tag()) {
                    single_tag_title( __( 'Kategoria: ', 'textdomain' ) );
                 } elseif (is_category()) {
                     echo "Aktualności";
                  } else {
                    echo "Szpital Uniwersytecki w Krakowie";
                 } 
                 ?>
                </h1>



                 
               
                
        </div>
    </div>
      
</section>