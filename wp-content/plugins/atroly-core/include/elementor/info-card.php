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
class ATROLY_Info_Card extends Widget_Base {

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
		return 'atroly-info-card';
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
		return __( 'Info Card', 'atrolycore' );
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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'atrolycore_contact',
            [
                'label' => esc_html__('Contact Form', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atrolycore_select_contact_form',
            [
                'label'   => esc_html__( 'Select Form', 'atrolycore' ),
                'type'    => Controls_Manager::SELECT,
                'default' => '0',
                'options' => $this->get_atroly_contact_form(),
            ]
        );

        $this->end_controls_section();
		$this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.', ['layout-1'] );
        // Contact info list
        $this->start_controls_section(
            '_atroly_contact_info',
            [
                'label' => esc_html__('Contact  List', 'atrolycore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => 'layout-1'
                ]
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

        $repeater->add_control(
            'atroly_contact_title',
            [
                'label'       => esc_html__( 'Title', 'atrolycore' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Your Title here', 'atrolycore' ),
                'placeholder' => esc_html__( 'Your Heading Text', 'atrolycore' ),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_contact_des',
            [
                'label'       => esc_html__( 'Description', 'atrolycore' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'default'     => esc_html__( 'Your Description here', 'atrolycore' ),
                'placeholder' => esc_html__( 'Your Descripion Text', 'atrolycore' ),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_list',
            [
                'label' => esc_html__('Contact - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_contact_title' => esc_html__('Text 1', 'atrolycore'),
                    ],
                    [
                        'atroly_contact_title' => esc_html__('Text 2', 'atrolycore')
                    ],
                ],
                'title_field' => '{{{ atroly_contact_title }}}',
            ]
        );
        $this->end_controls_section();
                // Contact info list
                $this->start_controls_section(
                    'social_atroly_contact_info',
                    [
                        'label' => esc_html__('Contact  social', 'atrolycore'),
                        'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    ]
                );
        
                $repeater = new \Elementor\Repeater();
        
                $repeater->add_control(
                    'social_repeater_condition',
                    [
                        'label' => __( 'Field condition', 'atrolycore' ),
                        'type' => Controls_Manager::SELECT,
                        'options' => [
                            'style_1' => __( 'Style 1', 'atrolycore' ),
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
            'atroly_list_social',
            [
                'label' => esc_html__('Contact - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ atroly_box_icon_svg }}}',
            ]
        );
        $this->end_controls_section();

        
    }

    protected function style_tab_content(){
        $this->atroly_section_style_controls('card_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des');
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

<?php else: 
     $this->add_render_attribute('title_args', 'class', 'atroly-contact-breadcrumb-title atroly-el-title');
 ?>

<!-- contact area start -->
<section class="atroly-contact-breadcrumb-area pt-120 pb-90 atroly-el-section">
    <div class="container">
        <div class="atroly-contact-breadcrumb-box">
            <div class="atroly-contact-breadcrumb-social">

                <?php foreach ($settings['atroly_list_social'] as $key => $item) : ?>
                <a href="#">
                    <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                    <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                    <span><?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?></span>
                    <?php endif; ?>
                    <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                    <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                    <span><img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                            alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>"></span>
                    <?php endif; ?>
                    <?php else : ?>
                    <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                    <span><?php echo $item['atroly_box_icon_svg']; ?></span>
                    <?php endif; ?>
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="atroly-contact-breadcrumb-content">
                        
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
                        <div id="contact-form">
                        <?php if( !empty($settings['atrolycore_select_contact_form']) ) : ?>
                        <?php echo do_shortcode( '[contact-form-7  id="'.$settings['atrolycore_select_contact_form'].'"]' ); ?>
                        <?php else : ?>
                        <?php echo '<div class="alert alert-info"><p class="m-0">' . __('Please Select contact form.', 'atrolycore' ). '</p></div>'; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="atroly-contact-breadcrumb-wrapper">
                        <?php foreach ($settings['atroly_list'] as $key => $item) : 
                            $class = '';
                            if($key == 0){
                                $class = 'theme-color';
                            } elseif ($key == 1){
                                $class = 'theme-background';
                            } elseif ($key == 2){
                                $class = 'theme-color-2';
                            }
                            ?>
                        <div class="atroly-contact-breadcrumb-item mb-40 d-flex">
                            <div class="atroly-contact-breadcrumb-item-icon">
                                <span class="atroly-el-rep-icon">
                                    <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                                    <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                                    <span><?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?></span>
                                    <?php endif; ?>
                                    <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                                    <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                                    <span><img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                                            alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>"></span>
                                    <?php endif; ?>
                                    <?php else : ?>
                                    <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                                    <span><?php echo $item['atroly_box_icon_svg']; ?></span>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="atroly-contact-breadcrumb-item-content">

                                <?php if(!empty($item['atroly_contact_title'])) : ?>
                                <h3 class="atroly-contact-breadcrumb-item-title atroly-el-rep-title">
                                    <?php echo atroly_kses($item['atroly_contact_title']); ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($item['atroly_contact_des'])) : ?>
                                <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_contact_des']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Info_Card() );