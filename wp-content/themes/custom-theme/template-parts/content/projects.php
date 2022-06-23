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
    'post_status' => ['publish'],
    'posts_per_page' => -1,
    'order'   => 'ASC',
];

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    ?>

<div class="pl">
      <div class="pl-texts">
        <h1 class="pl-title">Projects</h1>
        <p class="pl-desc">
          Here are some examples of what I've been working on...
        </p>
      </div>
      <div class="pl-list">
<?php

    // echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        // echo '<li>' . get_the_title() . '</li>';
        // echo '<li>' . get_the_content() . '</li>';
    
    // echo '</ul>';
    ?>
    <div class="p">
      <div class="p-browser">
        <div class="p-circle-r"></div>
        <div class="p-circle-y"></div>
        <div class="p-circle-g"></div>
      </div>

        <?php 
            if (has_post_thumbnail()) {
                ?>
                <a href="http://johnatticus.com" target="_blank" rel="noreferrer">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="project" class="p-img" />
                </a>
                <?php
            } 
        ?>
    </div>
    <?php
    }
    ?>
        </div> <!--end pl-list-->
    </div> <!--end pl-->
    <?php
} else {
    echo 'no posts found';
}
/* Restore original Post Data */
wp_reset_postdata();