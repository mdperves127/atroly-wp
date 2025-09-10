<?php

/**
 * atroly_scripts description
 * @return [type] [description]
 */
function atroly_scripts() {

    /**
     * all css files
    */ 

    wp_enqueue_style( 'atroly-fonts', atroly_fonts_url(), array(), '1.0.0' );

    wp_enqueue_style( 'bootstrap', ATROLY_THEME_CSS_DIR.'bootstrap.min.css', array() );
    wp_enqueue_style( 'fontawesome-all', ATROLY_THEME_CSS_DIR . 'fontawesome-all.min.css', [] );
    wp_enqueue_style( 'slick', ATROLY_THEME_CSS_DIR . 'slick.css', [] );
    wp_enqueue_style( 'animate', ATROLY_THEME_CSS_DIR . 'animate.min.css', [] );
    wp_enqueue_style( 'odometer', ATROLY_THEME_CSS_DIR . 'odometer.css', [] );
    wp_enqueue_style( 'splitting', ATROLY_THEME_CSS_DIR . 'splitting.css', [] );
    wp_enqueue_style( 'magnific-popup', ATROLY_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'atroly-core', ATROLY_THEME_CSS_DIR . 'atroly-core.css', [] );
    wp_enqueue_style( 'atroly-unit', ATROLY_THEME_CSS_DIR . 'atroly-unit.css', [] );
    wp_enqueue_style( 'atroly-custom', ATROLY_THEME_CSS_DIR . 'atroly-custom.css', [] );
    wp_enqueue_style( 'atroly-style', get_stylesheet_uri() );


    // all js
    wp_enqueue_script( 'bootstrap-bundle', ATROLY_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'slick', ATROLY_THEME_JS_DIR . 'slick.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'odometer', ATROLY_THEME_JS_DIR . 'odometer.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-appear', ATROLY_THEME_JS_DIR . 'jquery.appear.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', ATROLY_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'splitting', ATROLY_THEME_JS_DIR . 'splitting.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'moment', ATROLY_THEME_JS_DIR . 'moment.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-magnific-popup', ATROLY_THEME_JS_DIR . 'jquery.magnific-popup.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'atroly-main', ATROLY_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'atroly_scripts' );


/*
Register Fonts
 */
function atroly_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'atroly' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Marcellus&display=swap');
    }
    return $font_url;
}