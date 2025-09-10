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
    $footer_bg_color = get_theme_mod( 'footer_bg_color', '#1C1E21' );
    $theme_bg = $footer_bg_img ? "background-image:url({$footer_bg_img});" : "background-color:{$footer_bg_color};";

    // page
    $atroly_footer_bg_image = function_exists('tpmeta_image_field')? tpmeta_image_field('atroly_footer_bg_image') : '';
    $atroly_footer_bg_color = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_color') : '';
    $validate_color = $atroly_footer_bg_color != '' ? $atroly_footer_bg_color : $footer_bg_color;
    $page_bg = $atroly_footer_bg_image ? "background-image:url({$atroly_footer_bg_image['url']});" : "background-color:{$validate_color};";
    $main_bg = $page_bg ? $page_bg : $theme_bg;
 
    $footer_cta_switch = get_theme_mod( 'footer_cta_switch', true );
    $footer_top_cta_title = get_theme_mod( 'footer_top_cta_title', __( 'Get Latest Updated Subscribe to Our
    Newsletter', 'atroly' ) );
    $footer_top_cta = get_theme_mod( 'footer_top_cta', __( 'do shortcode', 'atroly' ) );

    $footer_social_switch = get_theme_mod( 'footer_social_switch', false );

    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets + 1; $num++ ) {
        if ( is_active_sidebar( 'footer-2-' . $num ) ) {
            $footer_columns++;
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
        $footer_class[1] = 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7';
        $footer_class[2] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5';
        $footer_class[3] = 'col-xxl-3 col-xl-2 col-lg-2 col-md-3 col-sm-5';
        $footer_class[4] = 'col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-7';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

?>














<!-- Footer Start Here -->
<footer class="footer-area bg--base-four overflow--hidden footer-four" style="<?php echo esc_attr($main_bg); ?>">
    
<?php if ( is_active_sidebar('footer-3-1') OR is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') ): ?>
    <div class="footer-top">
        <div class="container">
            <div class="footer-logo--wrap">
                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6">

                        <div class="chunk-footer-widget">
                            <h3 class="footer-widget__title wow animate__animated animate__fadeInUp splite-text"
                                data-wow-delay="0.1s" data-splitting>
                                We Maximise Our Efficiency And Quality With Hightech Systems. Let's Talk!
                            </h3>

                        </div>

                    </div>


                    <div class="col-lg-6 wow animate__animated animate__fadeInUp">

                        <div class="chunk-footer-widget">
                            <div class="footer-widget__content text-center text-md-end">
                                <a class="btn btn-outline--base-four fs--18 btn--lg bg--white"
                                    href="contact.html">Contact
                                    Us</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="footer--main--content">
                <div class="row gy-4 justify-content-between">

                
                <?php
                        if ( $footer_columns < 5 ) {
                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-3-1' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-3-2' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-3-3' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-3-4' );
                        print '</div>';
                        } else {
                            for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                if ( !is_active_sidebar( 'footer-3-' . $num ) ) {
                                    continue;
                                }
                                print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                dynamic_sidebar( 'footer-3-' . $num );
                                print '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End-->

<?php endif; ?>


    <!-- bottom Footer -->

    <div class="bottom-footer pt-3 pb-2">
        <div class="container">
            <div class="row justify-content-between align-items-center gy-4">
                <div class="col bottom-footer-text">
                <?php print atroly_copyright_text(); ?>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- ==================== Footer End Here ==================== -->