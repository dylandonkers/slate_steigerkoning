<footer>	
	<div class="footer-wrapper " >
		<div class="u-gridContainer">
					<a href="#"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" ></a>
			<div class="u-gridRow">
				<div class="u-gridCol4">
					<ul>
						<li><h4>Adres</h4></li>
						<li>Vijfhuizenberg 121</li>
						<li>4708 AJ Roosendaal</li>
						<li><a href="tel:0165-561424">0165-561424</a></li>
						<li><a href="mailto:info@ladderensteigerkoning.nl">info@ladderensteigerkoning.nl</a></li>
						<li>KvK: 20074322</li>
						<li>Btw nr.: 8100 10975 B01</li>
						<li><a  class="u-gridCol3 footer-link" target="_blank"   href="/files/2014/11/Algemene_Voorwaarden.pdf">Algemene voorwaarden</a></li>
						<li><a  class="u-gridCol3 footer-link" target="_blank"   href="/voorwaarden-schadeafkoop-en-branddiefstalregeling/">Voorwaarden schadeafkoop en brand/diefstal regeling</a></li>
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
						<ul class="footer-r">
							<li><a href="/projecten" >Projecten</a></li>
							<li><a href="/handleidingen">Handleidingen</a></li>
							<li><a href="/categories/1340/#Maandactie">Maandactie</a></li>
							<li><a href="/app">App</a></li>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>	
	<div class="footer-bottom-wrapper ">
		<div class="u-gridContainer">
		<!-- Copyright info -->
		<p class="footer-bloginfo">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
				<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
		</p>
	</div>
	</div>
</footer>


  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/producten-nav.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shoppingcart.js"></script>
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
