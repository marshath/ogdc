	<div class="btm_container clearfix">
		<footer>
			<section class="office_info" itemscope itemtype="http://schema.org/Dentist">
				<h3 class="logo" itemprop="name"><a href="<?php echo get_option('home'); ?>/" class="home" title="Home">Oak Grove Dental Center</a></h3>
				<div class="office_info">
					<p><b class="dentist_name" itemprop="founder">Kevin H. Speer, D.D.S.</b><br />
						General Dentist</p>
					<p><span class="small-caps">Hours</span>: 8am&ndash;5pm M&ndash;Th<br />
						<span class="small-caps">Phone</span>: <span class="phone" itemprop="telephone">(503) 654.9521</span></p>
					<p itemprop="address">2250 SE Oak Grove Blvd. Ste A<br />
						Oak Grove, OR 97267</p>
				</div>
			</section>
			<section class="location">
				<h4>Location</h4>
				<div class="map">
					<img name="Map" src="<?php echo get_option('home'); ?>/images/map.png" alt="Map" />
					<div class="map_btns">
						<ul>
							<li><a href="http://maps.google.com/maps?q=2250+SE+Oak+Grove+Blvd+97267&ll=45.416648,-122.640424&spn=0.009519,0.014784&client=safari&oe=UTF-8&hnear=2250+SE+Oak+Grove+Blvd,+Oak+Grove,+Clackamas,+Oregon+97267&gl=us&t=h&z=16&iwloc=A" target="_blank" class="enlarge">+ Enlarge</a></li>
							<li><a href="http://maps.google.com/maps?q=&layer=c&cbll=45.416648,-122.640424&cbp=11,0,0,0,0" target="_blank" class="street">+ Street View</a></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="btm_navigation">
				<h4>Navigation</h4>
				<nav class="secondary">
					<ul>
						<?php wp_list_pages('sort_column=menu_order&depth=1&&title_li=');?>
					</ul>
				</nav>
			</section>
			<section class="social_btns">
				<h4>Follow us on...</h4>
				<nav class="social">
					<ul>
						<li class="facebook"><a href="http://www.facebook.com/OakGroveDentalCenter" target="_blank"><span class="social_padding">Facebook</span></a></li>
						<li class="twitter"><a href="https://twitter.com/#!/OakGroveDental" target="_blank"><span class="social_padding">Twitter</span></a></li>
						<li class="google"><a href="https://plus.google.com/u/0/100563055298393583214" target="_blank"><span class="social_padding">Google+</span></a></li>
					</ul>
				</nav>
			</section>
			<div class="copyright">
				<p>&copy; <? echo date("Y"); ?> Kevin H Speer, PC. All Rights Reserved.</p>
				<p class="mm">Site by <a href="http://www.33degreesds.com" target="_blank">33 Degrees Design Studio</a></p>
			</div>
		</footer>
	</div>
	<?php //------------ Footer Area for Javascript ------------- ?>
		<?php //---- jQuery ---- ?>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
		<?php //---- Flexslider ---- ?>
		  <script defer src="<?php echo esc_url( home_url( '/' ) ); ?>js/flexslider/jquery.flexslider.js"></script>
		<?php if ( is_page(2) ) { // Flexslider settings on Homepage
			echo "<script type=\"text/javascript\">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: \"slide\",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>";
	    	} else { 
	    	echo '';
		} ?>
		<?php if ( is_page(9) ) { // Flexslider settings on Virtual Tour
			echo "<script type=\"text/javascript\">
			    $(function(){
			      SyntaxHighlighter.all();
			    });
			    $(window).load(function(){
			      $('.flexslider').flexslider({
			        animation: \"slide\",
			        controlNav: \"thumbnails\",
			        start: function(slider){
			          $('body').removeClass('loading');
			        }
			      });
			    });
			  </script>";
	    	} else { 
	    	echo '';
		} ?>
		  
		<?php //---- Google Analytics ---- ?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-27878987-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<?php wp_footer(); ?>
</body>
</html>