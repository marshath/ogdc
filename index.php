<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
	<div id="projects" class="full">
		<div id="ribbon" class="full">
			<h3><?php wp_title('', true, 'right'); ?> Projects</h3>
		</div>
		<div id="project-list">
			<ul>
				<!-- Projects -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="project quarter left">
					<a href="<?php the_permalink(); ?>">
						<img src="/images/<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>.jpg" alt="<?php the_title(); ?>" />
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
					</a>
				</li>
				<?php endwhile; ?>
				<!-- END Featured Projects -->
			</ul>
			<div id="nav-above">
				<div class="nav-prev"><?php next_posts_link('<') ?></div>
				<div class="nav-next"><?php previous_posts_link('>') ?></div>
			</div>
		<?php else : ?>
			<h3 class="center">Not Found</h3>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
		<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>