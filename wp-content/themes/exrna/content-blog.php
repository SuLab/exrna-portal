<?php
/**
 * The template used for displaying blog excerpts on blog/home.php
 *
 * 
 */
?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-xs-6"><div class="hm-post-border"></div></div>
		</div>
		<div class="col-md-12 hm-post">
			
			<div class="row">
				<div class="heading">
					<p><span class="post-date"><?php the_time('m.d.y') ?></span> <span class="post-author">by <?php coauthors_posts_links(); ?></span></p>
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				</div>
			</div>
			<div class="row">
				<div class="excerpt">
					<div class="post-excerpt">
						<p><?php the_excerpt() ?>
					</div>
				</div>
			</div>
			
		</div>
		
			<!--<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<!--<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>-->
	</article><!-- #post-## -->

		
	
