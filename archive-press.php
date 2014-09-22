<?php 
	/* Template Name: Press */
?>

<?php include('header.php'); ?>

<section id="section-hed">
	<div class="container">
	  <h2>Press</h2>
	</div>
</section>



<section id="archive">
<div class="container">

	<div class="row">

	  <div class="col-xs-12">

			<h1>
				<?php
				$post_id = 85;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $title;
				?>
			</h1>


	  </div>
	
	</div>

	<div class="row">

	  <div class="col-xs-12 col-md-10">

			<p class="lead">
				<?php
				$post_id = 85;
				$queried_post = get_post($post_id);
				echo $queried_post->post_content;
				?>
			</p>

	  </div>
	
	</div>

	<div id="newsfeed">

	<div class="row">

		  <div class="col-xs-12 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/400x300">
		    </div>
		  </div>

		  <div class="col-xs-12 col-md-8">
		    <div class="caption">
		      <h4>January 23, 2015</h4>
		      <h3><a href="white-papers-entry.php">Toward an Inclusive Measure of Broadband Adoption</a></h3>
		      <p>Quisque iaculis lorem ut tellus varius vel tincidunt felis aliquam. Mauris at molestie dui. Vestibulum quis arcu sed dui bibendum mollis non quis purus. </p>
		    </div>
		  </div>

	</div>

	<div class="row">

		  <div class="col-xs-12 col-md-3">
		    <div class="thumbnail">
		      <img src="http://placehold.it/400x300">
		    </div>
		  </div>

		  <div class="col-xs-12 col-md-8">
		    <div class="caption">
		      <h4>January 21, 2015</h4>
		      <h3><a href="white-papers-entry.php">Toward an Inclusive Measure of Broadband Adoption</a></h3>
		      <p>Quisque iaculis lorem ut tellus varius vel tincidunt felis aliquam. Mauris at molestie dui. Vestibulum quis arcu sed dui bibendum mollis non quis purus. </p>
		    </div>
		  </div>

	</div>

	</div>



</div>
</section>

<?php include('footer.php'); ?>