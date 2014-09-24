<?php

function loop($type){
	$i = 0;
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<?php
				if (empty($type)) {
					get_template_part('content', get_post_format() );
				} else {
					// Example content-blog.php
					get_template_part('content', $type );
				}
			?>
		<?php
		$i++;
		}
		// include TDIR . '/nextprev.php';
	} else {
		// get_template_part( 'content', 'none' );
	}
}

?>
