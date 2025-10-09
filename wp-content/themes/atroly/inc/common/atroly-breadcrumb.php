<?php
/**
 * Breadcrumbs for atroly theme.
 *
 * @package     atroly
 * @author      creative-hunk
 * @copyright   Copyright (c) 2022, creative-hunk
 * @link        https://www.creativehunk.com
 * @since       atroly 1.0.0
 */



function atroly_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','atroly'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','atroly'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'atroly' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'atroly' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'atroly' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'atroly' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists('tpmeta_field')? tpmeta_field('atroly_check_bredcrumb') : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb== 'on') && $breadcrumb_show == 1;

    $con_main = is_404() ? is_404() : $con1;
    
      if (  $con_main ) {
        $bg_img_from_page = function_exists('tpmeta_image_field')? tpmeta_image_field('atroly_breadcrumb_bg') : '';

        $hide_bg_img = function_exists('tpmeta_field')? tpmeta_field('atroly_check_bredcrumb_img') : 'on';
        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_image' );
        $breadcrumb_padding = get_theme_mod( 'breadcrumb_padding', [
            'padding-top' => '165px',
            'padding-bottom' => '160px',
        ]);
        $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', '#16243E' );
        $breadcrumb_bg_opacity = get_theme_mod( 'breadcrumb_bg_opacity', 0.8 );
        if ( $hide_bg_img == 'off' ) {
            $bg_main_img = '';
        }else{  
            $bg_main_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }
        
        ?>


<section class="breadcrumb m-0" data-bg="<?php echo esc_url($bg_main_img);?>">
    <div class="breadcrumb-bg-overlay" style="background:<?php echo esc_attr($breadcrumb_bg_color);?>; opacity:<?php echo esc_attr($breadcrumb_bg_opacity);?>;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__wrapper">
                    <h3 class="breadcrumb__title wow animate__animated animate__fadeInUp splite-text" data-splitting
                        data-wow-delay="0.3s"><?php echo atroly_kses( $title ); ?></h3>
                        
                    <?php if(function_exists('bcn_display')) : ?>
                    <div class="breadcrumb__menu wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                        <?php bcn_display(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
      }
}

add_action( 'atroly_before_main_content', 'atroly_breadcrumb_func' );
