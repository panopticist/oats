<?php 

// This File stores all of your funcitons.
// It should be included on your header.php file.

include_once 'functions/wp_enqueue_script.php';
// include_once 'functions/loop.php';
// include_once 'functions/images.php';
// include_once 'functions/related-link.php';
// include_once 'functions/chart.php';
// include_once 'functions/kicker.php';

// include_once 'functions/timeline.php';
// include_once 'functions/steps.php';


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



?>