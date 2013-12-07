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
					<!--<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
				<!--<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>-->
			</article><!-- #post-## -->

		</div>
	</div>
</div>