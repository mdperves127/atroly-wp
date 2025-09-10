<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Box_Shadow;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYBGGradient;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Portfolio extends Widget_Base {

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
		return 'atroly-portfolio';
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
		return __( 'Portfolio Main', 'atrolycore' );
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
                    'layout-3' => esc_html__('Layout 3', 'atrolycore'),
                    'layout-4' => esc_html__('Layout 4', 'atrolycore'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->add_control(
         'enable_style_2',
         [
           'label'        => esc_html__( 'Enable Style 2', 'atrolycore' ),
           'type'         => \Elementor\Controls_Manager::SWITCHER,
           'label_on'     => esc_html__( 'Show', 'atrolycore' ),
           'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
           'return_value' => 'yes',
           'default'      => 'no',
           'condition' => [
            'atroly_design_style' => 'layout-1'
           ]
         ]
        );

        $this->end_controls_section();

        $this->atroly_section_title_render_controls('portfolio', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.');

        $this->start_controls_section(
            'atroly_section_subtitle_line_sec',
                [
                  'label' => esc_html__( 'Subtitle Line Color', 'atrolycore' ),
                  'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                  'condition' =>[
                    'atroly_design_style' => ['layout-4'],
                    ]
                ]
           );
           
           $this->add_control(
               'atroly_subtitle_line',
               [
                   'label' => esc_html__( 'Line BG Color', 'atrolycore' ),
                   'type' => Controls_Manager::TEXT,
                   'selectors' => [
                       '{{WRAPPER}} .section__title-pre-9::after' => 'background: {{VALUE}};',
                   ],
                   'placeholder' => esc_html__( 'red', 'atrolycore' ),
               ]
           );

           
           $this->end_controls_section();
        
        // Button 
        $this->atroly_button_render('portfolio_view_all', 'Portfolio More', ['layout-3','layout-4'] );

        // Portfolio group
        $this->start_controls_section(
            'atroly_portfolio',
            [
                'label' => esc_html__('Portfolio List', 'atrolycore'),
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
                    'style_6' => __( 'Style 2', 'atrolycore' ),
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );

        $this->add_control(
         'atroly_full_box_link_active',
         [
           'label'        => esc_html__( 'Enable Full Box Link ?', 'atrolycore' ),
           'type'         => \Elementor\Controls_Manager::SWITCHER,
           'label_on'     => esc_html__( 'Show', 'atrolycore' ),
           'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
           'return_value' => 'yes',
           'default'      => 'no',
           'condition' => [
                'atroly_design_style' => ['layout-1']
            ]
         ]
        );

        $this->add_control(
         'atroly_portfolio_shape_switch',
            [
            'label'        => esc_html__( 'Shape On/Off', 'atrolycore' ),
            'type'         => \Elementor\Controls_Manager::SWITCHER,
            'label_on'     => esc_html__( 'Show', 'atrolycore' ),
            'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
            'return_value' => 'yes',
            'default'      => 'yes',
                'condition' => [
                    'atroly_design_style' => ['layout-2', 'layout-3']
                ]
            ]
        );

        $repeater->add_control(
            'atroly_portfolio_image',
            [
                'label' => esc_html__('Upload Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $repeater->add_control(
            'atroly_portfolio_cat',
                [
                    'label'       => esc_html__( 'Category', 'atrolycore' ),
                    'type'        => \Elementor\Controls_Manager::TEXT,
                    'default'     => esc_html__( 'Category', 'atrolycore' ),
                    'placeholder' => esc_html__( 'Your Category', 'atrolycore' ),
                    'label_block' => true,
                ]
        );
        $repeater->add_control(
            'atroly_portfolio_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Portfolio Title', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_portfolio_link_switcher',
            [
                'label' => esc_html__( 'Add Services link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'atroly_portfolio_link_type',
            [
                'label' => esc_html__( 'Service Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'condition' => [
                    'atroly_portfolio_link_switcher' => 'yes'
                ]
            ]
        );
        $repeater->add_control(
            'atroly_portfolio_link',
            [
                'label' => esc_html__( 'Service Link link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => esc_html__( 'https://your-link.com', 'atrolycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => false,
                ],
                'condition' => [
                    'atroly_portfolio_link_type' => '1',
                    'atroly_portfolio_link_switcher' => 'yes',
                ]
            ]
        );
        $repeater->add_control(
            'atroly_portfolio_page_link',
            [
                'label' => esc_html__( 'Select Service Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_portfolio_link_type' => '2',
                    'atroly_portfolio_link_switcher' => 'yes',
                ]
            ]
        );
        $repeater->add_control(
            'atroly_portfolio_description', [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Portfolio description', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => 'style_1'
                ]
            ]
        );


        $this->add_control(
            'atroly_portfolio_list',
            [
                'label' => esc_html__('Portfolio - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_portfolio_title' => esc_html__('Business Stratagy', 'atrolycore'),
                    ],
                    [
                        'atroly_portfolio_title' => esc_html__('Website Development', 'atrolycore')
                    ],
                    [
                        'atroly_portfolio_title' => esc_html__('Marketing & Reporting', 'atrolycore')
                    ],
                    [
                        'atroly_portfolio_title' => esc_html__('Mobile Development', 'atrolycore')
                    ],
                    [
                        'atroly_portfolio_title' => esc_html__('Marketing & Reporting', 'atrolycore')
                    ],
                    [
                        'atroly_portfolio_title' => esc_html__('Mobile Development', 'atrolycore')
                    ],
                ],
                'title_field' => '{{{ atroly_portfolio_title }}}',
            ]
        );


        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                // 'default' => 'atroly-post-thumb',
            ]
        );
        $this->end_controls_section();


        $this->atroly_columns('col');

	}

        // style_tab_content
    protected function style_tab_content(){


        $this->atroly_section_style_controls('section_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_subtitle', 'Section - Subtitle', '.atroly-el-subtitle');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title');
        $this->atroly_basic_style_controls('section_description', 'Section - Description', '.atroly-el-content p');
        $this->atroly_link_controls_style('portfolio_btn', 'Section - Button', '.atroly-el-btn');

// gradient button color
$this->start_controls_section(
    'atroly_hero_gradient_btn_button',
    [
        'label' => esc_html__('Gradient Button', 'atroly-core'),
        'tab' => Controls_Manager::TAB_STYLE,
    ]
);

$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'atroly_hero_gradient_btn_typography',
        'selector' => '{{WRAPPER}} .atroly-el-gradient-btn',
    ]
);


$this->start_controls_tabs('atroly_hero_gradient_btn_button_tabs');

// Normal State Tab
$this->start_controls_tab('atroly_hero_gradient_btn_btn_normal', ['label' => esc_html__('Normal', 'atroly-core')]);

$this->add_control(
    'atroly_hero_gradient_btn_btn_normal_text_color',
    [
        'label' => esc_html__('Text Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_normal_bg_color',
    [
        'label' => esc_html__('Background Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'background: {{VALUE}} !important;',
        ],
    ]
);


$this->add_control(
    'atroly_hero_gradient_btn_bg_color',
    [
        'label' => esc_html__('Gradient BG Color', 'atroly-core'),
        'type' => Controls_Manager::TEXT,
        'label_block' => true,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn::after' => 'background: {{VALUE}};',
        ],
    ]
);


$this->add_group_control(
    Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'atroly_hero_gradient_btn_btn_box_shadow',
        'label' => esc_html__( 'Box Shadow', 'atroly-core' ),
        'selector' => '{{WRAPPER}} .atroly-el-gradient-btn',
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_normal_border_style',
    [
        'label' => esc_html__('Border Style', 'atroly-core'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            '' => esc_html__('Default', 'atroly-core'),
            'none' => esc_html__('None', 'atroly-core'),
            'solid' => esc_html__('Solid', 'atroly-core'),
            'double' => esc_html__('Double', 'atroly-core'),
            'dotted' => esc_html__('Dotted', 'atroly-core'),
            'dashed' => esc_html__('Dashed', 'atroly-core'),
            'groove' => esc_html__('Groove', 'atroly-core'),
        ],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-style: {{VALUE}} !important;;',
        ],
    ]
);

$this->add_responsive_control(
    'atroly_hero_gradient_btn_btn_normal_border_width',
    [
        'label' => esc_html__('Border Width', 'atroly-core'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
        ],
        'separator' => 'before',
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_normal_border_color',
    [
        'label' => esc_html__('Border Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-color: {{VALUE}} !important;;',
        ],
    ]

);


$this->add_control(
    'atroly_hero_gradient_btn_btn_border_radius',
    [
        'label' => esc_html__('Border Radius', 'atroly-core'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
            'px' => [
                'max' => 100,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-radius: {{SIZE}}px;',
        ],
    ]
);

$this->end_controls_tab();

// Hover State Tab
$this->start_controls_tab('atroly_hero_gradient_btn_btn_hover', ['label' => esc_html__('Hover', 'atroly-core')]);

$this->add_control(
    'atroly_hero_gradient_btn_btn_hover_text_color',
    [
        'label' => esc_html__('Text Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn:hover' => 'color: {{VALUE}} !important;',
        ],
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_hover_bg_color',
    [
        'label' => esc_html__('Background Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn:hover' => 'background: {{VALUE}} !important;',
        ],
    ]
);

$this->add_group_control(
    Group_Control_Box_Shadow::get_type(),
    [
        'name' => 'atroly_hero_gradient_btn_btn_hover_box_shadow',
        'label' => esc_html__( 'Box Shadow', 'atroly-core' ),
        'selector' => '{{WRAPPER}} .atroly-el-gradient-btn:hover',
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_hover_border_style',
    [
        'label' => esc_html__('Border Style', 'atroly-core'),
        'type' => Controls_Manager::SELECT,
        'options' => [
            '' => esc_html__('Default', 'atroly-core'),
            'none' => esc_html__('None', 'atroly-core'),
            'solid' => esc_html__('Solid', 'atroly-core'),
            'double' => esc_html__('Double', 'atroly-core'),
            'dotted' => esc_html__('Dotted', 'atroly-core'),
            'dashed' => esc_html__('Dashed', 'atroly-core'),
            'groove' => esc_html__('Groove', 'atroly-core'),
        ],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-style: {{VALUE}} !important;;',
        ],
    ]
);

$this->add_responsive_control(
    'atroly_hero_gradient_btn_btn_hover_border_width',
    [
        'label' => esc_html__('Border Width', 'atroly-core'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
        ],
        'separator' => 'before',
    ]
);

$this->add_control(
    'atroly_hero_gradient_btn_btn_hover_border_color',
    [
        'label' => esc_html__('Border Color', 'atroly-core'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn:hover' => 'border-color: {{VALUE}} !important;',
        ],
    ]
);




$this->end_controls_tab();

$this->end_controls_tabs();

        $this->add_responsive_control(
    'atroly_hero_gradient_btn_padding',
    [
        'label' => esc_html__('Padding', 'atroly-core'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);
$this->add_responsive_control(
    'atroly_hero_gradient_btn_margin',
    [
        'label' => esc_html__('Margin', 'atroly-core'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors' => [
            '{{WRAPPER}} .atroly-el-gradient-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();

        $this->atroly_section_style_controls('portfolio_box', 'Portfolio - Box', '.atroly-el-box, .atroly-el-box::after');
        $this->atroly_basic_style_controls('portfolio_box_title', 'Portfolio - Title', '.atroly-el-box-title');
        $this->atroly_basic_style_controls('portfolio_box_tag', 'Portfolio - Tag', '.atroly-el-box-tag');
        $this->atroly_basic_style_controls('portfolio_box_desc', 'Portfolio - Description', '.atroly-el-box-desc');
        $this->atroly_link_controls_style('portfolio_box_plus', 'Portfolio - Plus', '.atroly-el-box-plus');

        $this->atroly_link_controls_style('slider_btn', 'Slider - Arrow', '.atroly-el-arrow button');
  
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

		<?php if ( $settings['atroly_design_style']  == 'layout-2' ): 
            $this->add_render_attribute('title_args', 'class', 'section__title-5 atroly-el-title');
            $bloginfo = get_bloginfo( 'name' );  

        ?>

        <!-- portfolio area start -->
        <section class="portfolio__area portfolio__overlay-5 pt-110 pb-120 p-relative z-index-1 atroly-el-section">

            <?php if(!empty($settings['atroly_portfolio_shape_switch'])) :?>
            <div class="portfolio__shape">
               <img class="portfolio__shape-6" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/5/shape/shape-1.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
               <img class="portfolio__shape-7" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/5/shape/shape-2.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
            </div>
            <?php endif; ?>

            <?php if ( !empty($settings['atroly_portfolio_section_title_show']) ) : ?>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="section__title-wrapper-5 mb-60 text-center atroly-el-content">
                        <?php if(!empty($settings['atroly_portfolio_sub_title'])): ?>
                        <span class="section__title-pre-5 atroly-el-subtitle"><?php echo atroly_kses($settings['atroly_portfolio_sub_title']); ?></span>
                        <?php endif; ?>
                            <?php
                                if ( !empty($settings['atroly_portfolio_title' ]) ) :
                                    printf( '<%1$s %2$s>%3$s</%1$s>',
                                        tag_escape( $settings['atroly_portfolio_title_tag'] ),
                                        $this->get_render_attribute_string( 'title_args' ),
                                        atroly_kses( $settings['atroly_portfolio_title' ] )
                                        );
                                endif;
                            ?>

                        <?php if ( !empty($settings['atroly_portfolio_description']) ) : ?>
                            <p><?php echo atroly_kses( $settings['atroly_portfolio_description'] ); ?></p>
                        <?php endif; ?>
                     </div>
                     
                  </div>
               </div>
            </div>
            <?php endif; ?>

            <div class="container-fluid g-0">
               <div class="row gx-0">
                  <div class="col-xxl-12">
                     <div class="portfolio__slider-5 p-relative">
                        <div class="portfolio__slider-active-5 swiper-container">
                           <div class="swiper-wrapper">
                                <?php foreach ($settings['atroly_portfolio_list'] as $item) :
                                    if ( !empty($item['atroly_portfolio_image']['url']) ) {
                                        $atroly_portfolio_image_url = !empty($item['atroly_portfolio_image']['id']) ? wp_get_attachment_image_url( $item['atroly_portfolio_image']['id'], $settings['thumbnail_size']) : $item['atroly_portfolio_image']['url'];
                                        $atroly_portfolio_image_alt = get_post_meta($item["atroly_portfolio_image"]["id"], "_wp_attachment_image_alt", true);
                                    }
                                    // Link
                                    if ('2' == $item['atroly_portfolio_link_type']) {
                                        $link = get_permalink($item['atroly_portfolio_page_link']);
                                        $target = '_self';
                                        $rel = 'nofollow';
                                    } else {
                                        $link = !empty($item['atroly_portfolio_link']['url']) ? $item['atroly_portfolio_link']['url'] : '';
                                        $target = !empty($item['atroly_portfolio_link']['is_external']) ? '_blank' : '';
                                        $rel = !empty($item['atroly_portfolio_link']['nofollow']) ? 'nofollow' : '';
                                    }

                                ?>
                              <div class="portfolio__item-5 swiper-slide wow slideInDown atroly-el-box" data-wow-delay=".3s" data-wow-duration="1s">
                                 <div class="portfolio__thumb-5" data-background="<?php echo esc_attr($atroly_portfolio_image_url); ?>"></div>
                                 
                                 <div class="portfolio__content-5">
                                    <h3 class="portfolio__title-5 atroly-el-box-title">
                                        <?php if ($item['atroly_portfolio_link_switcher'] == 'yes') : ?>
                                        <a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_portfolio_title' ]); ?></a>
                                        <?php else : ?>
                                            <?php echo atroly_kses($item['atroly_portfolio_title' ]); ?>
                                        <?php endif; ?>
                                    </h3>

                                    <?php if (!empty($item['atroly_portfolio_cat' ])): ?>
                                    <div class="portfolio__tag-5 atroly-el-box-tag">
                                        <span><?php echo atroly_kses($item['atroly_portfolio_cat']); ?></span>
                                    </div>
                                    <?php endif; ?>
                                 </div>

                                 <?php if(!empty($atroly_portfolio_image_url)) :?>
                                 <div class="portfolio__view-5">
                                    <a href="<?php echo esc_attr($atroly_portfolio_image_url); ?>" class="portfolio-plus-btn atroly-el-box-plus popup-image">
                                       <i class="fa-solid fa-plus"></i>
                                    </a>
                                 </div>
                                 <?php endif; ?>
                              </div>
                              <?php endforeach; ?>  
                           </div>
                        </div>
                        <div class="portfolio__nav-5 d-none d-sm-block atroly-el-arrow">
                           <button type="button" class="portfolio-button-prev-5"><i class="fa-regular fa-arrow-left"></i></button>
                           <button type="button" class="portfolio-button-next-5"><i class="fa-regular fa-arrow-right"></i></button>
                        </div>
                        <div class="portfolio-slider-dot-5 atroly-swiper-dot d-sm-none"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- portfolio area end -->


        <?php elseif ( $settings['atroly_design_style']  == 'layout-3' ): 
            $this->add_render_attribute('title_args', 'class', 'section__title-6 atroly-el-title');
            $bloginfo = get_bloginfo( 'name' );

            if ('2' == $settings['atroly_portfolio_view_all_btn_link_type']) {
                $link = get_permalink($settings['atroly_portfolio_view_all_btn_page_link']);
                $target = '_self';
                $rel = 'nofollow';
            } else {
                $link = !empty($settings['atroly_portfolio_view_all_btn_link']['url']) ? $settings['atroly_portfolio_view_all_btn_link']['url'] : '';
                $target = !empty($settings['atroly_portfolio_view_all_btn_link']['is_external']) ? '_blank' : '';
                $rel = !empty($settings['atroly_portfolio_view_all_btn_link']['nofollow']) ? 'nofollow' : '';
            }
        ?>

         <!-- portfolio area start -->
         <section class="portfolio__area p-relative z-index-1 pt-110 pb-140 blue-bg-5 atroly-el-section">

            <div class="portfolio__bg-6 p-relative include-bg" data-background="assets/img/portfolio/6/portfolio-bg.jpg"></div>

            <?php if(!empty($settings['atroly_portfolio_shape_switch'])) :?>
            <div class="portfolio__shape">
               <img class="portfolio__shape-8" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/6/shape/portfolio-shape-1.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
               <img class="portfolio__shape-9" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/6/shape/portfolio-shape-2.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
               <img class="portfolio__shape-10" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/6/shape/portfolio-shape-3.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
               <img class="portfolio__shape-11" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/6/shape/portfolio-shape-4.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
               <img class="portfolio__shape-12" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/6/shape/portfolio-shape-5.png' ?>" alt="<?php echo esc_attr($bloginfo); ?>">
            </div>
            <?php endif; ?>
            <div class="container">
            <?php if ( !empty($settings['atroly_portfolio_section_title_show']) ) : ?>
               <div class="row">
                  <div class="col-xxl-6 col-xl-7 col-lg-6">
                     <div class="section__title-wrapper-6 section__title-wrapper-6-white mb-60 atroly-el-content">

                        <?php if(!empty($settings['atroly_portfolio_sub_title'])): ?>
                        <span class="section__title-pre-6 is-white atroly-el-subtitle"><?php echo atroly_kses($settings['atroly_portfolio_sub_title']); ?></span>
                        <?php endif; ?>

                        <?php
                            if ( !empty($settings['atroly_portfolio_title' ]) ) :
                                printf( '<%1$s %2$s>%3$s</%1$s>',
                                    tag_escape( $settings['atroly_portfolio_title_tag'] ),
                                    $this->get_render_attribute_string( 'title_args' ),
                                    atroly_kses( $settings['atroly_portfolio_title' ] )
                                    );
                            endif;
                        ?>


                     </div>
                  </div>
                  <?php if ( !empty($settings['atroly_portfolio_description']) ) : ?>
                  <div class="col-xxl-5 offset-xxl-1 col-xl-5 col-lg-6">
                     <div class="section__title-wrapper-6 section__title-wrapper-6-white atroly-el-content">
                        <p><?php echo atroly_kses( $settings['atroly_portfolio_description'] ); ?></p>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
               <?php endif; ?>
            </div>
            <div class="container-fluid g-0">
               <div class="row gx-0">
                  <div class="col-xxl-12">
                     <div class="portfolio__slider-6">
                        <div class="portfolio__slider-active-6 swiper-container">
                           <div class="swiper-wrapper align-items-center">
                                <?php foreach ($settings['atroly_portfolio_list'] as $item) :
                                    if ( !empty($item['atroly_portfolio_image']['url']) ) {
                                        $atroly_portfolio_image_url = !empty($item['atroly_portfolio_image']['id']) ? wp_get_attachment_image_url( $item['atroly_portfolio_image']['id'], $settings['thumbnail_size']) : $item['atroly_portfolio_image']['url'];
                                        $atroly_portfolio_image_alt = get_post_meta($item["atroly_portfolio_image"]["id"], "_wp_attachment_image_alt", true);
                                    }
                                    // Link
                                    if ('2' == $item['atroly_portfolio_link_type']) {
                                        $link = get_permalink($item['atroly_portfolio_page_link']);
                                        $target = '_self';
                                        $rel = 'nofollow';
                                    } else {
                                        $link = !empty($item['atroly_portfolio_link']['url']) ? $item['atroly_portfolio_link']['url'] : '';
                                        $target = !empty($item['atroly_portfolio_link']['is_external']) ? '_blank' : '';
                                        $rel = !empty($item['atroly_portfolio_link']['nofollow']) ? 'nofollow' : '';
                                    }

                                ?>
                              <div class="portfolio__item-6 active transition-3 swiper-slide">
                                 <div class="portfolio__thumb-6 fix">
                                    <a class="popup-image" href="<?php echo esc_attr($atroly_portfolio_image_url ); ?>">
                                       <img src="<?php echo esc_attr($atroly_portfolio_image_url ); ?>" alt="<?php echo esc_attr($atroly_portfolio_image_alt); ?>">
                                    </a>
                                 </div>
                              </div>
                              <?php endforeach; ?>  
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- portfolio area end -->

        <?php elseif ( $settings['atroly_design_style']  == 'layout-4' ): 
            $this->add_render_attribute('title_args', 'class', 'section__title-9 atroly-el-title');
            $bloginfo = get_bloginfo( 'name' );

            if ('2' == $settings['atroly_portfolio_view_all_btn_link_type']) {
                $link = get_permalink($settings['atroly_portfolio_view_all_btn_page_link']);
                $target = '_self';
                $rel = 'nofollow';
            } else {
                $link = !empty($settings['atroly_portfolio_view_all_btn_link']['url']) ? $settings['atroly_portfolio_view_all_btn_link']['url'] : '';
                $target = !empty($settings['atroly_portfolio_view_all_btn_link']['is_external']) ? '_blank' : '';
                $rel = !empty($settings['atroly_portfolio_view_all_btn_link']['nofollow']) ? 'nofollow' : '';
            }
        ?>

         <!-- portfolio area start -->
         <section class="portfolio__area portfolio__overlay-9 fix atroly-el-section">
            <div class="container">
            <?php if ( !empty($settings['atroly_portfolio_section_title_show']) ) : ?>
               <div class="row align-items-end">
                  <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8">
                     <div class="section__title-wrapper-9 mb-65 atroly-el-content">

                        <?php if(!empty($settings['atroly_portfolio_sub_title'])): ?>
                        <span class="section__title-pre-9 atroly-el-subtitle"><?php echo atroly_kses($settings['atroly_portfolio_sub_title']); ?></span>
                        <?php endif; ?>
                        <?php
                            if ( !empty($settings['atroly_portfolio_title' ]) ) :
                                printf( '<%1$s %2$s>%3$s</%1$s>',
                                    tag_escape( $settings['atroly_portfolio_title_tag'] ),
                                    $this->get_render_attribute_string( 'title_args' ),
                                    atroly_kses( $settings['atroly_portfolio_title' ] )
                                    );
                            endif;
                        ?>

                        <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                            <p><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                        <?php endif; ?> 
                     </div>
                  </div>
                  <?php if(!empty($settings['atroly_portfolio_view_all_btn_switcher'])) :?>
                  <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4">
                     <div class="portfolio__more-9 mb-85 text-md-end">
                        <a class="atroly-btn-5 atroly-el-gradient-btn" target="<?php echo esc_attr($target); ?>" rel="<?php echo esc_attr($rel); ?>" href="<?php echo esc_url($link); ?>">
                        <?php echo atroly_kses($settings['atroly_portfolio_view_all_btn_text']); ?></a>
                     </div>
                  </div>
                  <?php endif; ?>
                                    
               </div>
               <?php endif; ?>
            </div>
            <div class="container-fluid gx-0">
               <div class="row gx-0">
                  <div class="col-xxl-12">
                     <div class="portfolio__slider-9 has-scrollbar p-relative">
                        <div class="portfolio__slider-active-9 swiper-container">
                           <div class="swiper-wrapper">

                           <?php foreach ($settings['atroly_portfolio_list'] as $item) :
                                if ( !empty($item['atroly_portfolio_image']['url']) ) {
                                    $atroly_portfolio_image_url = !empty($item['atroly_portfolio_image']['id']) ? wp_get_attachment_image_url( $item['atroly_portfolio_image']['id'], $settings['thumbnail_size']) : $item['atroly_portfolio_image']['url'];
                                    $atroly_portfolio_image_alt = get_post_meta($item["atroly_portfolio_image"]["id"], "_wp_attachment_image_alt", true);
                                }

                                // Link
                                if ('2' == $item['atroly_portfolio_link_type']) {
                                    $link = get_permalink($item['atroly_portfolio_page_link']);
                                    $target = '_self';
                                    $rel = 'nofollow';
                                } else {
                                    $link = !empty($item['atroly_portfolio_link']['url']) ? $item['atroly_portfolio_link']['url'] : '';
                                    $target = !empty($item['atroly_portfolio_link']['is_external']) ? '_blank' : '';
                                    $rel = !empty($item['atroly_portfolio_link']['nofollow']) ? 'nofollow' : '';
                                }

                            ?>
                              <div class="portfolio__item-9 w-img swiper-slide">
                                 <div class="portfolio__thumb-9" data-background="<?php echo esc_attr($atroly_portfolio_image_url); ?>"></div>
                                    <div class="portfolio__content-9 atroly-el-box">
  
                                        <?php if (!empty($item['atroly_portfolio_cat' ])): ?>
                                        <div class="portfolio__tag-9 atroly-el-box-tag">
                                            <span>
                                                <?php if ($item['atroly_portfolio_link_switcher'] == 'yes') : ?>
                                                    <a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_portfolio_cat']); ?></a>
                                                <?php else : ?>
                                                    <?php echo atroly_kses($item['atroly_portfolio_cat']); ?>
                                                <?php endif; ?>
                                            </span>
                                        </div>

                                        <?php endif; ?>
                                        
                                        <h3 class="portfolio__title-9 atroly-el-box-title">
                                            <?php if ($item['atroly_portfolio_link_switcher'] == 'yes') : ?>
                                            <a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_portfolio_title' ]); ?></a>
                                            <?php else : ?>
                                                <?php echo atroly_kses($item['atroly_portfolio_title' ]); ?>
                                            <?php endif; ?>
                                        </h3>
                                    </div>
                              </div>
                              <?php endforeach; ?> 
                           </div>
                        </div>
                        <div class="portfolio__nav-9 d-none d-sm-block atroly-el-arrow">
                           <button type="button" class="portfolio-button-prev-9"><i class="fa-regular fa-chevron-left"></i></button>
                           <button type="button" class="portfolio-button-next-9"><i class="fa-regular fa-chevron-right"></i></button>
                        </div>
                        <div class="atroly-scrollbar mt-70 mb-50 grey-bg-12"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- portfolio area end -->

		<?php else:
			

            if($settings['enable_style_2'] == 'yes'){
                $bg_color = '';
                $this->add_render_attribute('title_args', 'class', 'atroly-section-title-2 atroly-el-title');
            }else{
                $bg_color = 'black-bg';
                $this->add_render_attribute('title_args', 'class', 'section__title section__title-white atroly-el-title');
            }
		?>

         <!-- portfolio area start -->
         <section class="portfolio__area <?php echo esc_attr($bg_color); ?> pt-110 pb-100 atroly-el-section">
            <div class="container">
                <?php if ( !empty($settings['atroly_portfolio_section_title_show']) ) : ?>
               <div class="row">
                  <div class="col-xxl-8 col-xl-7">
                    <?php if($settings['enable_style_2'] == 'yes') : ?>
                        <div class="atroly-section-wrapper-2 mb-60 atroly-el-content">

                            <?php if ( !empty($settings['atroly_portfolio_sub_title']) ) : ?>
                            <span class="atroly-section-subtitle-2 atroly-el-subtitle"><?php echo atroly_kses( $settings['atroly_portfolio_sub_title'] ); ?></span>
                            <?php endif; ?>

                            <?php
                                if ( !empty($settings['atroly_portfolio_title' ]) ) :
                                    printf( '<%1$s %2$s>%3$s</%1$s>',
                                        tag_escape( $settings['atroly_portfolio_title_tag'] ),
                                        $this->get_render_attribute_string( 'title_args' ),
                                        atroly_kses( $settings['atroly_portfolio_title' ] )
                                        );
                                endif;
                            ?>

                            <?php if ( !empty($settings['atroly_portfolio_description']) ) : ?>
                                <p><?php echo atroly_kses( $settings['atroly_portfolio_description'] ); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php else: ?>
                            <div class="section__title-wrapper mb-60 is-white atroly-el-content">

                            <?php if ( !empty($settings['atroly_portfolio_sub_title']) ) : ?>
                            <span class="section__title-pre is-white atroly-el-subtitle"><?php echo atroly_kses( $settings['atroly_portfolio_sub_title'] ); ?></span>
                            <?php endif; ?>

                               <?php
                                   if ( !empty($settings['atroly_portfolio_title' ]) ) :
                                       printf( '<%1$s %2$s>%3$s</%1$s>',
                                           tag_escape( $settings['atroly_portfolio_title_tag'] ),
                                           $this->get_render_attribute_string( 'title_args' ),
                                           atroly_kses( $settings['atroly_portfolio_title' ] )
                                           );
                                   endif;
                               ?>


                                <?php if ( !empty($settings['atroly_portfolio_description']) ) : ?>
                                    <p><?php echo atroly_kses( $settings['atroly_portfolio_description'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                  </div>
               </div>
               <?php endif; ?>
               <div class="row gx-2">
                    <?php foreach ($settings['atroly_portfolio_list'] as $item) :
                        if ( !empty($item['atroly_portfolio_image']['url']) ) {
                            $atroly_portfolio_image_url = !empty($item['atroly_portfolio_image']['id']) ? wp_get_attachment_image_url( $item['atroly_portfolio_image']['id'], $settings['thumbnail_size']) : $item['atroly_portfolio_image']['url'];
                            $atroly_portfolio_image_alt = get_post_meta($item["atroly_portfolio_image"]["id"], "_wp_attachment_image_alt", true);
                        }

                        // Link
                        if ('2' == $item['atroly_portfolio_link_type']) {
                            $link = get_permalink($item['atroly_portfolio_page_link']);
                            $target = '_self';
                            $rel = 'nofollow';
                        } else {
                            $link = !empty($item['atroly_portfolio_link']['url']) ? $item['atroly_portfolio_link']['url'] : '';
                            $target = !empty($item['atroly_portfolio_link']['is_external']) ? '_blank' : '';
                            $rel = !empty($item['atroly_portfolio_link']['nofollow']) ? 'nofollow' : '';
                        }
                    ?>
                <?php if($settings['atroly_full_box_link_active'] == 'yes') : ?>
                    <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?>">
                        <a href="<?php echo esc_url($link); ?>">
                     <div class="portfolio__item mb-30 fix transition-3 wow fadeInUp atroly-el-box" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="portfolio__thumb include-bg" data-background="<?php echo esc_attr($atroly_portfolio_image_url); ?>"></div>
                            <div class="portfolio__content">

                                <?php if (!empty($item['atroly_portfolio_cat' ])): ?>
                            <div class="portfolio__tag">
                                <span class="atroly-el-box-tag"><?php echo atroly_kses($item['atroly_portfolio_cat']); ?></span>
                            </div>
                            <?php endif; ?>


                                <?php if($settings['atroly_full_box_link_active'] == 'yes') : ?>
                                <h3 class="portfolio__title atroly-el-box-title">
                                    <?php echo atroly_kses($item['atroly_portfolio_title' ]); ?>
                                </h3>
                                <?php else : ?>
                                    <h3 class="portfolio__title atroly-el-box-title">
                                    <?php if ($item['atroly_portfolio_link_switcher'] == 'yes') : ?>
                                    <a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_portfolio_title' ]); ?></a>
                                    <?php else : ?>
                                        <?php echo atroly_kses($item['atroly_portfolio_title' ]); ?>
                                    <?php endif; ?>
                                </h3>
                                <?php endif; ?>
                            </div>
                        <?php if (!empty($item['atroly_portfolio_description' ])): ?>
                        <div class="portfolio__text">
                           <p class="atroly-el-box-desc"><?php echo atroly_kses($item['atroly_portfolio_description' ]); ?></p>
                        </div>
                        <?php endif; ?>
                     </div>
                    </a>
                  </div>

                  <?php else : ?>
                    <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?>">
                     <div class="portfolio__item mb-30 fix transition-3 wow fadeInUp atroly-el-box" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="portfolio__thumb include-bg" data-background="<?php echo esc_attr($atroly_portfolio_image_url); ?>"></div>
                            <div class="portfolio__content">

                                <?php if (!empty($item['atroly_portfolio_cat' ])): ?>
                            <div class="portfolio__tag">
                                <span class="atroly-el-box-tag"><?php echo atroly_kses($item['atroly_portfolio_cat']); ?></span>
                            </div>
                            <?php endif; ?>


                            <h3 class="portfolio__title atroly-el-box-title">
                                    <?php if ($item['atroly_portfolio_link_switcher'] == 'yes') : ?>
                                    <a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_portfolio_title' ]); ?></a>
                                    <?php else : ?>
                                        <?php echo atroly_kses($item['atroly_portfolio_title' ]); ?>
                                    <?php endif; ?>
                                </h3>
                            </div>
                        <?php if (!empty($item['atroly_portfolio_description' ])): ?>
                        <div class="portfolio__text">
                           <p class="atroly-el-box-desc"><?php echo atroly_kses($item['atroly_portfolio_description' ]); ?></p>
                        </div>
                        <?php endif; ?>
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; ?>  
               </div>
            </div>
         </section>
         <!-- portfolio area end -->

        <?php endif; ?>

        <?php
	}
}

$widgets_manager->register( new ATROLY_Portfolio() );
