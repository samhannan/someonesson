<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package someonesson
 */
?>

<div id="footer">
	<div id="twitter" class="row">
		<div class="twitter-icon"></div>
		<div class="clear"></div>
		<a href="">Someones Son</a> lorem ipsum</a>
	</div>
	<div class="clear"></div>
	<div class="div"></div>
	<div class="outer">
		<div id="links" class="row twelve columns">
			<div class="three columns alpha">
				<h2 class="sans">The Campaign</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_1',)); ?>
			</div>
			<div class="three columns">
				<h2 class="sans">Drivers</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_2',)); ?>
			</div>
			<div class="three columns">
				<h2 class="sans">Motorcyclists</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_3',)); ?>
			</div>
			<div class="three columns omega">
				<h2 class="sans">Cyclists</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer_4',)); ?>
			</div>
		</div>
	</div>
	<div id="bottom">
		<div class="logo"></div>
		<div class="right">Someones Son 2014</div>
	</div>
</div>

</div>	
<?php wp_head(); ?>		
</body>
</html>