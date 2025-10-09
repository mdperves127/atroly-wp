<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atroly
 */

$atroly_audio_url = function_exists( 'tpmeta_field' ) ? tpmeta_field( 'atroly_post_audio' ) : NULL;
$categories = get_the_terms( $post->ID, 'category' );
$atroly_blog_cat = get_theme_mod( 'atroly_blog_cat', false );
$atroly_singleblog_social = get_theme_mod( 'atroly_singleblog_social', false );
  
$social_shear_col= $atroly_singleblog_social ? "col-lg-7 col-md-7" : "col-xl-12 col-md-12 col-lg-12";
if ( is_single() ): 
?>

 <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item atroly-postbox-item-wrapper mb-80 format-image' );?>>
     <?php if ( has_post_thumbnail() ): ?>
     <div class="atroly-postbox-item-thumb p-relative mb-25">
     <?php echo wp_oembed_get( $atroly_audio_url ); ?>
     </div>
     <?php endif; ?>
     <!-- blog meta -->
     <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

     <h3 class="atroly-postbox-title2"><?php the_title();?></h3>
     <?php the_content();?>
     <?php
            wp_link_pages( [
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'atroly' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ] );
        ?>
        <?php if(has_tag()) : ?>
         <div class="chunk-blog__footer wow animate__animated animate__fadeInUp">
            <div class="chunk-blog__tags">
                <h3>
                    <?php echo esc_html__('Tags', 'atroly'); ?>
                </h3>
                <div class="chunk-sidebar__tag-wrap">
                <?php echo atroly_get_tag(); ?>
                </div>
            </div>
    
            <div class="chunk-blog__share">
                <h3><?php echo esc_html__('Share', 'atroly'); ?></h3>
                <?php atroly_blog_social_share(); ?>
            </div>
        </div>
         <?php endif; ?>
 </article>

<?php else: ?>


<article id="post-<?php the_ID();?>" <?php post_class( 'atroly-postbox-item mb-50 format-audio' );?>>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="atroly-postbox-thumb p-relative">
        <a href="<?php the_permalink();?>">
            <?php echo wp_oembed_get( $atroly_audio_url ); ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="atroly-postbox-content">

        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
        <h3 class="atroly-postbox-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h3>
        <div class="atroly-postbox-text">
            <?php the_excerpt();?>
        </div>
        <!-- blog btn -->
        <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
    </div>
</article>

<?php
endif;?>