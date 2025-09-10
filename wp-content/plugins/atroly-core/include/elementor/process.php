<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Process extends Widget_Base {

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
		return 'atroly-process';
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
		return __( 'Process', 'atrolycore' );
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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();
        // title/content
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.', 'layout-3' );
        // Process group
        $this->start_controls_section(
            'atroly_process',
            [
                'label' => esc_html__('Process List', 'atrolycore'),
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
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );
        
        

        $repeater->add_control(
            'atroly_process_icon_type',
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
            'atroly_process_image',
            [
                'label' => esc_html__('Upload Icon Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_process_icon_type' => 'image'
                ]

            ]
        );

        if (atroly_is_elementor_version('<', '2.6.0')) {
            $repeater->add_control(
                'atroly_process_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                    'default' => 'fa fa-star',
                    'condition' => [
                        'atroly_process_icon_type' => 'icon'
                    ]
                ]
            );
        } else {
            $repeater->add_control(
                'atroly_process_selected_icon',
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
                        'atroly_process_icon_type' => 'icon'
                    ]
                ]
            );
        }

        $repeater->add_control(
            'atroly_process_icon_svg',
            [
                'show_label' => false,
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'placeholder' => esc_html__('SVG Code Here', 'atroly-core'),
                'condition' => [
                    'atroly_process_icon_type' => 'svg',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_process_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Process Title', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_process_des', [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('onec suscipit ante ipsum. Donec quam at tortor hendrerit', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => 'style_1',
                ]
            ]
        );

        $this->add_control(
            'atroly_process_list',
            [
                'label' => esc_html__('Processs - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_process_title' => esc_html__('Discover', 'atrolycore'),
                    ],
                    [
                        'atroly_process_title' => esc_html__('Define', 'atrolycore')
                    ],
                    [
                        'atroly_process_title' => esc_html__('Develop', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_process_title }}}',
            ]
        );

        $this->add_control(
            'atroly_bottom_text', [
                'label' => esc_html__('Bottom Text', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('BRING THEM TOGETHER AND YOU OVERCOME THE ORDINARY.', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'atroly_design_style' => 'layout-1'
                ]
            ]
        );

        $this->end_controls_section();

        // process shape
        $this->start_controls_section(
        'atroly_process_shape',
            [
                'label' => esc_html__( 'Thumb Image', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => 'layout-3'
                ]
            ]
        );



        $this->add_control(
            'atroly_thumb_image_1',
            [
                'label' => esc_html__( 'Thumb Image 1', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'atroly_thumb_image_2',
            [
                'label' => esc_html__( 'Thumb Image 2', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'shape_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                'default' => 'full'
            ]
        );
        
        $this->end_controls_section();

        // Backround
        $this->start_controls_section(
        'atroly_process_bg',
            [
                'label' => esc_html__( 'Process Background', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => ['layout-2']
                ]
            ]
        );

        $this->add_control(
        'atroly_process_bg_switch',
        [
            'label'        => esc_html__( 'Background On/Off', 'atrolycore' ),
            'type'         => \Elementor\Controls_Manager::SWITCHER,
            'label_on'     => esc_html__( 'Show', 'atrolycore' ),
            'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
            'return_value' => 'yes',
            'default'      => '1',
        ]
        );

        $this->add_control(
            'atroly_bg_image_1',
            [
                'label' => esc_html__( 'Choose Background', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_process_bg_switch' => 'yes'
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'bg_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                'condition' => [
                    'atroly_process_bg_switch' => 'yes'
                ],
                'default' => 'full'
            ]
        );
        
        $this->end_controls_section();
                // counter
                $this->start_controls_section(
                    'atroly_counter_bg',
                        [
                            'label' => esc_html__( 'Process counter', 'atrolycore' ),
                            'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                            'condition' => [
                                'atroly_design_style' => ['layout-3']
                            ]
                        ]
                    );
                $this->add_control(
                    'atroly_counter_fact_number', [
                        'label' => esc_html__('Number', 'atrolycore'),
                        'description' => atroly_get_allowed_html_desc( 'basic' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('17', 'atrolycore'),
                        'label_block' => true,
                    ]
                );
                $this->add_control(
                    'atroly_counter_fact_title',
                    [
                        'label' => esc_html__('Title', 'atrolycore'),
                        'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Food', 'atrolycore'),
                        'label_block' => true,
                    ]
                );
                $this->add_control(
                    'atroly_counter_fact_number_2', [
                        'label' => esc_html__('Number 2', 'atrolycore'),
                        'description' => atroly_get_allowed_html_desc( 'basic' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('17', 'atrolycore'),
                        'label_block' => true,
                    ]
                );
                $this->add_control(
                    'atroly_counter_fact_title_2',
                    [
                        'label' => esc_html__('Title 2', 'atrolycore'),
                        'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => esc_html__('Food', 'atrolycore'),
                        'label_block' => true,
                    ]
                );
      
                $this->end_controls_section();

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('process_section', 'Section - Style', '.atroly-el-section'); 
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', 'layout-3');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', 'layout-3');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', 'layout-3');
        # repeate
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des', ['layout-1', 'layout-2', 'layout-3']);
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

<?php if ( $settings['atroly_design_style']  == 'layout-2' ) :

    if ( !empty($settings['atroly_bg_image_1']['url']) ) {
        $atroly_bg_image = !empty($settings['atroly_bg_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_bg_image_1']['id'], $settings['bg_image_size_size']) : $settings['atroly_bg_image_1']['url'];
        $atroly_bg_image_alt = get_post_meta($settings["atroly_bg_image_1"]["id"], "_wp_attachment_image_alt", true);
    }

?>
<section class="atroly-process-area-3 atroly-el-section">
    <div class="container">
        <div class="row">
            <?php foreach ($settings['atroly_process_list'] as $key => $item) : ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="atroly-process-item-3 text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-process-item-3-icon">
                        <span>
                            <?php if($item['atroly_process_icon_type'] == 'icon') : ?>
                            <?php if (!empty($item['atroly_process_icon']) || !empty($item['atroly_process_selected_icon']['value'])) : ?>
                            <?php atroly_render_icon($item, 'atroly_process_icon', 'atroly_process_selected_icon'); ?>
                            <?php endif; ?>
                            <?php elseif( $item['atroly_process_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($item['atroly_process_image']['url'])): ?>
                            <img src="<?php echo $item['atroly_process_image']['url']; ?>"
                                alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_process_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($item['atroly_process_icon_svg'])): ?>
                            <?php echo $item['atroly_process_icon_svg']; ?>
                            <?php endif; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <?php if (!empty($item['atroly_process_title'])): ?>
                    <h4 class="atroly-process-title-3 atroly-el-rep-title"><?php echo atroly_kses($item['atroly_process_title' ]); ?></h4>
                    <?php endif; ?>
                    <?php if (!empty($item['atroly_process_des'])): ?>
                    <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_process_des' ]); ?></p>
                    <?php endif; ?>
                    <b>0<?php echo ( $key+1); ?></b>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ) :
 
    if ( !empty($settings['atroly_thumb_image_1']['url']) ) {
        $atroly_thumb_image_1 = !empty($settings['atroly_thumb_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumb_image_1']['id'], $settings['bg_image_size_size']) : $settings['atroly_thumb_image_1']['url'];
        $atroly_bg_image_alt = get_post_meta($settings["atroly_thumb_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_thumb_image_2']['url']) ) {
        $atroly_thumb_image_2 = !empty($settings['atroly_thumb_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumb_image_2']['id'], $settings['bg_image_size_size']) : $settings['atroly_thumb_image_2']['url'];
        $atroly_bg_image_alt_2 = get_post_meta($settings["atroly_thumb_image_2"]["id"], "_wp_attachment_image_alt", true);
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>

<!-- process area start -->
<section class="atroly-process-arae pt-120 pb-50 atroly-el-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="atroly-process-wrapper">
                    <div class="atroly-process-title mb-70">
                        <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <span class="atroly-section-title-pre atroly-el-sub-title">
                            <?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?>
                        </span>
                        <?php endif; ?> 
                        <?php
                            if ( !empty($settings['atroly_section_title' ]) ) :
                                printf( '<%1$s %2$s>%3$s</%1$s>',
                                tag_escape( $settings['atroly_section_title_tag'] ),
                                $this->get_render_attribute_string( 'title_args' ),
                                atroly_kses( $settings['atroly_section_title' ] )
                                );
                            endif;
                        ?>
                        <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                        <p class="atroly-el-des"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php foreach ($settings['atroly_process_list'] as $key => $item) : ?>

                    <div class="atroly-process-item d-flex align-items-center">
                        <div class="atroly-process-item-icon">
                            <span>
                                <?php if($item['atroly_process_icon_type'] == 'icon') : ?>
                                <?php if (!empty($item['atroly_process_icon']) || !empty($item['atroly_process_selected_icon']['value'])) : ?>
                                <?php atroly_render_icon($item, 'atroly_process_icon', 'atroly_process_selected_icon'); ?>
                                <?php endif; ?>
                                <?php elseif( $item['atroly_process_icon_type'] == 'image' ) : ?>
                                <?php if (!empty($item['atroly_process_image']['url'])): ?>
                                <img src="<?php echo $item['atroly_process_image']['url']; ?>"
                                    alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_process_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                <?php endif; ?>
                                <?php else : ?>
                                <?php if (!empty($item['atroly_process_icon_svg'])): ?>
                                <?php echo $item['atroly_process_icon_svg']; ?>
                                <?php endif; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                        <div class="atroly-process-item-content">
                            <?php if (!empty($item['atroly_process_title'])): ?>
                            <h4 class="atroly-process-item-title atroly-el-rep-title"><?php echo atroly_kses($item['atroly_process_title' ]); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($item['atroly_process_des'])): ?>
                            <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_process_des' ]); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="atroly-process-thumb-wrapper p-relative wow fadeInRight" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-process-thumb p-relative">
                        <?php if(!empty($atroly_thumb_image_1)) : ?>
                        <div class="main">
                            <img src="<?php echo esc_url($atroly_thumb_image_1); ?>"
                                alt="<?php echo esc_attr($atroly_bg_image_alt); ?>">
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($atroly_thumb_image_2)) : ?>
                        <div class="shape-1">
                            <img src="<?php echo esc_url($atroly_thumb_image_2); ?>"
                                alt="<?php echo esc_attr($atroly_bg_image_alt_2); ?>">
                        </div>
                        <?php endif; ?>

                    </div>
                    <div class="atroly-process-counter d-flex align-items-center">
                        <div class="atroly-process-counter-icon">
                            <span>
                                <i class="flaticon-030-machine-repair"></i>
                            </span>
                        </div>
                        <div class="atroly-process-content">
                            <h4 class="atroly-process-counter-title"><span class="purecounter" data-purecounter-duration="3"
                                    data-purecounter-end="<?php echo atroly_kses($settings['atroly_counter_fact_number']); ?>"></span>k+</h4>
                            <?php if ( !empty($settings['atroly_counter_fact_title']) ) : ?>
                            <p><?php echo atroly_kses($settings['atroly_counter_fact_title']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="atroly-process-trusted text-center">
                        <p><?php echo atroly_kses($settings['atroly_counter_fact_title_2']); ?><br> <span class="purecounter" data-purecounter-duration="10"
                                    data-purecounter-end="<?php echo atroly_kses($settings['atroly_counter_fact_number']); ?>"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
<!-- process area end -->

<?php else: 

    // shape image
    if ( !empty($settings['atroly_shape_image_1']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_1']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_1']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_2']['url']) ) {
        $atroly_shape_image_2 = !empty($settings['atroly_shape_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_2']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_2']['url'];
        $atroly_shape_image_alt_2 = get_post_meta($settings["atroly_shape_image_2"]["id"], "_wp_attachment_image_alt", true);
    }

     if ( !empty($settings['atroly_bg_image_1']['url']) ) {
        $atroly_bg_image = !empty($settings['atroly_bg_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_bg_image_1']['id'], $settings['bg_image_size_size']) : $settings['atroly_bg_image_1']['url'];
        $atroly_bg_image_alt = get_post_meta($settings["atroly_bg_image_1"]["id"], "_wp_attachment_image_alt", true);
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-section-title'); 
?>

<!-- process area start -->
<section class="atroly-process-arae-2 atroly-el-section">
    <div class="container">
        <div class="atroly-process-wrapper-2 p-relative">
            <div class="atroly-process-arrows">
                <span class="shape-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/process/home-2/arrow-1.svg" alt="">
                </span>
                <span class="shape-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/process/home-2/arrow-1.svg" alt="">
                </span>
                <span class="shape-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/process/home-2/arrow-1.svg" alt="">
                </span>
            </div>
            <div class="row">
                <?php foreach ($settings['atroly_process_list'] as $key => $item) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="atroly-process-item-2 text-center p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="atroly-process-item-icon-2">
                            <span>
                                <?php if($item['atroly_process_icon_type'] == 'icon') : ?>
                                <?php if (!empty($item['atroly_process_icon']) || !empty($item['atroly_process_selected_icon']['value'])) : ?>
                                <?php atroly_render_icon($item, 'atroly_process_icon', 'atroly_process_selected_icon'); ?>
                                <?php endif; ?>
                                <?php elseif( $item['atroly_process_icon_type'] == 'image' ) : ?>
                                <?php if (!empty($item['atroly_process_image']['url'])): ?>
                                <img src="<?php echo $item['atroly_process_image']['url']; ?>"
                                    alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_process_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                <?php endif; ?>
                                <?php else : ?>
                                <?php if (!empty($item['atroly_process_icon_svg'])): ?>
                                <?php echo $item['atroly_process_icon_svg']; ?>
                                <?php endif; ?>
                                <?php endif; ?>
                                <i>0<?php echo ( $key+1); ?></i>
                            </span>
                        </div>
                        <div class="atroly-process-item-content-2">
                            <?php if (!empty($item['atroly_process_title'])): ?>
                            <h4 class="atroly-process-title atroly-el-rep-title"><?php echo atroly_kses($item['atroly_process_title' ]); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($item['atroly_process_des'])): ?>
                            <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_process_des' ]); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- process area end -->
<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Process() );