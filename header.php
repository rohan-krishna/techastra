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

<div class="pre-con">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/loader.gif" class="loader-img" draggable="false" /> 
</div>

<div id="top page" class="container-fluid">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6">
					<a href="<?php echo bloginfo('url'); ?>" class="logo-link">	
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tech_logo.png" draggable="false" class="tech-logo" />
					</a>			
				</div>
				<div class="col-md-6 text-center" style="padding-left: 0;">
					<a href="www.drmgrdu.ac.in" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drmgralt.png" draggable="false" class="index-logo" />
					</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav class="navigation-wrapper" id="navbar">
		<div class="col-md-12 bg-color-primary">
			<div class="container">
				<div class="col-md-6 padding-152">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'main-navigation' ) ); ?>
				</div>
			</div>
		</div>
	</nav>

	<div class="row">
		<?php
				if ( is_home() ) {
					$class_var = 'bg-color-blue';
				} else {
					$class_var = '';
				}
		?>
		<div class="col-md-12 <?php echo $class_var; ?>">
			<?php

				$args = array(
					'post_type' => 'post',
					'category_name' => 'dept-about');
				$dept = new WP_Query($args);

				if ( $dept->have_posts() ) : while ( $dept->have_posts() ) : $dept->the_post(); 

				if ( is_home() ) {
					$fg_var = 'fg-color-white';
				}

			?>
			<h1 class="text-center thin-header <?php echo $fg_var; ?>" style="margin-top:0;">
				<?php the_content(); ?>
			</h1>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		</div>
	</div>

	<div id="content">
