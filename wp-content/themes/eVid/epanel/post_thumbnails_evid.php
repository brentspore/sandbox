<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//single.php
	add_image_size( 'singleimage', 950, 287, true );
	
	//featured.php
	add_image_size( 'featuredimage', 858, 277, true );
		
	//category.php, home.php, index.php
	add_image_size( 'categoryimage', 189, 175, true );
	
	//thumbnail.php
	add_image_size( 'thumbpage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//thumbnail.php
	add_image_size( 'globalimage', get_option($shortname.'_thumbnail_width'), get_option($shortname.'_thumbnail_height'), true );
	
	//catbox.php
	add_image_size( 'homeimage', 25, 25, true );
	
};
/* --------------------------------------------- */

?>