<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			<!--</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		<!--</div><!-- close .row -->
	<!--</div><!-- close .container -->
<!--</div><!-- close .main-content -->
			

<footer>
	<div id="footy">
			<div class="container">
				<div class="row pushtop">
					<div class="col-md-1 col-sm-2 col-md-offset-1 ft-nav">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3 col-sm-3">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>
					<div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_3' ); ?>
					</div>
					<div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_4' ); ?>
					</div>
					<div class="col-md-2 col-sm-1">
						<a href="<?php bloginfo( 'url' ) ?>/"><img src="<?php bloginfo( 'url' ) ?>/media/exrna-logo-only-black.svg" alt="exRNA" style="max-width:105px;" class="logo img-responsive" onerror="this.onerror=null; this.src='<?php echo esc_url( home_url( '/' ) ); ?>media/exrna-logo-only-black.png'"></a>
					</div>
				</div>
			</div>
	</div>
</footer>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
<script>
	$(function(){
	  $('.nav .dropdown .dropdown-toggle').bind('mousedown', function(){
	  var href = $(this).attr('href');
	  location.href = href;
	 });
	});
</script>
</body>
</html>