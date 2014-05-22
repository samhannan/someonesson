<?php
/*
Template Name: Home
*/
get_header();

while(have_posts()): the_post(); ?>
	<div id="tabbed">
		<div class="row motorcycle" id="page-head">
			<div class="quote"></div>
			<h1 class="sans">23&percnt; of motorcycle</h1>
			<p>accidents involve soley the motorcycle</p>
		</div>
		<div class="row" id="content-head">
			<h1 class="sans"><?php the_title(); ?></h1>
			<div class="grey-line"></div>
			<div class="central-divide motorcycle"></div>
		</div>
		<div class="tab-container row">
			<ul>
				<li class="active"><a href="">Motorcyclists</a></li>
				<li><a href="">Accident Map</a></li>
				<li><a href="">Campaigns</a></li>
				<li><a href="">Spot The Difference</a></li>
				<li><a href="">Drivers Perspective</a></li>
				<li><a href="">TyreSafe</a></li>
				<li><a href="">Commuter Guide</a></li>
			</ul>
		</div>
		<div class="row" id="central-content">
			<div class="inner no-fill">
				<div class="block-item three-col motorcycle_accident">
					<h2 class="sans">Accident Map</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item three-col motorcycle_campaigns">
					<h2 class="sans">Campaigns</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item three-col motorcycle_spot">
					<h2 class="sans">Spot The Difference</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item three-col motorcycle_drivers margin">
					<h2 class="sans">Drivers Perspective</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item three-col motorcycle_tyresafe margin">
					<h2 class="sans">TyreSafe</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
				<div class="block-item three-col motorcycle_commuter margin">
					<h2 class="sans">Commuter Guide</h2>
					<div class="div"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					<a class="btn-round">Read More<i></i></a>
				</div>
			</div>
		</div>
		<div class="row center-align-wrap" id="bottom-content">
			<?php get_template_part('content', 'bottom-cyclist'); ?>
			<?php get_template_part('content', 'bottom-events'); ?>
		</div>
	</div>
<?php endwhile;

get_footer(); ?>