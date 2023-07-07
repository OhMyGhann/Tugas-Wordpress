<?php
 function mytheme_enqueue_scripts() {
    // Enqueue CSS file
    wp_enqueue_style( 'mytheme-style', get_stylesheet_directory_uri() . '/assets/css/style.css' );

    // Enqueue jQuery from WordPress core
    wp_enqueue_script( 'jquery' );

    // Enqueue custom jQuery file
    wp_enqueue_script( 'mytheme-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '3.6.0', true );

    // Enqueue Slick Carousel script
    wp_enqueue_script( 'mytheme-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );
?>
