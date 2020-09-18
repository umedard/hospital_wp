<ul class="homenews">
    <!-- first loop -->
<?php

$args1 = array( 'category_name' => 'aktualnosci',
'post_status' => 'post',
'posts_per_page' => 3,
);
$query1 = new WP_Query( $args1 );

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

<div class="homenews__sub">


<?php 

    $args2 = array( 'category_name' => 'aktualnosci',
    'post_status' => 'post',
    'offset' => 0,
    'posts_per_page' => 3,
    );
    $query2 = new WP_Query( $args2 );


    while ( $query2->have_posts() ) {
        $query2->the_post();
        echo '<a class="homenews__linkwrapper" href="' . get_the_permalink() . '"><div class="homenews__wrapper"><div class="homenews__date_sub homenews__center">';
        
            echo '<div class="homenews__day"> ' . get_the_date('d') . '</div>';
            echo '<div class="homenews__month"> ' . get_the_date('F') . '</div>';
            echo '<div class="homenews__year"> ' . get_the_date('Y') . '</div>';
       
        echo '</div><div class="homenews__title homenews__center">' . 
        
            get_the_title() . 
        
        '</div></div></a>';
    }
    

    // d F	Y	
    wp_reset_postdata();
    ?>
</div>

<ul>

