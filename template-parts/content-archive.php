<div class="blog-post">

<?php 

echo '<a class="homenews__link" href="' . get_the_permalink() . '"> ' . get_the_title() . '</a>';

the_excerpt();


?>

</div><!-- /.blog-post -->