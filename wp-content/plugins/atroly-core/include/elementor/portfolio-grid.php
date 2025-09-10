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
class ATROLY_Portfolio_Grid extends Widget_Base {

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
		return 'atroly-portfolio-grid';
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
		return __( 'Portfolio Grid', 'atrolycore' );
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

        // Security group
        $this->start_controls_section(
            'atroly_security',
            [
                'label' => esc_html__('Portfolio List', 'atrolycore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'atroly_security_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Portfolio Title', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_security_subtitle',
            [
                'label' => esc_html__('Subtitle', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        

        $repeater->add_control(
            'atroly_security_link_switcher',
            [
                'label' => esc_html__( 'Add Portfolio link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        
        $repeater->add_control(
            'atroly_security_link_type',
            [
                'label' => esc_html__( 'Portfolio Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'condition' => [
                    'atroly_security_link_switcher' => 'yes'
                ]
            ]
        );

        $repeater->add_control(
            'atroly_security_link',
            [
                'label' => esc_html__( 'Portfolio Link link', 'atrolycore' ),
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
                    'atroly_security_link_type' => '1',
                    'atroly_security_link_switcher' => 'yes',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_security_button_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'atroly_security_link_switcher' => 'yes'
                ]
            ]
        );

        $repeater->add_control(
            'atroly_security_page_link',
            [
                'label' => esc_html__( 'Select Portfolio Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_security_link_type' => '2',
                    'atroly_security_link_switcher' => 'yes',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_security_image',
            [
                'label' => esc_html__( 'Choose Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $repeater->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'atroly_image_size',
                'default' => 'full',
                'exclude' => [
                    'custom'
                ]
            ]
        );
        

        $this->add_control(
            'atroly_security_list',
            [
                'label' => esc_html__('Portfolios - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_security_title' => esc_html__('Discover', 'atrolycore'),
                    ],
                    [
                        'atroly_security_title' => esc_html__('Define', 'atrolycore')
                    ],
                    [
                        'atroly_security_title' => esc_html__('Develop', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_security_title }}}',

            ]
        );
        $this->end_controls_section();


	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('security_section', 'Section - Style', '.atroly-el-section'); 
        $this->atroly_section_style_controls('cta_section', 'CTA Section - Style', '.atroly-el-section-cta'); 
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
    $this->add_render_attribute('title_cta_args', 'class', 'atroly-portfolio__title-white');
?>


<?php else: 
	$this->add_render_attribute('title_args', 'class', 'atroly-section-title-4');
    
?>

<section class="atroly-portfolio-area pt-120 pb-60">
    <div class="container">
        <div class="row">
            <?php foreach ($settings['atroly_security_list'] as $key => $item) :
                    
                    if ('2' == $item['atroly_security_link_type']) {
                        $link = get_permalink($item['atroly_security_page_link']);
                        $target = '_self';
                        $rel = 'nofollow';
                    } else {
                        $link = !empty($item['atroly_security_link']['url']) ? $item['atroly_security_link']['url'] : '';
                        $target = !empty($item['atroly_security_link']['is_external']) ? '_blank' : '';
                        $rel = !empty($item['atroly_security_link']['nofollow']) ? 'nofollow' : '';
                    }
                    if ( !empty($item['atroly_security_image']['url']) ) {
                        $atroly_image = !empty($item['atroly_security_image']['id']) ? wp_get_attachment_image_url( $item['atroly_security_image']['id'], $item['atroly_image_size_size']) : $item['atroly_security_image']['url'];
                        $atroly_image_alt = get_post_meta($item["atroly_security_image"]["id"], "_wp_attachment_image_alt", true);
                    }
                ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="atroly-portfolio-item-wrapper">
                <div class="atroly-portfolio-item-thumb">
                    <?php if(!empty($atroly_image)) : ?>
                        <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
                    <?php endif; ?>
                </div>
                <div class="atroly-portfolio-item-content">
                <?php if (!empty($item['atroly_security_subtitle' ])): ?>
                    <span class="atroly-portfolio-item-subtitle"><?php echo atroly_kses($item['atroly_security_subtitle' ]); ?></span>
                    <?php endif; ?>
                        <?php if (!empty($item['atroly_security_title' ])): ?>
                            <h3 class="atroly-portfolio-item-title"><a href="<?php echo esc_url($link); ?>"><?php echo atroly_kses($item['atroly_security_title' ]); ?></a></h3>
                        <?php endif; ?>
                        <?php if(!empty($item['atroly_security_link_switcher'])) : ?>
                            <div class="atroly-portfolio-item-content-btn">
                                <a href="<?php echo esc_url($link); ?>"> <?php echo atroly_kses($item['atroly_security_button_text' ]); ?> <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
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

$widgets_manager->register( new ATROLY_Portfolio_Grid() );