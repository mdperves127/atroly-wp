<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Background;
use \Elementor\Control_Media;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Video_Popup extends Widget_Base {

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
		return 'atroly-video-popup';
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
		return __( 'Video Popup', 'atrolycore' );
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

        // atroly_video
        $this->start_controls_section(
            'atroly_video',
            [
                'label' => esc_html__('Video', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atroly_video_url',
            [
                'label' => esc_html__('Video URL', 'atrolycore'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'https://www.youtube.com/watch?v=_RpLvsA1SNM',
                'label_block' => true,
                'description' => __("We recommended to put video url form video website such as 'youtube', 'vimeo'.", 'atrolycore')
            ]
        );

		$this->add_control(
            'atroly_thumbnail_image',
            [
                'label' => esc_html__( 'Choose Member Image', 'atroly-core' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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
        $this->atroly_section_style_controls('video_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_link_controls_style('section_btn', 'Video - Button', '.atroly-el-btn');
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


<?php else:
	if ( !empty($settings['atroly_thumbnail_image']['url']) ) {
        $atroly_thumbnail_image = !empty($settings['atroly_thumbnail_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image']['url'];
        $atroly_thumbnail_image_alt = get_post_meta($settings["atroly_thumbnail_image"]["id"], "_wp_attachment_image_alt", true);
    }
?>
<?php if(!empty($settings['atroly_video_url'])) : ?>
<!-- team area 2 start -->
<div class="atroly-team-video-area atroly-team-video-bg atroly-el-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atroly-team-video-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <?php if(!empty($atroly_thumbnail_image)) : ?>
                    <img src="<?php echo esc_url($atroly_thumbnail_image); ?>"
                        alt="<?php echo esc_attr($atroly_thumbnail_image_alt); ?>">
                    <?php endif; ?>
                    <div class="atroly-play-btn">
                        <a class="play-btn popup-video atroly-el-btn" href="<?php echo esc_url($settings['atroly_video_url']); ?>"><i
                                class="fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area 2 end -->
<?php endif; ?>


<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Video_Popup() );