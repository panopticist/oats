<?php

	// http://codex.wordpress.org/Post_Types
	
	add_action('init', 'cptui_register_my_cpt_homepage');
	function cptui_register_my_cpt_homepage() {
	register_post_type('homepage', array(
	'label' => 'Homepage',
	'description' => '',
	'public' => true,
	'has_archive' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'homepage', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Homepage Modules',
	  'singular_name' => 'Homepage Module',
	  'menu_name' => 'Homepage Modules',
	  'add_new' => 'Add Homepage Module',
	  'add_new_item' => 'Add New Homepage Module',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Homepage',
	  'new_item' => 'New Homepage Module',
	  'view' => 'View Homepage Modules',
	  'view_item' => 'View Homepage Module',
	  'search_items' => 'Search Homepage Modules',
	  'not_found' => 'No Homepage Modules Found',
	  'not_found_in_trash' => 'No Homepage Modules Found in Trash',
	  'parent' => 'Parent Homepage Module',
	)
	) ); }

?>