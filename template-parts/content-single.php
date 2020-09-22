<div class="blog-post">

<?php 

the_content();



?>
<div class="afc">

<?php

$value = get_field( "owoce" );

if( $value ) {
    echo $value;
} else {
    echo 'empty';
}


?>

</div>

</div>