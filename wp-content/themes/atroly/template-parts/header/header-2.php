<?php 

	/**
	 * Template part for displaying header layout two
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package atroly
	*/

	 // info
    $atroly_topbar_switch = get_theme_mod( 'header_topbar_switch', false );


     // Phone Number
   $header_top_phone = get_theme_mod( 'header_phone', __( '+8801310-069824', 'atroly' ) );

    // contact button
	$atroly_button_text = get_theme_mod( 'atroly_button_text', __( 'Make Request', 'atroly' ) );
   $atroly_button_link = get_theme_mod( 'atroly_button_link', __( '#', 'atroly' ) );

    // acc button
	$atroly_acc_button_text = get_theme_mod( 'atroly_acc_button_text', __( 'Login', 'atroly' ) );
   $atroly_acc_button_link = get_theme_mod( 'atroly_acc_button_link', __( '#', 'atroly' ) );

    $atroly_sticky_logo = get_theme_mod( 'header_sticky_logo', get_template_directory_uri() . '/assets/images/logo/logo-white.png' );
  // Header Address Text
  $header_top_address_text = get_theme_mod( 'header_address', __( '734 H, Bryan Burlington, NC 27215', 'atroly' ) );
  $header_address_link = get_theme_mod( 'header_address_link', __( '#', 'atroly' ) );
    
   // Button Text
   $header_top_button_switch = get_theme_mod( 'header_top_button_switch', false);
   $header_top_button_text = get_theme_mod( 'header_button_text', __( 'Book An Appointment', 'atroly' ) );

   // Button Text
   $header_top_button_link = get_theme_mod( 'header_button_link', __( '#', 'atroly' ) );
       // header right
   $atroly_header_right = get_theme_mod( 'header_right_switch', false );
   $atroly_menu_col = $atroly_header_right ? 'col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xl-10 col-lg-8 d-none d-lg-block';
   $atroly_menu_end = $atroly_header_right ? '' : 'justify-content-end';
   // header search btn 
   $header_search_switch = get_theme_mod( 'header_search_switch', false );

   // header auth btn 
   $header_auth_switch = get_theme_mod( 'header_auth_switch', false );
   $header_auth_link = get_theme_mod( 'header_auth_link',"#" );
?>





<!-- Header Start -->

<div class="header-main-area">
    <div class="header header--two position-relative" id="header">
        <div class="container position-relative">
            <div class="header-wrapper">
                <!-- ham menu -->
                <i class="fa-sharp fa-solid fa-bars-staggered ham__menu" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas-start" aria-controls="offcanvas-start"></i>

                <!-- logo -->
                <div class="header-menu-wrapper align-items-center d-flex">
                    <div class="logo-wrapper">
                        <?php atroly_header_logo(); ?>
                    </div>
                </div>
                <!-- / logo -->

                <!-- single nav menu -->

                <div class="chunk-menu-wrapper offcanvas offcanvas-start" id="offcanvas-start" tabindex="-1">

                    <div class="offcanvas-header">
                        <div class="logo">
                            <div class="align-items-center d-flex">
                                <div class="logo-wrapper">
                                    <?php atroly_header_logo(); ?>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <nav>
                        <?php atroly_header_menu(); ?>
                    </nav>
                </div>

                <!-- / single nav menu -->

                <?php if(!empty($atroly_header_right)) : ?>
                <!-- call and cta button -->
                <div class="menu--wrap d-flex align-items-center gap--72">
                    <ul class="login-lng d-flex align-items-center gap-4">
                    <?php  if ( !empty( $header_top_phone ) ): ?>
                        <li class="call">
                            <a href="tel:<?php echo esc_attr( $header_top_phone ); ?>">
                                <i class="fa-solid fa-phone-volume"></i>
                                <span><?php echo esc_html( $header_top_phone ); ?></span>
                            </a>

                        </li>

                        <?php endif; ?>
                        <?php  if ( !empty( $header_top_button_switch ) and !empty( $header_top_button_text ) ): ?>
                        <li class="loin-btn--wrap">
                            <a class="btn btn--base btn--lg" href="<?php echo esc_url( $header_top_button_link ); ?>"><?php echo esc_html( $header_top_button_text ); ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- / search and cta button -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header section End -->