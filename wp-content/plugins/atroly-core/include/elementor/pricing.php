<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Repeater;
use \Elementor\Control_Media;
use \Elementor\Utils;
Use \Elementor\Core\Schemes\Typography;
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Image_Size;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Pricing extends Widget_Base {

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
		return 'atroly-pricing';
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
		return __( 'Pricing', 'atrolycore' );
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


        $this->start_controls_section(
            '_section_design_title',
            [
                'label' => __('Design Style', 'atrolycore'),
                'tab' => Controls_Manager::TAB_CONTENT,
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

        $this->add_control(
            'active_price',
            [
                'label' => __('Active Price', 'atrolycore'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'atrolycore'),
                'label_off' => __('Hide', 'atrolycore'),
                'return_value' => 'yes',
                'default' => false,
                'style_transfer' => true,
            ]
        );

        $this->end_controls_section();

        // Header
        $this->start_controls_section(
            '_section_header',
            [
                'label' => __('Header', 'atrolycore'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
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
                    'atroly_box_icon_type' => 'image',
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
            'title',
            [
                'label' => __('Title', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __('Basic', 'atrolycore'),
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        $this->add_control(
            'sub_title',
            [
                'label' => __('Sub Title', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => __('Sub Title', 'atrolycore'),
                'dynamic' => [
                    'active' => true
                ],
                'condition' => [
                    'atroly_design_style' => ['layout-10'],
                ]
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Description', 'atrolycore'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' => __('description', 'atrolycore'),
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_pricing',
            [
                'label' => __('Pricing', 'atrolycore'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'currency',
            [
                'label' => __('Currency', 'atrolycore'),
                'type' => Controls_Manager::SELECT,
                'label_block' => false,
                'options' => [
                    '' => __('None', 'atrolycore'),
                    'baht' => '&#3647; ' . _x('Baht', 'Currency Symbol', 'atrolycore'),
                    'bdt' => '&#2547; ' . _x('BD Taka', 'Currency Symbol', 'atrolycore'),
                    'dollar' => '&#36; ' . _x('Dollar', 'Currency Symbol', 'atrolycore'),
                    'euro' => '&#128; ' . _x('Euro', 'Currency Symbol', 'atrolycore'),
                    'franc' => '&#8355; ' . _x('Franc', 'Currency Symbol', 'atrolycore'),
                    'guilder' => '&fnof; ' . _x('Guilder', 'Currency Symbol', 'atrolycore'),
                    'krona' => 'kr ' . _x('Krona', 'Currency Symbol', 'atrolycore'),
                    'lira' => '&#8356; ' . _x('Lira', 'Currency Symbol', 'atrolycore'),
                    'peso' => '&#8369; ' . _x('Peso', 'Currency Symbol', 'atrolycore'),
                    'pound' => '&#163; ' . _x('Pound Sterling', 'Currency Symbol', 'atrolycore'),
                    'real' => 'R$ ' . _x('Real', 'Currency Symbol', 'atrolycore'),
                    'ruble' => '&#8381; ' . _x('Ruble', 'Currency Symbol', 'atrolycore'),
                    'indian_rupee' => '&#8377; ' . _x('Rupee (Indian)', 'Currency Symbol', 'atrolycore'),
                    'shekel' => '&#8362; ' . _x('Shekel', 'Currency Symbol', 'atrolycore'),
                    'won' => '&#8361; ' . _x('Won', 'Currency Symbol', 'atrolycore'),
                    'yen' => '&#165; ' . _x('Yen/Yuan', 'Currency Symbol', 'atrolycore'),
                    'custom' => __('Custom', 'atrolycore'),
                ],
                'default' => 'dollar',
            ]
        );

        $this->add_control(
            'currency_custom',
            [
                'label' => __('Custom Symbol', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'condition' => [
                    'currency' => 'custom',
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        $this->add_control(
            'price',
            [
                'label' => __('Price', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => '9.99',
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_features',
            [
                'label' => __('Features', 'atrolycore'),
            ]
        );

        $this->add_control(
            'show_features',
            [
                'label' => __('Show', 'atrolycore'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'atrolycore'),
                'label_off' => __('Hide', 'atrolycore'),
                'return_value' => 'yes',
                'default' => 'yes',
                'style_transfer' => true,
            ]
        );


        $repeater = new Repeater();


        $repeater->add_control(
            'atroly_feature_unavailable',
            [
                'label' => __('Feature Hide ?', 'atrolycore'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'atrolycore'),
                'label_off' => __('Hide', 'atrolycore'),
                'return_value' => 'yes',
                'default' => '0',
                'style_transfer' => true,
            ]
        );
        $repeater->add_control(
            'atroly_features_title',
            [
                'label' => __('Feature Title', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Exciting Feature', 'atrolycore'),
                'label_block' => true
            ]
        );

        $this->add_control(
            'features_list',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'show_label' => false,
                'default' => [
                    [
                        'atroly_features_title' => __('Standard Feature', 'atrolycore'),
                        'icon' => 'fa fa-check',
                    ],
                    [
                        'atroly_features_title' => __('Another Great Feature', 'atrolycore'),
                        'icon' => 'fa fa-check',
                    ],
                    [
                        'atroly_features_title' => __('Obsolete Feature', 'atrolycore'),
                        'icon' => 'fa fa-close',
                    ],
                    [
                        'atroly_features_title' => __('Exciting Feature', 'atrolycore'),
                        'icon' => 'fa fa-check',
                    ],
                ],
                'title_field' => '<# print((atroly_features_title)); #>',
            ]
        );

        $this->end_controls_section();


		// atroly_btn_button_group
        $this->start_controls_section(
            'atroly_btn_button_group',
            [
                'label' => esc_html__('Button', 'atrolycore'),
            ]
        );

        $this->add_control(
            'atroly_btn_button_show',
            [
                'label' => esc_html__( 'Show Button', 'atrolycore' ),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'atrolycore' ),
                'label_off' => esc_html__( 'Hide', 'atrolycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'atroly_btn_text',
            [
                'label' => esc_html__('Button Text', 'atrolycore'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Button Text', 'atrolycore'),
                'title' => esc_html__('Enter button text', 'atrolycore'),
                'label_block' => true,
                'condition' => [
                    'atroly_btn_button_show' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'atroly_btn_link_type',
            [
                'label' => esc_html__('Button Link Type', 'atrolycore'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => 'Custom Link',
                    '2' => 'Internal Page',
                ],
                'default' => '1',
                'label_block' => true,
                'condition' => [
                    'atroly_btn_button_show' => 'yes'
                ],
            ]
        );

        $this->add_control(
            'atroly_btn_link',
            [
                'label' => esc_html__('Button link', 'atrolycore'),
                'type' => Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => esc_html__('https://your-link.com', 'atrolycore'),
                'show_external' => false,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'condition' => [
                    'atroly_btn_link_type' => '1',
                    'atroly_btn_button_show' => 'yes'
                ],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'atroly_btn_page_link',
            [
                'label' => esc_html__('Select Button Page', 'atrolycore'),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'options' => atroly_get_all_pages(),
                'condition' => [
                    'atroly_btn_link_type' => '2',
                    'atroly_btn_button_show' => 'yes'
                ]
            ]
        );

        $this->add_responsive_control(
            'atroly_align',
            [
                'label' => esc_html__('Alignment', 'atrolycore'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'atrolycore'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'atrolycore'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'atrolycore'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => false,
                'selectors' => [
                    '{{WRAPPER}}' => 'text-align: {{VALUE}};'
                ]
            ]
        );
        
        $this->end_controls_section();

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('pricing_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_section_style_controls('pricing_box', 'Price - Box', '.atroly-el-box');
        $this->atroly_link_controls_style('pricing_badge', 'Price - Badge', '.atroly-el-badge');
        $this->atroly_link_controls_style('pricing_category', 'Price - Category', '.atroly-el-box-category');
        $this->atroly_basic_style_controls('pricing_ammount', 'Price - Ammount', '.atroly-el-box-ammount');
        $this->atroly_basic_style_controls('pricing_period', 'Price - Period', '.atroly-el-box-period');
        $this->atroly_basic_style_controls('pricing_desc', 'Price - Description', '.atroly-el-box-desc');
        $this->atroly_basic_style_controls('features_title', 'Features - Title', '.atroly-el-feature-title');
        $this->atroly_basic_style_controls('pricing_list', 'Price - List', '.atroly-el-box-list');
        $this->atroly_basic_style_controls('pricing_list_unavailabe', 'Price - List Unavailable', '.atroly-el-box-list-unavailable');
        $this->atroly_link_controls_style('pricing_btn', 'Price - Button', '.atroly-el-box-btn'); 
    }

    private static function get_currency_symbol($symbol_name)
    {
        $symbols = [
            'baht' => '&#3647;',
            'bdt' => '&#2547;',
            'dollar' => '&#36;',
            'euro' => '&#128;',
            'franc' => '&#8355;',
            'guilder' => '&fnof;',
            'indian_rupee' => '&#8377;',
            'pound' => '&#163;',
            'peso' => '&#8369;',
            'peseta' => '&#8359',
            'lira' => '&#8356;',
            'ruble' => '&#8381;',
            'shekel' => '&#8362;',
            'rupee' => '&#8360;',
            'real' => 'R$',
            'krona' => 'kr',
            'won' => '&#8361;',
            'yen' => '&#165;',
        ];

        return isset($symbols[$symbol_name]) ? $symbols[$symbol_name] : '';
    }

    private static function get_currency_symbol_text($symbol_text)
    {
        $symbols =[
            'baht' => 'THB',
            'bdt' => 'BDT',
            'dollar' => 'USD',
            'euro' => 'EUR',
            'franc' => 'EUR',
            'guilder' => 'GLD',
            'indian_rupee' => 'INR',
            'pound' => 'GBP',
            'peso' => 'MXN',
            'lira' => 'TRY',
            'ruble' => 'RUB',
            'shekel' => 'ILS',
            'real' => 'BRL',
            'krona' => 'KR',
            'won' => 'KRW',
            'yen' => 'JPY',
        ];

        return isset($symbols[$symbol_text]) ? $symbols[$symbol_text] : '';
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
    $this->add_render_attribute('title_args', 'class', 'atroly-title');


    // Link
    if ('2' == $settings['atroly_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn-border-3 atroly-el-box-btn');
    } else {
        if ( ! empty( $settings['atroly_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', 'atroly-btn-border-3 atroly-el-box-btn');
        }
    }

    if ($settings['currency'] === 'custom') {
        $currency = $settings['currency_custom'];
    } else {
        $currency = self::get_currency_symbol($settings['currency']);
    }

    $class_name = $settings['active_price'] ? 'active' : '';

?>


<!-- default style -->
<?php else:
    $this->add_render_attribute('title_args', 'class', 'atroly-title');

    // Link
    if ('2' == $settings['atroly_btn_link_type']) {
        $this->add_render_attribute('atroly-button-arg', 'href', get_permalink($settings['atroly_btn_page_link']));
        $this->add_render_attribute('atroly-button-arg', 'target', '_self');
        $this->add_render_attribute('atroly-button-arg', 'rel', 'nofollow');
        $this->add_render_attribute('atroly-button-arg', 'class', '');
    } else {
        if ( ! empty( $settings['atroly_btn_link']['url'] ) ) {
            $this->add_link_attributes( 'atroly-button-arg', $settings['atroly_btn_link'] );
            $this->add_render_attribute('atroly-button-arg', 'class', '');
        }
    }

    if ($settings['currency'] === 'custom') {
        $currency = $settings['currency_custom'];
    } else {
        $currency = self::get_currency_symbol($settings['currency']);
    }

    $active_price = $settings['active_price'] ? 'active' : '';
?>

<div class="atroly-price__item <?php echo esc_attr($active_price); ?> p-relative">

    <?php if($settings['atroly_box_icon_type'] == 'icon') : ?>
        <?php if (!empty($settings['atroly_box_icon']) || !empty($settings['atroly_box_selected_icon']['value'])) : ?>
        <div class="atroly-price__icon">
            <?php atroly_render_icon($settings, 'atroly_box_icon', 'atroly_box_selected_icon'); ?>
        </div>
        <?php endif; ?>
    <?php elseif( $settings['atroly_box_icon_type'] == 'image' ) : ?>
        <?php if (!empty($settings['atroly_box_icon_image']['url'])): ?>
        <div class="atroly-price__icon">
            <img src="<?php echo $settings['atroly_box_icon_image']['url']; ?>" alt="<?php echo get_post_meta(attachment_url_to_postid($settings['atroly_box_icon_image']['url']), '_wp_attachment_image_alt', true); ?>">
        </div>
        <?php endif; ?>
    <?php else : ?>
        <?php if (!empty($settings['atroly_box_icon_svg'])): ?>
        <div class="atroly-price__icon">
            <?php echo $settings['atroly_box_icon_svg']; ?>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="atroly-price__title-box">
        <?php if(!empty($settings['title'])) :?>
        <h4 class="atroly-price__title-sm"><?php echo esc_html($settings['title']); ?></h4>
        <?php endif; ?>
        <?php if(!empty($settings['description'])) : ?>
        <p><?php echo atroly_kses($settings['description']); ?></p>
        <?php endif; ?>
    </div>
    <div class="atroly-price__feature">
        <ul>

            <?php if ( !empty($settings['show_features']) ) : 
            foreach ($settings['features_list'] as $index => $item) :
            $availability = $item['atroly_feature_unavailable'] ? 'inactive' : ' ';
            ?>
            <li class="<?php echo esc_attr($availability); ?>">
                <span>
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="htatroly://www.w3.org/2000/svg">
                    <path class="price-path-1" d="M6.344 9.20708L1.81052 6.82365C1.46119 6.64408 1.05752 6.6604 0.731485 6.87263C0.397684 7.09301 0.203613 7.46032 0.203613 7.86844V12.3659C0.203613 13.1414 0.615042 13.8433 1.27488 14.1943L5.8006 16.5778C5.95586 16.6594 6.12664 16.7002 6.29742 16.7002C6.49925 16.7002 6.70109 16.6431 6.87963 16.5288C7.21343 16.3166 7.4075 15.9411 7.4075 15.533V11.0355C7.41527 10.2519 7.00384 9.5499 6.344 9.20708Z" fill="currentcolor"/>
                    <path class="price-path-2" d="M15.3846 6.87587C15.0508 6.66372 14.6471 6.63924 14.3056 6.82691L9.77978 9.20956C9.11993 9.56043 8.7085 10.254 8.7085 11.0373V15.5334C8.7085 15.9413 8.90257 16.3167 9.23637 16.5288C9.41492 16.6431 9.61676 16.7002 9.81859 16.7002C9.98938 16.7002 10.1602 16.6594 10.3154 16.5778L14.8412 14.1952C15.5011 13.8443 15.9125 13.1507 15.9125 12.3674V7.87136C15.9125 7.46337 15.7184 7.09618 15.3846 6.87587Z" fill="currentcolor"/>
                    <path class="price-path-3" d="M13.9152 2.96146L8.86226 0.219067C8.33036 -0.0730223 7.68564 -0.0730223 7.15375 0.219067L2.10076 2.96146C1.73005 3.1643 1.50439 3.55375 1.50439 4C1.50439 4.43813 1.73005 4.8357 2.10076 5.03854L7.15375 7.78093C7.4197 7.92698 7.71788 8 8.008 8C8.29813 8 8.59631 7.92698 8.86226 7.78093L13.9152 5.03854C14.286 4.8357 14.5116 4.44625 14.5116 4C14.5116 3.55375 14.286 3.1643 13.9152 2.96146Z" fill="currentcolor"/>
                    </svg>
                </span> 
                
                <?php echo atroly_kses($item['atroly_features_title']); ?>
            </li>
            <?php endforeach; endif; ?>
 
        </ul>
    </div>
    <div class="atroly-price__btn atroly-btn-price">
        <span><?php echo esc_html('Price: ', 'atrolycore'); ?><?php echo esc_html($currency); ?><?php echo atroly_kses($settings['price']); ?></span>
        <?php if(!empty($settings['atroly_btn_text'])) : ?>
        <a <?php echo $this->get_render_attribute_string( 'atroly-button-arg' ); ?>><?php echo $settings['atroly_btn_text']; ?> <i class="fal fa-arrow-right"></i></a>
        <?php endif; ?>
    </div>
</div>

<?php endif;
    }
}

$widgets_manager->register( new ATROLY_Pricing() );