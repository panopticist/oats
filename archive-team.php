<?php include('header.php'); ?>

<section id="section-hed">
	<div class="container">
	  <h2>About</h2>
	</div>
</section>

<section>
	<div class="container">

		<div class="row">
		  <div class="col-xs-12">
				<h1>The OATS Team</h1>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-12 col-md-10">
				<p class="lead">OATS works with a wide range of mauris vulputate tincidunt velit, quis imperdiet mi tempus et. Donec scelerisque massa id tortor venenatis egestas. Donec sit amet imperdiet massa. Quisque iaculis lorem ut tellus varius vel tincidunt felis aliquam.</p>
		  </div>
		</div>

		<div class="row">
			<?php 
				$the_query = new WP_Query('post_type=team');

				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<div class="col-xs-12 col-sm-6 col-md-3">
					    <div class="thumbnail">
					    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
					      <div class="caption">
					        <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					        <p class="entry-summary">
										<?php the_excerpt(); ?>
									</p>
					        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">View Bio</a></p>
					      </div>
					    </div>
					  </div>

					<?php 
					}
				}
			?>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>