<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;

use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Typography;
Use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Background;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYBGGradient;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Fact extends Widget_Base {

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
		return 'atroly-fact';
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
		return __( 'Fact', 'atrolycore' );
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

	protected function register_controls_section() {

        // layout Panel
        $this->start_controls_section(
            'atroly_layout',
            [
                'label' => esc_html__('Design Layout', 'atrolycore'),
            ]
        );
        $this->add_control(
            'atroly_design_style',
            [
                'label' => esc_html__('Select Layout', 'atrolycore'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', 'atrolycore'),
                    'layout-2' => esc_html__('Layout 2', 'atrolycore'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();


        // fact group
        $this->start_controls_section(
            'atroly_fact',
            [
                'label' => esc_html__('Fact List', 'atrolycore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'repeater_condition',
            [
                'label' => __( 'Field condition', 'atrolycore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'style_1' => __( 'Style 1', 'atrolycore' ),
                    'style_2' => __( 'Style 2', 'atrolycore' ),
                    'style_3' => __( 'Style 3', 'atrolycore' ),
                    'style_4' => __( 'Style 4', 'atrolycore' ),
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );

        //icon image svg

        $repeater->add_control(
            'atroly_box_icon_type',
            [
                'label' => esc_html__('Select Icon Type', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'svg',
                'options' => [
                    'image' => esc_html__('Image', 'atrolycore'),
                    'icon' => esc_html__('Icon', 'atrolycore'),
                    'svg' => esc_html__('SVG', 'atrolycore'),
                ],
                'condition' => [
                    'repeater_condition' => ['style_1'],
                ]
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
                    'atroly_box_icon_type' => 'svg',
                    'repeater_condition' => ['style_1','style-2'],
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
                    'repeater_condition' => ['style_1','style-2'],
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
                        'atroly_box_icon_type' => 'icon',
                        'repeater_condition' => ['style_1','style-2'],
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
                        'atroly_box_icon_type' => 'icon',
                        'repeater_condition' => ['style_1','style-2'],
                    ]
                ]
            );
        }

        $repeater->add_control(
            'atroly_fact_number', [
                'label' => esc_html__('Number', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('17', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_fact_number_unit', [
                'label' => esc_html__('Number Unit', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('K', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_fact_title',
            [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Food', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_fact_des',
            [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Average time to resolve.', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => 'style_2'
                ]
            ]
        );    

        // creative animation
        $repeater->add_control(
			'atroly_creative_anima_switcher',
			[
				'label' => esc_html__( 'Active Animation', 'atrolycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'atrolycore   ' ),
				'label_off' => esc_html__( 'No', 'atrolycore   ' ),
				'return_value' => 'yes',
				'default' => '0',
                'separator' => 'before',
                'condition' => [
                    'repeater_condition' => ['style_2']
                ]
			]
		);

        $repeater->add_control(
            'atroly_anima_type',
            [
                'label' => __( 'Animation Type', 'atrolycore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'fadeUp' => __( 'fadeUp', 'atrolycore' ),
                    'fadeDown' => __( 'fadeDown', 'atrolycore' ),
                    'fadeLeft' => __( 'fadeLeft', 'atrolycore' ),
                    'fadeRight' => __( 'fadeRight', 'atrolycore' ),
                ],
                'default' => 'fadeUp',
                'frontend_available' => true,
                'style_transfer' => true,
                'condition' => [
                    'atroly_creative_anima_switcher' => 'yes',
                    'repeater_condition' => ['style_2']
                ],
            ]
        );

        $this->add_control(
            'atroly_fact_list',
            [
                'label' => esc_html__('Fact - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_fact_number' => esc_html__('23', 'atrolycore'),
                        'atroly_fact_title' => esc_html__('Business', 'atrolycore'),
                    ],
                    [
                        'atroly_fact_number' => esc_html__('45', 'atrolycore'),
                        'atroly_fact_title' => esc_html__('Website', 'atrolycore')
                    ],
                    [
                        'atroly_fact_number' => esc_html__('129', 'atrolycore'),
                        'atroly_fact_title' => esc_html__('Marketing', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_fact_title }}}',
            ]
        );
        $this->end_controls_section();

        
        // _atroly_image
		$this->start_controls_section(
            '_atroly_image',
            [
                'label' => esc_html__('Thumbnail', 'atroly-core'),
                'condition' => [
                    'atroly_design_style' => 'layout-5'
                ]
            ]
        );
        $this->add_control(
            'atroly_image',
            [
                'label' => esc_html__( 'Choose Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'atroly_image_size',
                'default' => 'full',
                'exclude' => [
                    'custom'
                ]
            ]
        );
        $this->end_controls_section();


        // title/content
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.', ['layout-5'] );

        // list
        $this->start_controls_section(
        'atroly_list_sec',
            [
                'label' => esc_html__( 'Info List', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => 'layout-5'
                ]
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

        // fact bg
        $this->start_controls_section(
        'atroly_fact_bg',
            [
                'label' => esc_html__( 'BG Image', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => 'layout-1',
                    'atroly_design_style' => 'layout-2'
                ]
            ]
        );


        $this->add_control(
            'atroly_bg_image',
            [
                'label' => esc_html__( 'Choose Bg Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ]
            ]
        );


        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'shape_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom']
            ]
        );
        
        $this->end_controls_section();

        
        // section column
        $this->atroly_columns('col', ['layout-1', 'layout-2']);
        
	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('fact_section', 'Section - Style', '.atroly-el-section');
        # repeater
        $this->atroly_icon_style('rep_icon', 'Repeater Icon', '.atroly-el-rep-icon', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('rep_num', 'Repeater Number', '.atroly-el-rep-number', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title', ['layout-1', 'layout-2']);
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
        if ( !empty($settings['atroly_bg_image']['url']) ) {
            $atroly_bg_image = !empty($settings['atroly_bg_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_bg_image']['id'], $settings['shape_image_size_size']) : $settings['atroly_bg_image']['url'];
            $atroly_bg_image_alt = get_post_meta($settings["atroly_bg_image"]["id"], "_wp_attachment_image_alt", true);
        }
		?>

<?php if ( $settings['atroly_design_style']  == 'layout-2' ): ?>
<!-- counter area start -->
<section class="atroly-counter-area-2 p-relative pt-120 pb-90 atroly-el-section atroly-black-bg">
    <div class="atroly-counter-bg-shape-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/counter/home-3/bg-shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($settings['atroly_fact_list'] as $key => $item) : ?>
            <div
                class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?> mb-30">
                <div class="atroly-counter-item-2 text-center mb-30">
                    <div class="atroly-counter-item-2-icon">
                        <span class="atroly-el-rep-icon">
                            <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                            <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                            <?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                            <?php endif; ?>
                            <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                            <img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                                alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                            <?php echo $item['atroly_box_icon_svg']; ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </span>
                    </div>

                    <?php if(!empty($item['atroly_fact_number'])) : ?>
                    <h4 class="atroly-counter-title-2 atroly-el-rep-number">
                        <span class="purecounter" data-purecounter-duration="3" data-purecounter-end="<?php echo esc_attr($item['atroly_fact_number' ]); ?>"></span><?php echo esc_attr($item['atroly_fact_number_unit' ]); ?>
                    </h4>
                    <?php endif; ?>

                    <?php if(!empty($item['atroly_fact_title'])) : ?>
                    <p class="atroly-el-rep-title"><?php echo atroly_kses($item['atroly_fact_title']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- counter area end -->

<?php else: 
     if ( !empty($settings['atroly_bg_image']['url']) ) {
        $atroly_bg_image = !empty($settings['atroly_bg_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_bg_image']['id'], $settings['shape_image_size_size']) : $settings['atroly_bg_image']['url'];
        $atroly_bg_image_alt = get_post_meta($settings["atroly_bg_image"]["id"], "_wp_attachment_image_alt", true);
    }
?>
<section class="atroly-counter-area atroly-counter-overlay p-relative pt-70 pb-40 atroly-el-section">
    <div class="container">
        <div class="atroly-counter-bg"></div>
        <div class="atroly-counter-shape">
            <img class="shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter/img-1.png" alt="">
            <img class="shape-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter/img-2.png" alt="">
            <img class="shape-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter/img-3.png" alt="">
            <img class="shape-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/counter/img-4.png" alt="">
        </div>
        <div class="row justify-content-center">
            <?php foreach ($settings['atroly_fact_list'] as $key => $item) :
                $arrCount = count($settings['atroly_fact_list']) - 1 ;
                $border = $key == $arrCount ? '' : 'atroly-counter-border';
            ?>
            <div class="col-lg-3">
                <div class="atroly-counter-wrapper d-flex align-items-center justify-content-center mb-30">
                    <div class="atroly-counter-icon">
                        <span class="atroly-el-rep-icon">
                            <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                            <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                            <?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                            <?php endif; ?>
                            <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                            <img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                                alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                            <?php echo $item['atroly_box_icon_svg']; ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="atroly-counter-content">
                        <h4 class="atroly-counter-title atroly-el-rep-number">
                            <span class="purecounter" data-purecounter-duration="3" data-purecounter-end="<?php echo esc_attr($item['atroly_fact_number' ]); ?>"></span>+
                        </h4>
                        <?php if(!empty($item['atroly_fact_title'])) : ?>
                        <p class="atroly-el-rep-title"><?php echo atroly_kses($item['atroly_fact_title']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Fact() );