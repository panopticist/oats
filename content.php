<section id="main">
	<div class="container">

		<div class="row">

		  <div class="col-xs-12">

		  	<!-- Rubric -->
		  	<?php 
					$post_type = get_post_type_object( get_post_type($post) );
				?>
  			<h5><?php echo $post_type->label; ?></h5>


  			<!-- Headline -->
				<?php if ( is_singular() ) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php else : ?>
					<h3 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h3>
				<?php endif; ?>

		  </div>
		</div>


		<!-- Featured Image -->
		<div class="row">

		  <div class="col-xs-12">
		  	<div class="featured-image">

					<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
					
		  	</div>
		  	
		  </div>
		
		</div>


		<!-- The Content -->
		<div class="row">

		  <div class="col-xs-12 col-md-8">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
		  </div>

		  <!-- Sidebar -->
		  <div class="col-xs-12 col-md-4">

				<p>SIDEBAR</p>

		  </div>

		</div>

	</div>
</section>