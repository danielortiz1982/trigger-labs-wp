<?php
    /**
     * trigger_labs functions and definitions
     *
     * @package trigger_labs
     * @since trigger_labs 1.0
     */

    function trigger_labs_wp_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'trigger_labs_wp' ),
            'secondary' => __( 'Secondary Menu', 'trigger_labs_wp' ),
        ) );
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }

    add_action( 'after_setup_theme', 'trigger_labs_wp_setup' );

    function trigger_labs_enqueue_styles() {
        // Enqueue the main style.css
        wp_enqueue_style( 'trigger-labs-main-style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'trigger_labs_enqueue_styles' );







