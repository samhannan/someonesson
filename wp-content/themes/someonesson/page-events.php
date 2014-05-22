<?php
/*
Template Name: Home
*/
get_header();

while(have_posts()): the_post(); ?>
	<div class="row events" id="page-head">
		<div class="quote"></div>
		<h1 class="sans">Tour de France</h1>
		<p>covers 390km of Yorkshire's roads</p>
	</div>
	<div class="row" id="content-head">
		<h1 class="sans"><?php the_title(); ?></h1>
	</div>
	<div class="row=" id="central-content">
		<div class="central-divide events"></div>
		<div class="intro">
			<?php the_content(); ?>
		</div>
		<div class="inner">
			<div id="calendar-container">
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&src=urbancyclingguide%40gmail.com&ctz=Europe/London" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
	</div>
	<div class="row center-align-wrap" id="bottom-content">
		<?php get_template_part('content', 'bottom-motorcyclist'); ?>
		<?php get_template_part('content', 'bottom-cyclist'); ?>
	</div>
	
<?php endwhile;

get_footer(); ?>