<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Control_Media;
use Elementor\Core\Utils\ImportExport\Url;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Team_Details extends Widget_Base {

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
        return 'atroly-team-details-contact';
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
        return __( 'Team Details Contact', 'atrolycore' );
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


    public function get_atroly_contact_form(){
        if ( ! class_exists( 'WPCF7' ) ) {
            return;
        }
        $atroly_cfa         = array();
        $atroly_cf_args     = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
        $atroly_forms       = get_posts( $atroly_cf_args );
        $atroly_cfa         = ['0' => esc_html__( 'Select Form', 'atrolycore' ) ];
        if( $atroly_forms ){
            foreach ( $atroly_forms as $atroly_form ){
                $atroly_cfa[$atroly_form->ID] = $atroly_form->post_title;
            }
        }else{
            $atroly_cfa[ esc_html__( 'No contact form found', 'atrolycore' ) ] = 0;
        }
        return $atroly_cfa;
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

     protected static function get_profile_names()
    {
        return [
            'apple' => esc_html__('Apple', 'atrolycore'),
            'behance' => esc_html__('Behance', 'atrolycore'),
            'bitbucket' => esc_html__('BitBucket', 'atrolycore'),
            'codepen' => esc_html__('CodePen', 'atrolycore'),
            'delicious' => esc_html__('Delicious', 'atrolycore'),
            'deviantart' => esc_html__('DeviantArt', 'atrolycore'),
            'digg' => esc_html__('Digg', 'atrolycore'),
            'dribbble' => esc_html__('Dribbble', 'atrolycore'),
            'email' => esc_html__('Email', 'atrolycore'),
            'facebook-f' => esc_html__('Facebook', 'atrolycore'),
            'flickr' => esc_html__('Flicker', 'atrolycore'),
            'foursquare' => esc_html__('FourSquare', 'atrolycore'),
            'github' => esc_html__('Github', 'atrolycore'),
            'houzz' => esc_html__('Houzz', 'atrolycore'),
            'instagram' => esc_html__('Instagram', 'atrolycore'),
            'jsfiddle' => esc_html__('JS Fiddle', 'atrolycore'),
            'linkedin-in' => esc_html__('LinkedIn', 'atrolycore'),
            'medium' => esc_html__('Medium', 'atrolycore'),
            'pinterest' => esc_html__('Pinterest', 'atrolycore'),
            'product-hunt' => esc_html__('Product Hunt', 'atrolycore'),
            'reddit' => esc_html__('Reddit', 'atrolycore'),
            'slideshare' => esc_html__('Slide Share', 'atrolycore'),
            'snapchat' => esc_html__('Snapchat', 'atrolycore'),
            'soundcloud' => esc_html__('SoundCloud', 'atrolycore'),
            'spotify' => esc_html__('Spotify', 'atrolycore'),
            'stack-overflow' => esc_html__('StackOverflow', 'atrolycore'),
            'tripadvisor' => esc_html__('TripAdvisor', 'atrolycore'),
            'tumblr' => esc_html__('Tumblr', 'atrolycore'),
            'twitch' => esc_html__('Twitch', 'atrolycore'),
            'twitter' => esc_html__('Twitter', 'atrolycore'),
            'vimeo' => esc_html__('Vimeo', 'atrolycore'),
            'vk' => esc_html__('VK', 'atrolycore'),
            'website' => esc_html__('Website', 'atrolycore'),
            'whatsapp' => esc_html__('WhatsApp', 'atrolycore'),
            'wordpress' => esc_html__('WordPress', 'atrolycore'),
            'xing' => esc_html__('Xing', 'atrolycore'),
            'yelp' => esc_html__('Yelp', 'atrolycore'),
            'youtube' => esc_html__('YouTube', 'atrolycore'),
        ];
    }
     
    protected function register_controls(){
        $this->register_controls_section();
        $this->style_tab_content();
    }  

    protected function register_controls_section(){

        // layout Panel
        $this->start_controls_section(
            'atroly_layout',
            [
                'label' => esc_html__('Design Layout', 'atroly-core'),
            ]
        );
        $this->add_control(
            'atroly_design_style',
            [
                'label' => esc_html__('Select Layout', 'atroly-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'layout-1' => esc_html__('Layout 1', 'atroly-core'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();

        // atroly_section_title
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1','layout-2']);



        // Team Extra Info
        $this->start_controls_section(
            'atroly_info_sec',
            [
                'label' => esc_html__('Team Extra Info', 'atroly-core'),
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
        $this->add_control(
            'atroly_thumbnail_image_2',
            [
                'label' => esc_html__( 'Choose Member Image 2', 'atroly-core' ),
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

        // icon image svg

        $this->add_control(
            'atroly_box_icon_type',
            [
                'label' => esc_html__('Select Phone Image', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'image' => esc_html__('Image', 'atrolycore'),
                    'icon' => esc_html__('Icon', 'atrolycore'),
                    'svg' => esc_html__('SVG', 'atrolycore'),
                ]
            ]
        );
        $this->add_control(
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

        $this->add_control(
            'atroly_box_icon_image',
            [
                'label' => esc_html__('Upload Icon Image', 'atrolycore'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'atroly_box_icon_type' => 'image'
                ]
            ]
        );

        if (atroly_is_elementor_version('<', '2.6.0')) {
            $this->add_control(
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
            $this->add_control(
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
        

        $this->add_control(
            'atroly_team_phone',
            [
                'label' => esc_html__('Phone', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+880 17823-63794', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_team_phone_url',
            [
                'label' => esc_html__('Phone Url', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('+8801782363794', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_team_email',
            [
                'label' => esc_html__('Email', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('info@creativehunk.com', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_team_email_url',
            [
                'label' => esc_html__('Email Url', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('info@creativehunk.com', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

       
        // Items
        $this->start_controls_section(
            'atroly_skill_sec',
            [
                'label' => esc_html__('Team Details Items', 'atroly-core'),
            ]
        );

        $repeater = new \Elementor\Repeater();

         // icon image svg

         $repeater->add_control(
            'atroly_box_icon_type',
            [
                'label' => esc_html__('Select Country Image Type', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'image',
                'options' => [
                    'image' => esc_html__('Image', 'atrolycore'),
                    'icon' => esc_html__('Icon', 'atrolycore'),
                    'svg' => esc_html__('SVG', 'atrolycore'),
                ]
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
                    'atroly_box_icon_type' => 'image'
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
            'atroly_team_items_title',
            [
                'label' => esc_html__('Items Title', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('WordPress Developer', 'atrolycore'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'atroly_items_title_list',
            [
                'label' => esc_html__('Items', 'atrolycore'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_team_items_title' => esc_html__('Research beyond the business plan', 'atrolycore'),
                    ],
                    [
                        'atroly_team_items_title' => esc_html__('Marketing options and rates', 'atrolycore')
                    ],
                    [
                        'atroly_team_items_title' => esc_html__('The ability to turnaround consulting', 'atrolycore')
                    
                    ]
                ],
                'title_field' => '{{{ atroly_team_items_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'atrolycore_contact',
            [
                'label' => esc_html__('Contact Form', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atrolycore_select_contact_form',
            [
                'label'   => esc_html__( 'Select Form', 'atrolycore' ),
                'type'    => Controls_Manager::SELECT,
                'default' => '0',
                'options' => $this->get_atroly_contact_form(),
            ]
        );

        $this->end_controls_section();

    }

    protected function style_tab_content(){
        $this->atroly_section_style_controls('comint_section', 'Section - Style', '.atroly-el-section');
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



<?php else :
    // thumbnail image
    if ( !empty($settings['atroly_thumbnail_image']['url']) ) {
        $atroly_thumbnail_image = !empty($settings['atroly_thumbnail_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image']['url'];
        $atroly_thumbnail_image_alt = get_post_meta($settings["atroly_thumbnail_image"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_thumbnail_image_2']['url']) ) {
        $atroly_thumbnail_image_2 = !empty($settings['atroly_thumbnail_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_thumbnail_image_2']['id'], $settings['atroly_thumbnail_size_size']) : $settings['atroly_thumbnail_image_2']['url'];
        $atroly_thumbnail_image_2_alt = get_post_meta($settings["atroly_thumbnail_image_2"]["id"], "_wp_attachment_image_alt", true);
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title pb-25');  
?>


<div class="atroly-register__area pt-115 pb-120">
    <div class="container">
    <?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="atroly-register__section-title pb-25">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <span class="atroly-section-subtitle"><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></span>
                    <?php endif; ?>
                    <?php if ( !empty($settings['atroly_section_title' ]) ) :
                        printf( '<%1$s %2$s data-wow-duration=".9s"
                        data-wow-delay=".5s" >%3$s</%1$s>',
                        tag_escape( $settings['atroly_section_title_tag'] ),
                        $this->get_render_attribute_string( 'title_args' ),
                        atroly_kses( $settings['atroly_section_title' ] )
                        );
                    endif;  ?>                            
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="atroly-register__left-box">
                    <div class="atroly-register__thumb pb-25 d-flex justify-content-between">
                        <?php  if ( !empty($atroly_thumbnail_image) ) : ?>
                        <img src="<?php echo esc_url($atroly_thumbnail_image); ?>" alt="<?php echo esc_attr($atroly_thumbnail_image_alt); ?>">  
                        <?php endif; ?>
                        <?php  if ( !empty($atroly_thumbnail_image_2) ) : ?>                      
                        <img src="<?php echo esc_url($atroly_thumbnail_image_2); ?>" alt="<?php echo esc_attr($atroly_thumbnail_image_2_alt); ?>"> 
                        <?php endif; ?>                       
                    </div>                          
                    <div class="atroly-register__text">
                    <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                        <p class="pb-20"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                        <?php endif; ?>
                        <div class="atroly-register__list">
                            <ul>
                            <?php if ( !empty($settings['atroly_items_title_list']) ) : 
                                foreach ($settings['atroly_items_title_list'] as $item) : ?>
                                <li>
                                <?php if($item['atroly_box_icon_type'] == 'icon') : ?>
                                    <?php if (!empty($item['atroly_box_icon']) || !empty($item['atroly_box_selected_icon']['value'])) : ?>
                                    <?php atroly_render_icon($item, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                                    <?php endif; ?>
                                    <?php elseif( $item['atroly_box_icon_type'] == 'image' ) : ?>
                                    <?php if (!empty($item['atroly_box_icon_image']['url'])): ?>
                                    <img src="<?php echo $item['atroly_box_icon_image']['url']; ?>"
                                        alt="<?php echo get_post_meta(attachment_url_to_postid($item['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                    <?php endif; ?>
                                    <?php else : ?>
                                    <?php if (!empty($item['atroly_box_icon_svg'])): ?>
                                    <?php echo $item['atroly_box_icon_svg']; ?>
                                    <?php endif; ?>
                                <?php endif; ?> 
                                <?php if (!empty($item['atroly_team_items_title'])): ?>    
                                    <?php echo atroly_kses( $item['atroly_team_items_title'] ); ?>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>                       
                    </div>    
                    <div class="atroly-register__tel-box d-flex align-items-center">
                        <div class="atroly-register__tel-icon">
                            <span>
                                <?php if($settings['atroly_box_icon_type'] == 'icon') : ?>
                                    <?php if (!empty($settings['atroly_box_icon']) || !empty($settings['atroly_box_selected_icon']['value'])) : ?>
                                    <?php atroly_render_icon($settings, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
                                    <?php endif; ?>
                                    <?php elseif( $settings['atroly_box_icon_type'] == 'image' ) : ?>
                                    <?php if (!empty($settings['atroly_box_icon_image']['url'])): ?>
                                    <img src="<?php echo $settings['atroly_box_icon_image']['url']; ?>"
                                        alt="<?php echo get_post_meta(attachment_url_to_postid($settings['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
                                    <?php endif; ?>
                                    <?php else : ?>
                                    <?php if (!empty($settings['atroly_box_icon_svg'])): ?>
                                    <?php echo $settings['atroly_box_icon_svg']; ?>
                                    <?php endif; ?>
                                <?php endif; ?> 
                            </span>
                        </div>
                        <div class="atroly-register__tel-text">
                            <?php  if ( !empty($settings['atroly_team_phone']) ) : ?>
                            <a class="number" href="tel:<?php echo esc_attr( $settings['atroly_team_phone_url'] ); ?>"><?php echo atroly_kses( $settings['atroly_team_phone'] ); ?></a>
                            <?php endif; ?>
                            <?php  if ( !empty($settings['atroly_team_email']) ) : ?>
                            <a href="mailto:<?php echo esc_attr( $settings['atroly_team_phone_url'] ); ?>"><?php echo atroly_kses( $settings['atroly_team_email'] ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="atroly-register__form-box">
                <?php if( !empty($settings['atrolycore_select_contact_form']) ) : ?>
                    <?php echo do_shortcode( '[contact-form-7  id="'.$settings['atrolycore_select_contact_form'].'"]' ); ?>
                <?php else : ?>
                    <?php echo '<div class="alert alert-info"><p class="m-0">' . __('Please Select contact form.', 'atrolycore' ). '</p></div>'; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; 
    }
}

$widgets_manager->register( new ATROLY_Team_Details() );
