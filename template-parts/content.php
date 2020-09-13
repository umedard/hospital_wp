<div class="blog-post">
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php the_shortlink() ?>
 <?php
 
 if ( is_home() ) {
   the_excerpt(); 
}
else {
    the_content();
}
?>

</div><!-- /.blog-post -->