<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techastra-zeus
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="top page" class="container-fluid">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'techastra-zeus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-3">
					<a href="<?php echo bloginfo('url'); ?>">
						<h1>TECHASTRA 2015</h1>
					</a>
				</div>
				<div class="col-md-9">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'main-navigation' ) ); ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content">
