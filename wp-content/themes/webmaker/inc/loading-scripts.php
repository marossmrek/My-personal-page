<?php

/**
 * Add scripts & styles
 */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action('wp_enqueue_scripts', 'smrek_theme_scripts');
function smrek_theme_scripts()
{

    wp_enqueue_script(
        'smrek-app', get_template_directory_uri() . '/js/app.js',
        array( 'jquery' ), '', true
    );

    wp_enqueue_script(
        'paralax-js', get_template_directory_uri() . '/js/jquery.parallax.js'
    );


    wp_enqueue_script(
        'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
    );

    wp_enqueue_style(
        'smrek-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=latin-ext'
    );

    wp_enqueue_style(
        'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'fontawesom-style', get_template_directory_uri() . '/css/font-awesome.min.css'
    );
    wp_enqueue_style(
        'smrek-style', get_stylesheet_uri()
    );
}
