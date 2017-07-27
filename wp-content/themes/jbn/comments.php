<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package wpdesigner
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

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on %2$s', '%1$s thoughts on %2$s', get_comments_number(), 'comments title', 'wpdesigner' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wpdesigner' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wpdesigner' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpdesigner' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
                                    <?php
				$args = array(
				   // args here
				);

				// The Query
				$comments_query = new WP_Comment_Query;
				$comments = get_comments(array('post_id' => pll_get_post($post_id, $slug), 'status' => 'approve', 'lang' => $slug));

				// Comment Loop
				if ( $comments ) {
				    foreach ( $comments as $comment ) {
				        echo '<li>';
				        echo '<div class="comment-meta">';
				        echo '<p class="comment-author">' . $comment->comment_author . '</p>';
				        echo '<p class="comment-date">' . $comment->comment_date . '</p>';
				        echo '</div>';
				        echo '<div class="comment-content">';
				        echo '<p>' . $comment->comment_content . '</p>';
				        echo '</div>';
				        echo '</li>';
				    }
				} else {
				    echo 'No comments found.';
				}
				?>
		</ol><!-- .comment-list -->



		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'wpdesigner' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wpdesigner' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wpdesigner' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wpdesigner' ); ?></p>
	<?php endif; ?>



   <div class="replytitle">
    <?php 
     $currentlang = pll_current_language();
    if ($currentlang == 'en') { ?>
    <h3>Leave a Message</h3>
    <?php } elseif ($currentlang== 'id') { ?>
    <h3>Isi Buku Tamu</h3>
    <?php } ?>
   </div>
	<?php comment_form(); ?>

</div><!-- #comments -->
