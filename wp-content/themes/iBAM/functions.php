<?php
// overrides the default jquery script and includes the latest from Google Code
function my_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2', true);
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'my_jquery');

// overrides the default jquery script and includes the latest from Google Code
function my_jquery_ui() {
	if (!is_admin()) {
		wp_deregister_script('jquery-ui');
		wp_register_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js');
		wp_enqueue_script('jquery-ui');
	}
}
add_action('init', 'my_jquery_ui');

// activates post thumbnail support
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

// fuzzy timestamps
function time_ago( $type = 'post' ) {
	$d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
	return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
}

// find first image from a post
// Get URL of first image in a post
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

// no image found display default image instead
if(empty($first_img)){
$first_img = "/images/default-tiny-thumb.png";
}
return $first_img;
}
?>