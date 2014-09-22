<?php get_header(); ?>

<section id="section-hed">
	<div class="container">
	  <h2>Team</h2>
	</div>
</section>

<?php 
	
	// This runs the WordPress loop and pulls in the content
	// See content.php and functions/loop.php
	loop();

?>

<?php get_footer(); ?>