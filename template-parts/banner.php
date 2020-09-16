<section class="pagebanner">
    <div class="pagebanner__container">
        <div class="container">
                 <h1 class="pagebanner__header"> 
                     
                 <?php if (is_search()) {
                    echo "Wyniki wyszukiwania";
                 } elseif (is_home()) {
                    echo "Szpital Uniwersytecki w Krakowie";
                 }  else {
                    the_title();
                 } 

                 ?>

                </h1>



                 
               
                
        </div>
    </div>
      
</section>