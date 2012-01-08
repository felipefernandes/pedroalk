<?php

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	add_image_size( 'jobs-thumb', 190, 125 ); 
	add_image_size( 'extras-thumb', 126, 83 ); 	
}	

register_nav_menus( array(
	'primary' => __( 'Principal' ),
) );

?>