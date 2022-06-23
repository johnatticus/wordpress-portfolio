<?php
/**
 * Displays about me homepage content
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

	}
// echo get_the_content();

?>
<div class="a">
      <div class="a-left">
        <div class="a-card bg"></div>
        <div class="a-card">
        <?php 
            if (has_post_thumbnail()) {
                ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="me" class="a-img" />
                <?php
            } 
        ?>
        </div>
      </div>
      <div class="a-right">
        <h1 class="a-title"><?php echo get_the_title(); ?></h1>
        
        <?php echo get_the_content(); ?>
      </div>
    </div>
<?php

}
?>

