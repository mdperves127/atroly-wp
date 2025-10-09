<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package atroly
 */

function get_header_style($style){
    if ( $style == 'header_2'  ) {
        get_template_part( 'template-parts/header/header-2' );
    }
    elseif ( $style == 'header_3'  ) {
        get_template_part( 'template-parts/header/header-3' );
    }
    elseif ( $style == 'header_4'  ) {
        get_template_part( 'template-parts/header/header-4' );
    }
    else{
        get_template_part( 'template-parts/header/header-1');
    }
}

function atroly_check_header() {
    $atroly_header_tabs = function_exists('tpmeta_field')? tpmeta_field('atroly_header_tabs') : false;
    $atroly_header_style_meta = function_exists('tpmeta_field')? tpmeta_field('atroly_header_style') : '';
    $elementor_header_template_meta = function_exists('tpmeta_field')? tpmeta_field('atroly_header_templates') : false;

    $atroly_header_option_switch = get_theme_mod('atroly_header_elementor_switch', false);
    $header_default_style_kirki = get_theme_mod( 'header_layout_custom', 'header_1' );
    $elementor_header_templates_kirki = get_theme_mod( 'atroly_header_templates' );
    
    if($atroly_header_tabs == 'default'){
        if($atroly_header_option_switch){
            if($elementor_header_templates_kirki){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            }
        }else{ 
            if($header_default_style_kirki){
                get_header_style($header_default_style_kirki);
            }else{
                get_template_part( 'template-parts/header/header-1' );
            }
        }
    }elseif($atroly_header_tabs == 'custom'){
        if ($atroly_header_style_meta) {
            get_header_style($atroly_header_style_meta);
        }else{
            get_header_style($header_default_style_kirki);
        }  
    }elseif($atroly_header_tabs == 'elementor'){
        if($elementor_header_template_meta){
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_template_meta);
        }else{
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
        }
    }else{
        if($atroly_header_option_switch){

            if($elementor_header_templates_kirki){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_header_templates_kirki);
            }else{
                get_template_part( 'template-parts/header/header-1' );
            }
        }else{
            get_header_style($header_default_style_kirki);

        }
        
    }

}
add_action( 'atroly_header_style', 'atroly_check_header', 10 );



/**
 * [atroly_header_lang description]
 * @return [type] [description]
 */

function atroly_header_lang_defualt() {
    $atroly_header_lang = get_theme_mod( 'atroly_header_lang', true );
    if ( $atroly_header_lang ): ?>

<span class="atroly-header-lang-selected-lang atroly-lang-toggle"
    id="atroly-header-lang-toggle"><?php print esc_html__( 'English', 'atroly' );?></span>

<?php do_action( 'atroly_language' );?>

<?php endif;?>
<?php
}

/**
 * [atroly_language_list description]
 * @return [type] [description]
 */
function _atroly_language( $mar ) {
    return $mar;
}
function atroly_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul class="atroly-header-lang-list atroly-lang-list">';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul class="atroly-header-lang-list atroly-lang-list atroly-header-lan-list-area">';
        $mar .= '<li><a href="#">' . esc_html__( 'English', 'atroly' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Bangla', 'atroly' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'French', 'atroly' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Hindi', 'atroly' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _atroly_language( $mar );
}
add_action( 'atroly_language', 'atroly_language_list' );


// header logo
function atroly_header_logo() { ?>
    <?php 
        $atroly_logo_on = function_exists('tpmeta_field')? tpmeta_field('atroly_en_secondary_logo') : '';
        $atroly_logo = get_template_directory_uri() . '/assets/images/logo/logo.png';
        $atroly_logo_white = get_template_directory_uri() . '/assets/images/logo/logo-white.png';

        $atroly_site_logo = get_theme_mod( 'header_logo', $atroly_logo );
        $atroly_secondary_logo = get_theme_mod( 'header_secondary_logo', $atroly_logo_white );
      ?>

    <?php if ( $atroly_logo_on == 'on' ) : ?>
    <a class="main-logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $atroly_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'atroly' );?>" />
    </a>
    <?php else : ?>
    <a class="standard-logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $atroly_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'atroly' );?>" />
    </a>
    <?php endif; ?>
<?php
}


// header logo
function atroly_header_black_logo() { ?>
    <?php 
        $atroly_logo = get_template_directory_uri() . '/assets/images/logo/logo-black.png';

        $atroly_black_logo = get_theme_mod( 'header_logo', $atroly_logo );
    ?>

    <a href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $atroly_black_logo );?>" alt="<?php print esc_attr__( 'logo', 'atroly' );?>" />
    </a>
