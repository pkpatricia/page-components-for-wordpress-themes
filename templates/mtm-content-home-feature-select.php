<div class="mtm-home-featured--single">
	<div class="mtm-home-featured--single-content">
		
		<?php the_mtm_post_thumbnail( 'medium_large', 'mtm-home-featured--image' ); ?>

		<h3><a href="<?php the_permalink(); ?>">
				
			<?php if( "Post Title" == _get_sub_field( 'mtm_home_featured_box_title' ) ) :
				the_title(); 
			else :
				esc_html( the_sub_field( 'mtm_home_featured_box_title' ) ); 
			endif; ?>

			</a></h3>

		<?php the_excerpt(); ?>
		
	</div>
</div>

<?php wp_reset_postdata(); ?>