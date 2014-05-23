<?php
/*
Template Name: Home
*/
get_header();

while(have_posts()): the_post(); ?>
	<div class="row <?php the_field('section'); ?>" id="page-head">
		<div class="quote"></div>
		<h1 class="sans"><?php the_field('head_title'); ?></h1>
		<p><?php the_field('head_desc'); ?></p>
	</div>
	<div class="row" id="content-head">
		<h1 class="sans"><?php the_title(); ?></h1>
	</div>
	<div class="row=" id="central-content">
		<div class="central-divide <?php the_field('section'); ?>"></div>
		<div class="intro">
			<?php the_field('intro'); ?>
		</div>
		<div class="inner">
			<?php the_content(); ?>
		</div>
	</div>
	
<?php endwhile;

get_footer(); ?>