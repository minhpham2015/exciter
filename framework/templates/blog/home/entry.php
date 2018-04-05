<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
		<?php if (has_post_thumbnail()) { ?>
			<div class="bt-media <?php echo get_post_format(); ?>">
				<?php the_post_thumbnail('full'); ?>
			</div>
		<?php } ?>
		
		<ul class="bt-meta">
			<li class="bt-author"><?php echo '<strong>'.esc_html__('By:', 'exciter').' </strong>'.get_the_author(); ?></li>
			<li class="bt-public"><?php echo '<strong>'.esc_html__('Date:', 'exciter').' </strong>'.get_the_date(get_option('date_format')); ?></li>
			<li><a href="<?php comments_link(); ?>"><?php comments_number( '<strong>'.esc_html__('Comment:', 'exciter').' </strong> 0', '<strong>'.esc_html__('Comment:', 'exciter').' </strong> 1', '<strong>'.esc_html__('Comments:', 'exciter').' </strong> %' ); ?></a></li>
			<li><?php the_terms( get_the_ID(), 'category', '<strong>'.esc_html__('Category:', 'exciter').' </strong>', ', ' ); ?></li>
		</ul>
	
		<div class="bt-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'exciter'); ?></a>
		
	</div>
</article>
