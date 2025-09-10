 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atroly
 */
$categories = get_the_terms( $post->ID, 'category' );
$atroly_blog_cat = get_theme_mod( 'atroly_blog_cat', false );
$atroly_singleblog_social = get_theme_mod( 'atroly_singleblog_social', false );
  
$social_shear_col= $atroly_singleblog_social ? "col-xl-6 col-lg-6 col-md-6" : "col-xl-12 col-md-12 col-lg-12";

if ( is_single() ) : ?>

 <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item chunk-blog__content mb-80 format-image' );?>>
     <?php if ( has_post_thumbnail() ): ?>
     <div class="chunk-blog__thumb">
         <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>

     </div>
     <?php endif; ?>
     <!-- blog meta -->
     <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

     <h3 class="chunk-blog__details-title wow animate__animated animate__fadeInUp splite-text"><?php the_title();?></h3>
     <div class="chunk-blog__text">
        <?php the_content();?>
     </div>
     <?php
            wp_link_pages( [
                'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'atroly' ),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ] );
        ?>
    <?php if(has_tag()) : ?>
     <div class="atroly-postbox-share-wrapper">
         <div class="row">
             <div class="<?php echo esc_attr($social_shear_col); ?>">
                 <?php echo atroly_get_tag(); ?>
             </div>
             <?php atroly_blog_social_share() ?>
         </div>
     </div>
     <?php endif; ?>
 </article>

 <?php else: ?>

 <article id="post-<?php the_ID();?>" <?php post_class('chunk-blog__card wow animate__animated animate__fadeInUp mb-50 format-standard');?>>
     <?php if ( has_post_thumbnail() ): ?>
     <div class="chunk-blog__thumb">
         <a href="<?php the_permalink();?>">
             <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
         </a>
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

 <?php endif;?>