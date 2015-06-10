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
			<div class="col-md-12 hm-post">
				<div class="row">
					<div class="heading">
						
						<p><span class="post-date"><?php the_time('m.d.y') ?></span> <i style="color: #9d9d9d;">last updated.</i></p>
						<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
						<div class="pull-">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="exrna" data-dnt="true">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div><!-- End Row -->
	<div class="row">
		<div class="col-md-8 col-md-offset-">
			<div class="row">
				<div class="col-xs-6"><div class="hm-post-border"></div></div>
			</div>
			<p><span class="post-author">by <?php coauthors_posts_links(); ?> </span></p>
			<div class="sp-content">
				<?php the_content(); ?>
				
			</div>
			<div class="sp-prevnext pushtop">
				<p><?php previous_post('<i class="fa fa-long-arrow-left"></i> %', '', 'yes'); ?><br></p>
				<p><?php next_post('%  <i class="fa fa-long-arrow-right"></i> ', '', 'yes'); ?></p>
			</div>
			<div class="sp-comments">
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div class="row sp-sidebar">
				<div class="col-md-12">
					<div class="grey blog1">
						<?php dynamic_sidebar( 'blog_1' ); ?>
						<script>
						$(document).ready(function(){
						    $('.blog1 ul').addClass('list-unstyled');
						});
						</script>
					</div>
				</div>
				<div class="col-md-12 pushtop">
					<div class="grey">
						<div class="row">
							<div class="col-md-12">
								<img src="http://exrna.org/media/banner-nihlogo.png" alt="" class="img-responsive imgcent">
							</div>
							
							<div class="col-md-12 pushtop">
								<div class="imgcent white email-signup">
					        		
										<?php gravity_form( 2, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
									
									<script>
										$(document).ready(function(){
											$( ".gform_body" ).replaceWith( "<div class='form-group'><input name='input_1' id='input_2_1' type='email' value='' class='medium form-control' placeholder='Email Newsletter'></div>" );
										    $('#gform_submit_button_2').addClass('btn btn-warning pull-right');
										});
									</script>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-12 pushtop">
					<?php dynamic_sidebar( 'twitter_area' ); ?>
				</div>
				
			</div>
		</div>
	</div><!-- End Row -->
</div><!-- End Container -->

	
	


<?php get_footer(); ?>