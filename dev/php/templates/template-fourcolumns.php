<?php
/*
Template Name: fourolumns
*/
?>

<?php get_header(); ?>

	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column-top 4columns-top u-gridCol3">
						 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="#">Verkoop</a>
					</article>
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="#">Verhuur</a>
					</article>
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="#">Keuring</a>
					</article>
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="#">Montages</a>
					</article>
			</article>
		<?php endwhile; endif; ?> 
	</div>
	<div class="threecolumns-wrapper u-gridContainer">
		<iframe class="video" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Projecten</a>
						<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">De steigerkoning BV kan indien U dit wenst een steigermeubel op maat maken.</p>
						<a class="button1" href="#">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Maandactie</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text"><?php the_content(); ?></p>
						<a class="button1" href="#">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Occasion</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">Occasion hoogwerkers</p>
						<a class="button1" href="#">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Handleidingen</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">U kunt hier al onze handleidingen over steigers vinden. zodat u er ten alle tijden uit kunt komen met uw steiger</p>
						<a class="button1" href="#">Lees meer ></a>
					</article>
			</article>
		<?php endwhile; endif; ?> 
	</div>
<?php get_footer(); ?>
