<ul class="homenews">
    <!-- first loop -->
<?php

$args = array( 'category_name' => 'aktualnosci',
'post_status' => 'post',
'posts_per_page' => 3,
);
$query1 = new WP_Query( $args );

while ( $query1->have_posts() ) {
    $query1->the_post();

    // get the title
   
    $title  =  '<a class="homenews__link" href="' . get_the_permalink() . '"> ' . get_the_title() . '</a>';
    
    // get excerpt
    $excerpt = get_the_excerpt();
    $excerpt = substr($excerpt, 0, 100);
    $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
    $excerpt = '<p class="homenews__excerpt">' . wp_strip_all_tags(  $excerpt, true ) . ' ...' .'</p>';
    // get date
    $date = get_the_date( 'Y/m/d' );
    $output  = str_replace("/",".", $date);
    $post_date = '<p class="homenews__date">' . $output .'</p>';

    // thumbnail
    if ( has_post_thumbnail() ) {
            $thumbnail =  '<img class="homenews__img" src="' . get_the_post_thumbnail();
        }
        else {
            $thumbnail = '<img class="homenews__img" src="' . get_bloginfo( 'stylesheet_directory' ) 
                . '/assets/images/doctors.jpeg" />';
}
    

    echo '<div class="homenews__featured"> <div class="homenews__featuredImg">' . $thumbnail . ' </div> ' . 
    '<div class="homenews__content"> ' . 

    $title  . $post_date .  $excerpt .
    
    '</div>  </div>';

  
}
wp_reset_postdata();

?>

<div>
    <!-- second loop -->
  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum a in quo molestias obcaecati ut fugiat ullam. Ut odio, dolor nihil, eligendi, perspiciatis autem esse a laudantium ea quis similique molestias magni repellendus officia corrupti blanditiis labore impedit.
</div>

<ul>

