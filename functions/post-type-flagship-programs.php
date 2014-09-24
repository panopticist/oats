<?php

	// http://codex.wordpress.org/Post_Types
	
	// archive-white-papers.php — template for section page
	// single-white-papers.php — template for entry page


	add_action('init', 'cptui_register_my_cpt_flagship_programs');
	function cptui_register_my_cpt_flagship_programs() {
	register_post_type('flagship-programs', array(
	'label' => 'Flagship Programs',
	'description' => '',
	'public' => true,
	'has_archive' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'flagship-programs', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Flagship Programs',
	  'singular_name' => 'Flagship Program',
	  'menu_name' => 'Flagship Programs',
	  'add_new' => 'Add Flagship Program',
	  'add_new_item' => 'Add New Flagship Program',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Flagship Program',
	  'new_item' => 'New Flagship Program',
	  'view' => 'View Flagship Program',
	  'view_item' => 'View Flagship Program',
	  'search_items' => 'Search Flagship Programs',
	  'not_found' => 'No Flagship Programs Found',
	  'not_found_in_trash' => 'No Flagship Programs Found in Trash',
	  'parent' => 'Parent Flagship Program',
	)
	) ); }

?>