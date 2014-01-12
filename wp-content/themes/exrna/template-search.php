<?php
//Template Name: Search Page
?>

<?php get_header(); ?>
<div class="container pushtop">
	<div class="row">
		<div class="col-md-7">
			<form class="form-inline" role="form" method="get" action="<?php bloginfo('url'); ?>/search/">
				<label class="sr-only" for="Search">Search</label>
				<div class="form-group col-md-9">
				    <input type="text" class="search-field form-control" id="q" name="q" value="<?php the_search_query(); ?>" placeholder="Search">
				</div>
				<div class="form-group col-md-3">
				    <input type="submit" class="btn btn-block btn-success" value="Search">
				</div>
			</form>
			<div id="primary">
			<!-- hehe -->&nbsp;
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