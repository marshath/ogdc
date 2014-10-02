<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- Begin Comments -->
	<div id="respond">        
		<?php if ( have_comments() ) : ?>

			<h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h4>

			<ol class="commentlist">
				<?php foreach ($comments as $comment) : ?>
					<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
						<?php comment_text() ?>
						<?php if ($comment->comment_approved == '0') : ?>  
							<em>Your comment is awaiting moderation.</em>  
						<?php endif; ?>  
						<cite>&mdash;<?php comment_author_link() ?> on <?php comment_date('F jS, Y') ?></cite>  
					</li>
				<?php endforeach; /* end for each comment */ ?>  
			</ol> 

			<div class="navigation">
				<div class="alignleft"><?php previous_comments_link() ?></div>
				<div class="alignright"><?php next_comments_link() ?></div>
			</div>
	 	<?php else : // this is displayed if there are no comments so far ?>

			<?php if ( comments_open() ) : ?>
				<!-- Comments are open, but no comments -->

		 	<?php else : // comments are closed ?>
				<!-- If comments are closed. -->
				<p style="margin-top:18px;">Comments are closed.</p>

			<?php endif; ?>
		<?php endif; ?>


		<?php if ( comments_open() ) : ?>

			<h4><?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?></h4>

			<p class="small"><?php cancel_comment_reply_link(); ?></p>

			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
			
			<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( is_user_logged_in() ) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

				<?php else : ?>
				<p><label for="author">Name <?php if ($req) echo "<span class='req2'>*</span>"; ?></label><br />
					<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="42" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> /></p>

				<p><label for="email">Email <?php if ($req) echo "<span class='req2'>*</span>"; ?></label><br />
					<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="42" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> /></p>

				<p><label for="url">Website</label><br />
					<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="42" tabindex="3" /></p>

				<?php endif; ?>
				<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
				<p class="italic">Your Comment<br />
				<textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></p>

				<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<p class="req">* = required field</p>
				<?php comment_id_fields(); ?>
				</p>
				<?php do_action('comment_form', $post->ID); ?>

			</form>

		<?php endif; // If registration required and not logged in ?>
	</div>
	<?php endif; // if you delete this the sky will fall on your head ?>
