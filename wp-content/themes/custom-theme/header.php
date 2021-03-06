<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Gantari&family=League+Gothic&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="main-header">
        <div class="i-left">
            <div class="i-left-container">
                <h2>Hi, I'm</h2>
                <div class="i-name">John Hysong</div>
                <div class="i-title">
                    <div class="i-title-wrapper">
                        <!-- <div class="i-title-item">Full Stack Web Developer</div> -->
                        <div class="i-title-item">HTML</div>
                        <div class="i-title-item">CSS</div>
                        <div class="i-title-item">CSS Frameworks</div>
                        <div class="i-title-item">Javascript</div>
                        <div class="i-title-item">Node</div>
						<div class="i-title-item">jQuery</div>
						<div class="i-title-item">SQL</div>
                        <div class="i-title-item">Graphql</div>
						<div class="i-title-item">Express</div>
                        <div class="i-title-item">React</div>
						<div class="i-title-item">WordPress</div>
						<div class="i-title-item">PHP</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="i-right">
            <div class="i-bg"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/code.jpg" alt="" class="i-img" />
        </div>
	</header>
