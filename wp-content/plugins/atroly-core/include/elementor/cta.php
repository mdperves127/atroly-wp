<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;
use \Elementor\Utils;
use \Elementor\Control_Media;
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYBGGradient;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_CTA extends Widget_Base {

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
		return 'atroly-cta';
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
		return __( 'CTA', 'atrolycore' );
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


	protected function register_controls(){
		$this->register_controls_section();
		$this->style_tab_content();
	}		


	// controls file 
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
                    'layout-2' => esc_html__('Layout 2', 'atroly-core'),
                    'layout-3' => esc_html__('Layout 3', 'atroly-core'),
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();
          // atroly_section_title
          $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1','layout-2','layout-3']);

        
        $this->atroly_button_render('cta', 'Button', ['layout-2']);  

       
        // cta shape
        $this->start_controls_section(
            'atroly_cta_shape',
                [
                  'label' => esc_html__( 'Section Shape', 'atrolycore' ),
                  'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
                  'condition' => [
                    'atroly_design_style' => ''
                  ]
                ]
           );
   
           $this->add_control(
            'atroly_cta_shape_switch',
            [
              'label'        => esc_html__( 'Shape On/Off', 'atrolycore' ),
              'type'         => \Elementor\Controls_Manager::SWITCHER,
              'label_on'     => esc_html__( 'Show', 'atrolycore' ),
              'label_off'    => esc_html__( 'Hide', 'atrolycore' ),
              'return_value' => 'yes',
              'default'      => '0',
            ]
           );
   
           $this->add_control(
               'atroly_shape_image_1',
               [
                   'label' => esc_html__( 'Choose Shape Image 1', 'atroly-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'default' => [
                       'url' => \Elementor\Utils::get_placeholder_image_src(),
                   ],
                   'condition' => [
                       'atroly_cta_shape_switch' => 'yes'
                   ]
               ]
           );
   
           $this->add_control(
               'atroly_shape_image_2',
               [
                   'label' => esc_html__( 'Choose Shape Image 2', 'atroly-core' ),
                   'type' => \Elementor\Controls_Manager::MEDIA,
                   'default' => [
                       'url' => \Elementor\Utils::get_placeholder_image_src(),
                   ],
                   'condition' => [
                       'atroly_cta_shape_switch' => 'yes'
                   ]
               ]
           );

           $this->add_group_control(
               Group_Control_Image_Size::get_type(),
               [
                   'name' => 'shape_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                   'exclude' => ['custom'],
                   'condition' => [
                       'atroly_cta_shape_switch' => 'yes'
                   ]
               ]
           );
           
           $this->end_controls_section();

           // cta 3 contact
        $this->start_controls_section(
            'atroly_fact',
            [
                'label' => esc_html__('Contact', 'atrolycore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'atroly_design_style' => 'layout-3'
                  ]
            ]
        );
        $this->add_control(
            'atroly_contact_gmail',
            [
                'label' => esc_html__('Contact info 01', 'atroly-core'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('example@gmail.com', 'atroly-core'),
                'placeholder' => esc_html__('Contact Text', 'atroly-core'),
                'label_block' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'atrolycore_contact',
            [
                'label' => esc_html__('Contact Form', 'atrolycore'),
            ],
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

	// style_tab_content
	protected function style_tab_content(){
        $this->atroly_section_style_controls('cta_section', 'Section Style', '.ele-section'); 
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('section_email', 'Section - Email', '.atroly-el-email', 'layout-3');
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
    // thumbnail
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }      
    
    // Link
    if ('2' == $settings['atroly_cta_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_cta_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_cta_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_cta_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-footer-subscribe-title atroly-el-title');
?>
<div class="atroly-footer-subscribe pb-80 pt-120 ele-section">
        <div class="container">
            <div class="atroly-footer-subscribe-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-7">
                        <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                            <h4 class=" atroly-el-sub-title atroly-text-white "><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></h4>
                        <?php endif; ?>
                        <div class="atroly-footer-subscribe-wrapper-title d-flex align-items-center">
                            <?php if( !empty($settings['atroly_section_title']) ) : ?>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/home-3/icon.svg" alt=""></span>
                            <?php 
                                if ( !empty($settings['atroly_section_title' ]) ) :
                                printf( '<%1$s %2$s data-wow-duration=".9s"
                                data-wow-delay=".5s" >%3$s</%1$s>',
                                tag_escape( $settings['atroly_section_title_tag'] ),
                                $this->get_render_attribute_string( 'title_args' ),
                                atroly_kses( $settings['atroly_section_title' ] )
                                ); endif; 
                            ?>
                             <?php endif;?>
                        </div>
                        <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                        <p class="atroly-el-des atroly-text-white"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <div class="atroly-form-wrapper">
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

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ):
    // thumbnail
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_image_2']['url']) ) {
        $atroly_image_2 = !empty($settings['atroly_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_2']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_2']['url'];
        $atroly_image_alt_2 = get_post_meta($settings["atroly_image_2"]["id"], "_wp_attachment_image_alt", true);
    } 
    if ( !empty($settings['atroly_image_3']['url']) ) {
        $atroly_image_3 = !empty($settings['atroly_image_3']['id']) ? wp_get_attachment_image_url( $settings['atroly_image_3']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image_3']['url'];
        $atroly_image_alt_3 = get_post_meta($settings["atroly_image_3"]["id"], "_wp_attachment_image_alt", true);
    } 
    
    // Link
    if ('2' == $settings['atroly_cta_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_cta_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
    } else {
        if ( ! empty( $settings['atroly_cta_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_cta_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn');
        }
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-cta-title-2 atroly-el-title');
?>

<section class="atroly-cta-area-2 p-relative pt-75 pb-80 ele-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/cta/home-2/bg.png); ">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="atroly-cta-wrapper-2 text-center">
                    
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <h4 class=" atroly-el-sub-title atroly-text-white "><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></h4>
                    <?php endif; ?>
                    <?php if ( !empty($settings['atroly_section_title' ]) ) :
                        printf( '<%1$s %2$s data-wow-duration=".9s"
                        data-wow-delay=".5s" >%3$s</%1$s>',
                        tag_escape( $settings['atroly_section_title_tag'] ),
                        $this->get_render_attribute_string( 'title_args' ),
                        atroly_kses( $settings['atroly_section_title' ] )
                        ); endif;  ?>
                    <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                    <p class="atroly-el-des"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                    <?php endif; ?>
                    <?php if ( !empty($settings['atroly_contact_gmail']) ) : ?>
                    <span class="atroly-el-email">Email: <a
                            href="mailto:<?php echo atroly_kses( $settings['atroly_contact_gmail'] ); ?>"><?php echo atroly_kses( $settings['atroly_contact_gmail'] ); ?></a></span>
                    <?php endif; ?>
                    <div class="atroly-cta-email p-relative">
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
</section>


<?php else:

    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_1']['url']) ) {
        $atroly_shape_image = !empty($settings['atroly_shape_image_1']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_1']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_1']['url'];
        $atroly_shape_image_alt = get_post_meta($settings["atroly_shape_image_1"]["id"], "_wp_attachment_image_alt", true);
    }
    if ( !empty($settings['atroly_shape_image_2']['url']) ) {
        $atroly_shape_image_2 = !empty($settings['atroly_shape_image_2']['id']) ? wp_get_attachment_image_url( $settings['atroly_shape_image_2']['id'], $settings['shape_image_size_size']) : $settings['atroly_shape_image_2']['url'];
        $atroly_shape_image_alt_2 = get_post_meta($settings["atroly_shape_image_2"]["id"], "_wp_attachment_image_alt", true);
    }

    // Link
    if ('2' == $settings['atroly_cta_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_cta_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn theme-2-bg  wow atrolyfadeUp');
    } else {
        if ( ! empty( $settings['atroly_cta_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_cta_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn theme-2-bg  wow atrolyfadeUp');
        }
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-cta-title atroly-el-title');   
?>

<section class="atroly-cta-area p-relative ">
    <div class="atroly-cta-bg"></div>
    <div class="container">
        <div class="atroly-cta-bg-wrapper p-relative"
            data-background="<?php echo get_template_directory_uri(); ?>/assets/img/cta/bg-shape.png">
            <div class="row">
                <div class="col-lg-6">
                    <?php if ( !empty($settings['atroly_section_sub_title']) ) : ?>
                        <h4 class=" atroly-el-sub-title atroly-text-white "><?php echo atroly_kses( $settings['atroly_section_sub_title'] ); ?></h4>
                    <?php endif; ?>
                    <?php 
                        if ( !empty($settings['atroly_section_title' ]) ) :
                        printf( '<%1$s %2$s data-wow-duration=".9s"
                        data-wow-delay=".5s" >%3$s</%1$s>',
                        tag_escape( $settings['atroly_section_title_tag'] ),
                        $this->get_render_attribute_string( 'title_args' ),
                        atroly_kses( $settings['atroly_section_title' ] )
                        ); endif; 
                    ?>
                    <?php if ( !empty($settings['atroly_section_description']) ) : ?>
                    <p class="atroly-el-des atroly-text-white"><?php echo atroly_kses( $settings['atroly_section_description'] ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <div class="atroly-cta-email p-relative">
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
</section>


<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_CTA() );