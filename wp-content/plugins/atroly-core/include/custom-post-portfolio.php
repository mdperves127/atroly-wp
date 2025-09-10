<?php 
class AtrolyPortfoliosPost 
{
	function __construct() {
		add_action( 'init', array( $this, 'register_custom_post_type' ) );
		add_action( 'init', array( $this, 'create_cat' ) );
		add_filter( 'template_include', array( $this, 'portfolios_template_include' ) );
	}
	
	public function portfolios_template_include( $template ) {
		if ( is_singular( 'atroly-portfolios' ) ) {
			return $this->get_template( 'single-atroly-portfolios.php');
		}
		return $template;
	}
	
	public function get_template( $template ) {
		if ( $theme_file = locate_template( array( $template ) ) ) {
			$file = $theme_file;
		} 
		else {
			$file = ATROLYCORE_ADDONS_DIR . '/include/template/'. $template;
		}
		return apply_filters( __FUNCTION__, $file, $template );
	}
	
	
	public function register_custom_post_type() {
		$technix_portfolios_slug = get_theme_mod( 'technix_portfolios_slug', __( 'portfolios', 'atrolycore' ) );
		$labels = array(
			'name'                  => esc_html_x( 'Portfolios', 'Post Type General Name', 'atrolycore' ),
			'singular_name'         => esc_html_x( 'Portfolio', 'Post Type Singular Name', 'atrolycore' ),
			'menu_name'             => esc_html__( 'Portfolios', 'atrolycore' ),
			'name_admin_bar'        => esc_html__( 'Portfolios', 'atrolycore' ),
			'archives'              => esc_html__( 'Item Archives', 'atrolycore' ),
			'parent_item_colon'     => esc_html__( 'Parent Item:', 'atrolycore' ),
			'all_items'             => esc_html__( 'All Items', 'atrolycore' ),
			'add_new_item'          => esc_html__( 'Add New Portfolio', 'atrolycore' ),
			'add_new'               => esc_html__( 'Add New', 'atrolycore' ),
			'new_item'              => esc_html__( 'New Item', 'atrolycore' ),
			'edit_item'             => esc_html__( 'Edit Item', 'atrolycore' ),
			'update_item'           => esc_html__( 'Update Item', 'atrolycore' ),
			'view_item'             => esc_html__( 'View Item', 'atrolycore' ),
			'search_items'          => esc_html__( 'Search Item', 'atrolycore' ),
			'not_found'             => esc_html__( 'Not found', 'atrolycore' ),
			'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'atrolycore' ),
			'featured_image'        => esc_html__( 'Featured Image', 'atrolycore' ),
			'set_featured_image'    => esc_html__( 'Set featured image', 'atrolycore' ),
			'remove_featured_image' => esc_html__( 'Remove featured image', 'atrolycore' ),
			'use_featured_image'    => esc_html__( 'Use as featured image', 'atrolycore' ),
			'inserbt_into_item'     => esc_html__( 'Insert into item', 'atrolycore' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'atrolycore' ),
			'items_list'            => esc_html__( 'Items list', 'atrolycore' ),
			'items_list_navigation' => esc_html__( 'Items list navigation', 'atrolycore' ),
			'filter_items_list'     => esc_html__( 'Filter items list', 'atrolycore' ),
		);

		$args   = array(
			'label'                 => esc_html__( 'Portfolio', 'atrolycore' ),
			'labels'                => $labels,
			'supports'              => ['title', 'editor', 'thumbnail', 'elementor'],
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'   			=> 'dashicons-portfolio',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'rewrite' => array(
				'slug' => $technix_portfolios_slug,
				'with_front' => false
			),
		);

		register_post_type( 'atroly-portfolios', $args );
	}
	
	public function create_cat() {
		$labels = array(
			'name'                       => esc_html_x( 'Portfolio Categories', 'Taxonomy General Name', 'atrolycore' ),
			'singular_name'              => esc_html_x( 'Portfolio Categories', 'Taxonomy Singular Name', 'atrolycore' ),
			'menu_name'                  => esc_html__( 'Portfolio Categories', 'atrolycore' ),
			'all_items'                  => esc_html__( 'All Portfolio Category', 'atrolycore' ),
			'parent_item'                => esc_html__( 'Parent Item', 'atrolycore' ),
			'parent_item_colon'          => esc_html__( 'Parent Item:', 'atrolycore' ),
			'new_item_name'              => esc_html__( 'New Portfolio Category Name', 'atrolycore' ),
			'add_new_item'               => esc_html__( 'Add New Portfolio Category', 'atrolycore' ),
			'edit_item'                  => esc_html__( 'Edit Portfolio Category', 'atrolycore' ),
			'update_item'                => esc_html__( 'Update Portfolio Category', 'atrolycore' ),
			'view_item'                  => esc_html__( 'View Portfolio Category', 'atrolycore' ),
			'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'atrolycore' ),
			'add_or_remove_items'        => esc_html__( 'Add or remove items', 'atrolycore' ),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'atrolycore' ),
			'popular_items'              => esc_html__( 'Popular Portfolio Category', 'atrolycore' ),
			'search_items'               => esc_html__( 'Search Portfolio Category', 'atrolycore' ),
			'not_found'                  => esc_html__( 'Not Found', 'atrolycore' ),
			'no_terms'                   => esc_html__( 'No Portfolio Category', 'atrolycore' ),
			'items_list'                 => esc_html__( 'Portfolio Category list', 'atrolycore' ),
			'items_list_navigation'      => esc_html__( 'Portfolio Category list navigation', 'atrolycore' ),
		);

		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);

		register_taxonomy('portfolios-cat','atroly-portfolios', $args );
	}

}

new AtrolyPortfoliosPost();
