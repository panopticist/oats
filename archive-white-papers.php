<?php include('header.php'); ?>

<section id="section-hed">
	<div class="container">
	  <h2>Work</h2>
	</div>
</section>

<section>
	<div class="container">

		<div class="row">
		  <div class="col-xs-12">
				<h1>White Papers</h1>
		  </div>
		</div>


		<div class="row">
		  <div class="col-xs-12 col-md-10">
				<p class="lead">OATS works with a wide range of mauris vulputate tincidunt velit, quis imperdiet mi tempus et. Donec scelerisque massa id tortor venenatis egestas. Donec sit amet imperdiet massa. Quisque iaculis lorem ut tellus varius vel tincidunt felis aliquam.</p>
		  </div>
		</div>

		<div class="row">
			<?php 
				$the_query = new WP_Query('post_type=white-papers', 'posts_per_page=-1');
				$i = 1;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<?php if ($i % 5 == 0){
							echo "</div><div class='row'>";
						} ?>

						<div class="col-xs-12 col-sm-6 col-md-3">
					    <div class="thumbnail">
					    	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
					      <div class="caption">
					        <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					        <p class="entry-summary">
										<?php the_excerpt(); ?>
									</p>
					        <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">View Case Study</a></p>
					      </div>
					    </div>
					  </div>

					<?php 
					$i++;
					}
				}
			?>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>