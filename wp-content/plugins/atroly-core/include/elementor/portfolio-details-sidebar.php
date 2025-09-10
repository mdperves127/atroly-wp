<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Control_Media;
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
class ATROLY_Portfolio_Details_Sidebar extends Widget_Base {

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
		return 'atroly-portfolio-details-sidebar';
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
		return __( 'Portfolio Details Sidebar', 'atroly-core' );
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


        // title/content section
        $this->start_controls_section(
            'atroly_portfolio_sec',
                [
                'label' => esc_html__( 'Portfolio Content Section', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'atroly_social_icon_type',
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
            'atroly_social_image',
            [
                'label' => esc_html__('Upload Icon Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_social_icon_type' => 'image',
                ]

            ]
        );

        $repeater->add_control(
            'atroly_social_icon_svg',
            [
                    'show_label' => false,
                    'type' => Controls_Manager::TEXTAREA,
                    'label_block' => true,
                    'placeholder' => esc_html__('SVG Code Here', 'atrolycore'),
                    'condition' => [
                        'atroly_social_icon_type' => 'svg'
                    ]
            ]
        );

        if (atroly_is_elementor_version('<', '2.6.0')) {
            $repeater->add_control(
                'atroly_social_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                    'default' => 'fas fa-facebook-f',
                    'condition' => [
                        'atroly_social_icon_type' => 'icon'
                    ]
                ]
            );
        } else {
            $repeater->add_control(
                'atroly_social_selected_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICONS,
                    'fa4compatibility' => 'icon',
                    'label_block' => true,
                    'default' => [
                        'value' => 'fab fa-facebook-f',
                        'library' => 'solid',
                    ],
                    'condition' => [
                        'atroly_social_icon_type' => 'icon'
                    ]
                ]
            );
        }
        


        $repeater->add_control(
            'atroly_features_sub_title', [
                'label' => esc_html__('Sub Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Client', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_features_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Portfolio Features Title', 'atrolycore'),
                'label_block' => true,
            ]
        );

        
       
        $this->add_control(
            'atroly_features_list',
            [
                'label' => esc_html__('Features - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_features_title' => esc_html__('Client name', 'atrolycore'),
                    ],
                    [
                        'atroly_features_title' => esc_html__('Catagories', 'atrolycore')
                    ],
                    [
                        'atroly_features_title' => esc_html__('Project Name', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_features_title }}}',
            ]
        );

        $this->end_controls_section();

