<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYBGGradient;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Testimonial extends Widget_Base {

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
		return 'atroly-testimonial';
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
		return __( 'Testimonial', 'atrolycore' );
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

        
        // atroly_section_title
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1','layout-2','layout-3']);


        // button
        $this->atroly_button_render('testi', 'Button', ['layout-1','layout-2']);

        
        // testi shape
        $this->start_controls_section(
            'atroly_testi_shape',
                [
                  'label' => esc_html__( 'Testimonial Shape', 'atrolycore' ),
                  'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                  'condition' => [
                    'atroly_design_style' => ['layout-2']
                  ]
                ]
           );
   
           $this->add_control(
            'atroly_testi_shape_switch',
            [
              'label'        => esc_html__( 'Shape On/Off', 'atrolycore' ),
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

        
        // Review group
        $this->start_controls_section(
            'review_list',
            [
                'label' => esc_html__( 'Review List', 'atrolycore' ),
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
                    'repeater_condition' => ['style_1'],
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
                    'repeater_condition' => ['style_1'],
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
                        'repeater_condition' => ['style_1'],
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
                        'repeater_condition' => ['style_1'],
                    ]
                ]
            );
        }

        $repeater->add_control(
            'brand_logo',
            [
                'label' => esc_html__('Client Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'repeater_condition' => ['style_1','style_2']
                ]

            ]
        );

        $repeater->add_control(
            'brand_logo_2',
            [
                'label' => esc_html__('Brand Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'repeater_condition' => ['style_1','style_2','style_3']
                ]

            ]
        );
        $repeater->add_control(
            'review_content',
            [
                'label' => esc_html__( 'Review Content', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'rows' => 10,
                'default' => 'Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections Bonorum et Malorum original.',
                'placeholder' => esc_html__( 'Type your review content here', 'atrolycore' ),
            ]
        );

        $repeater->add_control(
            'reviewer_name', [
                'label' => esc_html__( 'Reviewer Name', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Rasalina William' , 'atrolycore' ),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => ['style_1', 'style_2']
                ]
            ]
        );

        $repeater->add_control(
            'reviewer_title', [
                'label' => esc_html__( 'Reviewer Title', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '- CEO at YES Germany' , 'atrolycore' ),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => ['style_1', 'style_2']
                ]
            ]
        );

        // rating
        $repeater->add_control(
            'atroly_testi_rating',
            [
                'label' => esc_html__('Select Rating Count', 'atrolycore'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => esc_html__('Single Star', 'atrolycore'),
                    '2' => esc_html__('2 Star', 'atrolycore'),
                    '3' => esc_html__('3 Star', 'atrolycore'),
                    '4' => esc_html__('4 Star', 'atrolycore'),
                    '5' => esc_html__('5 Star', 'atrolycore'),
                ],
                'default' => '5',
                'condition' => [
                    'repeater_condition' => ['style_1']
                ]
            ]
        );


        $this->add_control(
            'reviews_list',
            [
                'label' => esc_html__( 'Review List', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' =>  $repeater->get_controls(),
                'default' => [
                    [
                        'reviewer_name' => esc_html__( 'Rasalina William', 'atrolycore' ),
                        'reviewer_title' => esc_html__( 'CEO at YES Germany', 'atrolycore' ),
                        'review_content' => esc_html__( 'Construction can be defined as the art of building something. These construction quotes will put into perspective the fact that construction can be', 'atrolycore' ),
                    ],
                    [
                        'reviewer_name' => esc_html__( 'Rasalina William 2', 'atrolycore' ),
                        'reviewer_title' => esc_html__( 'CEO at YES Germany', 'atrolycore' ),
                        'review_content' => esc_html__( 'Construction can be defined as the art of building something. These construction quotes will put into perspective the fact that construction can be', 'atrolycore' ),
                    ],
                    [
                        'reviewer_name' => esc_html__( 'Rasalina William 3', 'atrolycore' ),
                        'reviewer_title' => esc_html__( 'CEO at YES Germany', 'atrolycore' ),
                        'review_content' => esc_html__( 'Construction can be defined as the art of building something. These construction quotes will put into perspective the fact that construction can be', 'atrolycore' ),
                    ],

                ],
                'title_field' => '{{{ reviewer_name }}}',
            ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail_size',
                'default' => 'full',
                'exclude' => ['custom'],
                'separator' => 'none',
            ]
        );


        $this->end_controls_section();


	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('testimonial_section', 'Section Style', '.ele-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2', 'layout-3']);
        # repeater
        $this->atroly_basic_style_controls('rep_content', 'Repeater Content', '.atroly-el-rep-content', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_name', 'Repeater Name', '.atroly-el-rep-name', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_designation', 'Repeater Designation', '.atroly-el-rep-designation', ['layout-1', 'layout-2', 'layout-3']);
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

