<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atroly
 */
?>

<!doctype html>
<html <?php language_attributes();?>>

<head>
   <meta charset="<?php bloginfo( 'charset' );?>">
   <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
   <?php endif;?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php wp_head();?>
</head>

<body <?php body_class();?>>

   <?php wp_body_open();?>


   <?php
        $atroly_preloader = get_theme_mod( 'header_preloader_switch', false );
        $atroly_backtotop = get_theme_mod( 'header_backtotop_switch', false );

        $atroly_preloader_logo = get_template_directory_uri() . '/assets/images/icon/preloader.gif';

        $atroly_preloader_logo_url = get_theme_mod('preloader_logo', $atroly_preloader_logo);

    ?>


   <?php if ( !empty( $atroly_backtotop ) ): ?>
      
   <div class="scroll-top show">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
               transition: stroke-dashoffset 10ms linear 0s;
               stroke-dasharray: 307.919, 307.919;
               stroke-dashoffset: 197.514;
            "></path>
      </svg>
   </div>
   <?php endif;?>


   <?php if ( !empty( $atroly_preloader ) ): ?>
    <!--==================== Preloader Start ====================-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="<?php echo esc_url($atroly_preloader_logo_url); ?>" alt="loading">
            </div>
        </div>
    </div>
   <?php endif;?>

    <!--==================== Preloader End ====================-->

   <!-- header start -->
   <?php do_action( 'atroly_header_style' );?>
   <!-- header end -->

   <!-- wrapper-box start -->
   <?php do_action( 'atroly_before_main_content' );?>