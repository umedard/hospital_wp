<div class="post">
    <h2 class="post__header">
        <?php the_title( '<a class="post__link" href="' . esc_url( get_permalink() ) . '">', '</a>' );?>
    </h2>
    <?php  the_excerpt();  ?>

</div>