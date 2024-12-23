<?php

function arp_scripts() {
    wp_enqueue_style(
        'css-styles',
        get_stylesheet_directory_uri() . '/style.css', 
        array(),
        '1.0.0',
        null, // Add null only to Google Fonts
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'arp_scripts' );