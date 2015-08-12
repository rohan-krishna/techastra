<?php

/*

Template Name:Events Template

*/

get_header();

?>
<div class="row" id="primary">
	<div class="container margin-top-152">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="col-md-12 bg-color-green fg-color-white metro-tile">
					<h1 class="big-header thin-header text-center padding-152">Senior Events</h1>
					<p class="text-center">25th August</p>
				</div>
				<!-- Events List -Juniors !-->

				<!-- Senior Events Post Type !-->
				<?php

					$args = array(
						'post_type' => 'post',
						'category_name' => 'events-senior'
						);
					$events = new WP_Query($args);
				?>
				<?php if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); ?>
					<?php 

						$event_icon_name = get_post_meta( get_the_ID() , '_event_icon_text', true );

					?>
				<div class="col-md-12 event-desc-wrapper" id="eventDesc">
					<div class="senior-event-desc">
						<a href="<?php the_permalink(); ?>" id="eventLink">
							<i class="fa <?php echo $event_icon_name ?>"></i> <h2><?php the_title(); ?></h2>
						</a>
					</div>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>

				<?php /*
				
				<!-- Algorythm Event !-->
				<div class="col-md-12 event-desc-wrapper" id="eventDesc">
					<div class="senior-event-desc">
					<a href="#" id="eventLink">
						<i class="fa fa-codepen"></i> <h2>AlgoRythm</h2>
					</a>
					<p class="event-desc-inner">Music and Coding? Not a great combination, you think? We’ll show you why it is. While you furiously crunch away on the keyboard, sing along!  Join us while we take coding to the next level. </p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Faceart !-->
				<div class="col-md-12 event-desc-wrapper" id="eventDesc">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-paint-brush"></i> <h2>Faceart</h2>
					</a>
					<p class="event-desc-inner">May the beautiful colors, paints, brushes make it the best to express your feelings and emotions. Let your painting skills speak.</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Web Design !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-code"></i> <h2>Web Designing</h2>
					</a>
					<p class="event-desc-inner">You got the skills. We got the platform. Come design the web page and be the ultimate Web Developer.</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Gaming !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-gamepad"></i> <h2>Gaming</h2>
					</a>
					<p class="event-desc-inner">
						Prepare yourselves for some high speed racing or five on five fight to the death between counter-terrorist and their ultimate nemesis.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- HW Troubleshoot !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-wrench"></i> <h2>Hardware Troubleshooting</h2>
					</a>
					<p class="event-desc-inner">
						Unleash your technical skills.Identify different parts of the Computer Hardware.Assemble or resolve physical and/or logical problems and issues within a computing hardware and make them work. 
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Hunt-n-Debug !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-bug"></i> <h2>Hunt-n-Debug</h2>
					</a>
					<p class="event-desc-inner">
					Hunt-n-debug is a unique event that combines your snooping and debugging skills.Hunt your way through to the final round, passing various locations, addresses to which are contained within a riddle. Debug codes to obtain the riddle.Reach the final round where a fun twist awaits you.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- IPL Auction !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-gavel"></i> <h2>IPL Auction</h2>
					</a>
					<p class="event-desc-inner">
						A larger than life entertainment event that brings the best of cricketers from all around the world (yeah! We miss Pakistan too) and celebrities under one roof. The excitement that the eight teams bring in is commendable.Its time for you to be the next Shahrukh Khan, Preity Zinta and Vijay Mallya.Win matches to win prizes!
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Paper Presentation !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-book"></i> <h2>Paper Presentation</h2>
					</a>
					<p class="event-desc-inner">
						Exhibit the results of your scientific investigations and/or researches.It is a platform for all you ingenious minds out there to hone your technical and presentation skills to discuss the emerging technology issues, explore a variety of perspectives and probable solutions to the audience in an intriguing manner through oral presentations using slides, graphs, etc.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Senior Quiz !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-cube"></i> <h2>Senior Quiz</h2>
					</a>
					<p class="event-desc-inner">
						What did blind bank robber David Worrell use as a weapon when trying to rob a London bank.Think you know the answer?Then this event is for you.Come, participate and win Prizes!
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Ship Wreck !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-life-buoy"></i> <h2>Ship Wreck</h2>
					</a>
					<p class="event-desc-inner">
						You possess only whatever will not be lost in a Ship Wreck said somebody!The ship you are on is about to sink, there are only three life-jackets available. Two for the captains, and one for the person who comes with an extra-ordinary way of convincing the captain to choose him to let him survive, by giving the last life jacket. In this event you will have to up with the most innovative way of convincing why your life should be saved over the others.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Short Film !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-video-camera"></i> <h2>Short Film</h2>
					</a>
					<p class="event-desc-inner">
						Unleash your creativity. Use your skills. Create a short film. Bewilder the judges. The price is all yours!!!
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Thematic Photography !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="senior-event-desc">
					<a href="#">
						<i class="fa fa-camera-retro"></i> <h2>Thematic Photography</h2>
					</a>
					<p class="event-desc-inner">
						“You don’t take a photograph. You make it!”The limitations in photography is yourself. For what you see is what you are.Use your creativity Skills and take thematic photos that give the feel of being actual things. Use your imagination and win prizes.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->
			
			*/ ?>
	
			</div>



			<!-- Juniors Box !-->

			<div class="col-md-6" id="juniorWrapper">
				<div class="col-md-12 bg-color-magenta fg-color-white metro-tile">
					<h1 class="big-header thin-header text-center padding-152">Junior Events</h1>
					<p class="text-center">26th August</p>
				</div>
				<!-- Events List -Juniors !-->

				<?php

					$args = array(
						'post_type' => 'post',
						'category_name' => 'events-junior'
						);
					$events = new WP_Query($args);
				?>
				<?php if ( $events->have_posts() ) : while ( $events->have_posts() ) : $events->the_post(); ?>
					<?php 

						$event_icon_name = get_post_meta( get_the_ID() , '_event_icon_text', true );

					?>
				<div class="col-md-12 event-desc-wrapper" id="eventDesc">
					<div class="junior-event-desc">
						<a href="<?php the_permalink(); ?>" id="eventLink">
							<i class="fa <?php echo $event_icon_name ?>"></i> <h2><?php the_title(); ?></h2>
						</a>
					</div>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>


				<?php 

				/*



				<!-- Chess !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-bank"></i> <h2>Chess</h2>
					</a>
					<p class="event-desc-inner">
						 Chess is a two-player strategy board game played on a chessboard. Each player begins the game with 16 pieces: one king, one queen, two rooks, two knights, two bishops, and eight pawns. The objective is to 'checkmate' the opponent's king by placing it under an inescapable threat of capture.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Connexions !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-houzz"></i> <h2>Connexions</h2>
					</a>
					<p class="event-desc-inner">
						Connexions contains general knowledge questions whose answers are all related.Connexions rounds are a great addition to any quiz in order to give it a theme or to make your quiz a little more interesting.It is a team game and consists of four rounds. Before the actual games start, there will be a warm up round.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Elocution !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-bullhorn"></i> <h2>Elocution</h2>
					</a>
					<p class="event-desc-inner">
						The goal of the Elocution competition is to encourage the skills and talents related to the art of speaking in public.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Just-a-minute !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-clock-o"></i> <h2>Just-a-Minute</h2>
					</a>
					<p class="event-desc-inner">
						Just-A-Minute invites the student speaker to talk on a given topic for sixty seconds without hesitation, repetition, or deviation.The speaker must be clear, confident, and able to speak without hesitation or deviation from topic.Opposing team members must listen carefully in order to determine if any of those three rules are broken.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Project Now !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-object-group"></i> <h2>Project Now</h2>
					</a>
					<p class="event-desc-inner">
						Project now invites the student to demonstrate his/her project within the time limits.Area of project is your own interest.The speaker must be clear, confident, and able to speak without hesitation.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Quiz !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-magic"></i> <h2>Junior Quiz</h2>
					</a>
					<p class="event-desc-inner">
						A potential belvedere where you can unveil your proficiency. The activity aims at providing a good exchange of a plethora of knowledge. Grab it!	
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Spell Bee !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-forumbee"></i> <h2>Spell Bee</h2>
					</a>
					<p class="event-desc-inner">
						A good vocabulary is considered as a testimony of knowledge. Spell bee is to showcase and unleash the spirit of vocabulary, individually and as a team.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Thematic Drawing !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-paint-brush"></i> <h2>Thematic Drawing</h2>
					</a>
					<p class="event-desc-inner">
						Drawing is one of the major forms of expression within the visual arts. Sketch your visions and ideas and explore the fun of colors in visualizing the theme.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- treasure Hunt !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-bomb"></i> <h2>Treasure Hunt</h2>
					</a>
					<p class="event-desc-inner">
						Find the hidden treasure from the clues given in the form of a puzzle.Plunder exciting prizes!
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->

				<!-- Vegetable Carving !-->
				<div class="col-md-12 event-desc-wrapper">
					<div class="junior-event-desc">
					<a href="#">
						<i class="fa fa-leaf"></i> <h2>Vegetable Carving</h2>
					</a>
					<p class="event-desc-inner">
						 Vegetable carving is the art of carving vegetables to form beautiful objects such as flowers or birds. Carving vegetables takes patience and basic knife skills, so let your thoughts wander in the infinite dreamland and coordinate with each other to present it in your art.
					</p>
					</div>
				</div><!-- .event-desc-wrapper !-->
				
				*/ ?>

			</div><!-- #juniorWrapper -->
		</div><!-- .container -->


		<div class="col-md-12 margin-top-152">
			<a href="<?php echo bloginfo('url' ); ?>/register" class="btn-block btn-register text-center">Register Now</a>
		</div>

	</div><!-- .container !-->



</div><!-- #primary !-->

<?php 
get_footer();
?>