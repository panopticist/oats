
<section class="tout-grid footer-module">
	<div class="container">

	<div class="row">

	  <div class="col-xs-12">

		<h6>White Papers</h6>

  </div>
	
	</div>
		<div class="row">
			<?php 
				$the_query = new WP_Query('post_type=client-projects', 'posts_per_page=-1');

				$i = 1;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<?php if ($i % 5 == 0){
							echo "</div><div class='row'>";
						} ?>
							
						<div class="col-xs-12 col-sm-6 col-md-3">

					    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>

				        <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

				        <p class="entry-summary">
									<?php the_excerpt(); ?>
								</p>

				        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Learn More</a></p>

					  </div>

					<?php 
					$i++;
					}
				}
			?>
		</div>

	</div>
</section>