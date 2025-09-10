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
class ATROLY_Contact_Form extends Widget_Base {

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
		return 'contact-form';
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
		return __( 'Contact Form', 'atrolycore' );
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
         * contact form 7 setup.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 1.0.0
         *
         * @access protected
         */

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
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1', 'layout-2']);

        // social info


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

        $this->start_controls_section(
            'atrolycore_contact_thumb',
            [
                'label' => esc_html__('Contact Form Thumb', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atroly_image_box',
            [
                'label'   => esc_html__( 'Image', 'atrolycore' ),
                'type'    => Controls_Manager::MEDIA,
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

    protected function style_tab_content(){
        $this->atroly_section_style_controls('comint_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2']);
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
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title pb-10');
    if ( !empty($settings['atroly_image_box']['url']) ) {
        $atroly_image = !empty($settings['atroly_image_box']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_box']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_box']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image_box"]["id"], "_wp_attachment_image_alt", true);
    }
    
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>

<section class="atroly-contact-area-2 atroly-contact-bg-2 p-relative pb-120 atroly-el-section">
    <div class="container">
        <div class="atroly-contact-box-2">
            <div class="row">
                <div class="col-lg-5">
                    <div class="atroly-contact-thumb wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <?php if(!empty($atroly_image)) : ?>
                        <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7">

                    <?php if ( !empty($settings['atroly_section_section_title_show']) ) : ?>
                    <div class="atroly-contact-wrapper-2">
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
                        <?php endif; ?>
                        <div id="contactForm" class="atroly-contact-form-2">
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
    </div>
</section>



<?php else :
    // shape image
    if ( !empty($settings['atroly_image_box']['url']) ) {
        $atroly_image = !empty($settings['atroly_image_box']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_box']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_box']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image_box"]["id"], "_wp_attachment_image_alt", true);
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-contact-title atroly-el-title');
?>
<section class="atroly-contact-area p-relative pt-120 fix atroly-el-section">
    <div class="container">
        <div class="atroly-contact-bg"
            data-background="<?php echo get_template_directory_uri(); ?>/assets/img/contact/bg.png"></div>
        <div class="atroly-contact-overlay"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="atroly-contact-wrapper">
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
                    <div id="contactForm" class="atroly-contact-form"></div>
                    <?php if( !empty($settings['atrolycore_select_contact_form']) ) : ?>
                    <?php echo do_shortcode( '[contact-form-7  id="'.$settings['atrolycore_select_contact_form'].'"]' ); ?>
                    <?php else : ?>
                    <?php echo '<div class="alert alert-info"><p class="m-0">' . __('Please Select contact form.', 'atrolycore' ). '</p></div>'; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="atroly-contact-thumb-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <?php if(!empty($atroly_image)) : ?>
                    <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Contact_Form() );