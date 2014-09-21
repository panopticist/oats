<?php get_header(); ?>

<?php include( INC . 'primary-nav.php' ); ?>

<section id="section-hed">
	<div class="container">
	  <h2>Client Projects</h2>
	  <!-- Custom Post Type Name -->
	</div>
</section>

<?php 
	
	// This runs the WordPress loop and pulls in the content
	// See content.php and functions/loop.php
	loop();

?>

<?php get_footer(); ?>