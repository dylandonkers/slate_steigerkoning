<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2 class="button3"><?php the_title(); ?></h2>
				<div class="Content-text">
				<aside class="u-gridCol4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone6.png" class="App-iphone" />
				</aside>
					<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
						<?php // the_content(); ?>
						Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in de Google Play store voor Android apparaten. 
						<a href="#"><img class="image-google"src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" /></a>
						Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 
							<img class="image-qr"src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder_qr_code.jpg" />
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</article> 

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
