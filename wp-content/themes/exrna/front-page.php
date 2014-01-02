<!DOCTYPE html>
<html lang="en-GB" dir="ltr">
    <head>
		<meta charset="utf-8">
		<link href="http://localhost:8888/exrnawp/wp-content/themes/exrna/themes/ui-darkness/jquery-ui-1.8.12.custom.css" rel="stylesheet" media="screen">
		<link href="http://localhost:8888/exrnawp/wp-content/themes/exrna/themes/jquery.videobackground.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="http://localhost:8888/exrnawp/wp-content/themes/exrna/style.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<script type="text/javascript" src="http://fast.fonts.net/jsapi/ba20ca36-be5d-4953-bf6c-5e8e2e344077.js"></script>
		<meta charset="UTF-8">
		<title>exRNA Big Video</title>
		<!-- https://github.com/sydlawrence/jquery.videoBG -->
			<style>
			.video-background {
				position: absolute;
				top: 0;
				left: 0;
				overflow: hidden;
				width: 100%;
				height: 75%;
				z-index: 0;
			}
			.video-background video {
				min-height: 950px; 
				min-width:100%; 
				overflow: hidden;
			}
			</style>
		</style>
		<script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/external/jquery.js"></script>
		<script src="http://localhost:8888/exrnawp/wp-content/themes/exrna/script/jquery.videobackground.js"></script>
		<script>
			$(document).ready(function() {
				$('dl').toggle();
				$('h2').bind('click', function(event) {
					event.preventDefault();
					$(this).next('dl').slideToggle(500, function() {
						$('.video-background').videobackground('resize');
					});
				});
				$('body').prepend('<div class="video-background"></div>');
				$('.video-background').videobackground({
					videoSource: [['http://localhost:8888/exrnawp/wp-content/themes/exrna/video/exrna.mp4', 'video/mp4'],
						['http://localhost:8888/exrnawp/wp-content/themes/exrna/video/exrna.webm', 'video/webm'], 
						['http://localhost:8888/exrnawp/wp-content/themes/exrna/video/exrna.ogv', 'video/ogg']], 
					controlPosition: '#main',
					poster: 'http://localhost:8888/exrnawp/wp-content/themes/exrna/video/big-buck-bunny.jpg',
					loadedCallback: function() {
						$(this).videobackground('mute');
					}
				});
			});
		</script>
    </head>
    <body>	
		<div id="page">
			<header class="navbar navbar-inverse navbar-fixed-topd bs-docs-nav" role="banner">
			  <div class="container" >
			    <div class="navbar-header">
			      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a href="/exrnawp/" class="navbar-brand"><img src="./media/exrna_logo_test.png" alt="exrna"></a>
			    </div>
			    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			      <ul class="nav navbar-nav">
			        <li>
			          <a href="/exrnawp/about">About</a>
			        </li>
			        <li>
			          <a href="/exrnawp/protocols">Protocols</a>
			        </li>
			        <li>
			          <a href="#">Projects</a>
			        </li>
			        <li>
			          <a href="#">Publications</a>
			        </li>
			        <li>
			          <a href="#">Resources</a>	
			        </li>
			        <li>
			          <a href="#">Events</a>
			        </li>
			        <li>
			          <a href="#">Blog</a>
			        </li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li>
			        	<a href="#"><strong>?</strong></a>
			        </li>
		        	<li class="dropdown">
					  <a data-toggle="dropdown" id="drop1" href="#" style="color:#fff"><i class="fa fa-search"></i></a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
					    <li><input type="text" class="form-control" placeholder="Search"></li>
					  </ul>
					</li>
			      </ul>
			    </nav>
			  </div>
			</header>

			<div class="container pushy jumb">
				<div class="row">
					<div class="col-md-6">
						<h1>Unlocking the <br> Mysteries of <br>Extracellular RNA <br>Communication</h1>
						<p class="pushtop">Once thought to exist only inside cells, RNA is <br> known to travel outside of cells and play a role in newly <br> discovered mechanisms of cell-to-cell communication.</p>
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
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <iframe width="560" height="315" src="//www.youtube.com/embed/bfMg3RhxNm8" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
								
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
									<div class="blue">
										<h3>Quick Links</h3>
										<ul class="list-unstyled">
											<li><a href="">ExRNA Atlas @ BioGPS</a></li>
											<li><a href="">ExRNA Pathway Collection</a></li>
											<li><a href="">ExoCarta</a></li>
											<li><a href="">Vesiclepedia</a></li>
											<li><a href="">ExRNA Protocols</a></li>
										</ul>
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
									        		<form class="form-inline" role="form">
													  <div class="form-group">
													    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Newsletter">
													  </div>
													  <button type="submit" class="btn btn-warning pull-right"><strong>SIGN UP</strong></button>
													</form>
												</div>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-md-12 pushtop">
									<a class="twitter-timeline" href="https://twitter.com/exRNA" data-widget-id="416833924866654209">Tweets by @exRNA</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


								</div>
								
							</div>
						</div>
						
						
					</div>
					<hr>
					<div class="row pushbot">
						
					</div>
					
				</div>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="row pushtop">
					<div class="col-md-1 col-md-offset-1 ft-nav">
						<h3>exRNA</h3>
						<ul class="list-unstyled">
							
					        <li>
					          <a href="">About</a>
					        </li>
					        <li>
					          <a href="">Protocols</a>
					        </li>
					        <li>
					          <a href="#">Projects</a>
					        </li>
					        <li>
					          <a href="#">Publications</a>
					        </li>
					        <li>
					          <a href="#">Resources</a>	
					        </li>
					        <li>
					          <a href="#">Events</a>
					        </li>
					        <li>
					          <a href="#">Engage</a>
					        </li>
					      </ul>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<div class="blue">
							<p>Patel Lab Protocol</p>
							<h3>Isolation of Exosomes By Density Gradient Isolation</h3>
							<p class="whitemore">MORE <i class="fa fa-long-arrow-right"></i></p>
						</div>
					</div>
					
					<div class="col-md-2">
						<h3>Resources</h3>
						<ul class="list-unstyled">
							<li><a href="">Protocols</a></li>
							<li><a href="">Data</a></li>
							<li><a href="">Software</a></li>
							<li><a href="">Standards</a></li>
							<li><a href="">Publications</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h3 class="">Contact Us</h3>
						<address>
							<p>1232 SomeStreet St.</p>
							<p>San Diego, CA 92111 USA</p>
							<p style="margin-top:10px;"><abbr title="Phone">P:</abbr> (619) 555-5555</p> 
							<p style="margin-top:10px;"><a href="mailto:info@exrna.org" style="margin-top:30px;">info@exrna.org</a></p>
						</address>
						<p style="font-size: 20px;">
							<i class="fa fa-facebook-square fa-3"></i>
							<i class="fa fa-twitter-square fa-5"></i>
							<i class="fa fa-linkedin-square fa-5"></i>
							<i class="fa fa-github-square fa-5"></i>
							<i class="fa fa-bitbucket-square fa-5"></i>
						</p>
						
					</div>
					<div class="col-md-2">
						<img src="./media/exrna-logo-only.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="http://localhost:8888/exrnawp/wp-content/themes/exrna/js/bootstrap.min.js"></script>
    </body>
</html>