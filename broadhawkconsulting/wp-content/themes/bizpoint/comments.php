<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bizpoint
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

<div id="comments" class="comments-area bizp-panel">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h4 class="comments-title mb-3">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'bizpoint' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'bizpoint' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
					'avatar_size'	=> 60,
					'callback'		=> 'bizpoint_comments',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bizpoint' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	?>

	<div class="bizpoint-comments-form">
		<?php
			$bizpoint_comment_field = '<div class="comment-form-textarea form-group col-md-12"><textarea id="comment" name="comment" rows="5" aria-required="true" class="form-control " placeholder="'. esc_html__('Enter your comment&hellip;', 'bizpoint') .'"></textarea></div>';

			$sp_fields =  array(

			  'author' =>
				'<div class="comment-form-author form-group col-md-4"><input id="author" placeholder="'. esc_attr__('Name', 'bizpoint') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" class="form-control" required /></div>',

			  'email' =>
				'<p class="comment-form-email form-group col-md-4"><input id="email" placeholder="'. esc_attr__('Email', 'bizpoint') .'" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30" class="form-control" required /></p>',

			  'url' =>
				'<p class="comment-form-url form-group col-md-4"><input id="url" placeholder="'. esc_attr__('Website', 'bizpoint') .'" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" class="form-control" /></p>',
			);


			comment_form(array(
				'comment_field' => $bizpoint_comment_field,
				'title_reply_before' => '<h4 class="reply-title bizpoint-reply-title text-center">',
				'title_reply_after' => '</h4>',
				'title_reply' => esc_html__('Leave a Comment', 'bizpoint'),
				'cancel_reply_link' => esc_html__('Cancel Comment', 'bizpoint'),
				'label_submit' => esc_html__('Post Comment', 'bizpoint'),
				'fields' => $sp_fields,
				'class_submit' => 'submit btn btn-primary comment-submit-btn',
				'submit_field' => '<div class="form-submit text-center col-md-12">%1$s %2$s</div>',
				'cancel_reply_before' => '<small class="bizpoint-cancel-reply">',
				'class_form' => 'comment-form align-items-center row text-center'
			));
		?>
	</div><!-- /.card-block -->

</div><!-- #comments -->
