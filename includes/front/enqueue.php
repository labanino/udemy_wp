<?php

function ju_enqueue() {
    $uri            = get_theme_url();
    wp_register_style('ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
    wp_register_style('ju_bootstrap', $uri . '/assets/css/bootstrap.css');
}