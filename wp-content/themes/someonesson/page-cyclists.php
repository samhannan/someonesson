<?php
/*
Template Name: Tabbed Page - Cyclists
*/
get_header();

while(have_posts()): the_post(); ?>
	<div id="tabbed">
		<div class="row cyclists" id="page-head">
			<div class="quote"></div>
			<h1 class="sans">83&percnt; of cyclists</h1>
			<p>were killed away from a junction</p>
		</div>
		<div class="row" id="content-head">
			<h1 class="sans"><?php the_title(); ?></h1>
			<div class="grey-line"></div>
			<div class="central-divide cyclists"></div>
		</div>
		<div class="tab-container row">
			<?php get_template_part('content', 'tabs-cyclist'); ?>
		</div>
		<div class="row" id="central-content">
			<?php if(file_exists(get_template_directory() . '/content-cyclists-' . basename(get_permalink()) . '.php')) :
				get_template_part('content-cyclists', basename(get_permalink())); 
			else: ?>
				<div class="inner">
					<?php the_content(); ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="row center-align-wrap" id="bottom-content">
			<?php get_template_part('content', 'bottom-motorcyclist'); ?>
			<?php get_template_part('content', 'bottom-events'); ?>
		</div>
	</div>
<?php endwhile;

get_footer(); ?>