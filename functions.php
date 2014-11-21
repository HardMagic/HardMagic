<?php

/*
Keep in mind these are add on functions for Brooklyn  Theme
*/

show_admin_bar(false); 

@ini_set( 'upload_max_size' , '64M' );

@ini_set( 'post_max_size', '64M');

@ini_set( 'max_execution_time', '300' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// add a favicon to your site
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');