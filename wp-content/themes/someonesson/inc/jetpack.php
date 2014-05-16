<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package someonesson
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function someonesson_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'someonesson_jetpack_setup' );
