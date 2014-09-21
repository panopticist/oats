<section id="main">
	<div class="container">

		<div class="row">

			  <div class="col-xs-12">

					<?php oats_the_kicker(); ?>

					<?php if ( is_singular() ) : ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php else : ?>
						<h3 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>
					<?php endif; ?>

			  </div>
		</div>

		<div class="row">

			  <div class="col-xs-12">
			  	<div class="featured-image">

						<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
						
			  	</div>
			  	
			  </div>
		
		</div>

		<div class="row">

			  <div class="col-xs-12 col-md-8">
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
			  </div>

			  <div class="col-xs-12 col-md-4">

					<p>SIDEBAR</p>

			  </div>

		</div>

	</div>
</section>