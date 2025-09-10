<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Background;
use \Elementor\Control_Media;
use \Elementor\Repeater;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Utils;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYBGGradient;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYGradient;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Hero_Banner extends Widget_Base {

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
		return 'hero-banner';
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
		return __( 'Hero Banner', 'atroly-core' );
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

    public function get_atroly_contact_form(){
        if ( ! class_exists( 'WPCF7' ) ) {
            return;
        }
        $atroly_cfa         = array();
        $atroly_cf_args     = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
        $atroly_forms       = get_posts( $atroly_cf_args );
        $atroly_cfa         = ['0' => esc_html__( 'Select Form', 'atrolycore' ) ];
        if( $atroly_forms ){
            foreach ( $atroly_forms as $atroly_form ){
                $atroly_cfa[$atroly_form->ID] = $atroly_form->post_title;
            }
        }else{
            $atroly_cfa[ esc_html__( 'No contact form found', 'atrolycore' ) ] = 0;
        }
        return $atroly_cfa;
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
                    'layout-2' => esc_html__('Layout 2', 'atroly-core')
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        $this->atroly_section_title_render_controls('banner', 'Banner Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1', 'layout-2','layout-3','layout-4','layout-5'], 'h2', '', true, 'yes', 'Your After Title Text');
        
        // Buttons (combined into one tab)
        $this->start_controls_section(
            'atroly_banner_btn',
            [
                'label' => esc_html__( 'Button', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => ['layout-1', 'layout-2', 'layout-3', 'layout-4', 'layout-5']
                ],
            ]
        );
        // Primary button
        $this->add_control(
            'atroly_banner_btn_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_banner_btn_link_type',
            [
                'label' => esc_html__( 'Button Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
            ]
        );
        $this->add_control(
            'atroly_banner_btn_link',
            [
                'label' => esc_html__( 'Button Link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'dynamic' => [ 'active' => true ],
                'placeholder' => esc_html__( 'https://your-link.com', 'atrolycore' ),
                'show_external' => false,
                'default' => [ 'url' => '#', 'is_external' => false, 'nofollow' => false ],
                'condition' => [ 'atroly_banner_btn_link_type' => '1' ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_banner_btn_page_link',
            [
                'label' => esc_html__( 'Select Button Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [ 'atroly_banner_btn_link_type' => '2' ],
            ]
        );
        // Secondary button
        $this->add_control(
            'atroly_banner2_btn_text',
            [
                'label' => esc_html__('Second Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'label_block' => true,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'atroly_banner2_btn_link_type',
            [
                'label' => esc_html__( 'Second Button Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
            ]
        );
        $this->add_control(
            'atroly_banner2_btn_link',
            [
                'label' => esc_html__( 'Second Button Link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'dynamic' => [ 'active' => true ],
                'placeholder' => esc_html__( 'https://your-link.com', 'atrolycore' ),
                'show_external' => false,
                'default' => [ 'url' => '#', 'is_external' => false, 'nofollow' => false ],
                'condition' => [ 'atroly_banner2_btn_link_type' => '1' ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_banner2_btn_page_link',
            [
                'label' => esc_html__( 'Select Second Button Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [ 'atroly_banner2_btn_link_type' => '2' ],
            ]
        );
        $this->end_controls_section();

        // banner shape
        $this->start_controls_section(
         'atroly_banner_shape',
             [
               'label' => esc_html__( 'Hero Shape', 'atrolycore' ),
               'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
             ]
         
        );

        $this->add_control(
         'atroly_banner_shape_switch',
         [
           'label'        => esc_html__( 'Shape On/Off', 'atrolycore' ),
           'type'         => \Elementor\Controls_Manager::SWITCHER,
           'label_on'     => esc_html__( 'Show', 'atrolycore' ),
           'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
           'return_value' => 'yes',
           'default'      => '0',
         ]
        );

        $this->add_control(
            'atroly_shape_image',
            [
                'label' => esc_html__( 'Choose Shape Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_banner_shape_switch' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'shape_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                'condition' => [
                    'atroly_banner_shape_switch' => 'yes'
                ]
            ]
        );
        
        $this->end_controls_section();


        // client part
        $this->start_controls_section(
            'atroly_client_thumb',
                [
                    'label' => esc_html__( 'Client', 'atrolycore' ),
                    'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
            );
    
            $this->add_control(
                'atroly_client_title',
                [
                    'label' => esc_html__('Client Title', 'atrolycore'),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('Our Team have handled so many clients so far', 'atrolycore'),
                    'label_block' => true,
                ]
            );
            $this->add_control(
                'atroly_client_image',
                [
                    'label' => esc_html__( 'Choose Client Image', 'atroly-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'atroly_client_image2',
                [
                    'label' => esc_html__( 'Choose Client Two Image', 'atroly-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'atroly_design_style' => ['layout-1']
                    ]
                ]
            );
    
            $this->add_control(
                'atroly_client_image3',
                [
                    'label' => esc_html__( 'Choose Client Three Image', 'atroly-core' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                    'condition' => [
                        'atroly_design_style' => ['layout-1']
                    ]
                ]
            );
            

            $this->add_control(
                'atroly_client_count',
                [
                    'label' => esc_html__('Client Count', 'atrolycore'),
                    'type' => Controls_Manager::TEXT,
                    'default' => esc_html__('48', 'atrolycore'),
                    'label_block' => true,
                ]
            );

            $this->add_group_control(
                Group_Control_Image_Size::get_type(),
                [
                    'name' => 'atroly_client_size',
                    'default' => 'full',
                    'exclude' => [
                        'custom'
                    ]
                ]
            );
            $this->end_controls_section();

        // thumbnail image
        $this->start_controls_section(
        'atroly_thumbnail_section',
            [
                'label' => esc_html__( 'Thumbnail', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'atroly_thumbnail_image',
            [
                'label' => esc_html__( 'Choose Thumbnail Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'atroly_thumbnail_image2',
            [
                'label' => esc_html__( 'Choose Thumbnail Two Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_design_style' => ['layout-1']
                ]
            ]
        );

        $this->add_control(
            'atroly_thumbnail_image3',
            [
                'label' => esc_html__( 'Choose Thumbnail Three Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_design_style' => ['layout-1']
                ]
            ]
        );
        $this->add_control(
            'atroly_thumbnail_image4',
            [
                'label' => esc_html__( 'Choose Thumbnail Four Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_design_style' => ['layout-1']
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'atroly_thumbnail_size',
                'default' => 'full',
                'exclude' => [
                    'custom'
                ]
            ]
        );
        $this->end_controls_section();
	}
    

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('banner_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_after_title', 'Section - After Title', '.atroly-after-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2']);
        $this->atroly_link_controls_style('section_btn', 'Section - Button', '.atroly-el-btn', ['layout-1', 'layout-2']);
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

    // thumbnail image
    if ( !empty($settings['atroly_thumbnail_image']['url']) ) {
        $atroly_thumbnail_image = !empty($settings['atroly_thumbnail_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image']['url'];
        $atroly_thumbnail_image_alt = get_post_meta($settings["atroly_thumbnail_image"]["id"], "_wp_attachment_image_alt", true);
    }

    // shape image
    if ( !empty($settings['atroly_shape_image_1']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_1']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_1']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_2']['url']) ) {
        $atroly_shape_image_2 = !empty($settings['atroly_shape_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_2']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_2']['url'];
        $atroly_shape_image_alt_2 = get_post_meta($settings["atroly_shape_image_2"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_3']['url']) ) {
        $atroly_shape_image_3 = !empty($settings['atroly_shape_image_3']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_3']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_3']['url'];
        $atroly_shape_image_alt_3 = get_post_meta($settings["atroly_shape_image_3"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_4']['url']) ) {
        $atroly_shape_image_4 = !empty($settings['atroly_shape_image_4']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_4']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_4']['url'];
        $atroly_shape_image_alt_4 = get_post_meta($settings["atroly_shape_image_4"]["id"], "_wp_attachment_image_alt", true);
    }

    // client img
    if ( !empty($settings['atroly_client_image']['url']) ) {
        $atroly_client_image = !empty($settings['atroly_client_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_client_image']['id']) : $settings['atroly_client_image']['url'];
        $atroly_client_image_alt = get_post_meta($settings["atroly_client_image"]["id"], "_wp_attachment_image_alt", true);
    }

    // Link
    if ('2' == $settings['atroly_banner_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_banner_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn atroly-el-btn');
    } else {
        if ( ! empty( $settings['atroly_banner_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_banner_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn atroly-el-btn');
        }
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-hero-title-3 wow fadeInUp atroly-el-title');

?>

<?php if(!empty($atroly_shape_image_2)) : ?>
<img class="shape-1" src="<?php echo esc_url($atroly_shape_image_2); ?>"
    alt="<?php echo esc_attr($atroly_shape_image_alt_2); ?>">
<?php endif; ?>
<?php if(!empty($atroly_shape_image_3)) : ?>
<img class="shape-2" src="<?php echo esc_url($atroly_shape_image_3); ?>"
    alt="<?php echo esc_attr($atroly_shape_image_alt_3); ?>">
<?php endif; ?>
<!-- hero area start -->
<section class="atroly-hero-area-3 atroly-hero-hight-3 p-relative pt-220 atroly-el-section">
    <div class="atroly-hero-thumb-shape-3">
        <img class="shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/home-3/shape-1.png"
            alt="">
    </div>
    <div class="atroly-hero-thumb-shape-3-two">
        <img class="shape-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/home-3/shape-2.png"
            alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="atroly-hero-content-3 p-relative">
                    <div class="atroly-hero-title-wrapper-3 p-relative z-index-1">

                        <?php if ( !empty($settings['atroly_banner_sub_title' ]) ) : ?>
                        <span class="atroly-hero-subtitle-3 wow fadeInUp atroly-el-sub-title" data-wow-duration="1s"
                            data-wow-delay=".3s"><?php echo atroly_kses($settings['atroly_banner_sub_title']); ?></span>
                        <?php endif; ?>
                        <?php if ( !empty($settings['atroly_banner_title' ]) ) :
                            printf( '<%1$s %2$s>%3$s</%1$s>',
                                tag_escape( $settings['atroly_banner_title_tag'] ),
                                $this->get_render_attribute_string( 'title_args' ),
                                atroly_kses( $settings['atroly_banner_title' ] )
                                );
                        endif; ?>
                        <?php if ( !empty($settings['atroly_banner_after_title' ]) ) : ?>
                        <div class="atroly-after-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <?php echo atroly_kses($settings['atroly_banner_after_title']); ?>
                        </div>
                        <?php endif; ?>
                        <?php if ( !empty($settings['atroly_banner_description' ]) ) : ?>
                        <p class=" wow fadeInUp atroly-el-des" data-wow-duration="1s" data-wow-delay=".5s">
                            <?php echo atroly_kses($settings['atroly_banner_description']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="atroly-hero-button-wrapper-3 d-flex wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".7s">
                        <?php if ( !empty($settings['atroly_banner_btn_text']) ) : ?>
                        <div class="atroly-hero-btn-3">
                            <a
                                <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?>><?php echo atroly_kses($settings['atroly_banner_btn_text']); ?><span><i
                                        class="fa-regular fa-plus"></i></span></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="atroly-hero-thumb-main-3">
        <div class="atroly-hero-thumb-3">
            <img src="<?php echo esc_url($atroly_thumbnail_image); ?>"
                alt="<?php echo esc_url($atroly_thumbnail_image_alt); ?>">
        </div>
    </div>
</section>
<!-- hero area end -->

<?php else:

    // thumbnail image
    if ( !empty($settings['atroly_thumbnail_image']['url']) ) {
        $atroly_thumbnail_image = !empty($settings['atroly_thumbnail_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image']['url'];
        $atroly_thumbnail_image_alt = get_post_meta($settings["atroly_thumbnail_image"]["id"], "_wp_attachment_image_alt", true);
    }
    // thumbnail image2
    if ( !empty($settings['atroly_thumbnail_image2']['url']) ) {
        $atroly_thumbnail_image2 = !empty($settings['atroly_thumbnail_image2']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image2']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image2']['url'];
        $atroly_thumbnail_image_alt2 = get_post_meta($settings["atroly_thumbnail_image2"]["id"], "_wp_attachment_image_alt", true);
    }
    // thumbnail image3
    if ( !empty($settings['atroly_thumbnail_image3']['url']) ) {
        $atroly_thumbnail_image3 = !empty($settings['atroly_thumbnail_image3']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image3']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image3']['url'];
        $atroly_thumbnail_image_alt3 = get_post_meta($settings["atroly_thumbnail_image3"]["id"], "_wp_attachment_image_alt", true);
    }
    // thumbnail image4
    if ( !empty($settings['atroly_thumbnail_image4']['url']) ) {
        $atroly_thumbnail_image4 = !empty($settings['atroly_thumbnail_image4']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image4']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image4']['url'];
        $atroly_thumbnail_image_alt4 = get_post_meta($settings["atroly_thumbnail_image4"]["id"], "_wp_attachment_image_alt", true);
    }
    
    // shape image
    if ( !empty($settings['atroly_shape_image']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image"]["id"], "_wp_attachment_image_alt", true);
    }
    
    
    // Client image
    if ( !empty($settings['atroly_client_image']['url']) ) {
        $atroly_client_image = !empty($settings['atroly_client_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_client_image']['id'], $settings['atroly_client_size_size']) : $settings['atroly_client_image']['url'];
        $atroly_client_image_alt = get_post_meta($settings["atroly_client_image"]["id"], "_wp_attachment_image_alt", true);
    }


    
    // Client image 2
    if ( !empty($settings['atroly_client_image2']['url']) ) {
        $atroly_client_image2 = !empty($settings['atroly_client_image2']['id']) ? wp_get_attachment_image_url( $settings['atroly_client_image2']['id'], $settings['atroly_client_size_size']) : $settings['atroly_client_image2']['url'];
        $atroly_client_image_alt2 = get_post_meta($settings["atroly_client_image2"]["id"], "_wp_attachment_image_alt", true);
    }
    // Client image 3
    if ( !empty($settings['atroly_client_image3']['url']) ) {
        $atroly_client_image3 = !empty($settings['atroly_client_image3']['id']) ? wp_get_attachment_image_url( $settings['atroly_client_image3']['id'], $settings['atroly_client_size_size']) : $settings['atroly_client_image3']['url'];
        $atroly_client_image_alt3 = get_post_meta($settings["atroly_client_image3"]["id"], "_wp_attachment_image_alt", true);
    }
    
    

    $this->add_render_attribute('title_args', 'class', 'atroly-hero-title-2 wow fadeInUp atroly-el-title');
    // Link
    if ('2' == $settings['atroly_banner_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_banner_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn atroly-el-btn');
    } else {
        if ( ! empty( $settings['atroly_banner_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_banner_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn atroly-el-btn');
        }
    }
?>



<section class="hero--three overflow-hidden">
    <!-- < hero content -->
    <div class="hero-content--wrap">
        <div class="container position-relative">
            <div class="row gy-5">
                <div class="col-lg-10">
                    <div class="hero--content d-flex flex-column justify-content-start position-relative mb-50">
                        <h1 class="title text-start fw--400 wow animate__animated animate__fadeInUp splite-text"
                            data-splitting data-wow-delay="0.1">
                            <?php if ( !empty($settings['atroly_banner_title' ]) ) : ?>
                            <?php echo atroly_kses($settings['atroly_banner_title']); ?>
                            <?php endif; ?>
                            <?php if ( !empty($settings['atroly_banner_video_url' ]) ) : ?>
                            <span>
                                <video autoplay loop muted style="margin-bottom: -12px; width: 150px; height: 70px;"
                                    class="d-inline-block rounded-pill object-fit-cover mx-3 video_wrap">
                                        <source src="<?php echo $settings['atroly_banner_video_url']; ?>" type="video/mp4">
                                </video>
                            </span>
                            <?php endif; ?>
                            <?php if ( !empty($settings['atroly_banner_after_title' ]) ) : ?>
                            <?php echo atroly_kses($settings['atroly_banner_after_title']); ?>
                            <?php endif; ?>
                        </h1>
                        <?php if (!empty($settings['atroly_shape_image'])) :?>
                        <div class="element--wrap position-absolute d-none d-md-inline-block">
                            <img class="left_image_bounce" src="<?php echo esc_url($atroly_shape_image); ?>" alt="<?php echo esc_url($atroly_shape_image_alt); ?>">
                        </div>
                        <?php endif; ?>

                        <?php if ( !empty($settings['atroly_banner_description' ]) ) : ?>
                        <p class="subtitle fs--18 w--70 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                            <?php echo atroly_kses($settings['atroly_banner_description']); ?>
                        </p>
                        <?php endif; ?>
                        <div
                            class="btn--wrap flex-column flex-sm-row d-flex gap--24 wow animate__animated animate__fadeInUp">
                            <?php if ( !empty($settings['atroly_banner_btn_text']) ) : ?>
                            <a href="contact.html" class="btn btn--base btn--lg"><?php echo atroly_kses($settings['atroly_banner_btn_text']); ?></a>
                            <?php endif; ?>
                            <?php if ( !empty($settings['atroly_banner2_btn_text']) ) : ?>
                            <a href="practice-area.html" class="btn btn-outline--base btn--lg text--base"><?php echo atroly_kses($settings['atroly_banner2_btn_text']); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-end g-4">
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member one overflow-hidden">
                        <img class="fit--img" src="<?php echo esc_url($atroly_thumbnail_image); ?>" alt="<?php echo esc_url($atroly_thumbnail_image_alt); ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp">
                    <div class="team-member two overflow-hidden">
                        <img class="fit--img" src="<?php echo esc_url($atroly_thumbnail_image2); ?>" alt="<?php echo esc_url($atroly_thumbnail_image_alt2); ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp">
                    <div class="team-member three overflow-hidden">
                        <img class="fit--img" src="<?php echo esc_url($atroly_thumbnail_image3); ?>" alt="<?php echo esc_url($atroly_thumbnail_image_alt3); ?>">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="team-member four overflow-hidden">
                        <img class="fit--img" src="<?php echo esc_url($atroly_thumbnail_image4); ?>" alt="<?php echo esc_url($atroly_thumbnail_image_alt4); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero content   -->

    <!-- < team group content -->
    <div class="team--group position-absolute">
        <div class="content--wrap">
            <h2 class="fs--18 fw--400 mb-2 wow animate__animated animate__fadeInUp">
                <?php echo atroly_kses($settings['atroly_client_title']); ?>
            </h2>
        </div>
        <div class="thumb--group d-flex position-relative">
            <div class="thumb one position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0s">
                <img class="fit--img" src="<?php echo esc_url($atroly_client_image); ?>" alt="<?php echo esc_url($atroly_client_image_alt); ?>">
            </div>
            <div class="thumb two position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0.2s">
                <img class="fit--img" src="<?php echo esc_url($atroly_client_image2); ?>" alt="<?php echo esc_url($atroly_client_image_alt2); ?>">
            </div>
            <div class="thumb three position-relative radius--50 wow animate__animated animate__fadeInRight"
                data-wow-delay="0.4s">
                <img class="fit--img" src="<?php echo esc_url($atroly_client_image3); ?>" alt="<?php echo esc_url($atroly_client_image_alt3); ?>">
            </div>
            <div class="thumb four position-relative radius--50 bg--base sdf flex-shrink-0 d-flex justify-content-center align-items-center wow animate__animated animate__fadeInRight"
                data-wow-delay="0.6s">
                <span class="text--white">+</span>
                <p class="text--white odometer" data-count="<?php echo esc_attr($settings['atroly_client_count']); ?>"></p>
            </div>
        </div>
    </div>
    <!-- team group content  -->
</section>

<?php endif; 
		
	}

}

$widgets_manager->register( new ATROLY_Hero_Banner() );