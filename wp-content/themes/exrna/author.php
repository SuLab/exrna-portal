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
<div class="container pushtop">
	<div class="row">
			<div class="col-md-12">
				<?php
				    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				    ?>

				    <h2>About: <?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h2>
				    <dl>
				        <dt>Website</dt>
				        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
				        <dt>Profile</dt>
				        <dd><?php echo $curauth->user_description; ?></dd>
				        <dd>Twitter: <a href="https://twitter.com/<?php echo the_author_meta('twitter'); ?>"><?php echo the_author_meta('twitter'); ?></a></dd>
				        <dd>Google +: <a href="<?php echo the_author_meta('googleplus'); ?>"><?php echo the_author_meta('googleplus'); ?></a></dd>
						<dd><?php echo get_avatar( get_the_author_meta( 'ID' ), 75 ); ?></dd>
				    </dl>

				    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

				    <ul>
			</div>
		</div>
	<div class="row pushtop hm-posts">

		<div class="col-md-5 col-md-offset-1">
			<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
			
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
	</div>
</div>
	

<?php get_footer(); ?>