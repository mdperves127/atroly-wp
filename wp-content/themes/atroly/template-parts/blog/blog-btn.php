<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package atroly
 */

$atroly_blog_btn = get_theme_mod( 'atroly_blog_btn', 'Read More' );
$atroly_blog_btn_switch = get_theme_mod( 'atroly_blog_btn_switch', true );

?>
<?php if ( !empty( $atroly_blog_btn_switch ) ): ?>
<div class="atroly-postbox-read-more">
    <a href="<?php the_permalink();?>" class="atroly-postbox-btn"><i class="fa-solid fa-arrow-right"></i> <?php print esc_html( $atroly_blog_btn );?></a>
</div>
<?php endif;?>