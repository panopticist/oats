<section class="main">
	<div class="container">

		<div class="row">

		  <div class="col-xs-12">

		  	<!-- Rubric -->
		  	<?php 
					$rubric = get_post_type_object( get_post_type($post) );
					$rubric = $rubric->label;
					if ($rubric == 'Team') {
						$rubric = get_post_meta( get_the_ID(), 'job_title', true );
						echo '<h5>'.$rubric.'</h5>';
					} else {
						echo '<h5>'.$rubric.'</h5>';
					}

				?>
  			


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
		  <div class="col-xs-12 col-md-4 sidebar">

		    <?php include INC . 'sidebar-contact.php'; ?>

		  </div>


		</div>

	</div>
</section>