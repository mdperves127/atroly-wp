 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atroly
 */

$gallery_images = function_exists('tpmeta_gallery_field')? tpmeta_gallery_field('atroly_post_gallery') : '';
$atroly_singleblog_social = get_theme_mod( 'atroly_singleblog_social', false );
  
$social_shear_col= $atroly_singleblog_social ? "col-lg-7 col-md-7" : "col-xl-12 col-md-12 col-lg-12";
if ( is_single() ): ?>

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item atroly-postbox-item-wrapper mb-80 format-image' );?>>
<?php if ( !empty( $gallery_images ) ): ?>
    <div class="atroly-postbox-thumb p-relative mb-25">
        <div class="atroly-blog-post-active swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ( $gallery_images as $key => $image ): ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="atroly-postbox-nav text-end">
            <button type="button" class="atroly-blog-prev-1"><i class="fa-regular fa-arrow-left"></i>
            </button>
            <button type="button" class="atroly-blog-next-1"><i class="fa-regular fa-arrow-right"></i>
            </button>
        </div>
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
     <div class="atroly-postbox-share-wrapper">
         <div class="row">
             <div class=" <?php echo esc_attr($social_shear_col); ?>">
                 <?php echo atroly_get_tag(); ?>
             </div>
             <?php atroly_blog_social_share() ?>
         </div>
     </div>
 </article>


<?php else: 
    $categories = get_the_terms( $post->ID, 'category' );    
    $atroly_blog_cat = get_theme_mod( 'atroly_blog_cat', false );
?>

<article id="post-<?php the_ID();?>" <?php post_class('chunk-blog__card wow animate__animated animate__fadeInUp mb-50 format-standard');?>>
     
    <?php if ( !empty( $gallery_images ) ): ?>
    <div class="chunk-blog__thumb">
        <div class="active chunk-blog__thumbslider">
            <?php foreach ( $gallery_images as $key => $image ): ?>
                <div class="chunk-blog__sliderthumb">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endif; ?>
     <div class="chunk-blog__content">

         <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
         <h3 class="chunk-blog__title">
             <a href="<?php the_permalink();?>"><?php the_title();?></a>
         </h3>
         <div class="chunk-blog__text">
             <?php the_excerpt();?>
         </div>
         <!-- blog btn -->
     </div>
 </article>


<?php
endif;?>