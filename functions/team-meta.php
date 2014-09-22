<?php

add_action( 'add_meta_boxes', 'job_title_add' );
function job_title_add() {
	add_meta_box( 'job-title-id', 'Job Title', 'job_title', 'team', 'normal', 'high' );
}

function job_title( $post )
{
	$values = get_post_custom( $post->ID );
	$job_title = isset( $values['job_title'] ) ? esc_attr( $values['job_title'][0] ) : '';
	wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
	?>
	<style type="text/css" media="screen">
	  #job_title_box{}
	  #job_title_box label,
	  #job_title_box input,
	  #job_title_box small{}
	  #job_title_box label{
	    padding:0 2px;
	  }
    #job_title{
      width:100%;
    }
    #job_title_box small{
      padding:0 3px;
      color:#999;
    }
	</style>
	<div id="job_title_box">
  	<p>
  		<label for="job_title">Job title</label><br />
  		<input type="text" name="job_title" id="job_title" value="<?php echo $job_title; ?>" /><br />
  		<small>e.g. Director of Operations</small>
  	</p>

	</div><!-- #job_title_box -->
	<?php	
}


add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
	// Bail if we're doing an auto save
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post, bail
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);
	
	if( isset( $_POST['job_title'] ) )
		update_post_meta( $post_id, 'job_title', wp_kses( $_POST['job_title'], $allowed ) );
	
}