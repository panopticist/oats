<?php

	// http://codex.wordpress.org/Post_Types
	
	// archive-client-projects.php — template for section page
	// single-client-projects.php — template for entry page


	add_action('init', 'cptui_register_my_cpt_client_project');
	function cptui_register_my_cpt_client_project() {
	register_post_type('client-projects', array(
	'label' => 'Client Projects',
	'description' => '',
	'public' => true,
	'has_archive' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'client-projects', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Client Projects',
	  'singular_name' => 'Client Project',
	  'menu_name' => 'Client Projects',
	  'add_new' => 'Add Client Project',
	  'add_new_item' => 'Add New Client Project',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Client Project',
	  'new_item' => 'New Client Project',
	  'view' => 'View Client Project',
	  'view_item' => 'View Client Project',
	  'search_items' => 'Search Client Projects',
	  'not_found' => 'No Client Projects Found',
	  'not_found_in_trash' => 'No Client Projects Found in Trash',
	  'parent' => 'Parent Client Project',
	)
	) ); }

?>