<!--	testimonial style 3 -->
<?php if ( $settings['atroly_design_style']  == 'layout-2' ):
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');   
?>
<!-- testimonial area start -->
<section class="atroly-testimonial-area-2 p-relative pb-50 ele-section">
    <div class="container">
        <div class="row align-items-center">
            <?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="atroly-testimonial-title-2">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                    <span class="atroly-section-title-pre atroly-el-sub-title"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
            </div>
            <?php endif; ?>

            <div class="col-lg-6 col-md-6 col-sm-4">
                <div class="atroly-testimonial-nav-2 text-lg-end mb-55 d-none d-sm-block">
                    <button type="button" class="testimonial-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
                    </button>
                    <button type="button" class="testimonial-button-next-1"><i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="atroly-testimonial-slider-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="atroly-testimonial-2-active swiper-container">
                    <div class="swiper-wrapper mt-30 mb-70">
                        <?php foreach ($settings['reviews_list'] as $index => $item) : 
                                if ( !empty($item['brand_logo']['url']) ) {
                                $atroly_brand_logo = !empty($item['brand_logo']['id']) ? wp_get_attachment_image_url( $item['brand_logo']['id'], $settings['thumbnail_size_size']) : $item['brand_logo']['url'];
                                $atroly_brand_logo_alt = get_post_meta($item["brand_logo"]["id"], "_wp_attachment_image_alt", true);
                                    }
                           
                                ?>
                        <div class="swiper-slide">
                            <div class="atroly-testimonial-item-2">
                                <div class="atroly-testimonial-thumb-2">
                                    <img src="<?php echo esc_url($atroly_brand_logo); ?>"
                                        alt="<?php echo esc_attr($atroly_brand_logo_alt); ?>">
                                </div>
                                <div class="atroly-testimonial-content-2">
                                    <div class="atroly-testimonial-user d-flex align-items-center">
                                        <div class="atroly-testimonial-user-content">
                                            <?php if(!empty($item['reviewer_name']) ) : ?>
                                            <h3 class="atroly-testimonial-item-title atroly-el-rep-name">
                                                <?php echo atroly_kses($item['reviewer_name']); ?></h3>
                                            <?php endif; ?>
                                            <?php if(!empty($item['reviewer_title'])) : ?>
                                            <span class="atroly-testimonial-user-content-description atroly-el-rep-designation"><?php echo atroly_kses($item['reviewer_title']); ?></span>
                                            <?php endif; ?>
                                            <?php if ( !empty($item['review_content']) ) : ?>
                                            <p class="atroly-el-rep-content"><?php echo atroly_kses($item['review_content']); ?></p>
                                            <?php endif; ?>
                                            <div class="atroly-testimonial-quote">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->
