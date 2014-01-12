<?php


//Remove _tk Bootstrapp CSS
add_action( 'wp_print_styles', 'child_overwrite_styles', 100 );

function child_overwrite_styles() {
    wp_deregister_style( '_tk-bootstrap' );
}

add_action( 'wp_print_styles', 'child_overwrite_styles', 100 );

function child_overwrite_script() {
    wp_deregister_script( '_tk-bootstrapjs' );
}

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

/**
 * Register our sidebars and widgetized areas.
 *
 */
function create_widget( $name, $id, $description, $class ){
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
	    'class'         => $class,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' 
	); 

	register_sidebar( $args );
}

create_widget('Quick Links', "quick_links", "The quick links list", "blue");
create_widget('Email Signup', "email_signup", "Email Signup Area w/ Gravity Forms", "grey");
create_widget('Twitter', "twitter_area", "Twitter Box", "");
create_widget('Blog1', "blog_1", "Top Blog Widget Area", "Blue");
?>