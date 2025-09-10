<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package atroly
 */
$atroly_404_image = get_theme_mod('atroly_404_image', get_template_directory_uri() . '/assets/images/common/404-portal.svg');

$atroly_error_404 = get_theme_mod('atroly_error_404', __("404 ", 'atroly'));
$atroly_error_title = get_theme_mod('atroly_error_title', __("Sorry We Can't Find That Page! ", 'atroly'));
$atroly_error_text = get_theme_mod('atroly_error_text', __("Oops! The page you are looking for does not exist. It might have been moved or deleted. ", 'atroly'));
$atroly_error_link_text = get_theme_mod('atroly_error_link_text', __('Back To Home', 'atroly'));


get_header();
?>





<section class="py-100 error-page">
    <div class="container">
        <div class="row gy-5 justify-content-center align-items-center">
            <div class="col-lg-8">
            <?php  if ( !empty( $atroly_404_image ) ): ?>
                <div class="mb-5 error-image wow animate__animated animate__fadeInUp">
                    <img src="<?php echo esc_url($atroly_404_image);?>" alt="not found image">
                </div>
                <?php endif; ?>

                <div class="text-center">
                    <h1 class="fs--40 fw--400 mb-30 wow animate__animated animate__fadeInUp splite-text" data-splitting
                        data-wow-delay="0.2s"><?php print esc_html($atroly_error_404);?></h1>
                    <p class="fs--18 fw--400 mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                        <?php print esc_html($atroly_error_text);?>
                    </p>
                    <a href="<?php print esc_url(home_url('/'));?>" class="btn btn--base btn--lg wow animate__animated animate__fadeInUp">
                    <?php print esc_html($atroly_error_link_text);?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
