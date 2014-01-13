<?php get_header(); ?>

<link rel="stylesheet" href="http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/bower_components/BigVideo/css/bigvideo.css">
<div class="container pushy jumb">
				<div class="row">
					<div class="col-md-6">
						<h1>Unlocking the <br> Mysteries of <br>Extracellular RNA <br>Communication</h1>
						<p class="pushtop">Once thought to exist only inside cells, RNA is <br class="visible-lg"> known to travel outside of cells and play a role in newly <br class="visible-lg"> discovered mechanisms of cell-to-cell communication.</p>
					</div>
				</div>
				<div class="row pushtop">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="hmbtn learn">
									<a href="/exrnawp/about" class="btn btn-primary btn-block"><p>Learn More</p></a>
								</div>
							</div>
							<div id="hm" class="col-md-6">
								<div class="hmbtn play">
									<!-- Button trigger modal -->
									<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal"><p>Play Video <i class="fa fa-play"></i></p></button>
								</div>

								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="wrap pushtop">
			<div class="white">
				<div class="container">
					
					<div class="row pushtop hm-posts">
						<div class="col-md-5 col-md-offset-1">
							<article>

								<?php // Display blog posts on any page
								$temp = $wp_query; $wp_query= null;
								$wp_query = new WP_Query(); $wp_query->query('showposts=3' . '&paged='.$paged);
								while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to overload this in a child theme then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', 'blog' );
								?>


								<?php endwhile; ?>

								

								<?php wp_reset_postdata(); ?>

							</article>
						</div><!-- End hm-posts -->
						<div class="col-md-1"></div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<?php dynamic_sidebar( 'quick_links' ); ?>
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
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="page-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        
			      </div>
			      <div class="modal-body">
			        <iframe width="853" height="480" src="//www.youtube.com/embed/bfMg3RhxNm8" frameborder="0" allowfullscreen></iframe>
			      </div>
			      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>  


<script>
$('body').addClass('home');
$('body').attr('id', 'page');
$( 'img.logo' ).replaceWith( '<img src="http://localhost:8888/exrnawp/media/exrna-logo-white.png" alt="exrna">' );
</script>
    <!-- BigVideo Dependencies -->
	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="http://vjs.zencdn.net/4.0/video.js"></script>

    <!-- BigVideo -->
    <script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/bower_components/BigVideo/lib/bigvideo.js"></script>

    <!-- Demo -->
    <script>
	    $(function() {
            var BV = new $.BigVideo();
            var vids = [
                'http://localhost:8888/exrnawp/wp-content/themes/exrna/bigvid/vids/exrnahd.mp4',
            ];
            vids.sort(function() { return 0.5 - Math.random() }); // random order on load
			BV.init();
			BV.show(vids,{ambient:true});
	    });
    </script>
    
<? get_footer(); ?>
