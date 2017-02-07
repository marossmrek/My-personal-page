<?php

/**
 * Way to my theme template
 */
define( 'THEME_DIRECTORY', get_template_directory() );

/**
 * Theme Support and Site Settings
 */
require_once THEME_DIRECTORY . '/inc/site-settings.php';

/**
 * Loading Theme Scripts and Style
 */
require_once THEME_DIRECTORY . '/inc/loading-scripts.php';

/**
 * Cleaning shit script from source code
 */
require_once THEME_DIRECTORY . '/inc/cleaning.php';

/**
 * My Shortcodes
 */
require_once THEME_DIRECTORY . '/inc/shortcodes.php';


/**
 * My Functions
 */
if ( ! function_exists( 'log_me' ) ) :
    /**
     * Simple error logging
     *
     * @param $message
     * @return bool
     */
    function log_me( $message )
    {
        if ( true !== WP_DEBUG ) return false;

        if ( is_array($message) || is_object($message) ) {
            return error_log( json_encode($message) );
        }

        return error_log( $message );
    }

endif;