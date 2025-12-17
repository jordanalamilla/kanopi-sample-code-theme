<?php
/**
 * Functions
 *
 * All custom functions for this theme.
 *
 * @package kanopi-sample-code-theme
 */

/**
 * Display Date
 *
 * A shortcode to display a dynamic date string in a template HTML file.
 */
function display_date() {
	return "Today's date is: " . gmdate( 'F j, Y' );
}
add_shortcode( 'display_date', 'display_date' );
