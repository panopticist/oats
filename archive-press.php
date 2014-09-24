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


			<?php 
				$the_query = new WP_Query('post_type=press', 'posts_per_page=-1');

				$i = 1;
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

		<div class="row">

						  <div class="col-xs-12">
						    <div class="thumbnail">
						      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
						    </div>

						    <div class="caption">
						      <h4 class="last"><?php the_time(get_option('date_format')); ?></h4>
						      <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						        <p class="entry-summary">
											<?php the_excerpt(); ?>
										</p>
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