<?php get_header(); ?>

<?php 
	
	// This runs the WordPress loop and pulls in the content
	// See content.php and functions/loop.php
	
	loop($type = 'blog');

?>

<?php get_footer(); ?>