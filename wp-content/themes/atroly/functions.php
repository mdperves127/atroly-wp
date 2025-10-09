<?php

/**
 * atroly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atroly
 */

if ( !function_exists( 'atroly_setup' ) ):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function atroly_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on atroly, use a find and replace
         * to change 'atroly' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'atroly', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( [
            'main-menu' => esc_html__( 'Main Menu', 'atroly' ),
            // 'onepage-menu-menu-01' => esc_html__( 'One Page Menu 01', 'atroly' ),
        ] );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ] );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'atroly_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ] ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        //Enable custom header
        add_theme_support( 'custom-header' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ] );

        /**
         * Enable suporrt for Post Formats
         *
         * see: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support( 'post-formats', [
            'image',
            'audio',
            'video',
            'gallery',
            'quote',
        ] );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        remove_theme_support( 'widgets-block-editor' );
        
        // Add support for woocommerce.
        add_theme_support('woocommerce');

        // Remove woocommerce defauly styles
        add_filter( 'woocommerce_enqueue_styles', '__return_false' );

        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

    }
endif;
add_action( 'after_setup_theme', 'atroly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atroly_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'atroly_content_width', 640 );
}
add_action( 'after_setup_theme', 'atroly_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */

define( 'ATROLY_THEME_DIR', get_template_directory() );
define( 'ATROLY_THEME_URI', get_template_directory_uri() );
define( 'ATROLY_THEME_CSS_DIR', ATROLY_THEME_URI . '/assets/css/' );
define( 'ATROLY_THEME_JS_DIR', ATROLY_THEME_URI . '/assets/js/' );
define( 'ATROLY_THEME_INC', ATROLY_THEME_DIR . '/inc/' );



// wp_body_open
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/**
 * Implement the Custom Header feature.
 */
require ATROLY_THEME_INC . 'custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require ATROLY_THEME_INC . 'template-functions.php';

/**
 * Custom template helper function for this theme.
 */
require ATROLY_THEME_INC . 'template-helper.php';

/**
 * initialize kirki customizer class.
 */
add_action('init', function () {
if ( class_exists( 'Kirki' ) ) {
    include_once ATROLY_THEME_INC . 'kirki-customizer.php';
}
});
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require ATROLY_THEME_INC . 'jetpack.php';
}

/**
 * include atroly functions file
 */
require_once ATROLY_THEME_INC . 'class-navwalker.php';
require_once ATROLY_THEME_INC . 'class-tgm-plugin-activation.php';
require_once ATROLY_THEME_INC . 'add_plugin.php';
require_once ATROLY_THEME_INC . '/common/atroly-breadcrumb.php';
require_once ATROLY_THEME_INC . '/common/atroly-scripts.php';
require_once ATROLY_THEME_INC . '/common/atroly-widgets.php';
if ( function_exists('tpmeta_kick')) {
    require_once ATROLY_THEME_INC . 'atroly-metabox.php';
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function atroly_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'atroly_pingback_header' );

// change textarea position in comment form
// ----------------------------------------------------------------------------------------
function atroly_move_comment_textarea_to_bottom( $fields ) {
    $comment_field       = $fields[ 'comment' ];
    unset( $fields[ 'comment' ] );
    $fields[ 'comment' ] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'atroly_move_comment_textarea_to_bottom' );


// atroly_comment 
if ( !function_exists( 'atroly_comment' ) ) {
    function atroly_comment( $comment, $args, $depth ) {
        $GLOBAL['comment'] = $comment;
        extract( $args, EXTR_SKIP );
        $args['reply_text'] = '<div class="comment-reply"><span>Reply</span>
    </div>';
        $replayClass = 'comment-depth-' . esc_attr( $depth );
        ?>


<li id="comment-<?php comment_ID();?>" class="comment-list">



    <div class="comments-box">
        <div class="avatar">
        <?php print get_avatar( $comment, 102, null, null, [ 'class' => [] ] );?>
        </div>
            <div class="comment">
                <?php comment_text();?>
                <div class="avatar-name">
                    <h4><?php print get_comment_author_link();?></h4>
                </div>
            </div>
        <?php comment_reply_link( array_merge( $args, [ 'depth' => $depth, 'max_depth' => $args['max_depth'] ] ) );?>
    </div>

    <?php
    }
}








/**
 * shortcode supports for removing extra p, spance etc
 *
 */
add_filter( 'the_content', 'atroly_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function atroly_shortcode_extra_content_remove( $content ) {

    $array = [
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']',
    ];
    return strtr( $content, $array );

}

// atroly_search_filter_form
if ( !function_exists( 'atroly_search_filter_form' ) ) {
    function atroly_search_filter_form( $form ) {

        $form = sprintf(
            '<div class="blog-sidebar__search p-relative"><div class="search-px"><form action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="fa-solid fa-search"></i>  </button>
		</form></div></div>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search', 'atroly' )
        );

        return $form;
    }
    add_filter( 'get_search_form', 'atroly_search_filter_form' );
}

add_action( 'admin_enqueue_scripts', 'atroly_admin_custom_scripts' );


// atroly_admin_custom_scripts
function atroly_admin_custom_scripts() {
    wp_enqueue_media();
    wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/inc/css/customizer-style.css',array());
    wp_enqueue_script( 'atroly-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'atroly-admin-custom' );
}