<?php get_header(); ?>

<section class="section-hed">
	<div class="container">
	  <h2>About</h2>
	  <!-- Custom Post Type Name -->
	</div>
</section>

<?php 
	
	// This runs the WordPress loop and pulls in the content
	// See content.php and functions/loop.php
	loop($type = 'blog');

?>

<?php get_footer(); ?>