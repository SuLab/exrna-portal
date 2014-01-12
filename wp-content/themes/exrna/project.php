<?php
 
/**
 * Template Name: Project Page
 */
 
get_header(); 
 
?>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<p>Project.php</p>
				
				<?php
					$args = array(
							'post_type' => 'projects'
						);
					$the_query = new WP_Query( $args );
				 ?>
			<div id="content" role="main">

		 
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		 
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		 
					<img src="<?php the_field('hero_image'); ?>" />
		 
					<p><?php the_content(); ?></p>
		 
				<?php endwhile; // end of the loop. ?>
		 
			</div><!-- #content -->
		</div><!-- #primary -->
	</div>
</div>


<?php get_footer(); ?>