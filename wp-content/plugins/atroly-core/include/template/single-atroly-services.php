<?php
/**
 * The main template file
 *
 * @package  WordPress
 * @subpackage  atrolycore
 */
get_header();

$blog_column = is_active_sidebar( 'atroly-services-sidebar' ) ? 'col-lg-8' : 'col-lg-12';

?>

<section class="atroly-service-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">

            <?php 
               if( have_posts() ) : 
               while( have_posts() ) : 
               the_post();
            ?>
            <div class="<?php echo esc_attr($blog_column); ?>">
                <div class="atroly-service-details-wrapper">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
               endwhile; 
               wp_reset_query();
               endif;
            ?>

            <?php if ( is_active_sidebar( 'atroly-services-sidebar' ) ): ?>
            <div class="col-lg-4">
                <div class="atroly-service-widget">
                    <?php dynamic_sidebar( 'atroly-services-sidebar' ); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer();  ?>