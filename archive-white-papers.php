<?php include('header.php'); ?>

<section class="archive">
	<div class="container">

		<div class="row">
	
		  <div class="col-xs-12">
	
				<h1>
					<?php
					$post_id = 94;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					echo $title;
					?>
				</h1>
	
	
		  </div>
		
		</div>
	
		<div class="row">
	
		  <div class="col-xs-12">
	
				<p class="lead">
					<?php
					$post_id = 94;
					$queried_post = get_post($post_id);
					echo $queried_post->post_content;
					?>
				</p>
	
		  </div>
		
	</div>

	</div>
</section>

<section class="work-feed">
	<div class="container">

			<?php 
				$the_query = new WP_Query('post_type=white-papers', 'posts_per_page=-1');

				$i = 1;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

		<div class="row">

						  <div class="col-xs-12">
						      
						      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if (class_exists('MultiPostThumbnails')) :
    MultiPostThumbnails::the_post_thumbnail(
        get_post_type(),
        'secondary-image'
    );
endif; ?></a>
						      
						      <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

						        <p class="entry-summary">
											<?php the_excerpt(); ?>
										</p>

						  </div>

		</div>

					<?php 
					$i++;
					}
				}
			?>


	</div>
</section>

<?php include('footer.php'); ?>