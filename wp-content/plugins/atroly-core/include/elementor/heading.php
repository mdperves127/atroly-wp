<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Utils;
use \Elementor\Control_Media;

use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Typography;
Use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Background;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Heading extends Widget_Base {

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
		return 'atroly-heading';
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
		return __( 'Heading', 'atrolycore' );
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

        // title/content
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',$control_condition = ['layout-1','layout-2','layout-3','layout-4']);


	}

    protected function style_tab_content(){
        $this->atroly_section_style_controls('heading_section', 'Section - Style', '.atroly-el-section');

        $this->atroly_basic_style_controls('heading_subtitle', 'Section - Subtitle', '.atroly-el-subtitle', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('heading_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('heading_desc', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2']);
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


<?php if($settings['atroly_design_style']  == 'layout-2'):
	$this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>

<?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
    <div class="atroly-team-title-wrapper-2 mb-60 atroly-el-section">
        <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
        <span class="atroly-section-title-pre atroly-el-subtitle"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
<?php endif; ?>



<?php else:
	$this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>
<?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
<div class="atroly-section-wrapper atroly-el-section">
    <div class="atroly-section-title-wrapper">
        <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
        <span class="atroly-section-title-pre atroly-el-subtitle"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
    </div>
    <?php if ( !empty($settings['atroly_section_description']) ) : ?>
    <p class="atroly-el-des"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Heading() );