<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
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
class ATROLY_Services extends Widget_Base {

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
        return 'atroly-services';
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
        return __( 'Services', 'atrolycore' );
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
                    'layout-3' => esc_html__('Layout 3', 'atrolycore'),
                    'layout-4' => esc_html__('Layout 4', 'atrolycore'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        // title/content
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.', 'layout-1' );

        // Service group
        $this->start_controls_section(
            'atroly_services',
            [
                'label' => esc_html__('Services List', 'atrolycore'),
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
            'atroly_service_icon_type',
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
            'atroly_service_image',
            [
                'label' => esc_html__('Upload Icon Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_service_icon_type' => 'image'
                ]

            ]
        );

        if (atroly_is_elementor_version('<', '2.6.0')) {
            $repeater->add_control(
                'atroly_service_icon',
                [
                    'show_label' => false,
                    'type' => Controls_Manager::ICON,
                    'label_block' => true,
                    'default' => 'fa fa-star',
                    'condition' => [
                        'atroly_service_icon_type' => 'icon'
                    ]
                ]
            );
        } else {
            $repeater->add_control(
                'atroly_service_selected_icon',
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
                        'atroly_service_icon_type' => 'icon'
                    ]
                ]
            );
        }

        $repeater->add_control(
            'atroly_service_icon_svg',
            [
                'show_label' => false,
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'placeholder' => esc_html__('SVG Code Here', 'atroly-core'),
                'condition' => [
                    'atroly_service_icon_type' => 'svg',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_service_number', [
                'label' => esc_html__('Number Field', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('a', 'atrolycore'),
                'condition' => [
                    'repeater_condition' => 'style_2'
                ]
            ]
        );

        $repeater->add_control(
            'atroly_service_title', [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Service Title', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_service_description',
            [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('There are many variations of passages of Lorem Ipsum available, but the majority have suffered.', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'repeater_condition' => ['style_1', 'style_2', 'style_4', 'style_5']
                ]
            ]
        );

        $repeater->add_control(
            'atroly_services_link_switcher',
            [
                'label' => esc_html__( 'Add Services link', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'atrolycore' ),
                'label_off' => esc_html__( 'No', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'atroly_services_btn_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'title' => esc_html__('Enter button text', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_services_link_type',
            [
                'label' => esc_html__( 'Service Link Type', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'condition' => [
                    'atroly_services_link_switcher' => 'yes'
                ]
            ]
        );

        $repeater->add_control(
            'atroly_services_link',
            [
                'label' => esc_html__( 'Service Link link', 'atrolycore' ),
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
                    'atroly_services_link_type' => '1',
                    'atroly_services_link_switcher' => 'yes',
                ]
            ]
        );

        $repeater->add_control(
            'atroly_services_page_link',
            [
                'label' => esc_html__( 'Select Service Link Page', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_services_link_type' => '2',
                    'atroly_services_link_switcher' => 'yes',
                ]
            ]
        );
        $repeater->add_control(
            'atroly_image_thumb',
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
        $this->add_control(
            'atroly_service_list',
            [
                'label' => esc_html__('Services - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_service_title' => esc_html__('Business Stratagy', 'atrolycore'),
                    ],
                    [
                        'atroly_service_title' => esc_html__('Website Development', 'atrolycore')
                    ],
                    [
                        'atroly_service_title' => esc_html__('Marketing & Reporting', 'atrolycore')
                    ]
                ],
                'title_field' => '{{{ atroly_service_title }}}',
            ]
        );

        


        $this->end_controls_section();
        
        // button
        $this->atroly_button_render('services', 'Button', ['layout-6']);
    

        // section column
        $this->atroly_columns('col', ['layout-3', 'layout-4', 'layout-5']);

    }

    // style_tab_content
    protected function style_tab_content(){

        $this->atroly_section_style_controls('services_section', 'Section Style', '.ele-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des');
        $this->atroly_link_controls_style('section_btn', 'Section - Button', '.atroly-el-btn');
        # repeater
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title', ['layout-1', 'layout-2', 'layout-3', 'layout-4']);
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des', ['layout-1', 'layout-2', 'layout-3', 'layout-4']);
        $this->atroly_icon_style('rep_icon', 'Repeater Icon', '.atroly-el-rep-icon', ['layout-1', 'layout-2', 'layout-4']);
        $this->atroly_link_controls_style('rep_btn', 'Repeater Button', '.atroly-el-rep-btn', 'layout-3');
        
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

    if ( !empty($settings['atroly_image_thumb']['url']) ) {
        $atroly_image_thumb = !empty($settings['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_thumb']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
    }     

    // Link
    if ('2' == $settings['atroly_services_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_services_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_services_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_services_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>

<!-- service area start -->
<section class="atroly-service-area-2 ele-section">
    <div class="container">
        <div class="row">
            <?php foreach ($settings['atroly_service_list'] as $key => $item) :
            // Link
            if ( !empty($item['atroly_image_thumb']['url']) ) {
            $atroly_image_thumb = !empty($item['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $item['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $item['atroly_image_thumb']['url'];
            $atroly_image_alt = get_post_meta($item["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
        } 

            // Link
            if ('2' == $item['atroly_services_link_type']) {
                $link = get_permalink($item['atroly_services_page_link']);
                $target = '_self';
                $rel = 'nofollow';
            } else {
                $link = !empty($item['atroly_services_link']['url']) ? $item['atroly_services_link']['url'] : '';
                $target = !empty($item['atroly_services_link']['is_external']) ? '_blank' : '';
                $rel = !empty($item['atroly_services_link']['nofollow']) ? 'nofollow' : '';
            }
        ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="atroly-service-item-2 p-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <?php if(!empty($atroly_image_thumb)) : ?>
                    <div class="atroly-service-thumb-2 text-center">
                        <img src="<?php echo esc_url($atroly_image_thumb); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
                    </div>
                    <?php endif; ?>
                    <div class="atroly-service-icon-2">
                        <span>
                            <?php if($item['atroly_service_icon_type'] == 'icon') : ?>
                            <?php if (!empty($item['atroly_service_icon']) || !empty($item['atroly_service_selected_icon']['value'])) : ?>
                            <span class="atroly-el-rep-icon">
                                <?php atroly_render_icon($item, 'atroly_service_icon', 'atroly_service_selected_icon'); ?>
                            </span>
                            <?php endif; ?>
                            <?php elseif( $item['atroly_service_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($item['atroly_service_image']['url'])): ?>
                            <span class="atroly-el-rep-icon">
                                <img src="<?php echo $item['atroly_service_image']['url']; ?>"
                                    alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            </span>
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($item['atroly_service_icon_svg'])): ?>
                            <span class="atroly-el-rep-icon">
                                <?php echo $item['atroly_service_icon_svg']; ?>
                            </span>
                            <?php endif; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="atroly-service-content-2">
                        <?php if (!empty($item['atroly_service_description' ])): ?>
                        <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_service_description']); ?></p>
                        <?php endif; ?>
                        <h4 class="atroly-service-title-2 atroly-el-rep-title">
                            <?php if ($item['atroly_services_link_switcher'] == 'yes') : ?> <a
                                href="<?php echo esc_url($link); ?>">
                                <?php echo atroly_kses($item['atroly_service_title' ]); ?></a>
                            <?php else : ?>
                            <?php echo atroly_kses($item['atroly_service_title' ]); ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                    <div class="atroly-service-btn-2">
                        <a href="https://wphix.com/wp/atroly/service-details/"><i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- service area end -->

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ):
    if ( !empty($settings['atroly_image_thumb']['url']) ) {
        $atroly_image_thumb = !empty($settings['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_thumb']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
    }     
    // Link
    if ('2' == $settings['atroly_services_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_services_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_services_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_services_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>

<!-- service area start -->
<section class="atroly-service-area-3 ele-section">
    <div class="container">
        <div class="row">
            <?php foreach ($settings['atroly_service_list'] as $key => $item) :
                        // Link
                        if ('2' == $item['atroly_services_link_type']) {
                            $link = get_permalink($item['atroly_services_page_link']);
                            $target = '_self';
                            $rel = 'nofollow';
                        } else {
                            $link = !empty($item['atroly_services_link']['url']) ? $item['atroly_services_link']['url'] : '';
                            $target = !empty($item['atroly_services_link']['is_external']) ? '_blank' : '';
                            $rel = !empty($item['atroly_services_link']['nofollow']) ? 'nofollow' : '';
                        }
                    ?>
            <div class="col-lg-4 col-md-6">
                <div class="atroly-service-item-wrapper-3 p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-service-item-content-3">
                        <div class="atroly-service-item-icon-3">
                            <?php if($item['atroly_service_icon_type'] == 'icon') : ?>
                            <?php if (!empty($item['atroly_service_icon']) || !empty($item['atroly_service_selected_icon']['value'])) : ?>
                            <span>
                                <?php atroly_render_icon($item, 'atroly_service_icon', 'atroly_service_selected_icon'); ?>
                            </span>
                            <?php endif; ?>
                            <?php elseif( $item['atroly_service_icon_type'] == 'image' ) : ?>
                            <?php if (!empty($item['atroly_service_image']['url'])): ?>
                            <span>
                                <img src="<?php echo $item['atroly_service_image']['url']; ?>"
                                    alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                            </span>
                            <?php endif; ?>
                            <?php else : ?>
                            <?php if (!empty($item['atroly_service_icon_svg'])): ?>
                            <span>
                                <?php echo $item['atroly_service_icon_svg']; ?>
                            </span>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <h4 class="atroly-service-item-title-3 el-rep-title">
                            <?php if ($item['atroly_services_link_switcher'] == 'yes') : ?> <a
                                href="<?php echo esc_url($link); ?>">
                                <?php echo atroly_kses($item['atroly_service_title' ]); ?></a>
                            <?php else : ?>
                            <?php echo atroly_kses($item['atroly_service_title' ]); ?>
                            <?php endif; ?>
                        </h4>
                        <?php if (!empty($item['atroly_service_description' ])): ?>
                        <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_service_description']); ?></p>
                        <?php endif; ?>

                    </div>

                    <?php if ( !empty($item['atroly_services_btn_text']) ) : ?>
                    <div class="atroly-service-item-btn-3">
                        <a class="atroly-el-rep-btn" href="<?php echo esc_url($link); ?>" <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?>>
                            <?php echo atroly_kses($item['atroly_services_btn_text']); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="atroly-service-item-number">
                        <span>0<?php echo ( $key+1); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- service area end -->

<?php elseif ( $settings['atroly_design_style']  == 'layout-4' ):
    if ( !empty($settings['atroly_image_thumb']['url']) ) {
        $atroly_image_thumb = !empty($settings['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_thumb']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
    }     
    // Link
    if ('2' == $settings['atroly_services_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_services_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_services_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_services_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');
?>

<!-- service area start -->
<section class="atroly-service-breadcrumb-area pt-90 pb-40 ele-section">
    <div class="container">
        <div class="row">
        <?php foreach ($settings['atroly_service_list'] as $key => $item) :
                // Link
                if ( !empty($item['atroly_image_thumb']['url']) ) {
                    $atroly_image_thumb = !empty($item['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $item['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $item['atroly_image_thumb']['url'];
                    $atroly_image_alt = get_post_meta($item["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
                } 

                if ('2' == $item['atroly_services_link_type']) {
                    $link = get_permalink($item['atroly_services_page_link']);
                    $target = '_self';
                    $rel = 'nofollow';
                } else {
                    $link = !empty($item['atroly_services_link']['url']) ? $item['atroly_services_link']['url'] : '';
                    $target = !empty($item['atroly_services_link']['is_external']) ? '_blank' : '';
                    $rel = !empty($item['atroly_services_link']['nofollow']) ? 'nofollow' : '';
                }
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="atroly-service-item-wrapper p-relative mb-80 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="atroly-service-item-icon">
                <?php if($item['atroly_service_icon_type'] == 'icon') : ?>
                        <?php if (!empty($item['atroly_service_icon']) || !empty($item['atroly_service_selected_icon']['value'])) : ?>
                        <span class="atroly-el-rep-icon">
                            <?php atroly_render_icon($item, 'atroly_service_icon', 'atroly_service_selected_icon'); ?>
                        </span>
                        <?php endif; ?>
                        <?php elseif( $item['atroly_service_icon_type'] == 'image' ) : ?>
                        <?php if (!empty($item['atroly_service_image']['url'])): ?>
                        <span class="atroly-el-rep-icon">
                            <img src="<?php echo $item['atroly_service_image']['url']; ?>"
                                alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                        </span>
                        <?php endif; ?>
                        <?php else : ?>
                        <?php if (!empty($item['atroly_service_icon_svg'])): ?>
                        <span class="atroly-el-rep-icon">
                            <?php echo $item['atroly_service_icon_svg']; ?>
                        </span>
                        <?php endif; ?>
                        <?php endif; ?>
                </div>
                <div class="atroly-service-item-content">
                        <h4 class="atroly-service-item-title atroly-el-rep-title">
                            <?php if ($item['atroly_services_link_switcher'] == 'yes') : ?> <a
                                href="<?php echo esc_url($link); ?>">
                                <?php echo atroly_kses($item['atroly_service_title' ]); ?></a>
                            <?php else : ?>
                            <?php echo atroly_kses($item['atroly_service_title' ]); ?>
                            <?php endif; ?>
                        </h4>
                        <?php if (!empty($item['atroly_service_description' ])): ?>
                        <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_service_description']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="atroly-service-item-thumb">
                        <?php if(!empty($atroly_image_thumb)) : ?>
                        <div class="atroly-about-wrapper-thumb text-center text-xl-start fadeLeft">
                            <img src="<?php echo esc_url($atroly_image_thumb); ?>"
                                alt="<?php echo esc_attr($atroly_image_alt); ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- service area end -->

<?php else:
    // Link
    if ('2' == $settings['atroly_services_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_services_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', '');
    } else {
        if ( ! empty( $settings['atroly_services_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_services_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', '');
        }
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>
<!-- service area start -->
<section class="atroly-service-area pt-120 pb-90 ele-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="atroly-service-title-wrapper mb-40">
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
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="atroly-service-nav text-end">
                    <button type="button" class="service-button-prev-1 atroly-el-btn"><i class="fa-regular fa-arrow-left"></i>
                    </button>
                    <button type="button" class="service-button-next-1 atroly-el-btn"><i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div class="atroly-service-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="swiper-wrapper mb-30 mt-40">
                    <?php foreach ($settings['atroly_service_list'] as $key => $item) :
                        // Link
                        if ( !empty($item['atroly_image_thumb']['url']) ) {
                            $atroly_image_thumb = !empty($item['atroly_image_thumb']['id']) ? wp_get_attachment_image_url( $item['atroly_image_thumb']['id'], $settings['atroly_image_size_size']) : $item['atroly_image_thumb']['url'];
                            $atroly_image_alt = get_post_meta($item["atroly_image_thumb"]["id"], "_wp_attachment_image_alt", true);
                        } 

                        if ('2' == $item['atroly_services_link_type']) {
                            $link = get_permalink($item['atroly_services_page_link']);
                            $target = '_self';
                            $rel = 'nofollow';
                        } else {
                            $link = !empty($item['atroly_services_link']['url']) ? $item['atroly_services_link']['url'] : '';
                            $target = !empty($item['atroly_services_link']['is_external']) ? '_blank' : '';
                            $rel = !empty($item['atroly_services_link']['nofollow']) ? 'nofollow' : '';
                        }
                    ?>
                    <div class="swiper-slide">
                        <div class="atroly-service-item-wrapper p-relative">
                            <div class="atroly-service-item-icon">
                                <?php if($item['atroly_service_icon_type'] == 'icon') : ?>
                                <?php if (!empty($item['atroly_service_icon']) || !empty($item['atroly_service_selected_icon']['value'])) : ?>
                                <span class="atroly-el-rep-icon">
                                    <?php atroly_render_icon($item, 'atroly_service_icon', 'atroly_service_selected_icon'); ?>
                                </span>
                                <?php endif; ?>
                                <?php elseif( $item['atroly_service_icon_type'] == 'image' ) : ?>
                                <?php if (!empty($item['atroly_service_image']['url'])): ?>
                                <span class="atroly-el-rep-icon">
                                    <img src="<?php echo $item['atroly_service_image']['url']; ?>"
                                        alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                </span>
                                <?php endif; ?>
                                <?php else : ?>
                                <?php if (!empty($item['atroly_service_icon_svg'])): ?>
                                <span class="atroly-el-rep-icon">
                                    <?php echo $item['atroly_service_icon_svg']; ?>
                                </span>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="atroly-service-item-content">
                                <h4 class="atroly-service-item-title atroly-el-rep-title">
                                    <?php if ($item['atroly_services_link_switcher'] == 'yes') : ?> <a
                                        href="<?php echo esc_url($link); ?>">
                                        <?php echo atroly_kses($item['atroly_service_title' ]); ?></a>
                                    <?php else : ?>
                                    <?php echo atroly_kses($item['atroly_service_title' ]); ?>
                                    <?php endif; ?>
                                </h4>
                                <?php if (!empty($item['atroly_service_description' ])): ?>
                                <p class="atroly-el-rep-des"><?php echo atroly_kses($item['atroly_service_description']); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="atroly-service-item-thumb">
                                <?php if(!empty($atroly_image_thumb)) : ?>
                                <div class="atroly-about-wrapper-thumb text-center text-xl-start fadeLeft">
                                    <img src="<?php echo esc_url($atroly_image_thumb); ?>"
                                        alt="<?php echo esc_attr($atroly_image_alt); ?>">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end -->


<?php endif; 
    }
}

$widgets_manager->register( new ATROLY_Services() ); 