<?php
}

/**
 * [atroly_header_social_profiles description]
 * @return [type] [description]
 */
function atroly_header_social_profiles() {
    $atroly_topbar_fb_url = get_theme_mod( 'header_facebook_link', __( '#', 'atroly' ) );
    $atroly_topbar_twitter_url = get_theme_mod( 'header_twitter_link', __( '#', 'atroly' ) );
    $atroly_topbar_instagram_url = get_theme_mod( 'header_instagram_link', __( '#', 'atroly' ) );
    $atroly_topbar_linkedin_url = get_theme_mod( 'header_linkedin_link', __( '#', 'atroly' ) );
    $atroly_topbar_youtube_url = get_theme_mod( 'header_youtube_link', __( '#', 'atroly' ) );
    ?>
<?php if ( !empty( $atroly_topbar_fb_url ) ): ?>
    <li>
        <a class="icon facebook" href="<?php print esc_url( $atroly_topbar_fb_url );?>"><i class="fa-brands fa-facebook-f"></i></a>
    </li>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_twitter_url ) ): ?>
    <li>
        <a class="icon twitter" href="<?php print esc_url( $atroly_topbar_twitter_url );?>"><i class="fa-brands fa-twitter"></i></a>
    </li>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_instagram_url ) ): ?>
    <li>
        <a class="icon youtube" href="<?php print esc_url( $atroly_topbar_instagram_url );?>"><i class="fa-brands fa-instagram"></i></a>
    </li>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_linkedin_url ) ): ?>
    <li>
        <a class="icon linkedin" href="<?php print esc_url( $atroly_topbar_linkedin_url );?>"><i class="fab fa-linkedin"></i></a>
    </li>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_youtube_url ) ): ?>
    <li>
        <a class="icon youtube" href="<?php print esc_url( $atroly_topbar_youtube_url );?>"><i class="fab fa-youtube"></i></a>
    </li>
<?php endif;?>

<?php
}

/**
 * [atroly_header_side_info_social_profiles description]
 * @return [type] [description]
 */
function atroly_header_side_info_social_profiles() {
    $atroly_topbar_fb_url = get_theme_mod( 'header_facebook_link', __( '#', 'atroly' ) );
    $atroly_topbar_twitter_url = get_theme_mod( 'header_twitter_link', __( '#', 'atroly' ) );
    $atroly_topbar_instagram_url = get_theme_mod( 'header_instagram_link', __( '#', 'atroly' ) );
    $atroly_topbar_linkedin_url = get_theme_mod( 'header_linkedin_link', __( '#', 'atroly' ) );
    $atroly_topbar_youtube_url = get_theme_mod( 'header_youtube_link', __( '#', 'atroly' ) );
    ?>

<?php if ( !empty( $atroly_topbar_fb_url ) ): ?>
<a class="icon facebook" href="<?php print esc_url( $atroly_topbar_fb_url );?>"><i class="fab fa-facebook-f"></i></a>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_twitter_url ) ): ?>
<a class="icon twitter" href="<?php print esc_url( $atroly_topbar_twitter_url );?>"><i class="fab fa-twitter"></i></a>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_instagram_url ) ): ?>
<a class="icon linkedin" href="<?php echo esc_url( $atroly_topbar_instagram_url ) ?>"><i
        class="fa-brands fa-instagram"></i></a>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_linkedin_url ) ): ?>
<a class="icon linkedin" href="<?php echo esc_url( $atroly_topbar_linkedin_url ) ?>"><i
        class="fab fa-linkedin"></i></a>
<?php endif;?>

<?php if ( !empty( $atroly_topbar_youtube_url ) ): ?>
<a class="icon youtube" href="<?php print esc_url( $atroly_topbar_youtube_url );?>"><i class="fab fa-youtube"></i></a>
<?php endif;?>

<?php
}

