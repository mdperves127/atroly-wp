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
        return 'atroly-team-details';
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
        return __( 'ATROLY Team Details', 'atrolycore' );
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

     protected static function get_profile_names()
     {
         return [
             '500px' => esc_html__('500px', 'atrolycore'),
             'apple' => esc_html__('Apple', 'atrolycore'),
             'behance' => esc_html__('Behance', 'atrolycore'),
             'bitbucket' => esc_html__('BitBucket', 'atrolycore'),
             'codepen' => esc_html__('CodePen', 'atrolycore'),
             'delicious' => esc_html__('Delicious', 'atrolycore'),
             'deviantart' => esc_html__('DeviantArt', 'atrolycore'),
             'digg' => esc_html__('Digg', 'atrolycore'),
             'dribbble' => esc_html__('Dribbble', 'atrolycore'),
             'email' => esc_html__('Email', 'atrolycore'),
             'facebook' => esc_html__('Facebook', 'atrolycore'),
             'flickr' => esc_html__('Flicker', 'atrolycore'),
             'foursquare' => esc_html__('FourSquare', 'atrolycore'),
             'github' => esc_html__('Github', 'atrolycore'),
             'houzz' => esc_html__('Houzz', 'atrolycore'),
             'instagram' => esc_html__('Instagram', 'atrolycore'),
             'jsfiddle' => esc_html__('JS Fiddle', 'atrolycore'),
             'linkedin' => esc_html__('LinkedIn', 'atrolycore'),
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

        $this->atroly_section_title_render_controls('team', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.');


        $this->start_controls_section(
         'atroly_image_sec',
             [
               'label' => esc_html__( 'Thumbnail', 'atrolycore' ),
               'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
             ]
        );
        
        $this->add_control(
         'atroly_image',
         [
           'label'   => esc_html__( 'Upload Image', 'atrolycore' ),
           'type'    => \Elementor\Controls_Manager::MEDIA,
             'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
           ],
         ]
        );
        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name' => 'thumbnail', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
                'exclude' => ['custom'],
                // 'default' => 'atroly-post-thumb',
            ]
        );
        
        $this->end_controls_section();

        // Fact group
        $this->start_controls_section(
            'atroly_fact',
            [
                'label' => esc_html__('Contact', 'atrolycore'),
                'description' => esc_html__( 'Control all the style settings from Style tab', 'atrolycore' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'atroly_contact_title',
            [
                'label' => esc_html__('Contact Title', 'atroly-core'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Responsibility', 'atroly-core'),
                'placeholder' => esc_html__('Contact Title Text', 'atroly-core'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'atroly_contact_des',
            [
                'label' => esc_html__('Contact Description', 'atroly-core'),
                'description' => atroly_get_allowed_html_desc( 'intermediate' ),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Development', 'atroly-core'),
                'placeholder' => esc_html__('Contact Description Text', 'atroly-core'),
                'label_block' => true,
            ]
        );

        $this->add_control(
           'atroly_contact_list',
           [
             'label'       => esc_html__( 'Contact List', 'atrolycore' ),
             'type'        => \Elementor\Controls_Manager::REPEATER,
             'fields'      => $repeater->get_controls(),
             'default'     => [
               [
                'atroly_contact_title'   => esc_html__( 'Responsibilites', 'atrolycore' ),
                'atroly_contact_des'   => esc_html__( 'Development', 'atrolycore' ),
               ],
               [
                'atroly_contact_title'   => esc_html__( 'Email Address', 'atrolycore' ),
                'atroly_contact_des'   => esc_html__( 'portxinfo@gmail.com', 'atrolycore' ),
               ]
             ],
             'title_field' => '{{{ atroly_contact_title }}}',
           ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_social',
            [
                'label' => esc_html__('Social Profiles', 'atrolycore'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_profiles',
            [
                'label' => esc_html__('Show Profiles', 'atrolycore'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'atrolycore'),
                'label_off' => esc_html__('Hide', 'atrolycore'),
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
                'style_transfer' => true,
            ]
        );

        $repeater = new Repeater();

        $repeater->add_control(
            'name',
            [
                'label' => esc_html__('Profile Name', 'atrolycore'),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'select2options' => [
                    'allowClear' => false,
                ],
                'options' => self::get_profile_names()
            ]
        );

        $repeater->add_control(
            'link', [
                'label' => esc_html__('Profile Link', 'atrolycore'),
                'placeholder' => esc_html__('Add your profile link', 'atrolycore'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'autocomplete' => false,
                'show_external' => false,
                'condition' => [
                    'name!' => 'email'
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );
        $this->add_control(
            'profiles',
            [
                'show_label' => false,
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '<# print(name.slice(0,1).toUpperCase() + name.slice(1)) #>',
                'default' => [
                    [
                        'link' => ['url' => 'https://facebook.com/'],
                        'name' => 'facebook'
                    ],
                    [
                        'link' => ['url' => 'https://linkedin.com/'],
                        'name' => 'linkedin'
                    ],
                    [
                        'link' => ['url' => 'https://twitter.com/'],
                        'name' => 'twitter'
                    ]
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function style_tab_content(){
        $this->atroly_section_style_controls('about_me_section', 'Section Style', '.ele-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des');
        # repeater
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title');
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des');
        $this->atroly_icon_style('rep_icon', 'Social Icon', '.atroly-el-rep-icon');
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
    if ( !empty($settings['atroly_image']['url']) ) {
        $atroly_image_url = !empty($settings['atroly_image']['id']) ? wp_get_attachment_image_url( $settings['atroly_image']['id'], $settings['thumbnail_size']) : $settings['atroly_image']['url'];
        $atroly_image_alt = get_post_meta($settings["atroly_image"]["id"], "_wp_attachment_image_alt", true);
    }
    $this->add_render_attribute('title_args', 'class', 'atroly-team-details-name atroly-el-title');
?>
<section class="atroly-team-details-breadcrumb-area ele-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
            <?php if(!empty($atroly_image_url)) : ?>
                <div class="atroly-team-details-thumb mb-85">
                <img src="<?php echo esc_url($atroly_image_url); ?>"
                            alt="<?php echo esc_attr($atroly_image_alt); ?>">
                </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-7">
                <div class="atroly-team-details-wrapper mb-85">
                    <?php
                        if ( !empty($settings['atroly_team_title' ]) ) :
                            printf( '<%1$s %2$s>%3$s</%1$s>',
                                tag_escape( $settings['atroly_team_title_tag'] ),
                                $this->get_render_attribute_string( 'title_args' ),
                                atroly_kses( $settings['atroly_team_title' ] )
                                );
                        endif;
                    ?>
                        <?php if ( !empty($settings['atroly_team_sub_title']) ) : ?>
                        <span class="atroly-team-details-description atroly-el-sub-title"><?php echo atroly_kses( $settings['atroly_team_sub_title'] ); ?></span>
                        <?php endif; ?>
                        <?php if(!empty($settings['atroly_team_description' ])) : ?>
                        <p class="atroly-el-des"><?php echo atroly_kses($settings['atroly_team_description']); ?></p>
                        <?php endif; ?>
                    <div class="atroly-team-details-information">
                    <?php foreach ($settings['atroly_contact_list'] as $key => $item) : ?>
                        <h4>
                            <span class="atroly-el-rep-title"><?php echo $item['atroly_contact_title'] ? atroly_kses($item['atroly_contact_title']) : NULL; ?>:</span> <a class="atroly-el-rep-des" href="tel:5550115"> <?php echo $item['atroly_contact_des'] ? atroly_kses($item['atroly_contact_des']) : NULL; ?></a>
                        </h4>
                        <?php endforeach; ?>                               
                    </div>
                    <?php if(!empty($settings['show_profiles'])) : ?>
                        <div class="atroly-team-details-social">
                            <ul>
                                <?php
                                foreach ($settings['profiles'] as $profile) :
                                    $icon = $profile['name'];
                                    $url = esc_url($profile['link']['url']);
                                    
                                    printf('<li><a class="atroly-el-rep-icon" target="_blank" rel="noopener"  href="%s" ><i class="fa-brands fa-%s"></i></a></li>',
                                        $url,
                                        esc_attr($icon)
                                    );
                                endforeach; 
                            ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php endif;
    }
}

$widgets_manager->register( new ATROLY_Team_Details() );