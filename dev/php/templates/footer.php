<footer>	
	<div class="">
		<div class="footer-wrapper u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol8">
					<a href="#"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png" ></a>
				</div>
				<div class="u-gridCol4">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<?php endif; ?>
			</div>
		</div>
				<div class="u-gridCol4">
					<ul>
						<li><h4>Adres</h4></li>
						<li>Vijfhuizenberg 121</li>
						<li>4708 AJ Roosendaal</li>
						<li><a href="tel:08002929927">0800 2929927</a></li>
						<li><a href="mailto:info@ladderensteigerkoning.nl">info@ladderensteigerkoning.nl</a></li>
					</ul>
				</div>
				<div class="u-gridCol4">
					<ul>
						<li><h4>Openingstijden</h4></li>
						<li>Ma t/m Vr 07:30 - 17:30</li>
						<li>Za 10:00 - 16:00</li>
						<li>Zo Gesloten</li>
					</ul>
				</div>
				<div class="u-gridCol4">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			
		<div class="footer-bottom-wrapper u-gridContainer">
				<!-- Copyright info -->
					<p class="footer-bloginfo">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
							<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
					</p>
		</div>
	</div>
</footer>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/category-dropdown.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
</div>
	</body>
</html>
