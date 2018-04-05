<?php

class exciter_Widget_Mini_Search extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'bt_widget_mini_search', // Base ID
			__('Mini Search', 'exciter'), // Name
			array('description' => __('Display the mini search in the menu right sidebar.', 'exciter'),) // Args
        );
		
	}
	
	function widget( $args, $instance ) {
		extract($args);
		$wg_class = 'widget bt-mini-search';
		$title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
        
		if(!empty($instance['el_class'])){
			$wg_class .= ' '.$instance['el_class'];
		}
		
		ob_start();
		?>
			<div class="<?php echo esc_attr($wg_class); ?>">
				<a class="bt-toggle-btn" title="<?php echo esc_attr($title); ?>" href="#"><i class="fa fa-search"></i></a>
				<div class="bt-search-form"><?php get_search_form(true); ?></div>
			</div>
			
		<?php
		echo ob_get_clean();
	}
	
	function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['el_class'] = $new_instance['el_class'];
        return $instance;
    }

    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : 'Search';
        $el_class = isset($instance['el_class']) ? esc_attr($instance['el_class']) : '';
		?>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'exciter'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('el_class')); ?>"><?php _e('Extra Class:', 'exciter'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('el_class')); ?>" name="<?php echo esc_attr($this->get_field_name('el_class')); ?>" value="<?php echo esc_attr($el_class); ?>" />
        </p>
        <?php
    }
}

/**
 * Class exciter_Widget_Mini_Search
 */
function register_exciter_widget_mini_search() {
    register_widget('exciter_Widget_Mini_Search');
}
add_action('widgets_init', 'register_exciter_widget_mini_search');
