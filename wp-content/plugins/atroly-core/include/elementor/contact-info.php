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
class ATROLY_Contact_Info extends Widget_Base {

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
		return 'atroly-contact-info';
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
		return __( 'Contact Info', 'atrolycore' );
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

        $this->atroly_section_title_render_controls('contact', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.');

        // Service group
        $this->start_controls_section(
            '_ATROLY_contact_info',
            [
                'label' => esc_html__('Contact  List', 'atrolycore'),
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
            'atroly_box_icon_type',
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
                'default' => 'Title Here',
                'label_block' => true,
            ]
        );  

        $repeater->add_control(
            'link_type',
            [
                'label' => __( 'Link Type', 'atrolycore' ),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '' => __( 'None', 'atrolycore' ),
                    'url' => __( 'URL', 'atrolycore' ),
                    'tell' => __( 'Phone Number', 'atrolycore' ),
                    'email' => __( 'Email', 'atrolycore' ),
                ],
                'default' => '',
                'frontend_available' => true,
                'style_transfer' => true,
            ]
        );

        // url
        $repeater->add_control(
            'atroly_contact_url',
            [
                'label' => esc_html__('URL', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '#',
                'label_block' => true,
                'condition' => [
                    'link_type' => 'url'
                ]
            ]
        );  

        // tell
        $repeater->add_control(
            'atroly_contact_tell',
            [
                'label' => esc_html__('Phone Number', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '012345',
                'label_block' => true,
                'condition' => [
                    'link_type' => 'tell'
                ]
            ]
        );  

        // email
        $repeater->add_control(
            'atroly_contact_email',
            [
                'label' => esc_html__('Email Address', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('technix@gmail.com', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'link_type' => 'email'
                ]
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

<?php else:
    $this->add_render_attribute('title_args', 'class', 'contact-inner-title-sm');
?>

<div class="contact-inner-area pt-10 pb-10">
    <div class="container">
        <?php if ( !empty($settings['atroly_contact_section_title_show']) ) : ?> 
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-inner-title-sm-wrap text-center mb-50">
                    <?php if ( !empty($settings['atroly_contact_sub_title']) ) : ?>
                    <h5 class="inner-section-subtitle"><?php echo atroly_kses($settings['atroly_contact_sub_title']); ?></h5>
                    <?php endif; ?>
                    <?php
                    if ( !empty($settings['atroly_contact_title' ]) ) :
                        printf( '<%1$s %2$s>%3$s</%1$s>',
                            tag_escape( $settings['atroly_contact_title_tag'] ),
                            $this->get_render_attribute_string( 'title_args' ),
                            atroly_kses( $settings['atroly_contact_title' ] )
                            );
                    endif;
                    ?>
                    <?php if ( !empty($settings['atroly_contact_description']) ) : ?>
                    <p><?php echo atroly_kses( $settings['atroly_contact_description'] ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="contact-inner-wrapper">
            <div class="row gx-0">

                <?php foreach ($settings['atroly_list'] as $key => $item) :

                    $key = $key+1;

                    $link_type = $item['link_type'];
                    $url = $item['atroly_contact_url'];
                    $tell = $item['atroly_contact_tell'];
                    $email = $item['atroly_contact_email'];
                    
                    $contact_link;

                    if($link_type == 'url'){
                        $contact_link = $url;
                    } elseif($link_type == 'tell'){
                        $contact_link = 'tel:'.$tell;
                    } elseif($link_type == 'email'){
                        $contact_link = 'mailto:'.$email;
                    }

                ?>
                <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?>">
                    <div class="contact-inner-item d-flex align-items-center justify-content-center">
                        <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                        <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                        <span>
                            <?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                        </span>
                        <?php endif; ?>
                        <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                        <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                        <span>
                            <img src="<?php echo $item['atroly_box_icon_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                        </span>
                        <?php endif; ?>
                        <?php else : ?>
                        <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                        <div class="contact-inner-img contact-img-<?php echo esc_attr($key); ?>">
                            <?php echo $item['atroly_box_icon_svg']; ?>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <div class="contact-inner-link">
                            <?php if(!empty($item['atroly_contact_info_title'])) : ?>
                            <h3 class="cont-info-title">

                                <?php if(!empty($item['link_type'])) : ?>
                                <a href="<?php echo esc_url($contact_link); ?>"><?php echo atroly_kses($item['atroly_contact_info_title']); ?></a>
                                <?php else : ?>
                                    <?php echo atroly_kses($item['atroly_contact_info_title']); ?>
                                <?php endif; ?>

                            </h3>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div> 
</div>


<?php endif;
	}
}

$widgets_manager->register( new ATROLY_Contact_Info() );