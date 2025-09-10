<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_FAQ extends Widget_Base {

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
		return 'atroly-faq';
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
		return __( 'FAQ', 'atrolycore' );
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
                ],
                'default' => 'layout-1',
            ]
        );
        $this->end_controls_section();

		 // atroly_section_title
		$this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1']);


		$this->start_controls_section(
            '_accordion',
            [
                'label' => esc_html__( 'Accordion', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );


        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
            'atroly_accordion_active_switch',
            [
                'label' => esc_html__( 'Show', 'atroly-core' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'atroly-core' ),
                'label_off' => esc_html__( 'Hide', 'atroly-core' ),
                'return_value' => 'yes',
                'default' => '0',
            ]
        );

        $repeater->add_control(
            'accordion_title', [
                'label' => esc_html__( 'Accordion Item', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'This is accordion item title' , 'atrolycore' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'accordion_description',
            [
                'label' => esc_html__('Description', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Facilis fugiat hic ipsam iusto laudantium libero maiores minima molestiae mollitia repellat rerum sunt ullam voluptates? Perferendis, suscipit.',
                'label_block' => true,
            ]
        );
        $this->add_control(
            'accordions',
            [
                'label' => esc_html__( 'Repeater Accordion', 'atrolycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'accordion_title' => esc_html__( 'This is accordion item title #1', 'atrolycore' ),
                    ],
                    [
                        'accordion_title' => esc_html__( 'This is accordion item title #2', 'atrolycore' ),
                    ],
                    [
                        'accordion_title' => esc_html__( 'This is accordion item title #3', 'atrolycore' ),
                    ],
                    [
                        'accordion_title' => esc_html__( 'This is accordion item title #4', 'atrolycore' ),
                    ],
                ],
                'title_field' => '{{{ accordion_title }}}',
            ]
        );

        $this->end_controls_section();

		$this->start_controls_section(
            'accordion_image_area',
            [
                'label' => esc_html__( 'Accordion Extra', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				'condition' => [
                    'atroly_design_style' => "layout-7" 
                ],

            ]
        );

		$this->add_control(
			'accordion_image',
			[
				'label' => esc_html__('Fag Image', 'atrolycore'),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				]

			]
		);

		$this->add_control(
			'accordion_video_url',
			[
				'label' => esc_html__('Video Url', 'atrolycore'),
				'type' => Controls_Manager::TEXTAREA,

			]
		);

		$this->add_control(
			'accordion_extra_text',
			[
				'label' => esc_html__('Extra Text', 'atrolycore'),
				'type' => Controls_Manager::TEXTAREA,

			]
		);

		$this->add_control(
			'accordion_extra_shape',
			[
				'label' => esc_html__('Accordion Shape', 'atrolycore'),
				'type' => Controls_Manager::SWITCHER,

			]
		);

		$this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                'default' => 'full',
            ]
        );
		
		$this->end_controls_section();

           // counter
           $this->start_controls_section(
            'atroly_counter_bg',
                [
                    'label' => esc_html__( 'Process counter', 'atrolycore' ),
                    'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                    'condition' => [
                        'atroly_design_style' => ['layout-1']
                    ]
                ]
            );
            $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'atroly_counter_fact_number', [
                'label' => esc_html__('Number', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'basic' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('17', 'atrolycore'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'atroly_counter_fact_title',
            [
                'label' => esc_html__('Title', 'atrolycore'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Food', 'atrolycore'),
                'label_block' => true,
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
        $this->add_control(
            'atroly_counter_fact_title_2_list',
            [
                'label' => esc_html__('Services - List', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_counter_fact_title' => esc_html__('Business Stratagy', 'atrolycore'),
                    ],
                    [
                        'atroly_counter_fact_number' => esc_html__('654655445', 'atrolycore'),
                    ]
                ],
                'title_field' => '{{{ atroly_counter_fact_title }}}',
            ]
        );

        $this->end_controls_section();
	}

	protected function style_tab_content(){
		$this->atroly_section_style_controls('faq_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des');
        $this->atroly_icon_style('fact_rep_icon', 'Fact Repeater Icon', '.atroly-el-frep-icon');
        $this->atroly_basic_style_controls('fact_rep_num', 'Fact Repeater Number', '.atroly-el-frep-num');
        $this->atroly_basic_style_controls('fact_rep_title', 'Fact Repeater Title', '.atroly-el-frep-title');
        $this->atroly_basic_style_controls('faq_rep_title', 'FAQ Repeater Title', '.atroly-el-faq-rep-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('faq_rep_des', 'FAQ Repeater Description', '.atroly-el-faq-rep-des', ['layout-1', 'layout-2', 'layout-3']);
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
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title');  
    if ( !empty($settings['accordion_image']['url']) ) {
        $accordion_image = !empty($settings['accordion_image']['id']) ? wp_get_attachment_image_url( $settings['accordion_image']['id'], $settings['thumbnail_size_size']) : $settings['accordion_image']['url'];
        $accordion_image_alt = get_post_meta($settings["accordion_image"]["id"], "_wp_attachment_image_alt", true);
    } 
?>
<div class="atroly-faq-breadcrumb-tab-content atroly-accordion">
    <div class="accordion" id="general_accordion-22">
        <?php foreach ( $settings['accordions'] as $index => $item) :
                $collapsed = ($index == '0' ) ? '' : 'collapsed';
                $aria_expanded = ($index == '0' ) ? "true" : "false";
                $show = $item['atroly_accordion_active_switch'] ? "show" : "";
                $active = $item['atroly_accordion_active_switch'] ? "atroly-faq-active" : "";
                ?>
        <div class="accordion-item <?php echo esc_attr($active); ?>">
            <h2 class="accordion-header atroly-el-faq-rep-title" id="headingOne1-<?php echo esc_attr($index); ?>">
                <button class="accordion-button <?php echo esc_attr($collapsed); ?>" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne1-<?php echo esc_attr($index); ?>"
                    aria-expanded="true" aria-controls="collapseOne1-<?php echo esc_attr($index); ?>">
                    <?php echo esc_html($item['accordion_title']); ?>
                </button>
            </h2>
            <div id="collapseOne1-<?php echo esc_attr($index); ?>"
                class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
                aria-labelledby="headingOne1-<?php echo esc_attr($index); ?>" data-bs-parent="#general_accordion-22">
                <div class="accordion-body">
                    <p class="atroly-el-faq-rep-des"><?php echo atroly_kses($item['accordion_description']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ):

	$this->add_render_attribute('title_args', 'class', 'atroly-section-title');  
	if ( !empty($settings['accordion_image']['url']) ) {
		$accordion_image = !empty($settings['accordion_image']['id']) ? wp_get_attachment_image_url( $settings['accordion_image']['id'], $settings['thumbnail_size_size']) : $settings['accordion_image']['url'];
		$accordion_image_alt = get_post_meta($settings["accordion_image"]["id"], "_wp_attachment_image_alt", true);
	} 
?>
<div class="atroly-faq-breadcrumb-tab-content atroly-accordion">
    <div class="accordion" id="general_accordion-2">
        <?php foreach ( $settings['accordions'] as $index => $item) :
				$collapsed = ($index == '0' ) ? '' : 'collapsed';
				$aria_expanded = ($index == '0' ) ? "true" : "false";
				$show = $item['atroly_accordion_active_switch'] ? "show" : "";
				$active = $item['atroly_accordion_active_switch'] ? "atroly-faq-active" : "";
				?>
        <div class="accordion-item <?php echo esc_attr($active); ?>">
            <h2 class="accordion-header atroly-el-faq-rep-title" id="headingOne-<?php echo esc_attr($index); ?>">
                <button class="accordion-button <?php echo esc_attr($collapsed); ?>" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo esc_attr($index); ?>"
                    aria-expanded="true" aria-controls="collapseOne-<?php echo esc_attr($index); ?>">
                    <?php echo esc_html($item['accordion_title']); ?>
                </button>
            </h2>
            <div id="collapseOne-<?php echo esc_attr($index); ?>"
                class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
                aria-labelledby="headingOne-<?php echo esc_attr($index); ?>" data-bs-parent="#general_accordion-2">
                <div class="accordion-body">
                    <p class="atroly-el-faq-rep-des"><?php echo atroly_kses($item['accordion_description']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php else : 
	$this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');  
	if ( !empty($settings['accordion_image']['url']) ) {
		$accordion_image = !empty($settings['accordion_image']['id']) ? wp_get_attachment_image_url( $settings['accordion_image']['id'], $settings['thumbnail_size_size']) : $settings['accordion_image']['url'];
		$accordion_image_alt = get_post_meta($settings["accordion_image"]["id"], "_wp_attachment_image_alt", true);
	}
?>
<!-- faq area start -->
<section class="atroly-faq-area p-relative pt-120 pb-120 atroly-el-section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/faq/bg-shape.png)">
    <div class="atroly-faq-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="atroly-faq-wrapper">
                    <div class="atroly-faq-title-wrapper">
                        <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <span class="atroly-section-title-pre atroly-el-sub-title"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
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
                    <div class="atroly-faq-counter-wrapper d-flex">
                        <?php foreach ( $settings['atroly_counter_fact_title_2_list'] as $index => $item) :?>
                        <div class="atroly-faq-counter d-flex align-items-center mr-20 mb-30">
                            <div class="atroly-faq-counter-icon">
                                <span>
                                    <?php if($item['atroly_service_icon_type'] == 'icon') : ?>
                                    <?php if (!empty($item['atroly_service_icon']) || !empty($item['atroly_service_selected_icon']['value'])) : ?>
                                    <div class="atroly-about-item-thumb atroly-el-frep-icon">
                                        <?php atroly_render_icon($item, 'atroly_service_icon', 'atroly_service_selected_icon'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php elseif( $item['atroly_service_icon_type'] == 'image' ) : ?>
                                    <?php if (!empty($item['atroly_service_image']['url'])): ?>
                                    <div class="atroly-about-item-thumb atroly-el-frep-icon">
                                        <img src="<?php echo $item['atroly_service_image']['url']; ?>"
                                            alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_service_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                    </div>
                                    <?php endif; ?>
                                    <?php else : ?>
                                    <?php if (!empty($item['atroly_service_icon_svg'])): ?>
                                    <div class="atroly-about-item-thumb atroly-el-frep-icon">
                                        <?php echo $item['atroly_service_icon_svg']; ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="atroly-faq-counter-content">
                                <h4 class="atroly-faq-counter-title atroly-el-frep-num"><span class="purecounter" data-purecounter-duration="3"
                                        data-purecounter-end="<?php echo atroly_kses($item['atroly_counter_fact_number']); ?>"></span>+
                                </h4>
                                <?php if ( !empty($item['atroly_counter_fact_title']) ) : ?>
                                <p class="atroly-el-frep-title"><?php echo atroly_kses($item['atroly_counter_fact_title']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="atroly-faq-tab-content atroly-accordion wow fadeInRight" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="accordion" id="general_accordion">
                        <?php foreach ( $settings['accordions'] as $index => $item) : 
		                $collapsed = ($index == '0' ) ? '' : 'collapsed';
		                $show = ($index == '0' ) ? "show" : "";
		            ?>
                        <div class="accordion-item atroly-faq-active">
                            <h2 class="accordion-header atroly-el-faq-rep-title" id="headingOne-<?php echo esc_attr($index); ?>">
                                <button class="accordion-button <?php echo esc_attr($collapsed); ?>" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne-<?php echo esc_attr($index); ?>" aria-expanded="true"
                                    aria-controls="collapseOne-<?php echo esc_attr($index); ?>">
                                    <?php echo esc_html($item['accordion_title']); ?>
                                </button>
                            </h2>
                            <div id="collapseOne-<?php echo esc_attr($index); ?>"
                                class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
                                aria-labelledby="headingOne-<?php echo esc_attr($index); ?>"
                                data-bs-parent="#general_accordion">
                                <div class="accordion-body">
                                    <p class="atroly-el-faq-rep-des"><?php echo atroly_kses($item['accordion_description']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end -->

<?php endif;
	}

}

$widgets_manager->register( new ATROLY_FAQ() );