<?php
	/**
	 * ATROLYCore Sidebar Form Widget
	 *
	 *
	 * @author 		creative-hunk
	 * @category 	Widgets
	 * @package 	ATROLYCore/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'atroly_sidebar_form_widget');
	function atroly_sidebar_form_widget() {
		register_widget('atroly_sidebar_form_widget');
	}
	
	
	class atroly_sidebar_form_widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('atroly_sidebar_form_widget',esc_html__('ATROLY Sidebar Form','atrolycore'),array(
				'description' => esc_html__('ATROLY Sidebar Form Widget by creative-hunk','atrolycore'),
			));
		}
		
		public function widget($args,$instance){
			extract($args);
			extract($instance);
		 	print $before_widget; 

		 	if ( ! empty( $title ) ) {
				print $before_title . apply_filters( 'widget_title', $title ) . $after_title;
			}
		?>

			<?php if( !empty($atroly_form_shortcode) ): ?>
			<div class="sidebar_form_widget">
                <div class="atroly_sidebar_form sidebar__contact">
                    <?php print do_shortcode($atroly_form_shortcode); ?>
                </div>
            </div>
            <?php endif; ?>  

	    	<?php print $after_widget; ?>  

		<?php
		}
		

		/**
		 * widget function.
		 *
		 * @see WP_Widget
		 * @access public
		 * @param array $instance
		 * @return void
		 */
		public function form($instance){
			$title  = isset($instance['title'])? $instance['title']:'';
			$atroly_form_shortcode  = isset($instance['atroly_form_shortcode'])? $instance['atroly_form_shortcode']:'';
			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','atrolycore'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  class="widefat" name="<?php print esc_attr($this->get_field_name('title')); ?>" value="<?php print esc_attr($title); ?>">

			<p>
				<label for="title"><?php esc_html_e('Form Shortcode:','atrolycore'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('atroly_form_shortcode')); ?>" class="widefat" name="<?php print esc_attr($this->get_field_name('atroly_form_shortcode')); ?>" value="<?php print esc_attr($atroly_form_shortcode); ?>">	
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['subscribe_style'] = ( ! empty( $new_instance['subscribe_style'] ) ) ? strip_tags( $new_instance['subscribe_style'] ) : '';
			$instance['atroly_form_shortcode'] = ( ! empty( $new_instance['atroly_form_shortcode'] ) ) ? strip_tags( $new_instance['atroly_form_shortcode'] ) : '';
			return $instance;
		}
	}