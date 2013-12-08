<?php
//Template Name: Search Page
?>

<?php get_header(); ?>
<div class="container pushtop">
	<div class="row">
		<div class="col-md-7">
			<div id="primary">

		        <div id="content" role="main">

		            <?php while ( have_posts() ) : the_post(); ?>

		                <!-- This tag will render search results: -->

		                <gcse:searchresults-only></gcse:searchresults-only>

		            <?php endwhile; ?>

		        </div> <!-- #content -->

		    </div><!-- #primary -->
		</div>
		
		<div class="col-md-5">
			<?php get_sidebar(); ?>
		</div>
	
	</div>
	    
</div>
<?php get_footer(); ?>