<?php // Taxonomy List Component

$list_query = mtm_taxonomy_query( 'list' );
$taxonomy = mtm_acf_taxonomy_property( 'list', 'taxonomy' ); 
$terms = mtm_acf_taxonomy_property( 'list', 'slug' );
$view = _get_field( 'mtm_show_view_all_link' ); ?>

<h2 class="h1"><?php the_title(); ?><?php edit_post_link( '(Edit)', ' • ' ); ?></h2>
<div <?php post_class( 'mtm-component--main' ); ?>>
	<?php mtm_get_template_part( 'mtm-content', 'component-page' ); ?>
</div>

<?php if( _get_field( 'mtm_show_taxonomy_links' ) ) :
	mtm_terms_from_taxonomy_links( $taxonomy ); // output taxonomy links
endif; ?>

<?php if( $list_query->have_posts() ) : ?>

	<div class="mtm-component--content mtm-list--wrapper">

		<?php while( $list_query->have_posts() ) :
			
			$list_query->the_post();

			mtm_get_template_part( 'mtm-content', 'list-view' );
		
		endwhile;

		wp_reset_postdata(); ?>

	</div>

<?php endif; // end list_query

if( $view ) : // View All Link ?>

	<a class="mtm-view-all-link" href="<?php echo get_site_url() . '/' . $taxonomy . '/'. $terms; ?>"><?php _e( 'View All', 'mtm' ); ?></a>

<?php endif; ?>