<?php
/**
 *
 *Author Template
 *
 * 
 *
 * 
 *
 *
 */

get_header(); ?>
<div class="container pushtop author">
	<div class="row">
			<div class="col-md-12">
				<?php
				    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				    ?>
					<div class="center-block">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 75 ); ?>
					</div>
				    <h1 class="text-center"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
				    <div class="row">
				    	<div class="col-sm-6 col-sm-offset-3 text-center">
				    		<div class="row">
				    			<div class="col-sm-4">
				    				<a href="<?php echo $curauth->user_url; ?>"><i class="fa fa-link"></i> <?php echo $curauth->user_url; ?></a> 
				    			</div>
				    			<div class="col-sm-4">
				    				<a href="https://twitter.com/<?php echo the_author_meta('twitter'); ?>"><i class="fa fa-twitter"></i> <?php echo the_author_meta('twitter'); ?></a>				    				
				    			</div>
				    			<div class="col-sm-4">
									<a href="<?php echo the_author_meta('googleplus'); ?>"><i class="fa fa-google-plus"></i> Google Plus</a>
								</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="row">
				    	<div class="col-sm-8 col-sm-offset-2 text-center pushtop">
				    		<?php echo $curauth->user_description; ?>
				    	</div>
				    </div>
				    <div class="row">
				   
				<!-- The Loop -->

				    <div class="col-xs-10 col-xs-offset-1">
			    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="row pushtop">
								<div class="col-xs-12"><div class="hm-post-border"></div></div>
							</div>
							<div class="col-md-12 hm-post">
								
								<div class="row">
									<div class="heading">
										<p><span class="post-date"><?php the_time('m.d.y') ?></span> <span class="post-author">by <?php the_author_posts_link(); ?></span></p>
										<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
									</div>
								</div>
								<div class="row">
									<div class="excerpt">
										<div class="post-excerpt">
											<p><?php the_excerpt() ?>
										</div>
									</div>
								</div>
								
							</div>

						 <?php endwhile; else: ?>
						        <p><?php _e('No posts by this author.'); ?></p>

						 <?php endif; ?><!-- End Loop -->
				    </div>


				    	
		    	</div>
		    	
		    </div>
		    
		   
	</div>
</div>
	



			
		
	</div>
</div>
	

<?php get_footer(); ?>