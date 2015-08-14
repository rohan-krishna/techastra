<?php

/*

Template Name:Contact Page

*/

get_header();

?>

<div class="row" id="primary">
	<div class="container margin-top-152">
		<div class="col-md-12">
			<!-- Snazzy Google Maps !-->
			<?php echo do_shortcode('[wpgmza id="1"]'); ?>
		</div>

		<!-- Register Forms !-->
		<div class="col-md-12">
			<div class="col-md-6">
				<!-- Register Form !-->
				<?php

				if( have_posts() ) : while ( have_posts() ) : the_post() ;

				?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			</div>
			<div class="col-md-6 margin-top-152">
				<a href="https://www.facebook.com/techastra2015" id="eventLink">
				<div class="col-md-6 social-card bg-color-blue metro-tile">
					<i class="fa fa-facebook-square fa-inverse big-icon"></i>
				</div>
				</a>

				<a href="https://plus.google.com/u/1/108062767692202114860/about" id="eventLink">
				<div class="col-md-6 social-card bg-color-primary metro-tile">
					<i class="fa fa-google-plus-square fa-inverse big-icon"></i>
				</div>
				</a>
			</div>
		</div>

		<div class="col-md-12 margin-top-152 nav-buttons text-center">
			<a href="#navbar" class="btn btn-success">Go Up</a> &nbsp; <a href="<?php echo bloginfo('url'); ?>" class='btn btn-warning'> Home </a> 
		</div>
	</div>
</div>


<?php get_footer(); ?>