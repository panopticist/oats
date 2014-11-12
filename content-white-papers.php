<section class="archive">
	<div class="container">

		<div class="row">

				  <div class="col-xs-12">
		
				  	<h5>White Papers</h5>
		  			
						<h1 class="entry-title"><?php the_title(); ?></h1>
		
				  </div>

		</div>


		<!-- Featured Image -->
		<div class="row">

				  <div class="col-xs-12 col-sm-4">
		
				  	<div class="featured-image">
		
							<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
							
				  	</div>
				  	
				  </div>
		
				  <div class="col-xs-12 col-md-8">
		
						<div class="entry-content">
		
							<?php the_content(); ?>
		
						</div>
		
				  </div>

		</div>

	</div>
</section>