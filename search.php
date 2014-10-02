<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<section id="search">
		<header>
			<div class="line1"></div>
			<h2><?php wp_title('', true, 'right'); ?></h2>
			<div class="line1"></div>
		</header>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<ul>
				<li>
					<figure>
						<a href="<?php the_permalink(); ?>">
							<div class="details"></div>
							<img src="/images/<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>.jpg">
							<figcaption>
								<h3><?php the_title(); ?></h3>
								<h4><?php echo get_post_meta($post->ID, 'industry', true); ?></h4>
								<p><?php echo get_post_meta($post->ID, 'summary', true); ?></p>
							</figcaption>
						</a>
					</figure>
				</li>
			</ul>
			<?php endwhile; ?>
			<div id="nav-above">
				<div class="nav-prev"><?php next_posts_link('<') ?></div>
				<div class="nav-next"><?php previous_posts_link('>') ?></div>
			</div>
		<?php else : ?>
			<h4 style="margin:0 0 10px 38px;">No posts found. Try a different search?</h4>
			<div style="padding-left:26px; display:block;"><?php get_search_form(); ?></div>
		<?php endif; ?>
		<div style="clear:both"></div>
	</section>
<?php get_footer(); ?>