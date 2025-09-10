<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Portfolio_Post extends Widget_Base {

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
		return 'atroly-portfolio-post';
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
		return __( 'Portfolio Post', 'atrolycore' );
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

        // title/content
        $this->atroly_section_title_render_controls('section', 'Section Title', 'Sub Title', 'your title here', $default_description = 'Hic nesciunt galisum aut dolorem aperiam eum soluta quod ea cupiditate.',$control_condition = ['layout-3']);
        
        // Product Query
        $this->atroly_query_controls('atroly-portfolios-id', 'Portfolio', 'atroly-portfolios', 'portfolios-cat', '6', '10', );

        // $this->atroly_query_controls('blog', 'Blog');


        // atroly_post__columns_section
        $this->atroly_columns('col', ['layout-1','layout-2','layout-3']);

	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('portfolio_section', 'Section - Style', '.atroly-el-section');
        $this->atroly_basic_style_controls('section_sub_title', 'Section - Sub Title', '.atroly-el-sub-title', 'layout-3');
        $this->atroly_basic_style_controls('section_title', 'Section - Title', '.atroly-el-title', 'layout-3');
        $this->atroly_basic_style_controls('section_des', 'Section - Description', '.atroly-el-des', 'layout-3');
        $this->atroly_link_controls_style('section_btn', 'Section - Button', '.atroly-el-btn', ['layout-1', 'layout-2', 'layout-3']);
        # repeater
        $this->atroly_basic_style_controls('rep_subtitle', 'Repeater Subtitle', '.atroly-el-rep-sub-title' , ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title' , ['layout-1', 'layout-2', 'layout-3']);

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

        /**
         * Setup the post arguments.
        */
        $query_args = ATROLY_Helper::get_query_args('atroly-portfolios', 'portfolios-cat', $this->get_settings());

       // The Query
       $query = new \WP_Query($query_args);

       $filter_list = $settings['category'];

       $portfolio_filter_btn_active = 1; // for filter button active

        ?>

<?php if ( $settings['atroly_design_style']  == 'layout-2' ): ?>

<div class="portfolio-area pt-100 pb-90 atroly-el-section">
    <div class="container">
        
        <?php if( !empty($filter_list) ) : ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="atroly-project-tab-wrapper d-flex justify-content-center portfolio-filter">
                    <ul class="nav nav-pills mb-60 wow fadeInUp masonary-menu" data-wow-duration="1s" data-wow-delay=".3s" id="pills-tab" role="tablist">
                        <?php 
                        $post_type = 'atroly-portfolios';
                        $count_posts = wp_count_posts( $post_type );
                        $published_posts = $count_posts->publish;
                        foreach ( $filter_list as $list ):
                            $listSTR = str_replace('-', ' ', $list);
                            if ( $portfolio_filter_btn_active === 1 ): 
                            $portfolio_filter_btn_active++; 
                        ?>

                            <li class="nav-item active"><button class="nav-link atroly-el-btn" data-filter="*"><span><?php echo esc_html__( 'See All','atrolycore' ); ?></span></button></li>
                            <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php else: ?>
                                <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row grid">
            <?php 
                while ($query->have_posts()) : 
                $query->the_post();
                global $post;
                $terms = get_the_terms($post->ID, 'portfolios-cat'); 
                $item_classes = '';
                $item_cat_names = '';
                $item_cats = get_the_terms( $post->ID, 'portfolios-cat' );
                if( !empty($item_cats) ):
                    $count = count($item_cats) - 1;
                    foreach($item_cats as $key => $item_cat) {
                        $item_classes .= $item_cat->slug . ' ';
                        $item_cat_names .= ( $count > $key ) ? $item_cat->name  . ', ' : $item_cat->name;
                    }
                endif; 
                $atroly_portfolio_sub_thumbnail = function_exists('get_field') ? get_field('atroly-portfolio_sub_thumbnail') : '';
                $categories = get_the_terms( $post->ID, 'portfolios-cat' );
            ?>
            <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?> grid-item <?php echo $item_classes; ?>">
                 <div class="atroly-project-thumb mb-25">
                    <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                    <?php endif; ?>
                    <div class="atroly-project-thumb-info">
                       <p class="atroly-el-rep-sub-title"><?php echo $item_cat_names ; ?></p>
                       <h4 class="atroly-project-thumb-title atroly-el-rep-title"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>
                 </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ): 
    $this->add_render_attribute('title_args', 'class', 'atroly-section-title atroly-el-title');
?>
<div class="portfolio-area pt-100 pb-90 atroly-el-section">
    <div class="container">
        
        <?php if( !empty($filter_list) ) : ?>
        <div class="row">
          <div class="col-lg-4">
             <div class="atroly-project-title-wrapper-2 mb-60">
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
          </div>
            <div class="col-lg-8">
                <div class="atroly-project-tab-wrapper tab-wrapper-2 d-flex justify-content-end">
                    <ul class="nav nav-pills mb-60 wow fadeInUp masonary-menu" data-wow-duration="1s" data-wow-delay=".3s" id="pills-tab" role="tablist">
                        <?php 
                        $post_type = 'atroly-portfolios';
                        $count_posts = wp_count_posts( $post_type );
                        $published_posts = $count_posts->publish;
                        foreach ( $filter_list as $list ):
                            $listSTR = str_replace('-', ' ', $list);
                            if ( $portfolio_filter_btn_active === 1 ): 
                            $portfolio_filter_btn_active++; 
                        ?>

                            <li class="nav-item active"><button class="nav-link atroly-el-btn" data-filter="*"><span><?php echo esc_html__( 'See All','atrolycore' ); ?></span></button></li>
                            <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php else: ?>
                                <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row grid">
            <?php 
                while ($query->have_posts()) : 
                $query->the_post();
                global $post;
                $terms = get_the_terms($post->ID, 'portfolios-cat'); 
                $item_classes = '';
                $item_cat_names = '';
                $item_cats = get_the_terms( $post->ID, 'portfolios-cat' );
                if( !empty($item_cats) ):
                    $count = count($item_cats) - 1;
                    foreach($item_cats as $key => $item_cat) {
                        $item_classes .= $item_cat->slug . ' ';
                        $item_cat_names .= ( $count > $key ) ? $item_cat->name  . ', ' : $item_cat->name;
                    }
                endif; 
                $atroly_portfolio_sub_thumbnail = function_exists('get_field') ? get_field('atroly-portfolio_sub_thumbnail') : '';
                $categories = get_the_terms( $post->ID, 'portfolios-cat' );
            ?>
            <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?> grid-item <?php echo $item_classes; ?>">
                 <div class="atroly-project-thumb mb-25">
                    <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                    <?php endif; ?>
                    <div class="atroly-project-thumb-info">
                       <p class="atroly-el-rep-sub-title"><?php echo $item_cat_names ; ?></p>
                       <h4 class="atroly-project-thumb-title atroly-el-rep-title"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>
                 </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php else: ?>

<div class="portfolio-area pt-100 pb-90 atroly-el-section">
    <div class="container">
        
        <?php if( !empty($filter_list) ) : ?>
        <div class="row">
            <div class="col-xl-12">
                <div class="atroly-project-tab-wrapper d-flex justify-content-center portfolio-filter">
                    <ul class="nav nav-pills mb-60 wow fadeInUp masonary-menu" data-wow-duration="1s" data-wow-delay=".3s" id="pills-tab" role="tablist">
                        <?php 
                        $post_type = 'atroly-portfolios';
                        $count_posts = wp_count_posts( $post_type );
                        $published_posts = $count_posts->publish;
                        foreach ( $filter_list as $list ):
                            $listSTR = str_replace('-', ' ', $list);
                            if ( $portfolio_filter_btn_active === 1 ): 
                            $portfolio_filter_btn_active++; 
                        ?>

                            <li class="nav-item active"><button class="nav-link atroly-el-btn" data-filter="*"><span><?php echo esc_html__( 'See All','atrolycore' ); ?></span></button></li>
                            <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php else: ?>
                                <li class="nav-item"><button class="nav-link atroly-el-btn" data-filter=".<?php echo esc_attr( $list ); ?>"><span><?php echo esc_html( $listSTR ); ?></span></button></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row grid">
            <?php 
                while ($query->have_posts()) : 
                $query->the_post();
                global $post;
                $terms = get_the_terms($post->ID, 'portfolios-cat'); 
                $item_classes = '';
                $item_cat_names = '';
                $item_cats = get_the_terms( $post->ID, 'portfolios-cat' );
                if( !empty($item_cats) ):
                    $count = count($item_cats) - 1;
                    foreach($item_cats as $key => $item_cat) {
                        $item_classes .= $item_cat->slug . ' ';
                        $item_cat_names .= ( $count > $key ) ? $item_cat->name  . ', ' : $item_cat->name;
                    }
                endif; 
                $atroly_portfolio_sub_thumbnail = function_exists('get_field') ? get_field('atroly-portfolio_sub_thumbnail') : '';
                $categories = get_the_terms( $post->ID, 'portfolios-cat' );
            ?>
            <div class="col-xl-<?php echo esc_attr($settings['atroly_col_for_desktop']); ?> col-lg-<?php echo esc_attr($settings['atroly_col_for_laptop']); ?> col-md-<?php echo esc_attr($settings['atroly_col_for_tablet']); ?> col-<?php echo esc_attr($settings['atroly_col_for_mobile']); ?> grid-item <?php echo $item_classes; ?>">
                 <div class="atroly-project-item-3 text-center mb-40">
                    <?php if ( has_post_thumbnail() ): ?>
                    <div class="atroly-project-thumb-3">
                       <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?></a>
                    </div>
                    <?php endif; ?>
                    <div class="atroly-project-content-3">
                       <span class="atroly-el-rep-sub-title"><?php echo $item_cat_names ; ?></span>
                       <h3 class="atroly-project-title-3 atroly-el-rep-title"> <a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                 </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php endif;
	}

}

$widgets_manager->register( new ATROLY_Portfolio_Post() );