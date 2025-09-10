<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Control_Media;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Menu_Demo extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'atroly-menu-demo';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Mega Menu Demo', 'atrolycore' );
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'atroly-icon';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'atrolycore' ];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'atrolycore' ];
	}

    protected $nav_menu_index = 1;

    /**
     * Retrieve the menu index.
     *
     * Used to get index of nav menu.
     *
     * @since 1.3.0
     * @access protected
     *
     * @return string nav index.
     */
    protected function get_nav_menu_index() {
        return $this->nav_menu_index++;
    }

    private function get_available_menus() {

        $menus = wp_get_nav_menus();

        $options = [];

        foreach ( $menus as $menu ) {
            $options[ $menu->slug ] = $menu->name;
        }

        return $options;
    }

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
    protected function register_controls(){
        $this->register_controls_section();
        $this->style_tab_content();
    }  

    protected function register_controls_section(){


		$this->start_controls_section(
		 'atroly_list_sec',
			 [
			   'label' => esc_html__( 'Image List', 'atrolycore' ),
			   'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			 ]
		);
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
		'atroly_menu_title',
		  [
			'label'   => esc_html__( 'Title', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::TEXT,
			'default'     => esc_html__( 'Default-value', 'atrolycore' ),
			'label_block' => true,
		  ]
		);
        
        $repeater->add_control(
            'atroly_image',
            [
                'type' => Controls_Manager::MEDIA,
                'label' => __( 'Image', 'atrolycore' ),
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );  

		$repeater->add_control(
		'atroly_menu_multi_page_url',
		  [
			'label'   => esc_html__( 'Multipage URL', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::TEXT,
			'default'     => esc_html__( '#', 'atrolycore' ),
			'label_block' => true,
		  ]
		);		

		$repeater->add_control(
		'atroly_menu_one_page_url',
		  [
			'label'   => esc_html__( 'Onepage URL', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::TEXT,
			'default'     => esc_html__( '#', 'atrolycore' ),
			'label_block' => true,
		  ]
		);
		
		$this->add_control(
		  'atroly_menu_list',
		  [
			'label'       => esc_html__( 'Menu List', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::REPEATER,
			'fields'      => $repeater->get_controls(),
			'default'     => [
			  [
				'atroly_menu_title'   => esc_html__( 'Menu Item 1', 'atrolycore' ),
			  ],
			  [
				'atroly_menu_title'   => esc_html__( 'Menu Item 2', 'atrolycore' ),
			  ],
			  [
				'atroly_menu_title'   => esc_html__( 'Menu Item 3', 'atrolycore' ),
			  ],
			],
			'title_field' => '{{{ atroly_menu_title }}}',
		  ]
		);

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'medium_large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ]
            ]
        );
		
		$this->end_controls_section();
    }

    protected function style_tab_content(){

    }

	/**
	 * Render the widget ouatrolyut on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

        
		?>

		<div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($settings['atroly_menu_list'] as $key => $item) :
                if ( !empty($item['atroly_image']['url']) ) {
                    $atroly_image_url = !empty($item['atroly_image']['id']) ? wp_get_attachment_image_url( $item['atroly_image']['id'], $settings['thumbnail_size']) : $item['atroly_image']['url'];
                    $atroly_image_alt = get_post_meta($item["atroly_image"]["id"], "_wp_attachment_image_alt", true);
                } 
                
            ?>
		    <div class="col homemenu">
		       <div class="homemenu-thumb mb-15">
		          <img src="<?php echo esc_url($atroly_image_url); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
		          <div class="homemenu-btn">
		             <a class="menu-btn show-1" href="<?php echo esc_html($item['atroly_menu_multi_page_url']) ?>">Multi Page</a>
		             <br>
		             <a class="menu-btn show-2" href="<?php echo esc_html($item['atroly_menu_one_page_url']) ?>">One Page</a>
		          </div>
		       </div>
		       <div class="homemenu-content text-center">
		          <h4 class="homemenu-title">
		             <a href="<?php echo esc_html($item['atroly_menu_multi_page_url']) ?>"><?php echo esc_html($item['atroly_menu_title']) ?></a>
		          </h4>
		       </div>
		    </div>
		    <?php endforeach; ?>
		 </div>
        <?php 
	}
}

$widgets_manager->register( new ATROLY_Menu_Demo() );