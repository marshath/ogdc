<?php function remove_comments_rss( $for_comments ) {
    return;
}
add_filter('post_comments_feed_link','remove_comments_rss');
add_theme_support( 'post-thumbnails' );
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 924 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 310 ) );
	

// LOAD ADVANCED CUSTOM FIELDS PLUGIN
define( 'ACF_LITE', true ); // hide the ACF menu item in the left sidebar of the Admin Area
// include_once('library/advanced-custom-fields/acf.php'); // load ACF from the theme's library folder


function set_flexslider_hg_rotators()
{
	$rotators = array();
	$rotators['homepage'] = array( 'size' => 'homepage-rotator' );
	return $rotators;
}
add_filter('flexslider_hg_rotators', 'set_flexslider_hg_rotators');

add_image_size( 'homepage-rotator', '920', '300', true );

?>