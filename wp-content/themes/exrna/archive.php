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
	<div class="row pushtop hm-posts">
		<div class="col-md-8">
			<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>	
	<div class="content-padder">
		
		<?php if ( have_posts() ) : ?>
	
			<header class="">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();
	
						elseif ( is_tag() ) :
							single_tag_title();
	
						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
	
						elseif ( is_day() ) :
							printf( __( 'Day: %s', '_tk' ), '<span>' . get_the_date() . '</span>' );
	
						elseif ( is_month() ) :
							printf( __( 'Month: %s', '_tk' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
	
						elseif ( is_year() ) :
							printf( __( 'Year: %s', '_tk' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
	
						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', '_tk' );
	
						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', '_tk');
	
						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', '_tk' );
	
						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', '_tk' );
	
						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', '_tk' );
	
						else :
							_e( 'Archives', '_tk' );
	
						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
	
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-blog', get_post_format() );
				?>
	
			<?php endwhile; ?>
	
			<?php _tk_content_nav( 'nav-below' ); ?>
	
		<?php else : ?>
	
			<?php get_template_part( 'no-results', 'archive' ); ?>
	
		<?php endif; ?>
	
	</div><!-- .content-padder -->
			
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