// atroly_footer_social_profiles 
function atroly_footer_social_profiles() {
    $atroly_footer_fb_url = get_theme_mod( 'atroly_footer_fb_url', __( '#', 'atroly' ) );
    $atroly_footer_twitter_url = get_theme_mod( 'atroly_footer_twitter_url', __( '#', 'atroly' ) );
    $atroly_footer_instagram_url = get_theme_mod( 'atroly_footer_instagram_url', __( '#', 'atroly' ) );
    $atroly_footer_linkedin_url = get_theme_mod( 'atroly_footer_linkedin_url', __( '#', 'atroly' ) );
    $atroly_footer_youtube_url = get_theme_mod( 'atroly_footer_youtube_url', __( '#', 'atroly' ) );
    ?>


<?php if ( !empty( $atroly_footer_fb_url ) ): ?>
<a href="<?php print esc_url( $atroly_footer_fb_url );?>">
    <?php echo esc_html__('Fb.','atroly'); ?>
</a>
<?php endif;?>

<?php if ( !empty( $atroly_footer_twitter_url ) ): ?>
<a href="<?php print esc_url( $atroly_footer_twitter_url );?>">
    <?php echo esc_html__('Tw.','atroly'); ?>
</a>
<?php endif;?>

<?php if ( !empty( $atroly_footer_instagram_url ) ): ?>
<a href="<?php print esc_url( $atroly_footer_instagram_url );?>">
    <?php echo esc_html__('In.','atroly'); ?>
</a>
<?php endif;?>

<?php if ( !empty( $atroly_footer_linkedin_url ) ): ?>
<a href="<?php print esc_url( $atroly_footer_linkedin_url );?>">
    <?php echo esc_html__('Ln.','atroly'); ?>
</a>
<?php endif;?>

<?php if ( !empty( $atroly_footer_youtube_url ) ): ?>
<a href="<?php print esc_url( $atroly_footer_youtube_url );?>">
    <?php echo esc_html__('Yt.','atroly'); ?>
</a>
<?php endif;?>

<?php
    }

/**
 * [atroly_header_menu description]
 * @return [type] [description]
 */
function atroly_header_menu() {
    ?>
<?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'atroly_Navwalker_Class::fallback',
            'walker'         => new \atroly\Widgets\atroly_Navwalker_Class,
        ] );
    ?>
<?php
}


/**
 * [atroly_footer_menu description]
 * @return [type] [description]
 */
function atroly_onepage_menu_01() {
    wp_nav_menu( [
        'theme_location' => 'onepage-menu-menu-01',
        'menu_class'     => 'atroly-onepage-menu',
        'container'      => '',
        'fallback_cb'    => 'atroly_Navwalker_Class::fallback',
        'walker'         =>  new \atroly\Widgets\atroly_Navwalker_Class,
    ] );
}


 /*
 * atroly footer
 */
add_action( 'atroly_footer_style', 'atroly_check_footer', 10 );


function get_footer_style($style){
    if( $style == 'footer_2'  ) {
        get_template_part( 'template-parts/footer/footer-2' );
    }elseif ( $style == 'footer_3'  ) {
        get_template_part( 'template-parts/footer/footer-3' );
    }elseif ( $style == 'footer_4' ) {
        get_template_part( 'template-parts/footer/footer-4' );
    }else{
        get_template_part( 'template-parts/footer/footer-1');
    }
}

function atroly_check_footer() {
    $atroly_footer_tabs = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_tabs') : '';
    $atroly_footer_style = function_exists( 'tpmeta_field' ) ? tpmeta_field( 'atroly_footer_style' ) : NULL;
    $footer_template = function_exists('tpmeta_field')? tpmeta_field('atroly_footer_template') : false;

    $atroly_footer_option_switch = get_theme_mod( 'atroly_footer_elementor_switch', false );
    $elementor_footer_template = get_theme_mod( 'atroly_footer_templates');
    $atroly_default_footer_style = get_theme_mod( 'footer_layout', 'footer_1' );

    if($atroly_footer_tabs == 'default'){
        if($atroly_footer_option_switch){
            if($elementor_footer_template){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            }
        }else{ 
            if($atroly_default_footer_style){
                get_footer_style($atroly_default_footer_style);
            }else{
                get_template_part( 'template-parts/footer/footer-1' );
            }
        }
    }elseif($atroly_footer_tabs == 'custom'){
        if ($atroly_footer_style) {
            get_footer_style($atroly_footer_style);
        }else{
            get_footer_style($atroly_default_footer_style);
        }  
    }elseif($atroly_footer_tabs == 'elementor'){
        if($footer_template){
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($footer_template);
        }else{
            echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
        }

    }else{
        if($atroly_footer_option_switch){

            if($elementor_footer_template){
                echo \Elementor\Plugin::$instance->frontend->get_builder_content($elementor_footer_template);
            }else{
                get_template_part( 'template-parts/footer/footer-1' );
            }
        }else{
            get_footer_style($atroly_default_footer_style);

        }
    }
}

