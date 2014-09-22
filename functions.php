<?php 

// This File stores all of your funcitons.
// It should be included on your header.php file.

include_once 'functions/wp_enqueue_script.php';
include_once 'functions/loop.php';
include_once 'functions/team-meta.php';
// include_once 'functions/kicker.php';
include_once 'functions/post-type-client-projects.php';
include_once 'functions/post-type-white-papers.php';
include_once 'functions/post-type-team.php';



// Public Template Directory URL
$tdir = get_template_directory_uri();
define('TDIR', $tdir);

// Relative Template Directory URL
$root = get_template_directory();
define('ROOT', $root);

// Includes Path
$inc = $root . '/inc/';
define('INC', $inc);



// Hide WP Admin Bar
add_filter('show_admin_bar', '__return_false');

// Adds Post Thumnails
add_theme_support( 'post-thumbnails' );


// Register a Menu
function oats_register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'oats_register_menu' );




// Get the Featured Image
function featured_image($post){
	if ( has_post_thumbnail($post->ID)) {
    $featured_img = wp_get_attachment_metadata(get_post_thumbnail_id($post->ID));
    print_r($featured_img);
    echo '<img src="img/graphics/nypl-case-study.jpg" alt="NYPL">';
  }
}


// Strips out the width and height
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}



// Example Functions
function hearst(){
	echo 'Hello! I am Andrew.';
}

function get_hearst(){
	return 'Hello! I am Andrew.';
}



?>