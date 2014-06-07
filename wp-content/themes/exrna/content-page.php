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
					<header>
						<div class="pull-right">
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="exrna" data-dnt="true">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</div>
						<h1 class="page-title"><?php the_title(); ?></h1>
						
					</header><!-- .entry-header -->
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
			</article><!-- #post-## -->

		</div>
	</div>
</div>