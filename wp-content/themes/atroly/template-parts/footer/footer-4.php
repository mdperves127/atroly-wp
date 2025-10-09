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
    // $footer_bg_img = get_theme_mod( 'footer_bg_image' );
    $footer_bg_color = get_theme_mod( 'footer_bg_color', '#1C1E21' );
    // $theme_bg = $footer_bg_img ? "background-image:url({$footer_bg_img});" : "background-color:{$footer_bg_color};";

    // page
    // $atroly_footer_bg_image = function_exists('tpmeta_image_field')? tpmeta_image_field('atroly_footer_bg_image') : '';
    // $atroly_footer_bg_color = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_color') : '';
    // $validate_color = $atroly_footer_bg_color != '' ? $atroly_footer_bg_color : $footer_bg_color;
    // $page_bg = $atroly_footer_bg_image ? "background-image:url({$atroly_footer_bg_image['url']});" : "background-color:{$validate_color};";
    // $main_bg = $page_bg ? $page_bg : $theme_bg;


    
    // page
    $atroly_footer_bg_image = function_exists('tpmeta_image_field')? tpmeta_image_field('atroly_footer_bg_image') : '';
    $atroly_footer_bg_color = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_color') : '';
    $atroly_footer_bg_opacity = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_bg_opacity') : '';

    $footer_combine_color = $atroly_footer_bg_color != '' ? $atroly_footer_bg_color : $footer_bg_color;
    $footer_combine_bg = $atroly_footer_bg_image != '' ? $atroly_footer_bg_image['url'] : $footer_bg_img;
    $footer_combine_opacity = $atroly_footer_bg_opacity != '' ? $atroly_footer_bg_opacity : $footer_bg_opacity;
 
    $footer_cta_switch = get_theme_mod( 'footer_cta_switch', true );

    $footer_social_switch = get_theme_mod( 'footer_social_switch', false );

    // footer_columns
    $footer_columns = 0;
    $footer_top_columns = 0;
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
<footer class="footer-area bg--base-five overflow--hidden footer-five"  style="background: url(<?php echo esc_url($footer_combine_bg); ?>);">
<div class="footer-bg-overlay" style="background: <?php echo esc_attr($footer_combine_color); ?>; opacity: <?php echo esc_attr($footer_combine_opacity); ?>;"></div>
    
<?php if ( is_active_sidebar('footer-4-1') OR is_active_sidebar('footer-4-2') OR is_active_sidebar('footer-4-3') OR is_active_sidebar('footer-4-4') OR is_active_sidebar('footer-top-4-1') OR is_active_sidebar('footer-top-4-2') OR is_active_sidebar('footer-top-4-3') ): ?>
    <div class="footer-top">
        <div class="container">
            <?php if ( is_active_sidebar('footer-top-4-1') OR is_active_sidebar('footer-top-4-2') OR is_active_sidebar('footer-top-4-3') ): ?>
            <div class="footer-logo--wrap">
                <div class="row justify-content-between gy-4">
                     
                <?php
                            if ( $footer_top_columns < 4 ) {
                            if ( isset( $footer_top_class[1] ) ) {
                            print '<div class="col-lg-6 wow animate__animated animate__fadeInUp">';
                            dynamic_sidebar( 'footer-top-4-1' );
                            print '</div>';
                            }
                            if ( isset( $footer_top_class[2] ) ) {
                            print '<div class="col-lg-6 wow animate__animated animate__fadeInUp">';
                            dynamic_sidebar( 'footer-top-4-2' );
                            print '</div>';
                            }
                            if ( isset( $footer_top_class[3] ) ) {
                            print '<div class="col-lg-6 wow animate__animated animate__fadeInUp">';
                            dynamic_sidebar( 'footer-top-4-3' );
                            print '</div>';
                            }
                            } else {
                                for ( $num = 1; $num <= $footer_top_columns; $num++ ) {
                                    if ( !is_active_sidebar( 'footer-top-4-' . $num ) ) {
                                        continue;
                                    }
                                    print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                    dynamic_sidebar( 'footer-top-4-' . $num );
                                    print '</div>';
                                }
                            }
                        ?>

                </div>
            </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('footer-4-1') OR is_active_sidebar('footer-4-2') OR is_active_sidebar('footer-4-3') OR is_active_sidebar('footer-4-4') ): ?>
            <div class="footer--main--content">
                <div class="row gy-4 justify-content-between">
                <?php
                        if ( $footer_columns < 5 ) {
                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-4-1' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-4-2' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-4-3' );
                        print '</div>';

                        print '<div class="col-xl-auto col-sm-6 wow animate__animated animate__fadeInUp">';
                        dynamic_sidebar( 'footer-4-4' );
                        print '</div>';
                        } else {
                            for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                if ( !is_active_sidebar( 'footer-4-' . $num ) ) {
                                    continue;
                                }
                                print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                dynamic_sidebar( 'footer-4-' . $num );
                                print '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Footer Top End-->
    <?php endif; ?>


    <!-- bottom Footer -->

    <div class="bottom-footer pt-3 pb-3">
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