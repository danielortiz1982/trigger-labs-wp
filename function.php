<?php
    /**
     * trigger_labs functions and definitions
     *
     * @package trigger_labs
     * @since trigger_labs 1.0
     */

    if ( ! isset( $content_width ) ) {
        $content_width = 800; /* pixels */
    }


    if ( ! function_exists( 'trigger_labs_wp_setup' ) ) :

        function trigger_labs_wp_setup() {

            /**
             * Add default posts and comments RSS feed links to <head>.
             */
            add_theme_support( 'automatic-feed-links' );

            /**
             * Enable support for post thumbnails and featured images.
             */
            add_theme_support( 'post-thumbnails' );

            /**
             * Add support for two custom navigation menus.
             */
            register_nav_menus( array(
                'primary'   => __( 'Primary Menu', 'trigger_labs_wp' ),
                'secondary' => __( 'Secondary Menu', 'trigger_labs_wp' ),
            ) );

            /**
             * Enable support for the following post formats:
             * aside, gallery, quote, image, and video
             */
            add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        }
    endif; // trigger_labs_wp_setup
    add_action( 'after_setup_theme', 'trigger_labs_wp_setup' );
