<?php

/**
 * Setup Theme
 */
add_action( 'after_setup_theme', 'smrek_setup' );
function smrek_setup()
{
    /**
     * Theme Support
     */
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /**
     * Editor Style
     */
    add_editor_style( 'css/editor-style.css' );
}

