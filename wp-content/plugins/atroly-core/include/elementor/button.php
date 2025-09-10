<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Control_Media;
use \Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Button extends Widget_Base {
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
		return 'atroly-button';
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
		return __( 'Button', 'atrolycore' );
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

        // atroly_btn_button_group
        $this->start_controls_section(
            'atroly_btn_button_group',
            [
                'label' => esc_html__('Button', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atroly_btn_button_show',
            [
                'label' => esc_html__( 'Show Button', 'atrolycore' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'atrolycore' ),
                'label_off' => esc_html__( 'Hide', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'atroly_btn_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'title' => esc_html__('Enter button text', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'atroly_btn_button_show' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'atroly_btn_link_type',
            [
                'label' => esc_html__('Button Link Type', 'atrolycore'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'label_block' => true,
                'condition' => [
                    'atroly_btn_button_show' => 'yes'
                ],
            ]
        );

        $this->add_control(
            'atroly_btn_link',
            [
                'label' => esc_html__('Button link', 'atrolycore'),
                'type' => Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => esc_html__('https://your-link.com', 'atrolycore'),
                'show_external' => false,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'condition' => [
                    'atroly_btn_link_type' => '1',
                    'atroly_btn_button_show' => 'yes'
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_btn_page_link',
            [
                'label' => esc_html__('Select Button Page', 'atrolycore'),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_btn_link_type' => '2',
                    'atroly_btn_button_show' => 'yes'
                ]
            ]
        );

        $this->add_responsive_control(
            'atroly_align',
            [
                'label' => esc_html__('Alignment', 'atrolycore'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'atrolycore'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'atrolycore'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'atrolycore'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => false,
                'selectors' => [
                    '{{WRAPPER}}' => 'text-align: {{VALUE}};'
                ]
            ]
        );

        
        // creative animation
        $this->add_control(
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
                    'atroly_design_style' => 'layout-2',
                ],
			]
		);

        $this->add_control(
            'atroly_anima_type',
            [
                'label' => __( 'Animation Type', 'atrolycore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'fadeInUp' => __( 'fadeInUp', 'atrolycore' ),
                    'fadeInDown' => __( 'fadeInDown', 'atrolycore' ),
                    'fadeInLeft' => __( 'fadeInLeft', 'atrolycore' ),
                    'fadeInRight' => __( 'fadeInRight', 'atrolycore' ),
                ],
                'default' => 'fadeInUp',
                'frontend_available' => true,
                'style_transfer' => true,
                'condition' => [
                    'atroly_creative_anima_switcher' => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'atroly_anima_dura', [
                'label' => esc_html__('Animation Duration', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0.3s', 'atrolycore'),
                'condition' => [
                    'atroly_creative_anima_switcher' => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'atroly_anima_delay', [
                'label' => esc_html__('Animation Delay', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('0.6s', 'atrolycore'),
                'condition' => [
                    'atroly_creative_anima_switcher' => 'yes',
                ],
            ]
        );
        
        $this->end_controls_section();

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_link_controls_style('main_button', 'Button Style', '.atroly-el-btn');
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
    $atroly_anima_type = $settings['atroly_anima_type']; 
    $atroly_anima_dura = $settings['atroly_anima_dura']; 
    $atroly_anima_delay = $settings['atroly_anima_delay']; 
    // Link
    if ('2' == $settings['atroly_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', "atroly-btn-yellow-border wow blue-bg  wow atroly-el-btn " . $atroly_anima_type);
        $this->add_render_attribute('atroly-button-arg', 'data-wow-duration', $atroly_anima_dura);
        $this->add_render_attribute('atroly-button-arg', 'data-wow-delay', $atroly_anima_delay);
    } else {
        if ( ! empty( $settings['atroly_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', "atroly-btn-yellow-border wow blue-bg  wow atroly-el-btn " . $atroly_anima_type);
            $this->add_render_attribute('atroly-button-arg', 'data-wow-duration', $atroly_anima_dura);
            $this->add_render_attribute('atroly-button-arg', 'data-wow-delay', $atroly_anima_delay);
        }
    }
?>

<a <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?> ><?php echo atroly_kses($settings['atroly_btn_text']); ?> <i class="far fa-angle-right"></i></a>


<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ): 
    $atroly_anima_type = $settings['atroly_anima_type']; 
    $atroly_anima_dura = $settings['atroly_anima_dura']; 
    $atroly_anima_delay = $settings['atroly_anima_delay']; 
    // Link
    if ('2' == $settings['atroly_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', "atroly-btn atroly-btn-hover alt-color-black  wow atroly-el-btn " . $atroly_anima_type);
        $this->add_render_attribute('atroly-button-arg', 'data-wow-duration', $atroly_anima_dura);
        $this->add_render_attribute('atroly-button-arg', 'data-wow-delay', $atroly_anima_delay);
    } else {
        if ( ! empty( $settings['atroly_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', "atroly-btn atroly-btn-hover alt-color-black  wow atroly-el-btn " . $atroly_anima_type);
            $this->add_render_attribute('atroly-button-arg', 'data-wow-duration', $atroly_anima_dura);
            $this->add_render_attribute('atroly-button-arg', 'data-wow-delay', $atroly_anima_delay);
        }
    }
?>

<a <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?>>
    <span><?php echo atroly_kses($settings['atroly_btn_text']); ?></span>
    <b></b>
</a>

<?php else: 
    $atroly_anima_type = $settings['atroly_anima_type']; 
    $atroly_anima_dura = $settings['atroly_anima_dura']; 
    $atroly_anima_delay = $settings['atroly_anima_delay']; 
    // Link
    if ('2' == $settings['atroly_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', "btn btn--base btn--lg");
    } else {
        $this->add_render_attribute('atroly-button-arg', 'class', "btn btn--base btn--lg");
        if ( ! empty( $settings['atroly_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_btn_link'] );
        }
    }
?>	

<a <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?>><?php echo atroly_kses($settings['atroly_btn_text']); ?></a>

<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Button() );