<?php
namespace ATROLYCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Box_Shadow;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Atroly Core
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class ATROLY_Blog_Post extends Widget_Base {

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
		return 'atroly-blog-post';
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
		return __( 'Blog Post', 'atrolycore' );
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

        // Blog Query
		$this->atroly_query_controls('blog', 'Blog');

        // section column
        $this->atroly_columns('col', ['layout-1', 'layout-2', 'layout-3']);
        
	}

    // style_tab_content
    protected function style_tab_content(){
        $this->atroly_section_style_controls('blog_section', 'Section - Style', '.atroly-el-section');
        # repeater
        $this->atroly_basic_style_controls('rep_meta', 'Repeater Meta', '.atroly-el-rep-meta', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_title', 'Repeater Title', '.atroly-el-rep-title', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_basic_style_controls('rep_des', 'Repeater Description', '.atroly-el-rep-des', ['layout-1', 'layout-2', 'layout-3']);
        $this->atroly_link_controls_style('rep_btn', 'Repeater Button', '.atroly-el-rep-btn', ['layout-1', 'layout-2', 'layout-3']);
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
        $query_args = ATROLY_Helper::get_query_args('post', 'category', $this->get_settings());

        // The Query
        $query = new \WP_Query($query_args);


        $filter_list = $settings['category'];

        ?>

<?php if ( $settings['atroly_design_style']  == 'layout-2' ): 
?>

<!-- blog area start -->
<section class="atroly-blog-area-3 atroly-el-section">
    <div class="container">
        <div class="row">
            <?php if ($query->have_posts()) : 
					$i = 0;
					while ($query->have_posts()) : 
					$query->the_post();
					global $post;
					$categories = get_the_category($post->ID);
					$i++;
				?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="atroly-blog-item-wrapper-2 blog-3 p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-blog-item-thumb-2 thumb-height">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                        <div class="atroly-blog-item-info-3 d-flex justify-content-center">
                            <span class="atroly-el-rep-meta"><i class="fa-regular fa-calendar-days"></i><?php the_time( get_option('date_format') ); ?>
							</span>
                            <span class="atroly-el-rep-meta">
								<i class="fa-regular fa-comments"></i><a
                                    href="#"><?php comments_number();?></a>
							</span>
                        </div>
                    </div>
                    <div class="atroly-blog-item-content-3">
                      
                        <h4 class="atroly-blog-item-title atroly-el-rep-title"><a
                                href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $settings['atroly_blog_title_word'], ''); ?></a></h4>
                        <?php if (!empty($settings['atroly_post_content'])):
                            $atroly_post_content_limit = (!empty($settings['atroly_post_content_limit'])) ? $settings['atroly_post_content_limit'] : '';
                        ?>
                        <p class="atroly-el-rep-des"><?php print wp_trim_words(get_the_excerpt(get_the_ID()), $atroly_post_content_limit, ''); ?></p>
                        <?php endif; ?>
                        <div class="atroly-blog-item-btn-3">
						<a class="atroly-el-rep-btn" href="<?php the_permalink(); ?>"><?php echo atroly_kses($settings['atroly_post_button']); ?><span><i
                                        class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
</section>
<!-- blog area end -->

<?php elseif ( $settings['atroly_design_style']  == 'layout-3' ) : 
?>

<!-- blog area start -->
<section class="atroly-blog-area-2 atroly-el-section">
    <div class="container">
        <div class="row">
            <?php if ($query->have_posts()) : 
					$i = 0;
					while ($query->have_posts()) : 
					$query->the_post();
					global $post;
					$categories = get_the_category($post->ID);
					$i++;
				?>
            <div class="col-lg-4 col-md-6">
                <div class="atroly-blog-item-wrapper-2 p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-blog-item-thumb-2 thumb-height">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="atroly-blog-item-date-2">
                        <span class="atroly-el-rep-meta"> <?php the_time('j F '); ?></span>
                    </div>
                    
                    <div class="atroly-blog-item-content-2">
                        <div class="atroly-blog-item-info-2 d-flex">
						<span class="atroly-el-rep-meta"><i class="fa-regular fa-user"></i><?php echo esc_html__('by ', 'atrolycore'); ?><?php the_author(); ?></span>
                        <span class="atroly-el-rep-meta"><i class="fa-regular fa-comments"></i><a
                                    href="#"><?php comments_number();?></a></span>
                        </div>
                        <h4 class="atroly-blog-item-title atroly-el-rep-title"><a
                                href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $settings['atroly_blog_title_word'], ''); ?></a></h4>
                        <?php if (!empty($settings['atroly_post_content'])):
                            $atroly_post_content_limit = (!empty($settings['atroly_post_content_limit'])) ? $settings['atroly_post_content_limit'] : '';
                        ?>
                        <p class="atroly-el-rep-des"><?php print wp_trim_words(get_the_excerpt(get_the_ID()), $atroly_post_content_limit, ''); ?></p>
                        <?php endif; ?>
                        <div class="atroly-blog-item-btn-2">
						<a class="atroly-el-rep-btn" href="<?php the_permalink(); ?>"><?php echo atroly_kses($settings['atroly_post_button']); ?><span><i
                                        class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
</section>
<!-- blog area end -->

<?php else : ?>
<!-- blog area start -->
<section class="atroly-blog-area atroly-el-section">
    <div class="container">
        <div class="row">
            <?php if ($query->have_posts()) : 
					$i = 0;
					while ($query->have_posts()) : 
					$query->the_post();
					global $post;
					$categories = get_the_category($post->ID);
					$i++;
				?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="atroly-blog-item-wrapper p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".3s">
                    <div class="atroly-blog-item-thumb thumb-height">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                        <div class="atroly-blog-item-date">
                        <h4 class="atroly-el-rep-meta"><?php echo the_time("j")?></h4>
                        <p class="atroly-el-rep-meta"><?php echo  the_time("F")?></p>
                    </div>
                    </div>
                    <div class="atroly-blog-item-content">
                        <div class="atroly-blog-item-info d-flex">
                            <span class="atroly-el-rep-meta"><i class="fa-regular fa-user"></i><?php echo esc_html__('by ', 'atrolycore'); ?><?php the_author(); ?></span>
                            <span class="atroly-el-rep-meta"><i class="fa-regular fa-comments"></i><a href="#"><?php comments_number();?></a></span>
                        </div>
                        <h4 class="atroly-blog-item-title atroly-el-rep-title"><a
                                href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $settings['atroly_blog_title_word'], ''); ?></a>
                        </h4>
                        <?php if (!empty($settings['atroly_post_content'])):
                            $atroly_post_content_limit = (!empty($settings['atroly_post_content_limit'])) ? $settings['atroly_post_content_limit'] : '';
                        ?>
                        <p class="atroly-el-rep-des"><?php print wp_trim_words(get_the_excerpt(get_the_ID()), $atroly_post_content_limit, ''); ?>
                        </p>
                        <?php endif; ?>
                        <div class="atroly-blog-item-btn text-end">
                            <a class="atroly-el-rep-btn" href="<?php the_permalink(); ?>"><span><i class="fa-regular fa-arrow-right"></i></span><?php echo atroly_kses($settings['atroly_post_button']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); endif; ?>
        </div>
    </div>
</section>
<!-- blog area end -->
<?php endif;
	}

}

$widgets_manager->register( new ATROLY_Blog_Post() );