<?php
/*
Template Name: Home
*/
get_header();

while(have_posts()): the_post(); ?>
	<div class="row events" id="banner-head">
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
			<?php the_field('intro'); ?>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo.</p>
		</div>
		<div class="inner">
			Events inner content
		</div>
	</div>
	<div class="row center-align-wrap" id="bottom-content">
		<?php get_template_part('content', 'bottom-motorcyclist'); ?>
		<?php get_template_part('content', 'bottom-cyclist'); ?>
	</div>
	
<?php endwhile;

get_footer(); ?>