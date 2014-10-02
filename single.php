<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="projects" class="full">
		<div id="project-list">
			<div id="project-desc" class="two-fifths right last">
				<h3><?php the_title(); ?></h3>
				<div class="tags">Tags: <?php the_tags( '', ' ', '' ); ?></div>
				<?php echo $post->post_content; ?>
			</div>
		<div id="project-images" class="three-fifths left last">
			<?php $mainImg = get_post_meta($post->ID, 'first-img'); { // display first image
				foreach ($mainImg as $imageMain) {
					$fullValue = explode('|', $imageMain);

						$imgMainName = $fullValue[0];
						$imgMainTitle = $fullValue[1];
						$imgMainLink = $fullValue[2];
														
					echo "<a rel='group' href='$imgMainLink' title='$imgMainTitle' class='first-img iframe'><img alt='$imgMainTitle' src='/images/$imgMainName.jpg'></a>";
				}
			} ?>
			<?php $imagesTypes = get_post_meta($post->ID, 'imageLink'); { // displays images and videos
				foreach ($imagesTypes as $imageType) {
					$fullValue = explode('|', $imageType);

						$imgName = $fullValue[0];
						$imgTitle = $fullValue[1];
						$imgLink = $fullValue[2];

					echo "<a rel='group' href='$imgLink' title='$imgTitle' class='thumbnail iframe'><img alt='$imgTitle' src='/images/$imgName.jpg'></a>";
				}
			} ?>
		</div>
	</div>
</div>
<div id="ribbon" class="full">
	<h3>More super cool projects</h3>
</div>
<div id="projects" class="full">
	<div id="project-list">
		<ul>
			<!-- Featured Projects -->
			<?php $args = array( 'posts_per_page' => 8, 'cat' => 12, 'orderby' => rand );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?>
			<li class="project quarter left">
				<a href="<?php the_permalink(); ?>">
					<img src="/images/<?php echo get_post_meta($post->ID, 'thumbnail', true); ?>.jpg" alt="<?php the_title(); ?>" />
					<h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
				</a>
			</li>
			<?php endforeach; ?>
			<!-- END Featured Projects -->
		</ul>
	</div>
</div>
		
<?php endwhile; ?>
<?php get_footer(); ?>