<?php get_header(); ?>

<?php include( INC . 'primary-nav.php' ); ?>

<section id="section-hed">
	<div class="container">
	  <?php 
			$post_type = get_post_type_object( get_post_type($post) );
		?>
	  <h2><?php echo $post_type->label; ?></h2>
	</div>
</section>

<?php 
	
	// This runs the WordPress loop and pulls in the content
	// See content.php and functions/loop.php
	loop();

?>

<?php get_footer(); ?>