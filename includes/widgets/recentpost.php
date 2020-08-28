<?php
/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class mkt_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			$post_id = $post->ID;
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul class="latestposts">
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
				<li>
                   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php 
                    echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'wp-post-thumb' ) ); ?>
                    </a>
                    <div class="post__details">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
				    </a>
				    <div class="post__date">
				        <?php the_time( 'F d Y'); ?>
				    </div>
				    </div>
				</li>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}
function mkt_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('mkt_Recent_Posts_Widget');
}
add_action('widgets_init', 'mkt_recent_widget_registration');
?>