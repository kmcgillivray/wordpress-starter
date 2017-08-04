<?php

/* Load all stylesheets */

function theme_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), null, '0.1.0' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
