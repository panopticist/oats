<?php include('header.php'); ?>

<section class="homepage module-stage">
	<div class="container">
	
<?php // get_post_field( $post_content, $post_id (64) ); ?>

			<h1>The Practice of Change</h1>
			<p class="lead">OATS harnesses the power of technology to change the way we age. Since 2004, we&#8217;ve innovated one of the nation&#8217;s most powerful models to shape the future of aging.</p>

	</div>
</section>

<section class="homepage module-approach">
	<div class="container">
	
		<div class="row photos">
	
			  <p class="lead">The OATS approach begins with a strong commitment to creative and responsive program design. </p>

		  <div class="col-xs-6 col-sm-3">
		
	      <img src="http://localhost:8888/wp/wp-content/themes/oats/img/graphics/person-circle-9.png">

		  </div>
		  
		  <div class="col-xs-6 col-sm-3">
		
	      <img src="http://localhost:8888/wp/wp-content/themes/oats/img/graphics/person-circle-5.png">

		  </div>

		  <div class="col-xs-6 col-sm-3 optional">
		
	      <img src="http://localhost:8888/wp/wp-content/themes/oats/img/graphics/person-circle-4.png">

		  </div>

		  <div class="col-xs-6 col-sm-3 optional">
		
	      <img src="http://localhost:8888/wp/wp-content/themes/oats/img/graphics/person-circle-3.png">

		  </div>

		</div>
	
		<div class="row">
	
		  <div class="col-xs-12">
		
			  <p class="blurb">Our most important resource is the energy of older Americans themselves. We develop programs that engage seniors as change agents — in the classroom, in the community, and at home.</p>
		  
			  <p class="button"><a href="<?php echo get_site_url(); ?>/approach/" class="btn btn-primary btn-lg" role="button">Learn About Our Approach</a></p>
		  
		  </div>
		  
		</div>
	
	</div>
</section>



<section class="homepage module-work">
	<div class="container">
	
		<div class="row">
	
		  <div class="col-xs-12">
		
			  <p class="lead">We partner with an extraordinary range of institutions, from local neighborhood associations to the New York Public Library, AARP, PBS’s Next Avenue, and Aetna.</p>
		  
			  <p class="button"><a href="<?php echo get_site_url(); ?>/flagship-programs/" class="btn btn-primary btn-lg" role="button">See Our Flagship Programs</a></p>
		  
		</div>
	
	</div>
</section>


<section class="homepage module-team">
	<div class="container">

		  <div class="col-xs-9 col-xs-offset-3 col-sm-8 col-sm-offset-4">

			  <p class="lead">Our staff has deep experience working directly with older adults &#8212; and a passion for delivering a world-class experience for seniors.</p>
		
			  <p class="button"><a href="<?php echo get_site_url(); ?>/team/" class="btn btn-primary btn-lg" role="button">Meet the Team</a></p>
		  
		  </div>
		  
	
	</div>
</section>


<?php include( INC . 'press-module.php' ); ?>

<?php include('footer.php'); ?>