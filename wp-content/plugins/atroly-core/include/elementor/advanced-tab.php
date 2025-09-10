<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Advanced_Tab extends Widget_Base {

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
		return 'advanced-tab';
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
		return __( 'Advanced Tab', 'atrolycore' );
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


	protected function register_controls(){
        $this->register_controls_section();
        $this->style_tab_content();
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
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1', 'layout-2','layout-3']);

		$this->start_controls_section(
            '_section_price_tabs',
            [
                'label' => __('Advanced Tabs', 'atrolycore'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'title',
            [
                'type' => Controls_Manager::TEXT,
                'label' => __('Title', 'atrolycore'),
                'default' => __('Tab Title', 'atrolycore'),
                'placeholder' => __('Type Tab Title', 'atrolycore'),
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        $repeater->add_control(
            'template',
            [
                'label' => __('Section Template', 'atrolycore'),
                'placeholder' => __('Select a section template for as tab content', 'atrolycore'),
  
                'type' => Controls_Manager::SELECT2,
                'options' => get_elementor_templates()
            ]
        );

        $this->add_control(
            'tabs',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{title}}',
                'default' => [
                    [
                        'title' => 'Tab 1',
                    ],
                    [
                        'title' => 'Tab 2',
                    ]
                ]
            ]
        );

        $this->end_controls_section();

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('advanced_tab_section', 'Section Style', '.ele-section');
        $this->atroly_basic_style_controls('advanced_tab_sub_title', 'Subtitle Style', '.ele-subtitle');
        $this->atroly_basic_style_controls('advanced_tab_title', 'Heading Style', '.ele-heading');
        $this->atroly_basic_style_controls('advanced_tab_des', 'Content Style', '.ele-description');
        $this->atroly_basic_style_controls('advanced_tab_link', 'Tab Link Style', '.ele-link');
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
    // shape image
    if ( !empty($settings['atroly_shape_image_1']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_1']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_1']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_2']['url']) ) {
        $atroly_shape_image_2 = !empty($settings['atroly_shape_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_2']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_2']['url'];
        $atroly_shape_image_alt_2 = get_post_meta($settings["atroly_shape_image_2"]["id"], "_wp_attachment_image_alt", true);
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>
<section class="atroly-project-area-2 pt-120 ele-section atroly-el-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="atroly-project-title-wrapper-2 mb-60">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                    <span class="atroly-section-title-pre">
                        <?php echo atroly_kses($settings['atroly_section_sub_title']); ?></span>
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
            </div>
            <div class="col-lg-8">
                <div class="atroly-project-tab-wrapper tab-wrapper-2 d-flex justify-content-end wow fadeInRight"
                    data-wow-duration="1s" data-wow-delay=".3s">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'active' : '';
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo esc_attr($active); ?>"
                                id="pills-home-tab-<?php echo esc_attr($key); ?>" data-bs-toggle="pill"
                                data-bs-target="#pills-home-<?php echo esc_attr($key); ?>" type="button" role="tab"
                                aria-controls="pills-home-<?php echo esc_attr($key); ?>"
                                aria-selected="true"><?php echo atroly_kses($tab['title']); ?></button>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                    <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'show active' : '';
                        ?>
                    <div class="tab-pane fade <?php echo esc_attr($active); ?>"
                        id="pills-home-<?php echo esc_attr($key); ?>" role="tabpanel"
                        aria-labelledby="pills-home-tab-<?php echo esc_attr($key); ?>">
                        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content($tab['template'], true); ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ): 
    // shape image
    if ( !empty($settings['atroly_shape_image_1']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_1']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_1']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_2']['url']) ) {
        $atroly_shape_image_2 = !empty($settings['atroly_shape_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_2']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_2']['url'];
        $atroly_shape_image_alt_2 = get_post_meta($settings["atroly_shape_image_2"]["id"], "_wp_attachment_image_alt", true);
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>
<!-- project area start -->
<section class="atroly-project-area-3 pt-120 pb-90 atroly-el-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="atroly-project-title-wrapper-3 text-center mb-30">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                    <span class="atroly-section-title-pre">
                        <?php echo atroly_kses($settings['atroly_section_sub_title']); ?></span>
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="atroly-project-tab-wrapper d-flex justify-content-center">
                    <ul class="nav nav-pills mb-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
                        id="pills-tab" role="tablist">
                        <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'active' : '';
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo esc_attr($active); ?>" id="pills-home-tab-<?php echo esc_attr($key); ?>" data-bs-toggle="pill"
                                data-bs-target="#pills-home-<?php echo esc_attr($key); ?>" type="button" role="tab" aria-controls="pills-home-<?php echo esc_attr($key); ?>"
                                aria-selected="true"><?php echo atroly_kses($tab['title']); ?></button>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'show active' : '';
                        ?>
                    <div class="tab-pane fade <?php echo esc_attr($active); ?>" id="pills-home-<?php echo esc_attr($key); ?>" role="tabpanel"
                        aria-labelledby="pills-home-tab-<?php echo esc_attr($key); ?>">
                        <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content($tab['template'], true); ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project area end -->

<?php else: 
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>


<section class="atroly-project-area pb-95 ele-section atroly-el-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atroly-project-title-wrapper text-center mb-30">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                    <span class="atroly-section-title-pre">
                        <?php echo atroly_kses($settings['atroly_section_sub_title']); ?></span>
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
            </div>
            <div class="col-lg-12">
                <div class="atroly-project-tab-wrapper">
                    <ul class="nav nav-pills mb-60 justify-content-center wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s" id="pills-tab" role="tablist">

                        <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'active' : '';
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo esc_attr($active); ?>"
                                id="pills-home-tab-<?php echo esc_attr($key); ?>" data-bs-toggle="pill"
                                data-bs-target="#pills-home-<?php echo esc_attr($key); ?>" type="button" role="tab"
                                aria-controls="pills-home-<?php echo esc_attr($key); ?>"
                                aria-selected="true"><?php echo atroly_kses($tab['title']); ?></button>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <?php foreach ($settings['tabs'] as $key => $tab):
                            $active = ($key == 0) ? 'show active' : '';
                        ?>
                        <div class="tab-pane fade <?php echo esc_attr($active); ?>"
                            id="pills-home-<?php echo esc_attr($key); ?>" role="tabpanel"
                            aria-labelledby="pills-home-tab-<?php echo esc_attr($key); ?>">
                            <?php echo \Elementor\Plugin::instance()->frontend->get_builder_content($tab['template'], true); ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;

	}

}
$widgets_manager->register( new ATROLY_Advanced_Tab() );