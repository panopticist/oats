<?php

	// http://codex.wordpress.org/Post_Types
	
	// archive-team.php — template for section page
	// single-team.php — template for entry page


	add_action('init', 'cptui_register_my_cpt_press');
	function cptui_register_my_cpt_press() {
	register_post_type('press', array(
	'label' => 'Press',
	'description' => '',
	'public' => true,
	'has_archive' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'press', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Press',
	  'singular_name' => 'Press Item',
	  'menu_name' => 'Press',
	  'add_new' => 'Add Press Item',
	  'add_new_item' => 'Add Press Item',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Press Item',
	  'new_item' => 'New Press Item',
	  'view' => 'View Press Item',
	  'view_item' => 'View Press Item',
	  'search_items' => 'Search Press Items',
	  'not_found' => 'No Press Items Found',
	  'not_found_in_trash' => 'No Press Items Found in Trash',
	  'parent' => 'Parent Press Item',
	)
	) ); }

?>