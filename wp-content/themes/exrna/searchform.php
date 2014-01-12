<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>
<!-- <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', '_tk' ); ?>">
</form> -->
<form  class="form-inline" role="form" method="get" action="<?php bloginfo('url'); ?>/search/">
<label>
    <input type="text" class="search-field form-control" id="q" name="q" value="<?php the_search_query(); ?>">
</label>
    <input type="submit" class="btn btn-success" value="Search">

</form>