<?php 

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atroly
*/


    $atroly_footer_logo = get_theme_mod( 'atroly_footer_logo' );
    $atroly_footer_top_space = function_exists('tpmeta_field') ? tpmeta_field('atroly_footer_top_space') : '0';
    $atroly_copyright_center = $atroly_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', true );
    $footer_bottom_copyright_area_switch = get_theme_mod( 'footer_bottom_copyright_area_switch', true );

    // theme
    $footer_bg_img = get_theme_mod( 'footer_bg_image' );
    $footer_bg_color = get_theme_mod( 'footer_bg_color', '#1D1E20' );
    $footer_bg_opacity = get_theme_mod( 'footer_bg_opacity', 0.8 );

    // page
    $atroly_footer_bg_image = function_exists('tpmeta_image_field')? tpmeta_image_field('atroly_footer_bg_image') : '';
    $atroly_footer_bg_color = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_color') : '';
    $atroly_footer_bg_opacity = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_opacity') : '';

    $footer_combine_color = $atroly_footer_bg_color != '' ? $atroly_footer_bg_color : $footer_bg_color;
    $footer_combine_bg = $atroly_footer_bg_image != '' ? $atroly_footer_bg_image['url'] : $footer_bg_img;
    $footer_combine_opacity = $atroly_footer_bg_opacity != '' ? $atroly_footer_bg_opacity : $footer_bg_opacity;

    // Email id 
   $header_top_email = get_theme_mod( 'header_email', __( 'atroly@support.com', 'atroly' ) );

    // Phone Number
   $header_top_phone = get_theme_mod( 'header_phone', __( '+88 01310-069824', 'atroly' ) );
   $footer_bottom_menu = get_theme_mod( 'footer_bottom_menu', __( '#', 'atroly' ) );


    // footer area links  switch
    $footer_area_links_switch = get_theme_mod( 'footer_area_links_switch', false );
    // footer area links 
    $footer_area_links = get_theme_mod( 'footer_area_links', __( '#', 'atroly' ) );

    $footer_social_switch = get_theme_mod( 'footer_social_switch', false );

    // footer_columns
    $footer_columns = 0;
    $footer_top_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );
    $footer_top_widgets = get_theme_mod( 'footer_top_widget_number', 3 );

    for ( $num = 1; $num <= $footer_widgets + 1; $num++ ) {
        if ( is_active_sidebar( 'footer-' . $num ) ) {
            $footer_columns++;
        }
    }

    for ( $num = 1; $num <= $footer_top_widgets + 1; $num++ ) {
        if ( is_active_sidebar( 'footer-top-' . $num ) ) {
            $footer_top_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';
        $footer_class[2] = 'col-xl-3 col-lg-2 col-md-6 col-sm-6';
        $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }
    switch ( $footer_top_columns ) {
    case '1':
        $footer_top_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_top_class[1] = 'col-lg-6 col-md-6';
        $footer_top_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
            $footer_top_class[1] = 'col-lg-4 col-md-4';
            $footer_top_class[2] = 'col-lg-4 col-md-4';
            $footer_top_class[3] = 'col-lg-4 col-md-4';
            break;
    }

?>


<!-- footer -->
<!-- Footer Start Here -->
<footer class="footer-area overflow--hidden" style="background: url(<?php echo esc_url($footer_combine_bg); ?>);">
<div class="footer-bg-overlay" style="background: <?php echo esc_attr($footer_combine_color); ?>; opacity: <?php echo esc_attr($footer_combine_opacity); ?>;"></div>
<?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') OR is_active_sidebar('footer-top-1') OR is_active_sidebar('footer-top-2') OR is_active_sidebar('footer-top-3') ): ?>
    <div class="footer-top pt-60">
        <div class="container">
            <?php if ( is_active_sidebar('footer-top-1') OR is_active_sidebar('footer-top-2') OR is_active_sidebar('footer-top-3') ): ?>
            <div class="footer-logo--wrap">
                <div class="row justify-content-between gy-4">
                <?php
                    if ( $footer_top_columns < 4 ) {
                    if ( isset( $footer_top_class[1] ) ) {
                    print '<div class="' . esc_attr( $footer_top_class[1] ) . ' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-top-1' );
                    print '</div>';
                    }

                    if ( isset( $footer_top_class[2] ) ) {
                    print '<div class="' . esc_attr( $footer_top_class[2] ) . ' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-top-2' );
                    print '</div>';
                    }

                    if ( isset( $footer_top_class[3] ) ) {
                    print '<div class="' . esc_attr( $footer_top_class[3] ) . ' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-top-3' );
                    print '</div>';
                    }
                    } else {
                        for ( $num = 1; $num <= $footer_top_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-top-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_top_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-top-' . $num );
                            print '</div>';
                        }
                    }
                ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="footer--main--content">
                <div class="row gy-4 justify-content-between">
                <?php
                    if ( $footer_columns < 5 ) {
                    if ( isset( $footer_class[1] ) ) {
                    print '<div class="'.esc_attr( $footer_class[1] ).' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';
                    }

                    if ( isset( $footer_class[2] ) ) {
                    print '<div class="'.esc_attr( $footer_class[2] ).' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';
                    }

                    if ( isset( $footer_class[3] ) ) {
                    print '<div class="'.esc_attr( $footer_class[3] ).' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';
                    }

                    if ( isset( $footer_class[4] ) ) {
                    print '<div class="'.esc_attr( $footer_class[4] ).' wow animate__animated animate__fadeInUp">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    }
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Footer Top End-->

<?php  if ( !empty( $footer_copyright_switch ) ): ?>
    <!-- bottom Footer -->
    <div class="bottom-footer bg--base pt-3 pb-3">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="bottom-footer-text">
                    <?php print atroly_copyright_text(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
</footer>
<!-- ==================== Footer End Here ==================== -->

















<!-- footer area start -->
<footer class="atroly-footer-area-2 p-relative z-index-1 d-none" style="<?php echo esc_attr($main_bg); ?>">
<?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
    <div class="atroly-footer-bg-shape-2">
        <img class="shape-1" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/home-2/shape-1.png"
            alt="">
        <img class="shape-2" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/home-2/shape-2.png"
            alt="">
    </div>
    <div class="atroly-footer-main-area atroly-footer-border pt-110">
        <div class="container">
            <div class="row">
                <?php
                    if ( $footer_columns < 5 ) {
                    print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="atroly-footer-copyright-area p-relative ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="atroly-footer-copyright-inner">
                        <p><?php print atroly_copyright_text(); ?></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="atroly-footer-copyright-inner text-lg-end">
                        <?php echo atroly_kses( $footer_bottom_menu ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
 