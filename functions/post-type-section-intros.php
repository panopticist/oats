<?php

	// http://codex.wordpress.org/Post_Types
	
	add_action('init', 'cptui_register_my_cpt_section_intro');
	function cptui_register_my_cpt_section_intro() {
	register_post_type('section-intros', array(
	'label' => 'Section Intros',
	'description' => '',
	'public' => true,
	'has_archive' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'capability_type' => 'page',
	'map_meta_cap' => true,
	'hierarchical' => true,
	'rewrite' => array('slug' => 'section-intros', 'with_front' => true),
	'query_var' => true,
	'supports' => array('title','editor','excerpt','custom-fields','revisions','thumbnail','page-attributes','post-formats'),
	'taxonomies' => array('category','post_tag'),
	'labels' => array (
	  'name' => 'Section Intros',
	  'singular_name' => 'Section Intro',
	  'menu_name' => 'Section Intros',
	  'add_new' => 'Add Section Intro',
	  'add_new_item' => 'Add New Section Intro',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Section Intro',
	  'new_item' => 'New Section Intro',
	  'view' => 'View Section Intros',
	  'view_item' => 'View Section Intro',
	  'search_items' => 'Search Section Intros',
	  'not_found' => 'No Section Intros Found',
	  'not_found_in_trash' => 'No Section Intros Found in Trash',
	  'parent' => 'Parent Section Intro',
	)
	) ); }

?>