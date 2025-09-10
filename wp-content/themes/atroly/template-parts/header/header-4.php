<?php 

	/**
	 * Template part for displaying header layout three
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package atroly
	*/
	// info
   $header_topbar_switch = get_theme_mod( 'header_topbar_switch', false );


   // Button Text
   $header_top_button_switch = get_theme_mod( 'header_top_button_switch', false);
   $header_top_button_text = get_theme_mod( 'header_button_text', __( 'Donate Now', 'atroly' ) );
   $header_top_button_link = get_theme_mod( 'header_button_link', __( '#', 'atroly' ) );

   // header right
   $atroly_header_right = get_theme_mod( 'header_right_switch', false );
   $atroly_menu_col = $atroly_header_right ? 'col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block' : 'col-xxl-9 col-xl-9 col-lg-8 d-none d-lg-block text-end';
   $header_search_switch = get_theme_mod( 'header_search_switch', false );

   //Phone
   $header_top_phone = get_theme_mod( 'header_phone', __( '+880190678956', 'atroly' ) );
   $header_top_time = get_theme_mod( 'header_top_time', __( 'Sunday - Friday: 9 am - 8 pm', 'atroly' ) );
   $header_top_menu = get_theme_mod( 'header_top_menu', __( 'top menu', 'atroly' ) );
   
   // Email id 
   $header_top_email = get_theme_mod( 'header_email', __( 'atroly@support.com', 'atroly' ) );
   $atroly_sticky_logo = get_theme_mod( 'header_sticky_logo', get_template_directory_uri() . '/assets/images/logo/logo-white.png' );
   // Header Address Text
   $header_top_address_text = get_theme_mod( 'header_address', __( '734 H, Bryan Burlington, NC 27215', 'atroly' ) );

   // Header Address Link
   $header_address_link = get_theme_mod( 'header_address_link', __( '#', 'atroly' ) );

   $header_language_switch = get_theme_mod( 'header_language_switch', false );

   // Header charity Text
   $header_top_charity_text = get_theme_mod( 'header_top_charity_text', __( 'Connect with our charity', 'atroly' ) );
      // header auth btn 
      $header_auth_switch = get_theme_mod( 'header_auth_switch', false );
      $header_auth_link = get_theme_mod( 'header_auth_link',"#" );

?>


<!-- Header Start -->

<div class="header-main-area">
    <!-- Top header banner -->
    <div class="chunk-header__banner header--five">
        <div class="container chunk-banner__wrapper">
            <div class="chunk-banner__contact">
                <ul>
                    <?php  if ( !empty( $header_top_phone ) ): ?>
                    <li>
                        <a href="tel:<?php echo esc_attr( $header_top_phone ); ?>">
                            <i class="fa-solid fa-phone"></i>
                            <span class="text"><?php echo esc_html( $header_top_phone ); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php  if ( !empty( $header_top_email ) ): ?>
                    <li>
                        <a href="mailto:<?php echo esc_html( $header_top_email ); ?>">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="text"><?php echo esc_html( $header_top_email ); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="chunk-banner__social">
                <ul>
                    <?php atroly_header_social_profiles(); ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- / Top header banner -->

    <!-- Fixed header -->
    <div class="header header--five" id="header">
        <div class="container">
            <div class="header-wrapper">
                <!-- ham menu -->
                <i class="fa-sharp fa-solid fa-bars-staggered ham__menu" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas-start" aria-controls="offcanvas-start"></i>

                <!-- logo -->
                <div class="header-menu-wrapper align-items-center d-flex">
                    <div class="logo-wrapper">
                        <?php atroly_header_logo(); ?>
                    </div>
                <?php endif; ?>
                </div>
                <!-- / logo -->

                <!-- single nav menu -->
                <div class="d-flex align-items-center">

                    <div class="chunk-menu-wrapper offcanvas offcanvas-start" id="offcanvas-start" tabindex="-1">

                        <div class="offcanvas-header">
                            <div class="logo">
                                <div class="align-items-center d-flex">
                                    <div class="logo-wrapper">
                                        <?php atroly_header_logo(); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <nav>
                            <?php atroly_header_menu(); ?>
                        </nav>
                    </div>

                    <!-- / single nav menu -->
                    <?php  if ( !empty( $header_search_switch ) ): ?>
                    <!-- search and cta button -->
                    <div class="menu--wrap d-flex align-items-center gap--72">
                        <ul class="login-lng d-flex align-items-center gap-4">
                            <li class="search">
                                <button class="text--black" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-center" aria-controls="offcanvas-center">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.319 14.4331C19.566 12.8255 20.1537 10.8031 19.9625 8.77757C19.7714 6.752 18.8157 4.87533 17.29 3.52936C15.7643 2.18339 13.7831 1.46922 11.7495 1.53215C9.71587 1.59508 7.78263 2.43037 6.34304 3.8681C4.9022 5.30683 4.06417 7.24082 3.99974 9.27597C3.93531 11.3111 4.64932 13.2942 5.99627 14.8212C7.34322 16.3482 9.22174 17.3041 11.249 17.4942C13.2763 17.6842 15.2997 17.0941 16.907 15.8441L16.95 15.8891L21.192 20.1321C21.285 20.225 21.3953 20.2987 21.5166 20.349C21.638 20.3993 21.7681 20.4252 21.8995 20.4252C22.0309 20.4252 22.161 20.3993 22.2824 20.349C22.4038 20.2987 22.5141 20.225 22.607 20.1321C22.7 20.0392 22.7736 19.9289 22.8239 19.8075C22.8742 19.6861 22.9001 19.556 22.9001 19.4246C22.9001 19.2932 22.8742 19.1631 22.8239 19.0417C22.7736 18.9203 22.7 18.81 22.607 18.7171L18.364 14.4751L18.319 14.4331ZM16.243 5.2831C16.8076 5.83858 17.2567 6.50035 17.5642 7.23024C17.8718 7.96013 18.0318 8.74369 18.035 9.53572C18.0383 10.3278 17.8846 11.1126 17.583 11.845C17.2814 12.5773 16.8378 13.2427 16.2777 13.8028C15.7177 14.3629 15.0523 14.8065 14.3199 15.1081C13.5875 15.4097 12.8027 15.5633 12.0107 15.5601C11.2186 15.5569 10.4351 15.3969 9.70518 15.0893C8.97529 14.7817 8.31352 14.3327 7.75804 13.7681C6.64796 12.6398 6.0287 11.1185 6.03514 9.53572C6.04159 7.9529 6.67322 6.43675 7.79245 5.31751C8.91168 4.19828 10.4278 3.56665 12.0107 3.5602C13.5935 3.55376 15.1147 4.17302 16.243 5.2831Z"
                                            fill="#1C1D20" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- / search and cta button -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- / Fixed header -->
</div>
<!-- Header section End -->

<?php  if ( !empty( $header_search_switch ) ): ?>
<!-- search offcanvas -->
<div class="offcanvas chunk-search-offcanvas offcanvas-centered text-bg-light" tabindex="-1" id="offcanvas-center">

    <div class="offcanvas-body position-relative">

        <!-- search form -->
        <div class="container-fluid offcanvas--search-form">
            <div class="row">
                <div class="col">
                    <form id="chunk-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"  method="get">
                        
                    <input class="form--control w--100 radius--0" name="s" value="<?php print esc_attr( get_search_query() )?>" type="text"
                        placeholder="<?php print esc_attr__( 'What are you searching for?', 'atroly' );?>" id="search">

                        <button class="btn btn--base search--btn text--white radius--0" type="submit">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /search form -->
    </div>
</div>
<!-- / search offcanvas -->

<?php endif; ?>