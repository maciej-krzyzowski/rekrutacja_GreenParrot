<?php

    function add_googleFonts() {
        wp_enqueue_style( 'google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap', false );
        wp_enqueue_style( 'google-font-quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap', false );
    }
    add_action( 'wp_enqueue_scripts', 'add_googleFonts' );

    function add_fontAwesome() {
        wp_enqueue_script( 'fontAwesome', 'https://kit.fontawesome.com/c5afe1f91e.js');
    }
    add_action( 'wp_enqueue_scripts', 'add_fontAwesome' );

    function add_javascript() {
        wp_enqueue_script('script', get_stylesheet_directory_uri().'/script.js');
    }
    add_action('wp_footer', 'add_javascript');

?>