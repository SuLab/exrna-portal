<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			

<footer>
	<div id="footy">
			<div class="container">
				<div class="row pushtop">
					<div class="col-md-1 col-sm-2 col-md-offset- ft-nav">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-3 col-sm-3">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>
					<!-- <div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_3' ); ?>
					</div> -->
                    
					<div class="col-md-2 col-sm-3">
						<?php dynamic_sidebar( 'footer_4' ); ?>
					</div>
					<div class="col-md-2 col-sm-1 col-md-offset-2">
						<a href="<?php bloginfo( 'url' ) ?>/"><img src="<?php bloginfo( 'url' ) ?>/media/exrna-logo-only-black.svg" alt="exRNA" style="max-width:105px;" class="logo img-responsive" onerror="this.onerror=null; this.src='<?php echo esc_url( home_url( '/' ) ); ?>media/exrna-logo-only-black.png'"></a>
					</div>
				</div>
			</div>
	</div>
</footer>
<script>
    $( ".dropdown" ).click(function() {
      $( this ).toggleClass( "open" );
    });
</script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/js/uisearch.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/js/classie.js"></script>
<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>