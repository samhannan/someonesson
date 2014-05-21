<?php
/*
Template Name: Home
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
			<ul>
				<li class="active"><a href="">Cyclists</a></li>
				<li><a href="">Accident Map</a></li>
				<li><a href="">HGV Blind Spot</a></li>
				<li><a href="">Commuter Guide</a></li>
				<li><a href="">Safety Equipment</a></li>
			</ul>
		</div>
		<div class="row" id="central-content">
			<div class="inner no-fill">
				<div class="block-item accident">
					<h2 class="sans">Accident Map</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item accident">
					<h2 class="sans">Accident Map</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item accident">
					<h2 class="sans">Accident Map</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item accident">
					<h2 class="sans">Accident Map</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
			</div>
		</div>
		<div class="row center-align-wrap" id="bottom-content">
			<?php get_template_part('content', 'bottom-motorcyclist'); ?>
			<?php get_template_part('content', 'bottom-events'); ?>
		</div>
	</div>
<?php endwhile;

get_footer(); ?>