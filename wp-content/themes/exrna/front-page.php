<?php
/*
Template Name: gd video w/ Title
*/
 
get_header() ?>
<link rel="stylesheet" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/BigVideo/css/bigvideo.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery/jquery.min.js"><\/script>')</script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/jquery-ui.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="http://vjs.zencdn.net/4.0/video.js"></script>
<div class="over"></div>
<div class="container pushtop pushbot jumb">
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
						<div id="elmodal" class="hmbtn play">
							<!-- Button trigger modal -->

							<button id="elmodal pausey" class="pausey btn btn-primary btn-block hidden-sm hidden-xs" data-toggle="modal" data-target="#myModal"><p>Full Video <i class="fa fa-play"></i></p></button>
							<a href="http://www.youtube.com/watch?v=bfMg3RhxNm8" class="btn btn-primary btn-block hidden-lg hidden-md"><p>Play Video <i class="fa fa-play"></i></p></a>

						</div>

					</div>
				</div>
				
			</div>
			<div class="pause hidden-sm hidden-xs float-right">
				<button id="theButton" class="playing" style="z-index:9999">
					<i class="stopbgvid fa fa-pause"></i>
				</button>
	        </div>
		</div>
	</div>
</div>

<div class="clearfix"></div>
		<div class="wrap pushtop">
			<div class="white">
				<div class="container">
					
					<div class="row push80 hm-posts">
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
			        <iframe width="853" height="480" class="center-block" src="//www.youtube.com/embed/bfMg3RhxNm8" frameborder="0" allowfullscreen></iframe>
			      </div>
			      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div> 
</div>

<script>
	$('body').addClass('home');
	$('body').attr('id', 'page');
	$( '#exrnalogo' ).replaceWith('<a class="navbar-brand visible-lg visible-md visible-sm" href="/" title="exRNA" rel="home"><img src="./media/exrna-logo-white.png" alt="exRNA" class="logo img-responsive"></a><a class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs navbar-text-logo" href="/" title="exRNA" rel="home"><img src="./media/exrna-logo-white-small.svg" alt="exRNA" class="logo img-responsive" onerror="this.onerror=null; this.src=/media/exrna-logo-white-small.png"></a>');
	$('.modal').each(function(){var src = $(this).find('iframe').attr('src');$(this).on('click', function(){$(this).find('iframe').attr('src', '');$(this).find('iframe').attr('src', src);});});
	$('#big-video-control').on('click', function(e) {
	      $('.stopbgvid').toggleClass('fa-play').toggleClass('fa-pause'); //you can list several class names 
	      e.preventDefault();
	    });
</script>

<!-- Button to Pause BigVideo.js -->


<!-- BigVideo Dependencies -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="http://vjs.zencdn.net/4.0/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bgvidjs/lib/bigvideo.js"></script>


    <!-- Video Load -->
	 <script>
			var BV = new $.BigVideo({useFlashForFirefox:false});
	    	$(function() {
         
			// initialize BigVideo
			BV = new $.BigVideo();
			BV.init();
			if (Modernizr.touch) {
				    BV.show('<?php bloginfo( 'url' ); ?>/media/exRNA-moviestill-0820.jpg');
				} else {
					BV.show("<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/vids/exrnahd.mp4", {altSource:'<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/vids/exrnahd.ogv', ambient:true, doLoop:true});
				}


	    });
    </script>
	
    <script>
    $( document ).ready(function() {


    	$('#elmodal').on('click', function(e) {
	      $('.fa-pause').removeClass('fa-pause').addClass('fa-play');
	      $('#theButton').removeClass('playing');
	      BV.getPlayer().pause();
	      
	    });

    	$('.stopbgvid').on('click', function(e) {
	      $('.stopbgvid').toggleClass('fa-play').toggleClass('fa-pause'); 
	      
	    });
	    
	    

	    $("#theButton").on('click', function(e) {
		    if($(this).hasClass('playing')) {
		        BV.getPlayer().pause();
		           
		    } else {
		        BV.getPlayer().play();
		        
		    }
		    $(this).toggleClass('playing')
		})

	 });  
    </script>
<?php get_footer() ?>

