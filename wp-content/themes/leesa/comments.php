<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leesa
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

<div id="comments" class="comments-area jumpto">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html_e( '1 Comment', 'leesa' )
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', $comment_count, 'comments title', 'leesa' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
					'callback' => 'better_comments',
					'avatar_size' => 50
				) );
			?>
		</ul><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'leesa' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	$comments_args = array(
		'label_submit' => __( 'Submit', 'textdomain' ),
		'title_reply' => __( 'Write a Reply or Comment', 'textdomain' ),
		'comment_notes_after' => '',
		'comment_field' => '<div class="form-group comment-form-comment"><label for="comment">' . _x( 'Comment:', 'noun' ) . '</label><span class="required">*</span><br /><textarea class="form-control" id="comment" name="comment" aria-required="true"></textarea></div>',
		'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-teal" value="%4$s" />',
		'fields' => apply_filters( 'comment_form_default_fields', array(
	
			'author' =>
			  	'<div class="form-cols"><div class="form-group comment-form-author">' .
			  	'<label for="author">' . __( 'Name:', 'domainreference' ) . '</label> ' .
			  	( $req ? '<span class="required">*</span>' : '' ) .
			  	'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			  	'" size="30"' . $aria_req . ' /></div>',
		
			'email' =>
			  	'<div class="form-group comment-form-email"><label for="email">' . __( 'Email:', 'domainreference' ) . '</label> ' .
			  	( $req ? '<span class="required">*</span>' : '' ) .
			  	'<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			  	'" size="30"' . $aria_req . ' /></div>',
		
			'url' =>
			  	'<div class="form-group comment-form-url"><label for="url">' .
			  	__( 'Website:', 'domainreference' ) . '</label>' .
			  	'<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
				  '" size="30" /></div></div>',
			'cookies' => '<div class="form-check form-group comment-form-cookies-consent"><input class="form-check-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . '<label class="form-check-label" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></div>'
			)
		)
	);
	comment_form( $comments_args );
	
	?>

</div><!-- #comments -->
