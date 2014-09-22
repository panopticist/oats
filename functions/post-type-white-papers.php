<?php

	// http://codex.wordpress.org/Post_Types
	
	// archive-white-papers.php — template for section page
	// single-white-papers.php — template for entry page


	add_action('init', 'cptui_register_my_cpt_white_papers');
	function cptui_register_my_cpt_white_papers() {
	register_post_type('white-papers', array(
	'label' => 'White Papers',
	'description' => '',
	'public' => true,
	'has_archive' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'white-papers', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'White Papers',
	  'singular_name' => 'White Paper',
	  'menu_name' => 'White Papers',
	  'add_new' => 'Add White Paper',
	  'add_new_item' => 'Add New White Paper',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit White Paper',
	  'new_item' => 'New White Paper',
	  'view' => 'View White Paper',
	  'view_item' => 'View White Paper',
	  'search_items' => 'Search White Papers',
	  'not_found' => 'No White Papers Found',
	  'not_found_in_trash' => 'No White Papers Found in Trash',
	  'parent' => 'Parent White Paper',
	)
	) ); }

?>