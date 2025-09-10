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
class ATROLY_Project_Box extends Widget_Base {

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
		return 'atroly-project-box';
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
		return __( 'Peoject Box', 'atrolycore' );
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

        // Review group
        $this->start_controls_section(
            'atroly_project',
            [
                'label' => esc_html__( 'Project', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'atroly_project_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Process Title', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_project_title_url', [
                'label' => esc_html__('Title url', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('#', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_project_desc', [
                'label' => esc_html__('Dese', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Process Title', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_image',
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

        $this->end_controls_section();


	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('testimonial_section', 'Section Style', '.ele-section');
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


<!--	testimonial style 2 -->
<?php if ( $settings['atroly_design_style']  == 'layout-2' ):
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');   
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }
?>
<div class="atroly-project-item-3 text-center mb-30 ">
    <div class="atroly-project-thumb-3">
        <?php if(!empty($atroly_image)) : ?>
        <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
        <?php endif; ?>
    </div>
    <div class="atroly-project-content-3">
        <?php if(!empty($settings['atroly_project_desc'])) : ?>
        <span><?php echo atroly_kses( $settings['atroly_project_desc'] ); ?></span>
        <?php endif; ?>
        <?php if(!empty($settings['atroly_project_title'])) : ?>
        <h4 class="atroly-project-title-3"><a
                href="<?php echo atroly_kses( $settings['atroly_project_title_url'] ); ?>"><?php echo atroly_kses($settings['atroly_project_title']); ?></a>
        </h4>
        <?php endif; ?>
    </div>
</div>



<!-- default style -->
<?php else:
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');   
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }
?>
<div class="atroly-project-thumb">
    <?php if(!empty($atroly_image)) : ?>
    <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
    <?php endif; ?>
    <div class="atroly-project-thumb-info">

        <?php if(!empty($settings['atroly_project_desc'])) : ?>
        <p><?php echo atroly_kses( $settings['atroly_project_desc'] ); ?></p>
        <?php endif; ?>

        <?php if(!empty($settings['atroly_project_title'])) : ?>
        <h4 class="atroly-project-thumb-title"><a
                href="<?php echo atroly_kses( $settings['atroly_project_title_url'] ); ?>"><?php echo atroly_kses($settings['atroly_project_title']); ?></a>
        </h4>
        <?php endif; ?>

    </div>
</div>

<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Project_Box() );