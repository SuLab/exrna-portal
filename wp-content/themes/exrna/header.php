<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/style.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/ba20ca36-be5d-4953-bf6c-5e8e2e344077.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/exrna/bigvid/bower_components/modernizr/modernizr-2.5.3.min.js"></script>

	<?php wp_head(); ?>
	<!-- Google Custom Site Search -->
	<script>
	  (function() {
	    var cx = '012304415858857934156:pnxfgu4-04k';
	    var gcse = document.createElement('script');
	    gcse.type = 'text/javascript';
	    gcse.async = true;
	    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
	        '//www.google.com/cse/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(gcse, s);
	  })();
	</script>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	

		
<div class="navbar navbar-inverse " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
		    <!-- Your site title as branding in the menu -->
		    <div id="exrnalogo">
			    <a class="navbar-brand visible-lg visible-md visible-sm" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		    		<img src="<?php echo esc_url( home_url( '/' ) ); ?>media/exrna-logo-black.png" alt="exRNA" class="logo img-responsive">
		    	</a>
				<a class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>media/exrna-logo-white-small.png" alt="exRNA" class="logo img-responsive">
				</a>
			</div>
		</div>	

		<ul class="nav navbar-nav navbar-right  " style="position: absolute; right: 13.1%;">
	        <li>
	        	<a href="<?php bloginfo( 'url' ) ?>/contact/"><i class="fa fa-question"></i></a>
	        </li>
	    </ul> 
		<div id="sb-search" class="sb-search visible-sm visible-md visible-lg" style=" z-index: 9; ">

			    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>/search">
			        <input class="sb-search-input" placeholder="Search exRNA..." type="search" value="" name="q" id="search">
			        <input class="sb-search-submit" type="submit" value="">
			        <span class="sb-icon-search fa fa-search"></span>
			    </form>
			</div>
		 

				    <!-- The WordPress Menu goes here -->
				       <?php wp_nav_menu(
			                array(
			                    'theme_location' => 'primary',
			                    'container_class' => 'collapse navbar-collapse',
			                    'menu_class' => 'nav navbar-nav',
			                    'fallback_cb' => '',
			                    'menu_id' => 'main-menu-nav',
			                    'walker' => new wp_bootstrap_navwalker()
			                )
			            ); ?>

		
		</div><!-- .container -->
</div><!-- .site-navigation -->