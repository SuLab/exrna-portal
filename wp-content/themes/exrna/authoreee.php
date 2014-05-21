<?php
/**
 *
 *Author Template
 *
 * 
 *
 * 
 *
 *
 */

get_header(); ?>
<?php
				    // Retrieve The Post's Author ID
				    $user_id = get_the_author_meta('ID');
				    // Set the image size. Accepts all registered images sizes and array(int, int)
				    $size = 'thumbnail';

				    // Get the image URL using the author ID and image size params
				    $imgURL = get_cupp_meta($user_id, $size);
					
				    
				?>

<div id="content" class="narrowcolumn">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

    <h2>About: <?php echo $curauth->nickname; ?></h2>
    <?php echo '<img src="'. $imgURL .'" alt="'. $alt .'" class="img-circle center-block">'; ?>

    <dl>
        <dt>Website</dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
<dd>
	twitter 


<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
echo $curauth->googleplus;
echo $curauth->twitter;
?>
	
</dd>        <dt>Profile</dt>
        <dd><?php echo $curauth->user_description; ?></dd>
    </dl>

    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

    <ul>
<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

    </ul>
</div>





<?php get_footer(); ?>