// atroly_copyright_text
function atroly_copyright_text() {
   print get_theme_mod( 'footer_copyright', esc_html__( '© 2025 atroly, All Rights Reserved. Design By Creative Hunk', 'atroly' ) );
}



/**
 *
 * pagination
 */

if ( !function_exists( 'atroly_post_pagination' ) ) {
    function atroly_post_pagination() {
        $pages = paginate_links( array( 
            'type' => 'array',
            'prev_text' => '<i class="fas fa-regular fa-arrow-left"></i>',
            'next_text' => '<i class="fas fa-regular fa-arrow-right"></i>',
        ) );
            if( $pages ) {
            echo '<div class="chunk-pagination wow animate__animated animate__fadeInUp"><div class="chunk-pagination__wrap"> <nav ><ul>';
            foreach ( $pages as $page ) {
                echo "<li>$page</li>";
            }
            echo '</ul></nav> </div> </div>';
        }
    }
}



// theme color
function atroly_custom_color() {
    $atroly_color_1 = get_theme_mod( 'atroly_color_1', '#00A3C3' );
    $atroly_color_2 = get_theme_mod( 'atroly_color_2', '#1C1E21' );
    $atroly_gra_color_1 = get_theme_mod( 'atroly_gra_color_1', '#004D6E' );
    $atroly_gra_color_2 = get_theme_mod( 'atroly_gra_color_2', '#00ACCC' );
    $atroly_body = get_theme_mod( 'atroly_body', '#333F4D' );

    wp_enqueue_style( 'atroly-custom', ATROLY_THEME_CSS_DIR . 'atroly-custom.css', [] );
    
    if ( !empty($atroly_color_1 || $atroly_color_2 || $atroly_color_3 || $atroly_color_4)) {
        $custom_css = '';
        $custom_css .= "html:root{
            --atroly-theme-primary: " . $atroly_color_1 . ";
            --atroly-theme-secondary: " . $atroly_color_2 . ";
            --atroly-gradient-primary: linear-gradient(90deg, {$atroly_gra_color_1} 0%,  {$atroly_gra_color_2} 100%);
            --atroly-text-1: " . $atroly_body . ";
        }";

        wp_add_inline_style( 'atroly-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'atroly_custom_color' );

// atroly_kses_intermediate
function atroly_kses_intermediate( $string = '' ) {
    return wp_kses( $string, atroly_get_allowed_html_tags( 'intermediate' ) );
}

function atroly_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function atroly_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}
// blog single social share
function atroly_blog_social_share(){

    $atroly_singleblog_social = get_theme_mod( 'atroly_singleblog_social', false );
    $post_url = get_the_permalink();
    $end_class = has_tag() ? 'text-lg-end' : 'text-lg-start';

    if(!empty($atroly_singleblog_social)) : ?>
        <ul>
            <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url);?>" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a  href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url);?>"
                target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>
            <li>
                <a  href="https://twitter.com/share?url=<?php echo esc_url($post_url);?>" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url);?>" target="_blank">
                    <i class="fa-brands fa-pinterest-p"></i>
                </a>
            </li>
        </ul>
    <?php endif ; 

}

// product single social share
function atroly_product_social_share(){
    $post_url = get_the_permalink();
    ?>
<div class="atroly-shop-details__social">
    <span><?php echo esc_html__('Share:', 'atroly');?></span>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-linkedin-in"></i></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-facebook"></i></a>
    <a href="https://twitter.com/share?url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-twitter"></i></a>
    <a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url);?>" target="_blank"><i
            class="fa-brands fa-pinterest-p"></i></a>
</div>
<?php
}

// / This code filters the Archive widget to include the post count inside the link /
add_filter( 'get_archives_link', 'atroly_archive_count_span' );
function atroly_archive_count_span( $links ) {
    $links = str_replace('</a>&nbsp;(', '<span > (', $links);
    $links = str_replace(')', ')</span></a> ', $links);
    return $links;
}


// / This code filters the Category widget to include the post count inside the link /
add_filter('wp_list_categories', 'atroly_cat_count_span');
function atroly_cat_count_span($links) {
  $links = str_replace('</a> (', '<span> (', $links);
  $links = str_replace(')', ')</span></a>', $links);
  return $links;
}