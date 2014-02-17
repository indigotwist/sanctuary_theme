<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package sanctuary_theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function sanctuary_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'sanctuary_theme_jetpack_setup' );
