<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>





<div class="container">
	<div class="row">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="col-md-12">
					<header class="page-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
			</article><!-- #post-## -->

		</div>
	</div>
</div>