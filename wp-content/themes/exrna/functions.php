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

//Author Image Class

add_filter('get_avatar','change_avatar_css');

function change_avatar_css($class) {
$class = str_replace("class='avatar", "class='img-circle avatar ", $class) ;
return $class;
}

//Customize Comments
add_filter('comment_form_default_fields','custom_fields');

function custom_fields($fields) {

		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$fields[ 'author' ] = '<p class="row comment-form-author">'.
			'<label class="col-xs-2" for="author">' . __( 'Name' ) . ( $req ? '<span class="required">*</span>' : '' ). '</label>'.
			
			'<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
			'" size="30" tabindex="1"' . $aria_req . ' /></p>';

		$fields[ 'email' ] = '<p class="row comment-form-email">'.
			'<label class="col-xs-2" for="email">' . __( 'Email' ) . ( $req ? '<span class="required">*</span>' : '' ). '</label>'.
			
			'<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
			'" size="30"  tabindex="2"' . $aria_req . ' /></p>';

		$fields[ 'url' ] = '<p class="row comment-form-url">'.
			'<label class="col-xs-2" for="url">' . __( 'Website' ) . '</label>'.
			'<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
			'" size="30"  tabindex="3" /></p>';

	return $fields;
}



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
create_widget('Footer1', "footer_1", "Footer 1 Widget Area", "");
create_widget('Footer2', "footer_2", "Footer 2 Widget Area", "");
create_widget('Footer3', "footer_3", "Footer 3 Widget Area", "");
create_widget('Footer4', "footer_4", "Footer 4 Widget Area", "");


/* Add Custom Posts to Author.php 
http://designpx.com/tutorials/custom-post-types-author-archive/
*/

function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('projects', 'client', 'post') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');	

/* Customizing Co-Author Pluggin
http://wordpress.org/plugins/co-authors-plus/
*/
?>