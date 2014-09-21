<?php

function scripts_styles() {
	global $wp_styles;
	$q = 'v115';


	// Le JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), $q, true );
	wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array( 'jquery' ), $q, true );


	// Le CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',array(), $q);
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css',array(), $q);
	wp_enqueue_style( 'styles', get_stylesheet_uri(),array(), $q);
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css',array(), $q);

}
add_action( 'wp_enqueue_scripts', 'scripts_styles' );


?>
