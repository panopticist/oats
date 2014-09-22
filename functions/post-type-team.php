<?php

	// http://codex.wordpress.org/Post_Types
	
	// archive-team.php — template for section page
	// single-team.php — template for entry page


	add_action('init', 'cptui_register_my_cpt_team');
	function cptui_register_my_cpt_team() {
	register_post_type('team', array(
	'label' => 'Team',
	'description' => '',
	'public' => true,
	'has_archive' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'team', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Team',
	  'singular_name' => 'Team',
	  'menu_name' => 'Team',
	  'add_new' => 'Add Team',
	  'add_new_item' => 'Add New Team',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Team',
	  'new_item' => 'New Team',
	  'view' => 'View Team',
	  'view_item' => 'View Team',
	  'search_items' => 'Search Team',
	  'not_found' => 'No Team Found',
	  'not_found_in_trash' => 'No Team Found in Trash',
	  'parent' => 'Parent Team',
	)
	) ); }

?>