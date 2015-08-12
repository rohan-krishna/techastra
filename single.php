<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techastra-zeus
 */

get_header(); ?>

	<div id="primary" class="row">

		<?php while ( have_posts() ) : the_post(); ?>
		
		<div id="main" class="col-md-12" role="main">

			<div class="col-md-12 bg-color-blue padding-152">
				<h1 class="bigger-header thin-header fg-color-white text-center"><?php the_title(); ?></h1>
			</div>

			<div class="container">

				<?php the_content(); ?>

				<?php endwhile; // End of the loop. ?>

			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
