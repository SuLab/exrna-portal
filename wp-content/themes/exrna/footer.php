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
			

<footer class="pushtop">
			<div class="container">
				<div class="row pushtop">
					<div class="col-md-1 col-md-offset-1 ft-nav">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>
					<div class="col-md-2">
						<?php dynamic_sidebar( 'footer_3' ); ?>
					</div>
					<div class="col-md-2">
						<?php dynamic_sidebar( 'footer_4' ); ?>
					</div>
					<div class="col-md-2">
						<img src="http://localhost:8888/exrnawp/media/exrna-logo-only-black.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</footer>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>