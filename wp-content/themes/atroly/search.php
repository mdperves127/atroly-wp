<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package atroly
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

<div class="atroly-post-area postbox__area pt-120 pb-90">
	<div class="container custom-container-3">
		<div class="row">
			<div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items">
				<div class="postbox__wrapper atroly-blog__wrapper mb-50">
					<?php
						if ( have_posts() ):
					?>
					<div class="result-bar page-header d-none">
						<h1 class="page-title"><?php esc_html_e( 'Search Results For:', 'atroly' );?>
							<?php print get_search_query();?></h1>
					</div>
					<?php
						while ( have_posts() ): the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
					?>
					<div class="atroly-pagination">
						<?php atroly_post_pagination();?>
					</div>
					<?php
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div>
			</div>
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
			<div class="col-lg-4">
				<div class="blog-sidebar__wrapper pl-30">
					<?php get_sidebar();?>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>

<?php
get_footer();