<?php
/**
 * Displays projects
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php

// args
$args = [
    'post_type' => ['projects'],
    'post_status' => ['publish']
];

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    echo 'no posts found';
}
/* Restore original Post Data */
wp_reset_postdata();