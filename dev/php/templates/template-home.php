<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="home-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<article class="u-gridRow  home-content vier-content padding-of">
				<div>
					<h4>Welkom</h4>
					<p>Welkom bij de Steigerkoning! Wij leveren alles op het gebied van ladders en steigers en toebehoren. Van verkoop tot verhuur, van montage tot keuring. 
					   En door onze jarenlange ervaring zeker ook voor kundig advies!</p>
					<p>Op deze website kunt u ons assortiment bekijken, en ook gelijk bestellen. Indien u een afspraak wilt maken voor een keuring of montage kunt dit ook via de website doorgeven.</p>
				</div>
				<div class="u-gridCol6 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/images.jpg" >
						<a href="/keuring" class="assortiment-link">Keuring</a>
				</div>
				<div class="u-gridCol6 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/snelbouwsteiger.JPG" >
						<a href="/monteren" class="assortiment-link">Monteren</a>
				</div>
			</article>
			<article class="u-gridRow  home-content een-content">
				<div class="u-gridCol8 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/modulaire_triangelbrug.jpg" >
				</div>
				<div class="u-gridCol4 home-content-in no-right">
					<h4>Verhuur</h4>
					<p>
						Wij verhuren op dit gebied zo ongeveer alles, en staan u graag te woord voor kundig advies. Bekijk ons <a href="/verhuur" >huur assortiment</a>.
					</p>
				</div>
				<a href="/verhuur" class="assortiment-link">assortiment</a>
			</article>

			<article class="u-gridRow  home-content twee-content">
				<div class="u-gridCol4 home-content-in">
					<h4>Verkoop</h4>
					<p>Bij de Steigerkoning verkopen wij alles op het gebied van ladders, trappen en alles wat er bij komt kijken. 
					   Zo bent u bij ons ook aan het juiste adres voor diverse Persoonlijk Beschermings Materiaal, of schilderbenodigdheden.</p>
					
				</div>
				<div class="u-gridCol8 home-content-in no-right">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ladders.jpg" >
				</div>
				<a href="/verkoop" class="assortiment-link">assortiment</a>
			</article>

			<article class="u-gridRow  home-content drie-content">
				<div class="u-gridCol6 home-content-in">
						<iframe class="col-img" width="100%" height="300" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="u-gridCol6 home-content-in no-right">
					<h4>Over ons</h4> 
					<p>
						De Steigerkoning BV is opgericht in 1975, een bedrijf dat wordt gerund door de familie Arnst. Wij leveren zo'n beetje alles; van keukentrapje tot zelfrijdende
						hoogwerkers, zowel verkoop als verhuur. Tevens bent u voor keuringen, montage, of gewoon kundig advies bij ons aan het juiste adres.

					</p>
				</div>
				<a href="/verkoop" class="assortiment-link">meer</a>
			</article>

			<article class="u-gridRow  home-content home-content-change vijf-content">
					<div class="u-gridCol3 home-content-in">
							<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/steigertafel_02.jpg" >
							<a href="#" class="assortiment-link">projecten</a>
					</div>
					<div class="u-gridCol3 home-content-in">
							<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/genie-z-45-hoogwerker.png" >
							<a href="#" class="assortiment-link">occasion</a>
					</div>
					<div class="u-gridCol3 home-content-in">
							<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/download.jpg" >
							<a href="#" class="assortiment-link">maandactie</a>
					</div>
					<div class="u-gridCol3 home-content-in">
							<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/handleiding.JPG" >
							<a href="/handleidingen" class="assortiment-link">handleidingen</a>
					</div>
				</article>
				<!--<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> 
				</div>
			-->
		</article>
	<?php endwhile; endif; ?>
	</div>
 
<?php get_footer(); ?>     
    
