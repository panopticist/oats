<?php get_header(); ?>
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
					<?php $name = get_post_meta( get_the_ID(), 'chart_config_name', true ) . '-chart'; ?>
					<canvas id="<?php echo $name; ?>" width="400" height="400"></canvas>

					<?php loop(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php include INC .'mailing-list-signup.php'; ?>
	<?php include INC .'process-promo.php'; ?>
<?php get_footer(); ?>