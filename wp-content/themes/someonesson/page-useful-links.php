<?php
/*
Template Name: Home
*/
get_header();

while(have_posts()): the_post(); ?>
	<div class="row links" id="page-head">
		<div class="quote"></div>
		<h1 class="sans">82&percnt;</h1>
		<p>of cyling takes place in urban areas</p>
	</div>
	<div class="row" id="content-head">
		<h1 class="sans"><?php the_title(); ?></h1>
	</div>
	<div class="row=" id="central-content">
		<div class="central-divide links"></div>
		<div class="intro">
			<?php the_field('intro'); ?>
		</div>
		<div class="inner">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="row center-align-wrap" id="bottom-content">
		<?php get_template_part('content', 'bottom-motorcyclist'); ?>
		<?php get_template_part('content', 'bottom-cyclist'); ?>
	</div>
	
<?php endwhile;

get_footer(); ?>