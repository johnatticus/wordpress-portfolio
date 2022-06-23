<?php

    function load_assets() {
        wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/styles.css', [], null );
        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/scripts.js', [], null );
    }

    add_action( 'wp_enqueue_scripts', 'load_assets' );

    function setup_support(){
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array( 'gallery', 'image', 'quote', 'video', 'audio', 'link' ) );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
    }

    add_action('after_setup_theme', 'setup_support');