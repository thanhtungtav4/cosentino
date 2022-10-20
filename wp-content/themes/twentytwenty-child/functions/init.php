<?php
/***
 * Disable Gutenberg with Code
 */
//add_filter('use_block_editor_for_post', '__return_false', 10);
/***
 * !Disable Gutenberg with Code
 */
add_action( 'after_setup_theme', 'theme_setup' );
function theme_setup() {
	add_image_size( 'big_trend-thumb', 637, 685, true );
	add_image_size( 'showroom-thumb', 434, 291, true );
	add_image_size( 'smail_trend-thumb', 310, 300, true );
}
/**
 * Get is Front Page
 * @return ID
 */
function front_page_id(){
	return get_option('page_on_front');
}

function get_thumbnail($id, $type){
	return  get_the_post_thumbnail_url($id, $type);
}