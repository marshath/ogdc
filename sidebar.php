<?php  if ( (is_page('5')) ) { // -----------  Services  ----------- ?>
	<div class="sidebar" role="complementary">
		<div class="callout">
			<div class="tooth"></div>
			<h4>Learn More About Us</h4>
			<div class="dots"></div>
			<ul class="team clearfix">
				<li><a href="<?php echo get_option('home'); ?>/team/"><img src="<?php echo get_option('home'); ?>/images/team-kevin-sm.jpg" width="50" height="50" alt="Kevin H Speer, DDS" /><p>Kevin H. Speer, D.D.S.</p></a></li>
				<li><a href="<?php echo get_option('home'); ?>/team/#our-team"><img src="<?php echo get_option('home'); ?>/images/team-home-sm.jpg" width="50" height="50" alt="Our Team" /><p>Our Amazing Team</p></a></li>
		</div>
	</div>
						
<? } ?>

<?php  if ( (is_page('15')) ) { // -----------  Contact  ----------- ?>
	<div class="sidebar" role="complementary">
		<div class="callout">
			<div class="star"></div>
			<h4>Ready to Get Started?</h4>
			<div class="dots"></div>
			<p><center>Click below to request an appointment today!</center></p>
			<ul class="appointment">
				<li><a href="<?php echo get_option('home'); ?>/schedule/"><img src="http://ogdental.com/images/icon-cal.png" alt="Calendar" /><p>Request an Appointment</p></a></li>
			</ul>
		</div>
	</div>
<? } ?>

<?php  if ( (is_page('19')) ) { // -----------  Schedule an Appointment  ----------- ?>
	<div class="sidebar" role="complementary">
		<div class="callout">
			<div class="q-mark"></div>
			<h4>New Patient Forms</h4>
			<div class="dots"></div>
			<p><center>Save time by completing the forms below and bringing them to your appointment. We look forward to meeting you!</center></p>
			<ul class="pdf clearfix">
				<li><a href="<?php $meta_one = get_post_meta($post->ID, 'hippa_consent_form', true); $meta_url = wp_get_attachment_url( $meta_one ); echo $meta_url; ?>"><img src="http://ogdental.com/images/icon-pdf.png" alt="PDF" /><p>HIPPA Consent Form</p></a></li>
				<li><a href="<?php $meta_two = get_post_meta($post->ID, 'patient_history_form', true); $meta_url = wp_get_attachment_url( $meta_two ); echo $meta_url; ?>"><img src="http://ogdental.com/images/icon-pdf.png" alt="PDF" /><p>Patient History Form</p></a></li>
				<li><a href="<?php $meta_three = get_post_meta($post->ID, 'financial_policy', true); $meta_url = wp_get_attachment_url( $meta_three ); echo $meta_url; ?>"><img src="http://ogdental.com/images/icon-pdf.png" alt="PDF" /><p>Financial Policy</p></a></li>
				<li><a href="<?php $meta_four = get_post_meta($post->ID, 'cancellation_policy', true); $meta_url = wp_get_attachment_url( $meta_four ); echo $meta_url; ?>"><img src="http://ogdental.com/images/icon-pdf.png" alt="PDF" /><p>Cancellation Policy</p></a></li>
				<li><a href="<?php $meta_five = get_post_meta($post->ID, 'privacy_policy', true); $meta_url = wp_get_attachment_url( $meta_five ); echo $meta_url; ?>"><img src="http://ogdental.com/images/icon-pdf.png" alt="PDF" /><p>Privacy Policy</p></a></li>
			<ul></p>
		</div>
	</div>
<? } ?>