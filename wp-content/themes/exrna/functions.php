<?php

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' <a class="more" href="'. get_permalink($post->ID) . '">MORE <i class="fa fa-long-arrow-right"></i></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Customize Excerpt Length
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>