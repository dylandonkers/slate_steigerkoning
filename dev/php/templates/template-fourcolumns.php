<?php
/*
Template Name: fourcolumns
*/
?>

<?php get_header(); ?>

	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column-top 4columns-top u-gridCol3">
						 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top2.jpg" >
						<a class="button1" href="/categories/1315#Verkoop">Verkoop</a>
					</article>
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top3.jpg" >
						<a class="button1" href="/categories/1295#Verhuur">Verhuur</a>
					</article>
					<div class="u-gridCol6 4columns-top column-top">
						<iframe width="100%" height="300" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
					</div>

<!--
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="/categories/1319#Keuringen">Keuringen</a>
					</article>
					<article class="column-top 4columns-top u-gridCol3">
							 <img class="columns-top-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top1.jpg" >
						<a class="button1" href="#">Montages</a>
					</article>
-->
			</article>
		<?php endwhile; endif; ?> 
	</div>
<!--	<div class="threecolumns-wrapper u-gridContainer">
		<iframe class="video" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
	</div>
-->
	<div class="threecolumns-wrapper u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Projecten</a>
						<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">De Steigerkoning BV maakt ook steigermeubels op maat.</p>
						<a class="button1" href="/projecten">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Maandactie</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">Bekijk onze maandactie!</p>
						<a class="button1" href="/categories/1340#Maandactie">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="#">Occasion</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">Wij hebben diverse hoogwerker occasions. Bekijk het aanbod</p>
						<a class="button1" href="/categories/1341#Occasions hoogwerkers">Lees meer ></a>
					</article>
					<article class="column-bottom u-gridCol3">
						<a class="button2" href="/handleidingen">Handleidingen</a>
							<img class="columns-bottom-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bottom1.jpg" >
						<p class="columns-bottom-text">U kunt hier al onze handleidingen over steigers vinden, zodat u er te allen tijden uit kunt komen met uw steiger.</p>
						<a class="button1" href="#">Lees meer ></a>
					</article>
			</article>
		<?php endwhile; endif; ?> 
	</div>
<?php get_footer(); ?>
