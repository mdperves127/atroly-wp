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
class ATROLY_Slider extends Widget_Base {

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
		return 'atroly-slider';
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
		return __( 'Slider', 'atroly-core' );
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
		return [ 'atroly-core' ];
	}


    protected static function get_profile_names()
    {
        return [
            'apple' => esc_html__('Apple', 'atroly-core'),
            'behance' => esc_html__('Behance', 'atroly-core'),
            'bitbucket' => esc_html__('BitBucket', 'atroly-core'),
            'codepen' => esc_html__('CodePen', 'atroly-core'),
            'delicious' => esc_html__('Delicious', 'atroly-core'),
            'deviantart' => esc_html__('DeviantArt', 'atroly-core'),
            'digg' => esc_html__('Digg', 'atroly-core'),
            'dribbble' => esc_html__('Dribbble', 'atroly-core'),
            'email' => esc_html__('Email', 'atroly-core'),
            'facebook' => esc_html__('Facebook', 'atroly-core'),
            'flickr' => esc_html__('Flicker', 'atroly-core'),
            'foursquare' => esc_html__('FourSquare', 'atroly-core'),
            'github' => esc_html__('Github', 'atroly-core'),
            'houzz' => esc_html__('Houzz', 'atroly-core'),
            'instagram' => esc_html__('Instagram', 'atroly-core'),
            'jsfiddle' => esc_html__('JS Fiddle', 'atroly-core'),
            'linkedin' => esc_html__('LinkedIn', 'atroly-core'),
            'medium' => esc_html__('Medium', 'atroly-core'),
            'pinterest' => esc_html__('Pinterest', 'atroly-core'),
            'product-hunt' => esc_html__('Product Hunt', 'atroly-core'),
            'reddit' => esc_html__('Reddit', 'atroly-core'),
            'slideshare' => esc_html__('Slide Share', 'atroly-core'),
            'snapchat' => esc_html__('Snapchat', 'atroly-core'),
            'soundcloud' => esc_html__('SoundCloud', 'atroly-core'),
            'spotify' => esc_html__('Spotify', 'atroly-core'),
            'stack-overflow' => esc_html__('StackOverflow', 'atroly-core'),
            'tripadvisor' => esc_html__('TripAdvisor', 'atroly-core'),
            'tumblr' => esc_html__('Tumblr', 'atroly-core'),
            'twitch' => esc_html__('Twitch', 'atroly-core'),
            'twitter' => esc_html__('Twitter', 'atroly-core'),
            'vimeo' => esc_html__('Vimeo', 'atroly-core'),
            'vk' => esc_html__('VK', 'atroly-core'),
            'website' => esc_html__('Website', 'atroly-core'),
            'whatsapp' => esc_html__('WhatsApp', 'atroly-core'),
            'wordpress' => esc_html__('WordPress', 'atroly-core'),
            'xing' => esc_html__('Xing', 'atroly-core'),
            'yelp' => esc_html__('Yelp', 'atroly-core'),
            'youtube' => esc_html__('YouTube', 'atroly-core'),
        ];
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

		
		$this->start_controls_section(
            'atroly_main_slider',
            [
                'label' => esc_html__('Main Slider', 'atrolycore'),
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
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );


        $repeater->add_control(
            'atroly_box_icon_type',
            [
                'label' => esc_html__('Select Icon Type', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'image',
                'options' => [
                    'image' => esc_html__('Image', 'atrolycore'),
                    'icon' => esc_html__('Icon', 'atrolycore'),
                    'svg' => esc_html__('SVG', 'atrolycore'),
                ],
                'condition' => [
                    'repeater_condition' => ['style_3'],
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
                    'repeater_condition' => ['style_3'],
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
                    'repeater_condition' => ['style_3'],
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
                        'repeater_condition' => ['style_3'],
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
                        'repeater_condition' => ['style_3'],
                    ]
                ]
            );
        }

        $repeater->add_control(
            'atroly_slider_sub_title',
            [
                'label' => esc_html__('Sub Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => Controls_Manager::TEXT,
                'default' => 'Subtitle',
                'placeholder' => esc_html__('Type Before Heading Text', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_slider_title',
            [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Grow business.', 'atrolycore'),
                'placeholder' => esc_html__('Type Heading Text', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_slider_title_tag',
            [
                'label' => esc_html__('Title HTML Tag', 'atrolycore'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'h1' => [
                        'title' => esc_html__('H1', 'atrolycore'),
                        'icon' => 'eicon-editor-h1'
                    ],
                    'h2' => [
                        'title' => esc_html__('H2', 'atrolycore'),
                        'icon' => 'eicon-editor-h2'
                    ],
                    'h3' => [
                        'title' => esc_html__('H3', 'atrolycore'),
                        'icon' => 'eicon-editor-h3'
                    ],
                    'h4' => [
                        'title' => esc_html__('H4', 'atrolycore'),
                        'icon' => 'eicon-editor-h4'
                    ],
                    'h5' => [
                        'title' => esc_html__('H5', 'atrolycore'),
                        'icon' => 'eicon-editor-h5'
                    ],
                    'h6' => [
                        'title' => esc_html__('H6', 'atrolycore'),
                        'icon' => 'eicon-editor-h6'
                    ]
                ],
                'default' => 'h2',
                'toggle' => false,
            ]
        );

        $repeater->add_control(
            'atroly_slider_description',
            [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration.', 'atrolycore'),
                'placeholder' => esc_html__('Type section description here', 'atrolycore'),
            ]
        );


        $repeater->add_control(
         'atroly_slider_background_text',
         [
           'label'   => esc_html__( 'Backround Text', 'atrolycore' ),
           'default' => 'POOREX',
           'type'    => \Elementor\Controls_Manager::TEXT,
           'condition' => [
                'repeater_condition' => 'style_2'
            ]
         ]
        );


        
		$repeater->add_control(
            'atroly_slider_shape_switch',
            [
                'label' => esc_html__( 'Enable Shape ?', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'before',
                'condition' => [
                    'repeater_condition' => 'style_1',
                ],
            ]
        );
        
		$repeater->add_control(
            'atroly_slider_bubble_switch',
            [
                'label' => esc_html__( 'Enable Bubble ?', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'no',
                'separator' => 'before',
                'condition' => [
                    'repeater_condition' => 'style_2',
                ],
            ]
        );

        $repeater->add_control(
            'atroly_slider_number',
            [
                'label' => esc_html__('Number Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Number', 'atrolycore'),
                'title' => esc_html__('0125485546 ', 'atrolycore'),
                'label_block' => true,
           
            ]
        );
        $repeater->add_control(
            'atroly_image_thumb',
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

        
		$repeater->add_control(
            'atroly_btn_link_switcher',
            [
                'label' => esc_html__( 'Add Button link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $repeater->add_control(
            'atroly_slider_category',
            [
                'label' => esc_html__('Slider Category', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('technology', 'atrolycore'),
                'placeholder' => esc_html__('Type Slider Category', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_btn_btn_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'title' => esc_html__('Enter button text', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'atroly_btn_link_switcher' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'atroly_btn_link_type',
            [
                'label' => esc_html__( 'Button Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'condition' => [
                    'atroly_btn_link_switcher' => 'yes',
                ]
            ]
        );
        
        $repeater->add_control(
            'atroly_btn_link',
            [
                'label' => esc_html__( 'Button Link link', 'atrolycore' ),
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
                    'atroly_btn_link_type' => '1',
                    'atroly_btn_link_switcher' => 'yes',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_btn_page_link',
            [
                'label' => esc_html__( 'Select Button Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_btn_link_type' => '2',
                    'atroly_btn_link_switcher' => 'yes',
                ]
            ]
        );

        $this->add_control(
            'slider_list',
            [
                'label' => esc_html__('Slider List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_slider_title' => esc_html__('Grow business.', 'atrolycore')
                    ],
                    [
                        'atroly_slider_title' => esc_html__('Development.', 'atrolycore')
                    ],
                    [
                        'atroly_slider_title' => esc_html__('Marketing.', 'atrolycore')
                    ],
                ],
                'title_field' => '{{{ atroly_slider_title }}}',
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                // 'default' => 'atroly-portfolio-thumb',
            ]
        );
        $this->end_controls_section();

        
	}

    
    protected function style_tab_content(){
        $this->atroly_section_style_controls('slider_section', 'Section Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('slider_subtitle', 'Subtitle Style', '.ele-sub-title');
        $this->atroly_basic_style_controls('slider_title', 'Title Style', '.ele-title');
        $this->atroly_basic_style_controls('slider_des', 'Description Style', '.ele-des');
        $this->atroly_link_controls_style('slider_btn', 'Button Style', '.ele-btn');
    }

	/**
	 * Render the widget ouatrolyut on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *Video Youtube link

	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		?>

<?php if ( $settings['atroly_design_style']  == 'layout-2' ): ?>





<?php else: 
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }


    if ( ! empty( $settings['atroly_slider_mouse_link']['url'] ) ) {
        $this->add_link_attributes( 'atroly-button-text-arg', $settings['atroly_slider_mouse_link'] );
        $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_slider_mouse_link'] );
        $this->add_render_attribute('atroly-button-arg', 'class', 'mouse-scroll-icon mouse-scroll-icon-4');
    }
    $bloginfo = get_bloginfo( 'name' );
?>

<!-- hero area start -->
<section class="atroly-hero-area p-relative">
    <div class="atroly-hero-wrapper-slider">
        <div class="atroly-hero-active swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($settings['slider_list'] as $item) : 
                $this->add_render_attribute('title_args', 'class', 'atroly-hero-title ele-title');

                $numericPart = preg_replace("/[^0-9]/", "", $item['atroly_slider_number']);  

                // Link
                if ( !empty($item['atroly_image_thumb']['url']) ) {
                    $atroly_image_thumb = !empty($item['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $item['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $item['atroly_image_thumb']['url'];
                    $atroly_image_alt = get_post_meta($item["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
                } 
                  // btn Link
                    if ('2' == $item['atroly_btn_link_type']) {
                        $link = get_permalink($item['atroly_btn_page_link']);
                        $target = '_self';
                        $rel = 'nofollow';
                    } else {
                        $link = !empty($item['atroly_btn_link']['url']) ? $item['atroly_btn_link']['url'] : '';
                        $target = !empty($item['atroly_btn_link']['is_external']) ? '_blank' : '';
                        $rel = !empty($item['atroly_btn_link']['nofollow']) ? 'nofollow' : '';
                    }
                ?>
                <div class="swiper-slide pt-160 pb-115 atroly-el-section">
                <div class="atroly-hero-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero/shape-bg.png');"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="atroly-hero-content p-relative">
                                    <div class="atroly-hero-title-wrapper">
                                        <?php if (!empty($item['atroly_slider_sub_title'])) : ?>
                                        <span class="atroly-hero-subtitle ele-sub-title"><?php echo atroly_kses( $item['atroly_slider_sub_title'] ); ?></span>
                                        <?php endif; ?>
                                        <?php
                                            if ($item['atroly_slider_title_tag']) :
                                                printf('<%1$s %2$s>%3$s</%1$s>',
                                                    tag_escape($item['atroly_slider_title_tag']),
                                                    $this->get_render_attribute_string('title_args'),
                                                    atroly_kses($item['atroly_slider_title'])
                                                );
                                            endif; ?>
                                        <?php if (!empty($item['atroly_slider_description'])) : ?>
                                        <p class="ele-des"><?php echo atroly_kses($item['atroly_slider_description']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="atroly-hero-button-wrapper d-flex flex-wrap align-items-center">
                                        <?php if (!empty($link)) : ?>
                                        <div class="atroly-hero-btn mr-30">
                                            <a class="atroly-btn ele-btn" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"
                                            rel="<?php echo esc_attr($rel); ?>">
                                            <?php echo atroly_kses($item['atroly_btn_btn_text']); ?><span><i
                                                        class="fa-regular fa-plus"></i></span>
                                            </a>
                                        </div>
                                        <?php endif; ?>

                                        <?php if (!empty($item['atroly_slider_number'])) : ?>
                                        <div class="atroly-hero-call d-flex align-items-center">
                                            <span>
                                                <svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                                                    xmlns="htatroly://www.w3.org/2000/svg">
                                                    <path
                                                        d="M29.6887 13.0168H25.1079C25.1079 13.0168 27.5332 8.62052 27.9335 8.12946C28.3382 7.63298 28.7214 7.94264 28.758 8.38069C28.7945 8.81866 28.7397 15.1698 28.7397 15.1698M22.9387 15.2699C22.9387 15.2699 19.4019 15.3144 19.2343 15.2585C19.0667 15.2027 19.503 14.9077 21.8218 11.5945C22.2549 10.9757 22.4932 10.4537 22.5947 10.0163L22.6306 9.73512C22.6306 8.70778 21.7978 7.875 20.7705 7.875C19.8665 7.875 19.1132 8.51977 18.9453 9.37455"
                                                        stroke="url(#paint0_linear_3043_11)" stroke-width="2.10938"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M32.7861 26.6714L29.7163 23.6016C28.7645 22.6497 27.2212 22.6497 26.2694 23.6016L23.6842 26.1867C21.5426 28.3284 18.0577 27.4539 13.7745 23.1708C9.49123 18.8875 8.61683 15.4026 10.7585 13.2611L13.3436 10.6759C14.2954 9.72406 14.2954 8.18084 13.3436 7.22902L10.2737 4.15918C9.32192 3.20736 7.7787 3.20736 6.82688 4.15918L4.24177 6.74429C-0.279393 11.2655 2.32723 20.3406 9.46592 27.4793C16.6046 34.618 25.6798 37.2246 30.201 32.7035L32.7862 30.1183C33.7379 29.1665 33.7379 27.6233 32.7861 26.6714Z"
                                                        stroke="url(#paint1_linear_3043_11)" stroke-width="2.10938"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M34.2298 21.7512C35.2892 19.7749 35.8906 17.5164 35.8906 15.1172C35.8906 7.35068 29.5946 1.05469 21.8281 1.05469C19.4289 1.05469 17.1704 1.65614 15.1941 2.71554M32.7861 26.6715L29.7163 23.6017C28.7645 22.6498 27.2212 22.6498 26.2694 23.6017L23.6842 26.1868C21.5426 28.3285 18.0577 27.454 13.7745 23.1709C9.49123 18.8876 8.61683 15.4027 10.7585 13.2611L13.3436 10.676C14.2954 9.72415 14.2954 8.18093 13.3436 7.22911L10.2737 4.15927C9.32192 3.20745 7.7787 3.20745 6.82688 4.15927L4.24177 6.74437C-0.279393 11.2655 2.32723 20.3407 9.46592 27.4794C16.6046 34.6181 25.6798 37.2247 30.201 32.7035L32.7862 30.1184C33.7379 29.1665 33.7379 27.6234 32.7861 26.6715Z"
                                                        stroke="url(#paint2_linear_3043_11)" stroke-width="2.10938"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear_3043_11"  x1="18.9453"
                                                            y1="11.5808" x2="29.6887" y2="11.5808"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#004D6E" />
                                                            <stop offset="1" stop-color="#00ACCC" />
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear_3043_11"  x1="2" y1="19.1953"
                                                            x2="33.5" y2="19.1953" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#004D6E" />
                                                            <stop offset="1" stop-color="#00ACCC" />
                                                        </linearGradient>
                                                        <linearGradient id="paint2_linear_3043_11"  x1="2" y1="18"
                                                            x2="35.8906" y2="18" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#004D6E" />
                                                            <stop offset="1" stop-color="#00ACCC" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <div class="atroly-hero-call-inner">
                                                <p><?php echo esc_html__("Need help?","atroly") ?></p>
                                                <span><a href="tel:<?php echo atroly_kses($numericPart); ?>"><?php echo atroly_kses($item['atroly_slider_number']); ?></a></span>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="atroly-hero-thumb p-relative">
                                    <div class="atroly-hero-thumb-shape">
                                        <img class="shape-1"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/shape-2.png"
                                            alt="">
                                        <img class="shape-2"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/shape-1.png"
                                            alt="">
                                        <img class="shape-3"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/shape-1.png"
                                            alt="">
                                    </div>
                                    <?php if(!empty($atroly_image_thumb)) : ?>
                                    <div class="atroly-hero-thumb-shape">
                                        <img src="<?php echo esc_url($atroly_image_thumb); ?>"
                                            alt="<?php echo esc_attr($atroly_image_alt); ?>">
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="atroly-hero-nav">
            <button type="button" class="hero-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
            </button>
            <button type="button" class="hero-button-next-1"><i class="fa-regular fa-arrow-right"></i>
            </button>
        </div>
        <div class="atroly-hero-pagination"></div>
    </div>
</section>


<?php endif; 
		
	}

}

$widgets_manager->register( new ATROLY_Slider() );