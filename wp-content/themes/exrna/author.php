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
				    // Retrieve The Post's Author ID
				    $user_id = get_the_author_meta('ID');
				    // Set the image size. Accepts all registered images sizes and array(int, int)
				    $size = 'thumbnail';

				    // Get the image URL using the author ID and image size params
				    $imgURL = get_cupp_meta($user_id, $size);
					
				    
				?>
				
				<?php
				    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				    ?>
					<div class="center-block">

						<?php echo '<img src="'. $imgURL .'" alt="'. $alt .'" class="img-circle center-block">'; ?>
					</div>
				    <h1 class="text-center"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
				    <div class="row">
			
				    	<div class="col-sm-12 col-sm-offset- text-center">
				    		<div class="row center-block author-links">
				    				
								<?php 


								$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); 

								if ($curauth->user_url != true){
									echo "";
								} elseif ($curauth->user_url != false) {
									echo ' <a href=' . $curauth->user_url . '><i class="fa fa-link"></i> ' . $curauth->user_url . '</a>';
								}

								if ($curauth->twitter != true){
									echo "";
								} elseif ($curauth->twitter != false) {
									echo ' <a href=http://twitter.com/' . $curauth->twitter . '><i class="fa fa-twitter"></i> @' . $curauth->twitter . '</a>';
								}


								if ($curauth->googleplus != true){
									echo "";
								} elseif ($curauth->googleplus != false) {
									echo ' <a href=' . $curauth->googleplus . '><i class="fa fa-google-plus"></i> Google Plus</a>';
								}

								if ($curauth->linkedin != true){
									echo "";
								} elseif ($curauth->linkedin != false) {
									echo ' <a href=' . $curauth->linkedin . '><i class="fa fa-linkedin"></i> LinkedIn</a>';
								}

								?>
				    				
				    			
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
											<p><span class="post-date"><?php the_time('m.d.y') ?></span> <span class="post-author">by <?php coauthors_posts_links(); ?></span></p>
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
				    	
		    		 </div><!-- /row -->
		    </div><!-- /col-md-12 -->
		    
		   
	</div>
</div>
	



			
		
	</div>
</div>
	

<?php get_footer(); ?>