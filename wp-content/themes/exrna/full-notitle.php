<?php
/*
Template Name: Full No Title
*/
 
get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container">
			<div class="row">	
				<?php the_content(); ?>
			</div>
		</div>
	

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>