<!--	testimonial style 3 -->
<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ):
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');     
?>
<!-- testimonial area start -->
<section class="atroly-testimonial-area-3 pb-90 p-relative ele-section">
    <div class="atroly-testimonial-shape-3">
        <img class="shape-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/support/shape-3.png" alt="">
        <img class="shape-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/support/shape-4.png" alt="">
    </div>
    <div class="container">
 
        <div class="row">
            <div class="col-lg-12">
                <div class="atroly-testimonial-title-wrapper-3 text-center mb-60">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <span class="atroly-section-title-pre atroly-el-sub-title"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
            </div>
        </div>
 
    <div class="row">
            <div class="atroly-testimonial-slider-3">
                <div class="atroly-testimonial-3-active swiper-container">
                    <div class="swiper-wrapper mb-30">
                        <?php foreach ($settings['reviews_list'] as $index => $item) : 
                            if ( !empty($item['brand_logo']['url']) ) {
                            $atroly_brand_logo = !empty($item['brand_logo']['id']) ? wp_get_attachment_image_url( $item['brand_logo']['id'], $settings['thumbnail_size_size']) : $item['brand_logo']['url'];
                            $atroly_brand_logo_alt = get_post_meta($item["brand_logo"]["id"], "_wp_attachment_image_alt", true);
                                }
                                if ( !empty($item['brand_logo_2']['url']) ) {
                                    $brand_logo_2 = !empty($item['brand_logo_2']['id']) ? wp_get_attachment_image_url( $item['brand_logo_2']['id'], $settings['thumbnail_size_size']) : $item['brand_logo']['url'];
                                    $atroly_brand_logo_alt = get_post_meta($item["brand_logo_2"]["id"], "_wp_attachment_image_alt", true);
                                    }
                        ?>
                        <div class="swiper-slide">
                            <div class="atroly-testimonial-item-3">
                                <div class="atroly-testimonial-brand d-flex justify-content-between mb-30">
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
                             
                                    <img src="<?php echo esc_url($brand_logo_2); ?>"
                                        alt="<?php echo esc_attr($atroly_brand_logo_alt); ?>">
                                </div>
                                <?php if ( !empty($item['review_content']) ) : ?>
                                <p class="atroly-el-rep-content"><?php echo atroly_kses($item['review_content']); ?></p>
                                <?php endif; ?>
                                <div class="atroly-testimonial-user-3 d-flex">
                                    <div class="atroly-testimonial-user-3-thumb">
                                    <img src="<?php echo esc_url($atroly_brand_logo); ?>"
                                        alt="<?php echo esc_attr($atroly_brand_logo_alt); ?>">
                                    </div>
                                    <div class="atroly-testimonial-user-3-content">
                                        <?php if(!empty($item['reviewer_name']) ) : ?>
                                        <h4 class="atroly-testimonial-user-3-title atroly-el-rep-name">
                                            <?php echo atroly_kses($item['reviewer_name']); ?></h4>
                                        <?php endif; ?>
                                        <?php if(!empty($item['reviewer_title'])) : ?>
                                        <span class="atroly-el-rep-designation"><?php echo atroly_kses($item['reviewer_title']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- default style -->
<?php else:
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');   
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }     


    if ('2' == $settings['atroly_testi_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_testi_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_testi_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_testi_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }
?>

<!-- testimonial area start --> 
<section class="atroly-testimonial-area atroly-testimonial-bg-color p-relative pt-80 pb-50 ele-section">
    <div class="atroly-testimonial-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial/bg-shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
            <div class="col-lg-12">
                <div class="atroly-testimonial-title">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                    <span class="atroly-section-title-pre atroly-el-sub-title"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
            </div>
            <?php endif; ?>
            <div class="atroly-testimonial-active swiper-container">
                <div class="swiper-wrapper mb-30 mt-20">
                    <?php foreach ($settings['reviews_list'] as $index => $item) : 
                        if ( !empty($item['brand_logo']['url']) ) {
                        $atroly_brand_logo = !empty($item['brand_logo']['id']) ? wp_get_attachment_image_url( $item['brand_logo']['id'], $settings['thumbnail_size_size']) : $item['brand_logo']['url'];
                        $atroly_brand_logo_alt = get_post_meta($item["brand_logo"]["id"], "_wp_attachment_image_alt", true);
                        }
                    ?>
                    <div class="swiper-slide">
                        <div class="atroly-testimonial-item-wrapper d-flex align-items-center">
                            <div class="atroly-testimonial-item-thumb">
                                <img src="<?php echo esc_url($atroly_brand_logo); ?>"
                                    alt="<?php echo esc_attr($atroly_brand_logo_alt); ?>">
                            </div>
                            <div class="atroly-testimonial-item-content p-relative">
                                <div class="atroly-testimonial-item-rating">
                                    <?php
                                $atroly_rating = $item['atroly_testi_rating'];
                                    for($i=1; $i<=$atroly_rating; $i++) :
                                    ?>
                                    <span class="color"><i class="fa-solid fa-star"></i></span>
                                    <?php endfor; ?>

                                </div>
                                <?php if ( !empty($item['review_content']) ) : ?>
                                <p class="atroly-el-rep-content"><?php echo atroly_kses($item['review_content']); ?></p>
                                <?php endif; ?>
                                <?php if(!empty($item['reviewer_name']) ) : ?>
                                <h4 class="atroly-testimonial-item-title atroly-el-rep-name">
                                    <?php echo atroly_kses($item['reviewer_name']); ?></h4>
                                <?php endif; ?>
                                <?php if(!empty($item['reviewer_title'])) : ?>
                                <span class="atroly-el-rep-designation"><?php echo atroly_kses($item['reviewer_title']); ?></span>
                                <?php endif; ?>
                                <div class="atroly-testimonial-item-quot">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="atroly-testimonial-nav text-end">
                <button type="button" class="testimonial-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
                </button>
                <button type="button" class="testimonial-button-next-1"><i class="fa-regular fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->


<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Testimonial() );