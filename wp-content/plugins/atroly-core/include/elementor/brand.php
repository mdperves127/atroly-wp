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
class ATROLY_Main_Brand extends Widget_Base {

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
		return 'atroly-brand';
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
		return __( 'Brand', 'atrolycore' );
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

        // brand section
		$this->start_controls_section(
            'atroly_brand_section',
            [
                'label' => __( 'Brand Item', 'atrolycore' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'atroly_brand_bg_image',
            [
                'label' => esc_html__('Upload Bg Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $repeater = new Repeater();

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
            'atroly_brand_image',
            [
                'type' => Controls_Manager::MEDIA,
                'label' => __( 'Image', 'atrolycore' ),
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        $this->add_control(
            'atroly_brand_slides',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => esc_html__( 'Brand Item', 'atrolycore' ),
                'default' => [
                    [
                        'atroly_brand_image' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'atroly_brand_image' => [
                            'url' => Utils::get_placeholder_image_src(),
                        ],
                    ],
                ]
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail',
                'default' => 'medium_large',
                'separator' => 'before',
                'exclude' => [
                    'custom'
                ]
            ]
        );

        $this->end_controls_section();

	}


    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('section_section', 'Section - Style', '.atroly-el-section');
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

<div class="atroly-brand-3-area breadcrumb-brand p-relative pt-65 pb-60 atroly-el-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="atroly-brand-3-wrapper">
                    <div class="brand-3-active swiper-container">
                        <div class="swiper-wrapper">

                            <?php foreach ($settings['atroly_brand_slides'] as $item) :
                                if ( !empty($item['atroly_brand_image']['url']) ) {
                                    $atroly_brand_image_url = !empty($item['atroly_brand_image']['id']) ? wp_get_attachment_image_url( $item['atroly_brand_image']['id'], $settings['thumbnail_size']) : $item['atroly_brand_image']['url'];
                                    $atroly_brand_image_alt = get_post_meta($item["atroly_brand_image"]["id"], "_wp_attachment_image_alt", true);
                                }
                            ?>
                            <div class="swiper-slide">
                                <div class="atroly-brand-3-thumb">
                                    <img src="<?php echo esc_url($atroly_brand_image_url); ?>"
                                        alt="<?php echo esc_attr($atroly_brand_image_alt); ?>">
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php else :
if ( !empty($settings['atroly_brand_bg_image']['url']) ) {
    $atroly_brand_bg_image_url = !empty($settings['atroly_brand_bg_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_brand_bg_image']['id'], $settings['thumbnail_size']) : $settings['atroly_brand_bg_image']['url'];
    $atroly_brand_bg_image_alt = get_post_meta($settings["atroly_brand_bg_image"]["id"], "_wp_attachment_image_alt", true);
}
?>
<!-- brand area start -->
<div class="atroly-brand-area atroly-brand-background-no p-relative pb-120 atroly-el-section">
    <div class="container">
        <div class="atroly-brand-wrapper p-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
        style="background-image:url(<?php echo esc_url($atroly_brand_bg_image_url); ?>)">
            <div class="row">
                <?php foreach ($settings['atroly_brand_slides'] as $item) :
                    if ( !empty($item['atroly_brand_image']['url']) ) {
                        $atroly_brand_image_url = !empty($item['atroly_brand_image']['id']) ? wp_get_attachment_image_url( $item['atroly_brand_image']['id'], $settings['thumbnail_size']) : $item['atroly_brand_image']['url'];
                        $atroly_brand_image_alt = get_post_meta($item["atroly_brand_image"]["id"], "_wp_attachment_image_alt", true);
                    }
                ?>
                <div class="col-lg-3">
                    <div class="atroly-brand-thumb">
                        <img src="<?php echo esc_url($atroly_brand_image_url); ?>"
                            alt="<?php echo esc_attr($atroly_brand_image_alt); ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->


<?php endif;  
	}
}

$widgets_manager->register( new ATROLY_Main_Brand() );