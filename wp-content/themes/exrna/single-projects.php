<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
<div class="container pushtop sp">
	<div class="row">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="col-md-10 hm-post">
				<div class="row">
					<div class="heading">
						<p><span class="post-date"><?php the_field('project_number'); ?> &bull; <?php the_field('awardee_organization'); ?> &bull; <?php the_time('m.d.y') ?></p>
						<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					</div>
				</div>
			</div>
		</article>
	</div><!-- End Row -->
	<div class="row">
		<div class="col-md-3">
			<?php
				    // Retrieve The Post's Author ID
				    $user_id = get_the_author_meta('ID');
				    // Set the image size. Accepts all registered images sizes and array(int, int)
				    $size = 'full size';

				    // Get the image URL using the author ID and image size params
				    $imgURL = get_cupp_meta($user_id, $size);
					
				    
				?>
			<?php echo '<img src="'. $imgURL .'" alt="'. $alt .'" class=" center-block img-responsive">'; ?>

		</div>
		<div class="col-md-7 col-md-offset-">
			<div class="row">
				<div class="col-xs-4"><div class="hm-post-border"></div></div>
			</div>

			<div class="sp-content">
				<div class="row">
					<div class="col-md-8">
					<p><span class="projectlead">Principal Investigator:</span> <span class="post-author"> <?php the_author_posts_link(); ?></span></p>					
					<p><span class="projectlead">Contributors:</span> <?php the_field('contributors'); ?> </p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12 project-content">
						<p><?php the_field('abstract_text'); ?></p>
						<p style="margin-top:25px">
							<a href="<?php the_field('nih_link'); ?>">
								<img src="<?php bloginfo( 'url' ); ?>/media/nih-reporter-logo.jpg" alt="">
							</a>
							<div class="row">
								<div class="liner"></div>
							</div>
						</p>
					</div>
				</div>
				
			</div>
			<!-- <div class="sp-prevnext pushtop">
				<p><?php previous_post('<i class="fa fa-long-arrow-left"></i> %', '', 'yes'); ?><br></p>
				<p><?php next_post('%  <i class="fa fa-long-arrow-right"></i> ', '', 'yes'); ?></p>
			</div> -->

				<div class="sp-comments">
					<?php while ( have_posts() ) : the_post(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

					<?php endwhile; // end of the loop. ?>
				</div>
				
			<div class="row pushtop">
				<div class="col-xs-12">
					<div class="row">
						<div class="liner pushbot"></div>
					</div>
					
					<p class="comments">Related Projects</p>
					
					<div class="project-box funded-projects">
						<?php 
 
						$posts = get_field('related');
						 
						if( $posts ): ?>
						    
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        
									<div class="row the-projects pushbot">
										<div class="col-3">
											<img src="http://placehold.it/90x90" alt="" class="img-responsive project-header-img ">
										</div>
										<div class="col-md-9 col-sm-10 col-xs-12">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span class="l-more"><i class="fa fa-long-arrow-right"></i></span></a></h4>
					                        <h5><?php the_field('contact_pi_project_leader'); ?></h5>
					                        <h6><?php the_field('awardee_organization'); ?></h6>
					                        </div>
										</div>
									
						    <?php endforeach; ?>
						    
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
					</div>
		
				</div>
			</div>
		</div>

	</div><!-- End Row -->
</div><!-- End Container -->




<?php get_footer(); ?>