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
			<?php // Display blog posts on any page @ http://m0n.co/l
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'blog' );
					?>

				<?php endwhile; ?>

				<?php if ($paged > 1) { ?>

					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					</nav>

				<?php } else { ?>

					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					</nav>

				<?php } ?>

				<?php wp_reset_postdata(); ?>

			
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	

<?php get_footer(); ?>