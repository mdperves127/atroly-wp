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
use ATROLYCore\Elementor\Controls\Group_Control_ATROLYGradient;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Project_Deatils extends Widget_Base {

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
		return 'atroly-portfolio-details';
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
		return __( 'Portfolio Details', 'atroly-core' );
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
                ],
                'default' => 'layout-1',
            ]
        );

        $this->end_controls_section();


        $this->atroly_section_title_render_controls('project', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',['layout-1', 'layout-2','layout-3','layout-4','layout-5']);

   
        $this->start_controls_section(
         'about_features_list_sec',
             [
               'label' => esc_html__( 'Features List', 'atrolycore' ),
               'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
               'condition' => [
                    'atroly_design_style' => ['layout-1', 'layout-2']
               ]
             ]
        );
        
        // repeater for about features list with text , testarea and icon
        $repeater = new Repeater();

        $repeater->add_control(
            'atroly_box_icon_type',
            [
                'label' => esc_html__('Select Icon Type', 'atrolycore'),
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
            'atroly_project_features_list_title',
            [
                'label' => esc_html__('Title', 'atroly-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Title', 'atroly-core'),
                'title' => esc_html__('Enter title', 'atroly-core'),
                'label_block' => true
                
            ]
        );
        $repeater->add_control(
            'atroly_project_features_list_description',
            [
                'label' => esc_html__('Description', 'atroly-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Description', 'atroly-core'),
                'title' => esc_html__('Enter description', 'atroly-core'),
                'label_block' => true
            ]
        );

        $this->add_control(
            'atroly_project_features_list',
            [
                'label' => esc_html__('Features List', 'atroly-core'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'atroly_project_features_list_title' => esc_html__('Title 01', 'atroly-core'),
                        'atroly_project_features_list_description' => esc_html__('Sub Content', 'atroly-core'),
                    ],
                    [
                        'atroly_project_features_list_title' => esc_html__('Title 02', 'atroly-core'),
                        'atroly_project_features_list_description' => esc_html__('Sub Content', 'atroly-core'),
                    ]
                ],
                'title_field' => '{{{ atroly_project_features_list_title }}}',
            ]
        );

        $this->end_controls_section();

        // _atroly_image
		$this->start_controls_section(
            '_atroly_image',
            [
                'label' => esc_html__('Thumbnail', 'atroly-core'),
            ]
        );
        $this->add_control(
            'atroly_image',
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

        $this->end_controls_section();


	}

    

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('portfolio_section', 'Section - Style', '.atroly-el-section'); 
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', ['layout-1', 'layout-2']);
        # repeater
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title', ['layout-1', 'layout-2']);
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des', ['layout-1', 'layout-2']);
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
     if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-project-details-subtitle atroly-el-title');
?>
 <section class="atroly-el-section">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="atroly-project-details-subtitle-wrapper">
                
                <?php if ( !empty($settings['atroly_project_sub_title']) ) : ?>
                <h4 class="atroly-project-title-pre atroly-el-sub-title">
                    <?php echo atroly_kses( $settings['atroly_project_sub_title'] ); ?>
                </h4>
                <?php endif; ?>
                <?php if ( !empty($settings['atroly_project_title' ]) ) :
                    printf( '<%1$s %2$s>%3$s</%1$s>',
                    tag_escape( $settings['atroly_project_title_tag'] ),
                    $this->get_render_attribute_string( 'title_args' ),
                    atroly_kses( $settings['atroly_project_title' ] )
                    );
                endif; ?>
               <?php if ( !empty($settings['atroly_project_description']) ) : ?>
                <p class="atroly-el-des"><?php echo atroly_kses( $settings['atroly_project_description'] ); ?></p>
                <?php endif; ?>
             </div>
          </div>
       </div> 
       
       <div class="row">
          <div class="col-lg-8">
             <div class="atroly-project-details-list border-0">
                <div class="row">
                    <?php 
                    if ( !empty($settings['atroly_project_features_list']) ) :
                        foreach ( $settings['atroly_project_features_list'] as $item ) :
                            $title = $item['atroly_project_features_list_title'];
                            $description = $item['atroly_project_features_list_description']; 
                    ?>
                   <div class="col-md-6">
                      <span class="atroly-project-details-list-title atroly-el-rep-title"><i class="fa-solid fa-check"></i> <?php echo atroly_kses( $item['atroly_project_features_list_title'] ); ?></span>
                      <p class="atroly-el-rep-des"><?php echo atroly_kses( $item['atroly_project_features_list_description'] ); ?></p>
                   </div>
                   <?php endforeach; endif; ?>
                </div>
             </div>
          </div>
          <?php if(!empty($atroly_image)) : ?>
          <div class="col-lg-4">
             <div class="atroly-project-details-list-thumb">
                <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
             </div>
          </div>
          <?php endif; ?>
       </div>
    </div>
 </section>

<?php else:

    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['atroly_image_size_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }

    $this->add_render_attribute('title_args', 'class', 'atroly-project-details-title atroly-el-title');
?>


 <section class="atroly-el-section">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
            <?php if(!empty($atroly_image)) : ?>
             <div class="atroly-project-details-thumb">
                <img src="<?php echo esc_url($atroly_image); ?>" alt="<?php echo esc_attr($atroly_image_alt); ?>">
             </div>
             <?php endif; ?>
             <div class="atroly-project-details-title-wrapper p-relative">
                
                <?php if ( !empty($settings['atroly_project_sub_title']) ) : ?>
                <h4 class="atroly-project-title-pre atroly-el-sub-title">
                    <?php echo atroly_kses( $settings['atroly_project_sub_title'] ); ?>
                </h4>
                <?php endif; ?>
                <?php if ( !empty($settings['atroly_project_title' ]) ) :
                    printf( '<%1$s %2$s>%3$s</%1$s>',
                    tag_escape( $settings['atroly_project_title_tag'] ),
                    $this->get_render_attribute_string( 'title_args' ),
                    atroly_kses( $settings['atroly_project_title' ] )
                    );
                endif; ?>
                <?php if ( !empty($settings['atroly_project_description']) ) : ?>
                <p class="atroly-el-des"><?php echo atroly_kses( $settings['atroly_project_description'] ); ?></p>
                <?php endif; ?>

                <div class="atroly-project-details-box">
                    <?php 
                    if ( !empty($settings['atroly_project_features_list']) ) :
                        foreach ( $settings['atroly_project_features_list'] as $item ) :
                            $title = $item['atroly_project_features_list_title'];
                            $description = $item['atroly_project_features_list_description']; 
                    ?>
                   <div class="atroly-project-details-box-1 m-0">
                      <h4 class="atroly-project-details-box-title atroly-el-rep-title"><?php echo atroly_kses( $item['atroly_project_features_list_title'] ); ?></h4>
                      <p class="atroly-el-rep-des"><?php echo atroly_kses( $item['atroly_project_features_list_description'] ); ?></p>
                   </div>
                   <?php endforeach; endif; ?>
                </div>
             </div>
          </div>
       </div> 
    </div>
 </section>

<?php endif; 
	}
}

$widgets_manager->register( new ATROLY_Project_Deatils() );