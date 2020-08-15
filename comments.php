<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'maketabase' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h3><?php comments_number(); ?></h3>

	<ul class="commentlist">
		<?php wp_list_comments(); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'maketabase' ); ?></p>

<?php endif; ?>
<?php
    ob_start();
	$commenter = wp_get_current_commenter();
	$req = true;
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$comments_arg = array(
		'form'	=> array(
			'class' => 'form-horizontal'
			),
		'fields' => apply_filters( 'comment_form_default_fields', array(
				'autor' 				=> '<div class="row"><div class="form-group col-md-6">' . '<label for="author">' . __( 'Name', 'maketabase' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
										'<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' required />'.
										'<p id="d1" class="text-danger"></p>' . '</div>',
				'email'					=> '<div class="form-group col-md-6">' .'<label for="email">' . __( 'Email', 'maketabase' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
										'<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' required />'.
										'<p id="d2" class="text-danger"></p>' . '</div></div>',
				'url'					=> '')),
				'comment_field'			=> '<div class="form-group">' . '<label for="comment">' . __( 'Comment', 'maketabase' ) . '</label><span>*</span>' .
										'<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true" required></textarea><p id="d3" class="text-danger"></p>' . '</div>',
				'comment_notes_after' 	=> '',
				'class_submit'			=> 'btn btn-primary'
			); ?>
	<?php comment_form($comments_arg);
		echo str_replace('class="comment-form"','class="comment-form" name="commentForm" onsubmit="return validateForm();"',ob_get_clean());
	?>

</div>
