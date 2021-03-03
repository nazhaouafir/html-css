<?php 
global $redux_demo;
?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
   <?php
   wp_head();
   ?>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
       
				<a class="logo" href="#"><img style="width:40 px; height:40px;"  src="<?php echo $redux_demo['logo-image']['url']; ?>" alt=""><?php echo $redux_demo['logo-alt']; ?> </a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
		  <?php   
			$defaults = array(
        'menu'                 => 'Menu',
        'container'            => 'nav',
        'container_class'      => '',
        'container_id'         => 'menu',
        'container_aria_label' => '',
        'menu_class'           => '',
        'menu_id'              => 'menu',
        'echo'                 => true,
        'fallback_cb'          => 'wp_nav_menu',
        'before'               => '',
        'after'                => '',
        'link_before'          => '',
        'link_after'           => '',
        'items_wrap'           => '<ul class="links">%3$s</ul>',
        'item_spacing'         => 'preserve',
        'depth'                => 0,
        'walker'               => '',
        'theme_location'       => 'Header menu',
    );
 
    $Menu = wp_nav_menu( $defaults );
	?>
