<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boostrap_to_Wordpress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


		 <!-- BOOTSTRAP CORE CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">       NOT WORKING NAVBAR-TOGGLE-->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'boostrap2wordpress' ); ?></a>

	<header class="site-header" role="banner"> 
		<!-- NAVBAR -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Boostrap to Wordpress"></a>
					</div> <!-- navbar header -->
					<?php 
						wp_nav_menu( array(

							'theme_location'	=>	'primary',
							'container'			=>	'nav',
							'container_class'	=>	'navbar-collapse collapse',
							'menu_class'		=>	'nav navbar-nav navbar-right'

						) );
					 ?>
					
				</div><!-- container -->
			</div><!-- navbar -->
		</div>
	</header>