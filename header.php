<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="primary">
<div class="container_12">
	<div class="grid_12">
		<div class="grid_6 alpha">
			<hgroup>
				<h1 class="site-title"><span><a href="http://gettasktracker.dev/">TaskTracker</a></h1>
				<h2 class="site-description"><span>&ndash;</span> Some slogan here</h2>
			</hgroup>
		</div>
		<div class="grid_6 omega right">
			<nav>
			<ul class="menu">
		    	<li>
		    	    <?php if ( !is_user_logged_in() ) : ?>		    	        
		    	        <?php wp_register(' ' , ' '); ?>
		    	    <?php endif; ?>
		    	</li>
		    	<?php if ( !is_user_logged_in() ) : ?>
    				<li><a href="#load-template" id="get_tt_login_handle" data-template="custom/login.php">Login</a></li>			
    			<?php else : ?>
    				<li><a href="<?php echo wp_logout_url( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ); ?>" title="Click to logout">Logout</a></li>
    			<?php endif; ?>
			</ul>
			</nav>
		</div>
	</div>
</div>
</header>