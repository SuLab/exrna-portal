<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
		    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo" src="<?php echo esc_url( home_url( '/' ) ); ?>/media/exrna-logo-black.png" alt="exrna"></a>
		</div>	
		<ul class="nav navbar-nav navbar-right">
	        <li>
	        	<a href="#"><strong>?</strong></a>
	        </li>
	    	<li class="dropdown">
			  <a data-toggle="dropdown" id="drop1" href="#"><i class="fa fa-search"></i></a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
			    <li><input type="text" class="form-control" placeholder="Search"></li>
			  </ul>
			</li>
	    </ul>	    
				    <!-- The WordPress Menu goes here -->
				       <?php wp_nav_menu(
			                array(
			                    'theme_location' => 'primary',
			                    'container_class' => 'collapse navbar-collapse',
			                    'menu_class' => 'nav navbar-nav',
			                    'fallback_cb' => '',
			                    'menu_id' => 'main-menu',
			                    'walker' => new wp_bootstrap_navwalker()
			                )
			            ); ?>

		
		</div><!-- .container -->
</div><!-- .site-navigation -->

<!--<div class="main-content">	
	<div class="container">
		<div class="row">
			<div class="main-content-inner col-12">-->
				

