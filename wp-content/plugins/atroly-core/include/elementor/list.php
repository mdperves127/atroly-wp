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
class ATROLY_List extends Widget_Base {

	use \ATROLYCore\Widgets\ATROLYCoreElementFunctions;

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
		return 'atroly-list';
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
		return __( 'List', 'atrolycore' );
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
        // layout Panel
        $this->start_controls_section(
            'atroly_layout',
            [
                'label' => esc_html__('Design Layout', 'atroly-core'),
            ]
        );
        $this->add_control(
            'atroly_design_style',
            [
                'label' => esc_html__('Select Layout', 'atroly-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', 'atroly-core'),
                    'layout-2' => esc_html__('Layout 2', 'atroly-core'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

		$this->start_controls_section(
		 'atroly_list_sec',
			 [
			   'label' => esc_html__( 'Info List', 'atrolycore' ),
			   'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			 ]
		);

		$this->add_control(
			'atroly_text_title',
			 [
				'label'       => esc_html__( 'Title', 'atrolycore' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => esc_html__( 'ATROLY Heading Control', 'atrolycore' ),
				'placeholder' => esc_html__( 'Your Title', 'atrolycore' ),
				'label_block' => true
			 ]
		);
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
		'atroly_text_list_title',
		  [
			'label'   => esc_html__( 'Title', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::TEXT,
			'default'     => esc_html__( 'Default-value', 'atrolycore' ),
			'label_block' => true,
		  ]
		);
		$repeater->add_control(
		'atroly_text_list_des',
		  [
			'label'   => esc_html__( 'Des', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::TEXT,
			'default'     => esc_html__( 'Default-value', 'atrolycore' ),
			'label_block' => true,
		  ]
		);
		$repeater->add_control(
			'atroly_box_icon_type',
			[
				'label' => esc_html__('Select Icon Type', 'atrolycore'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'image' => esc_html__('Image', 'atrolycore'),
					'icon' => esc_html__('Icon', 'atrolycore'),
					'svg' => esc_html__('SVG', 'atrolycore'),
				],

			]
		);
		$repeater->add_control(
			'atroly_box_icon_svg',
			[
				'show_label' => false,
				'type' => Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => esc_html__('SVG Code Here', 'atrolycore'),
				'condition' => [
					'atroly_box_icon_type' => 'svg'
				]
			]
		);

		$repeater->add_control(
			'atroly_box_icon_image',
			[
				'label' => esc_html__('Upload Icon Image', 'atrolycore'),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'atroly_box_icon_type' => 'image',
				]
			]
		);

		if (atroly_is_elementor_version('<', '2.6.0')) {
			$repeater->add_control(
				'atroly_box_icon',
				[
					'show_label' => false,
					'type' => Controls_Manager::ICON,
					'label_block' => true,
					'default' => 'fa fa-star',
					'condition' => [
						'atroly_box_icon_type' => 'icon'
					]
				]
			);
		} else {
			$repeater->add_control(
				'atroly_box_selected_icon',
				[
					'show_label' => false,
					'type' => Controls_Manager::ICONS,
					'fa4compatibility' => 'icon',
					'label_block' => true,
					'default' => [
						'value' => 'fas fa-star',
						'library' => 'solid',
					],
					'condition' => [
						'atroly_box_icon_type' => 'icon'
					]
				]
			);
		}
		
		$this->add_control(
		  'atroly_text_list_list',
		  [
			'label'       => esc_html__( 'Features List', 'atrolycore' ),
			'type'        => \Elementor\Controls_Manager::REPEATER,
			'fields'      => $repeater->get_controls(),
			'default'     => [
			  [
				'atroly_text_list_title'   => esc_html__( 'Neque sodales', 'atrolycore' ),
			  ],
			  [
				'atroly_text_list_title'   => esc_html__( 'Adipiscing elit', 'atrolycore' ),
			  ],
			  [
				'atroly_text_list_title'   => esc_html__( 'Mauris commodo', 'atrolycore' ),
			  ],
			],
			'title_field' => '{{{ atroly_text_list_title }}}',
		  ]
		);

		$this->end_controls_section();

		
    }

    protected function style_tab_content(){
        $this->atroly_section_style_controls('list_section', 'Section Style', '.ele-section');
        # repeater
        $this->atroly_icon_style('rep_icon', 'Repeater Icon', '.atroly-el-rep-icon');
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title');
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des');
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

<?php if ( $settings['atroly_design_style']  == 'layout-2' ): ?>

<?php else: ?>
<div class="atroly-service-details-box d-flex mb-60 ele-section">
    <?php foreach ($settings['atroly_text_list_list'] as $key => $item) :?>
    <div class="atroly-service-details-item d-flex mr-30">
        <div class="atroly-service-details-icon">
            <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
            <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
            <span class="atroly-el-rep-icon"><?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?></span>
            <?php endif; ?>
            <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
            <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
            <span class="atroly-el-rep-icon"><img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                    alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>"></span>
            <?php endif; ?>
            <?php else : ?>
            <?php if (!empty($item['atroly_box_icon_svg'])): ?>
            <span class="atroly-el-rep-icon"><?php echo $item['atroly_box_icon_svg']; ?></span>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="atroly-service-details-content">
            <?php if(!empty($settings['atroly_text_title'])): ?>
            <h3 class="atroly-service-details-subtitle atroly-el-rep-title"><?php echo atroly_kses($item['atroly_text_list_title']); ?></h3>
            <?php endif; ?>
            <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_text_list_des']); ?></p>

        </div>
    </div>
    <?php endforeach; ?>
</div>


<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_List() ); 