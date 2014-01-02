<?php
/**
 *
 *Blog Template
 *
 * 
 *
 * 
 *
 *
 */

get_header(); ?>
<div class="container pushtop">
	<div class="row pushtop hm-posts">
		<div class="col-md-5 col-md-offset-1">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'blog' );
					?>

				<?php endwhile; ?>

				<?php _tk_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	

<?php get_footer(); ?>