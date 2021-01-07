	
<?php /* Template Name: test */ ?>
<?php

$args = [
    'post_type'=> 'nemoonekar',
    'tag'=> 'محیط',

];
$query = new WP_Query( $args );
if ( $query->have_posts() ) { 
    while ( $query->have_posts() ) {
        $query->the_post();
        the_title();
        the_content();
    }
    wp_reset_postdata();
} else {
    echo "no posts were found";
}
?>