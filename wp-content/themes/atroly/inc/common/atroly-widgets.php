<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atroly_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_layout_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_layout_3_switch', true );
    $footer_style_4_switch = get_theme_mod( 'footer_layout_4_switch', true );

    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__( 'Blog Sidebar', 'atroly' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="chunk-sidebar__widget wow animate__animated animate__fadeInUp">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="chunk-sidebar__widget-head"><h3 class="chunk-sidebar__widget-title">',
        'after_title'   => '</h3></div>',
    ]);

    /**
     * blog sidebar
     */
    if(class_exists("Atroly_Core")) :
    register_sidebar( [
        'name'          => esc_html__( 'Services Sidebar', 'atroly' ),
        'id'            => 'atroly-services-sidebar',
        'before_widget' => '<div id="%1$s" class="atroly-service-widget-item atroly-service-widget-tab mb-40 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="atroly-service-widget-title">',
        'after_title'   => '</h3>',
    ] );
    endif;


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer Style 1 : %1$s', 'atroly' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer Column %1$s', 'atroly' ), $num ),
            'before_widget' => '<div id="%1$s" class="chunk-footer-widget atroly-footer-2-col-'.$num.' mb-50 %2$s"> <div class="atroly-footer-widget-content footer-links">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h2 class="footer-widget__title">',
            'after_title'   => '</h2>',
        ] );
    }

    // footer 2
    if ( $footer_style_2_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'atroly' ), $num ),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'atroly' ), $num ),
                'before_widget' => '<div id="%1$s" class="chunk-footer-widget atroly-footer-col-'.$num.' mb-50 %2$s"> <div class="atroly-footer-widget-content">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h3 class="footer-widget__title">',
                'after_title'   => '</h3>',
            ] );
        }
    }    
  
    // footer 3
    if ( $footer_style_3_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'atroly' ), $num ),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'atroly' ), $num ),
                'before_widget' => '<div id="%1$s" class="chunk-footer-widget atroly-footer-3-col-'.$num.' mb-50 %2$s"> <div class="atroly-footer-widget-content">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h3 class="footer-widget__title">',
                'after_title'   => '</h3>',
            ] );
        }
    }    
  
    // footer 4
    if ( $footer_style_4_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'atroly' ), $num ),
                'id'            => 'footer-4-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'atroly' ), $num ),
                'before_widget' => '<div id="%1$s" class="chunk-footer-widget atroly-footer-4-col-'.$num.' mb-50 %2$s"> <div class="atroly-footer-widget-content">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h3 class="footer-widget__title">',
                'after_title'   => '</h3>',
            ] );
        }
    }    
}
add_action( 'widgets_init', 'atroly_widgets_init' );