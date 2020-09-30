<div class="blog-post">
    <div class="post__header">
            <?php 
                the_title('<h1 class="post__title">', '</h1>');
                // if(has_tag()) {
                //     the_tags( 'Tagi: ', ', ', '<br />');
                // } 
            ?>
    </div>
<?php

the_content();

// $value = get_field( "owoce" );

// if( $value ) {
//     echo $value;
// };

?>

</div>