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
 * Append to the content
 *
 * This function produces a chunk of HTML, modeled after my Kanopi React Block
 * and appends it to every intance of the_content.
 *
 * @param String $content The unfiltered post content.
 * @return String The content with my modification added.
 */
function append_to_the_content( $content ) {
	$content_to_append = '
	<div class="wp-block-create-block-kanopi-react-block">
		<div class="cta-content-container">
			<h2>This content was added with a hook.</h2>
			<h5>In my functions.php file, I used the "the_content" filter to append this lovely looking block of content to the bottom of all instances on the site where "the_content()" is used.</h5>
		</div>
	</div>
	';

	return $content . $content_to_append;
}
add_action( 'the_content', 'append_to_the_content' );

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
