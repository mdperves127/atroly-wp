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
class ATROLY_Contact_Location extends Widget_Base {

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
		return 'atroly-contact-location';
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
		return __( 'Contact Location', 'atrolycore' );
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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        // Contact group
        $this->start_controls_section(
            '_ATROLY_contact_info',
            [
                'label' => esc_html__('Contact Location List', 'atrolycore'),
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
                ],
                'default' => 'style_1',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );

        $repeater->add_control(
            'atroly_contact_badge',
            [
                'label' => esc_html__('Badge Text', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Main Office', 'atrolycore'),
                'label_block' => true,
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
            'atroly_contact_info_title',
            [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Title Here', 'atrolycore'),
                'label_block' => true,
            ]
        );     
        $repeater->add_control(
            'atroly_contact_info',
            [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('201 Stokes New York', 'atrolycore'),
                'label_block' => true,
            ]
        );    
        $repeater->add_control(
            'atroly_contact_link',
            [
                'label' => esc_html__('Link', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '#',
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
                        'atroly_contact_info_title' => esc_html__('united states', 'atrolycore'),
                    ],
                    [
                        'atroly_contact_info_title' => esc_html__('south Africa', 'atrolycore')
                    ],
                    [
                        'atroly_contact_info_title' => esc_html__('United Kingdom', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_contact_info_title }}}',
            ]
        );

        $this->end_controls_section();

        
        // section column
        $this->atroly_columns('col');

	}

    // TAB_STYLE
    protected function style_tab_content(){
        $this->atroly_section_style_controls('section_info', 'Section - Style', '.atroly-el-section');
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

<?php if ( $settings['atroly_design_style']  == 'layout-2' ) : ?>

<?php else : ?>

<div class="contact-info-area ">
    <div class="container">
        <div class="row">

            <?php foreach ($settings['atroly_list'] as $item) : ?>
            <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?> mb-30">
                <div class="contact-info-item p-relative"> 
                    <?php if(!empty($item['atroly_contact_badge'])) : ?>
                    <div class="contact-info-badge">
                        <span><?php echo atroly_kses($item['atroly_contact_badge']); ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                        <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                        <div class="contact-info-img">
                            <?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                        </div>
                        <?php endif; ?>
                    <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                        <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                        <div class="contact-info-img">
                            <img src="<?php echo $item['atroly_box_icon_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                        </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                        <div class="contact-info-img">
                            <?php echo $item['atroly_box_icon_svg']; ?>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="contact-info-title-box">
                        <?php if(!empty($item['atroly_contact_link'])) : ?>
                        <h5 class="contact-info-title-sm"><a href="<?php echo esc_url($item['atroly_contact_link']); ?>"><?php echo atroly_kses($item['atroly_contact_info_title']); ?></a></h5>
                        <?php else : ?>
                        <h5 class="contact-info-title-sm"><?php echo atroly_kses($item['atroly_contact_info_title']); ?></h5>
                        <?php endif; ?>
                        <?php if(!empty($item['atroly_contact_info'])) : ?>
                        <p><?php echo atroly_kses($item['atroly_contact_info']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Contact_Location() );
