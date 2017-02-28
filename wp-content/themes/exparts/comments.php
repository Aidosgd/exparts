<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<!-- Comments Form -->
<div class="well">
<?php comment_form( array(
		'comment_field' => '<div class="form-group"><textarea class="form-control" rows="3"></textarea></div>',
		'logged_in_as' => '',
		'title_reply' => '<h4>Leave a Comment:</h4>',
		'label_submit' => 'Submit',
) ); ?>
</div>

<hr>

<!-- Posted Comments -->

<!-- Comment -->
<?php if ( have_comments() ) : ?>

	<?php
	wp_list_comments('type=comment&callback=format_comment');
	?>

<?php endif; // have_comments() ?>
