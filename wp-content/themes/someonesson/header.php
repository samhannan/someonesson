<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package someonesson
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" class="container">
	<header id="header" class="row">
		<a href="/"><div class="logo four columns"></div></a>
		<?php wp_nav_menu( array( 
			'theme_location' => 'primary',
			'container_class' => '',
			'container_id' => 'nav')); 
		?>
		<div id="navsocial" class="two columns">
			<span class="fb"></span>
			<span class="twitter"></span>
		</div>
	</header>