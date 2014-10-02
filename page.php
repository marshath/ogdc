<?php
/*
Template Name: Standard
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="main clearfix">
	<?php  if ( (is_page('2')) ) { // -----------  Homepage  -----------  ?>
		<div class="w12">
			<div class="splash">
				<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<?php query_posts(array('post_type'=>'homegallery')); // -------- Display Images ------- ?>
						<?php $my2post = array( 'post_type' => 'homegallery' );
						$emploop = new WP_Query( $my2post ); ?>
						<?php while ( $emploop->have_posts() ) : $emploop->the_post(); // ------- Cycle through all Image posts ------- ?>
						<li>
							<?php if ( has_post_thumbnail()) { // thumbnail image
								 $thumb_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
								 the_post_thumbnail('large');
							 } ?>
						</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
				</section>
			</div>
		</div>	
		<div class="home-featured">
		  <section class="dentist">
		    <h2><?php the_field('right_column_title') ?></h2>
		    <?php the_field('right_column') ?>
		  </section>
		  <section class="our-team">
		    <h2><?php the_field('center_column_title') ?></h2>
		    <?php the_field('center_column') ?>
		  </section>
		  <section class="services">
		    <h2><?php the_field('left_column_title') ?></h2>
		    <?php the_field('left_column') ?>
		  </section>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('our-philosophy')) ) { // -----------  Philosophy  -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="w8 left">
			<?php the_content(); ?>
			<div class="steps identify">
			  <h3><?php the_field('step_one_title') ?></h3>
			  <?php the_field('step_one') ?>
			</div>
			<div class="steps educate">
			  <h3><?php the_field('step_two_title') ?></h3>
			  <?php the_field('step_two') ?>
			</div>
			<div class="steps options">
			  <h3><?php the_field('step_three_title') ?></h3>
			  <?php the_field('step_three') ?>
			</div>
			<div class="steps decide">
			  <h3><?php the_field('step_four_title') ?></h3>
			  <?php the_field('step_four') ?>
			</div>
			 <?php the_field('philosophy_link') ?>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('services')) ) { // -----------  Services -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="w8 left">
			<div class="featured w12 cerec">
				<figure class="right">
					<?php the_post_thumbnail("full"); ?>
				</figure>
			    <?php the_content(); ?>
			</div>
			<div class="jumpNav">
			  <h5>Jump to section</h5>
			    <ul>
			      <?php the_field('jumplinks') ?>
			    </ul>
			</div>
			<div class="clear"></div>
			<ul class="services-list">
			<?php while(have_rows('service') ) {
			
			 	the_row();
					$stitle = get_sub_field('service_title');
					$sanchor = get_sub_field('service_anchor_link');
					$simg = get_sub_field('service_image');
					$sdesc = get_sub_field('service_description'); ?>

				  <li id="<?php echo $sanchor; ?>">
				    <h3><?php echo $stitle; ?></h3>
					<?php if( !empty($simg) ) { ?>
						<img src="<?php echo $simg; ?>" alt="<?php echo $stitle; ?>" class="img-service">
					<?php } //endif $image; ?>
				    <?php echo $sdesc; ?>
				    <p><a href="#Top" class="top">Top of page</a></p>
				  </li>
		
			<?php } // endwhile ?>
			</ul>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>
	
		<?php  if ( (is_page('virtual-tour')) ) { // -----------  Virtual Tour  -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="w12-m">
			<?php the_content(); ?>
			<div class="flex-wrap">
			<?php wp_reset_query(); ?>
				<div id="slider" class="flexslider">
					<ul class="slides">
						<?php query_posts(array('post_type'=>'tours')); // -------- Display Images ------- ?>
						<?php $my3post = array( 'post_type' => 'tours' );
						$empgloop = new WP_Query( $my3post ); ?>
						<?php while ( $empgloop->have_posts() ) : $empgloop->the_post(); // ------- Cycle through all Image posts ------- ?>
						<li data-thumb="<?php echo get_option('home'); ?>/hydro12/wp-content/uploads/<?php echo esc_html( get_post_meta( get_the_ID(), 'tour_client', true ) ); ?>">
							<img src="<?php echo get_option('home'); ?>/hydro12/wp-content/uploads/<?php echo esc_html( get_post_meta( get_the_ID(), 'tour_url', true ) ); ?>">
						</li>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
				<p>Click to Enlarge</p>
			</div>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('team')) ) { // -----------  Meet Our Team  -----------  ?>
		<div class="w12-m">
		
			<div class="featured-kevin clearfix" itemscope itemtype="http://schema.org/Person">
			  <h2 itemprop="name"><?php echo get_field('dr_speer'); ?></h2>
			  <div class="w7">
			    <img src="<?php echo get_field('dr_speer_pic'); ?>" alt="<?php echo get_field('dr_speer'); ?>">
			    <?php echo get_field('dr_speer_bio'); ?>
			  </div>
			</div>
			
			<h2 class="our-team"><a href="#our-team"></a>Meet the Team</h2>
			<div class="team full">
			<?php while(have_rows('staff') ) {
			
			 	the_row();
					$sname = get_sub_field('staff_name');
					$stitle = get_sub_field('job_title');
					$sbio = get_sub_field('staff_bio');
					$spic = get_sub_field('staff_picture'); ?>

				<div class="staff clearfix">
					<?php if( !empty($spic) ) { ?>
						<img src="<?php echo $spic; ?>" alt="<?php echo $sname; ?>">
					<?php } //endif $image; ?>
					<h3><?php echo $sname; ?></h3>
					<h4><?php echo $stitle; ?></h4>
					<p><?php echo $sbio; ?></p>
				</div>
		
			<?php } // endwhile ?>
			</div>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('education')) or (is_page('15')) ) { // ----------- Education / Contact -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="w8 left">
			<?php the_content(); ?>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('testimonials')) ) { // -----------  Testimonials  -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="dforce_schedule_fix"><p><a href="../schedule/" class="green_btn">Request an Appointment</a></p></div>
		<script type="text/javascript">
			 drn_ratings_table_width=300;
			 drn_ratings_table_border_color="#000000";
			 drn_ratings_font_size="12px";
			 drn_ratings_font_family="Helvetica, Times New Roman";
		</script>
		<script type="text/javascript"  src="http://www.dentalratingsnetwork.com/myofficeratings?id=YY5TLGth9sifpaK"></script>
		<noscript>This page uses JavaScript and requires a JavaScript enabled browser. Your browser is not JavaScript enabled.</noscript>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php  if ( (is_page('schedule')) ) { // -----------  Schedule an Appointment  -----------  ?>
		<h2><?php echo get_the_title(); ?></h2>
		<div class="w8 left">
			<?php the_content(); ?>
			<script type="text/javascript"  src="http://www.dentalratingsnetwork.com/myofficeratings/requestapptform?id=YY5TLGth9sifpaK"></script>
			<noscript>
				This page uses JavaScript and requires a JavaScript enabled browser. Your browser is not JavaScript enabled.
			</noscript>
		</div>
		<? wp_reset_query(); //Restore global post data
			} ?>

		<?php get_sidebar(); ?>    
	</div>

<?php endwhile; ?>
<?php get_footer(); ?>