<?php
/**
 * Functions
 *
 * All custom functions for this theme.
 *
 * @package kanopi-sample-code-theme
 */

/**
 * Equeuing Stylesheet
 */
function kanopi_enqeue() {
	wp_enqueue_style( 'main-styles', get_stylesheet_uri(), array(), '0.1' );
}
add_action( 'wp_enqueue_scripts', 'kanopi_enqeue' );

/**
 * Display Date
 *
 * A shortcode to display a dynamic date string in a template HTML file.
 *
 * @return String
 */
function display_date() {
	$date_today = wp_date( 'F j, Y' );

	return "<h5>Today's date is: " . $date_today . '</h5>';
}
add_shortcode( 'display_date', 'display_date' );