        // title/content section
        $this->start_controls_section(
            'atroly_portfolio_sec_2',
                [
                'label' => esc_html__( 'Portfolio Content Section', 'atrolycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'atroly_social_icon_type',
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

        $this->add_control(
            'atroly_social_image',
            [
                'label' => esc_html__('Upload Icon Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_social_icon_type' => 'image',
                ]

            ]
        );

        $this->add_control(
            'atroly_social_icon_svg',
            [
                    'show_label' => false,
                    'type' => Controls_Manager::TEXTAREA,
                    'label_block' => true,
                    'placeholder' => esc_html__('SVG Code Here', 'atrolycore'),
                    'condition' => [
                        'atroly_social_icon_type' => 'svg'
                    ]
            ]
        );

        if (atroly_is_elementor_version('<', '2.6.0')) {
            $this->add_control(
                'atroly_social_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                    'default' => 'fas fa-facebook-f',
                    'condition' => [
                        'atroly_social_icon_type' => 'icon'
                    ]
                ]
            );
        } else {
            $this->add_control(
                'atroly_social_selected_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICONS,
                    'fa4compatibility' => 'icon',
                    'label_block' => true,
                    'default' => [
                        'value' => 'fab fa-facebook-f',
                        'library' => 'solid',
                    ],
                    'condition' => [
                        'atroly_social_icon_type' => 'icon'
                    ]
                ]
            );
        }
        


        $this->add_control(
            'atroly_features_sub_title', [
                'label' => esc_html__('Sub Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Client', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_features_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Portfolio Features Title', 'atrolycore'),
                'label_block' => true,
            ]
        );


        $this->end_controls_section();

       $this->atroly_button_render('banner', 'Button');

       


       // title/content section
       $this->start_controls_section(
           'atroly_portfolio_sec_social',
               [
               'label' => esc_html__( 'Portfolio Social Section', 'atrolycore' ),
               'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
           ]
       );

    $this->add_control(
        'facebook_title',
        [
            'type' => Controls_Manager::TEXT,
            'label_block' => false,
            'label' => __( 'Facebook', 'atrolycore' ),
            'default' => __( '#', 'atrolycore' ),
            'placeholder' => __( 'Add your facebook link', 'atrolycore' ),
            'dynamic' => [
                'active' => true,
            ]
        ]
    );                

    $this->add_control(
        'twitter_title',
        [
            'type' => Controls_Manager::TEXT,
            'label_block' => false,
            'label' => __( 'Twitter', 'atrolycore' ),
            'default' => __( '#', 'atrolycore' ),
            'placeholder' => __( 'Add your twitter link', 'atrolycore' ),
            'dynamic' => [
                'active' => true,
            ]
        ]
    );

    $this->add_control(
        'instagram_title',
        [
            'type' => Controls_Manager::TEXT,
            'label_block' => false,
            'label' => __( 'Instagram', 'atrolycore' ),
            'default' => __( '#', 'atrolycore' ),
            'placeholder' => __( 'Add your instagram link', 'atrolycore' ),
            'dynamic' => [
                'active' => true,
            ]
        ]
    );       
       

    $this->add_control(
        'youtube_title',
        [
            'type' => Controls_Manager::TEXT,
            'label_block' => false,
            'label' => __( 'Youtube', 'atrolycore' ),
            'placeholder' => __( 'Add your youtube link', 'atrolycore' ),
            'dynamic' => [
                'active' => true,
            ]
        ]
    );        

    

    $this->end_controls_section();

    $this->start_controls_section(
        'content_section',
        [
            'label' => esc_html__( 'Left Section', 'atrolycore' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'item_description',
        [
            'label' => esc_html__( 'Portfolio Details', 'atrolycore' ),
            'type' => \Elementor\Controls_Manager::WYSIWYG,
            'default' => esc_html__( 'Default description', 'atrolycore' ),
            'placeholder' => esc_html__( 'Type your description here', 'atrolycore' ),
        ]
    );

    $this->end_controls_section();

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('portfolio_section', 'Section - Style', '.atroly-el-section'); 
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


<?php else : 
    // Link
    if ('2' == $settings['atroly_banner_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_banner_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn-green wow atrolyfadeUp');
    } else {
        if ( ! empty( $settings['atroly_banner_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_banner_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn-green wow atrolyfadeUp');
        }
    }
    ?>
<div class="container">
<div class="row">
               <div class="col-lg-8">
               
               <?php echo atroly_kses($settings['item_description']); ?>
               </div>
               <div class="col-lg-4">
               <div class="atroly-portfolio-details-info-box">
    <?php foreach ($settings['atroly_features_list'] as $key => $item) : ?>
        <div class="atroly-portfolio-details-info-address">
        <?php if (!empty($item['atroly_features_title'])): ?>
            <h4 class="atroly-portfolio-details-info-title">
            <span>
                    <?php if($item['atroly_social_icon_type'] == 'icon') : ?>
                        <?php if (!empty($item['atroly_social_icon']) || !empty($item['atroly_social_selected_icon']['value'])) : ?>
                        <?php atroly_render_icon($item, 'atroly_social_icon', 'atroly_social_selected_icon'); ?>
                        <?php endif; ?>
                        <?php elseif( $item['atroly_social_icon_type'] == 'image' ) : ?>
                        <?php if (!empty($item['atroly_social_image']['url'])): ?>
                        <img src="<?php echo $item['atroly_social_image']['url']; ?>"
                            alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_social_image']['url']), '_wp_attachment_image_alt', true); ?>">
                        <?php endif; ?>
                        <?php else : ?>
                        <?php if (!empty($item['atroly_social_icon_svg'])): ?>
                        <?php echo $item['atroly_social_icon_svg']; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                
            </span>
                <?php echo atroly_kses($item['atroly_features_title']); ?></h4>
                
                <?php endif; ?>
                <?php if (!empty($item['atroly_features_sub_title'])): ?>
                    <p><?php echo atroly_kses($item['atroly_features_sub_title']); ?></p>
                <?php endif; ?>
        </div>
        <?php endforeach; ?>

        
        <div class="atroly-portfolio-details-info-open d-flex">
        <div class="atroly-portfolio-details-info-open-icon">
            <span>
                        <?php if($settings['atroly_social_icon_type'] == 'icon') : ?>
                            <?php if (!empty($settings['atroly_social_icon']) || !empty($settings['atroly_social_selected_icon']['value'])) : ?>
                            <?php atroly_render_icon($settings, 'atroly_social_icon', 'atroly_social_selected_icon'); ?>
                            <?php endif; ?>
                            <?php elseif( $settings['atroly_social_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($settings['atroly_social_image']['url'])): ?>
                            <img src="<?php echo $settings['atroly_social_image']['url']; ?>"
                                alt="<?php echo get_post_meta(attachment_url_to_postid($settings['atroly_social_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($settings['atroly_social_icon_svg'])): ?>
                            <?php echo $settings['atroly_social_icon_svg']; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </span>
                    </div>
                <div class="atroly-portfolio-details-info-open-content">
                    <?php if (!empty($settings['atroly_features_title'])): ?>
                        <h4 class="atroly-portfolio-details-info-title">
                            <?php echo atroly_kses($settings['atroly_features_title']); ?></h4>
                        </h4>
                    <?php endif; ?>
                    <?php if (!empty($settings['atroly_features_sub_title'])): ?>
                            <p><?php echo atroly_kses($settings['atroly_features_sub_title']); ?></p>
                        <?php endif; ?>
                </div>
                </div>
                <div class="atroly-portfolio-details-info-social">
                <?php if (!empty($settings['facebook_title'])): ?>
                    <a href=" <?php echo esc_url($settings['facebook_title']); ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>  
                <?php if (!empty($settings['twitter_title'])): ?>
                    <a href=" <?php echo esc_url($settings['twitter_title']); ?>"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>  
                <?php if (!empty($settings['instagram_title'])): ?>
                    <a href=" <?php echo esc_url($settings['instagram_title']); ?>"><i class="fa-brands fa-instagram"></i></a>
                <?php endif; ?>  
                <?php if (!empty($settings['youtube_title'])): ?>
                    <a href=" <?php echo esc_url($settings['youtube_title']); ?>"><i class="fa-brands fa-youtube"></i></a>
                <?php endif; ?>  
                </div>
                    </div>
               </div>
        </div>
</div>


<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Portfolio_Details_Sidebar() );
