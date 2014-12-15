<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="home-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<div class="home-top u-gridContainer u-gridRow">
       		 	<div class="u-gridCol8 home-top-left">
       		 		<div class="home-top-title-wrapper">
       		 			<h6 class="home-top-left-title1">Directe oplossing voor uw klimproblemen</h6>
       		 			<h6 class="home-top-left-title2">Heeft u vragen ? bel ons direct 0165-561424 of mail naar info@ladderensteigerkoning.nl</h6>
        			</div>
        		</div>
        		<div class="u-gridCol4 home-top-right">
        			<ul class="home-top-ul">
        				<li><p>kundig advies</p></li>
        				<li><p>Jarenlange ervaring</p></li>
        				<li><p>Ruim assortiment</p></li>
        				<li><p>occasion en nieuw</p></li>
        			</ul>
        		</div>
        	</div>
        	<div class="u-gridContainer home-content-box">
				<div class="u-gridCol4 sidebar-winkel">
					<?php get_sidebar(); ?>
				</div>
			<article class="u-gridCol8 home-welkom-box u-gridRow">
				<fieldset class="u-gridCol12">
  					<legend>Welkom</legend>
					<p>Welkom bij de Steigerkoning! Wij leveren alles op het gebied van ladders en steigers en toebehoren. Van verkoop tot verhuur, van montage tot keuring. 
					En door onze jarenlange ervaring zeker ook voor kundig advies! Op deze website kunt u ons assortiment bekijken, en ook gelijk bestellen. Indien u een afspraak wilt maken voor een keuring of montage kunt dit ook via de website doorgeven.</p>
 				</fieldset>
 				<div class="u-gridCol12 u-gridRow">
	 				<article class="u-gridCol6 home-content-thunb thunb1">
	 					<fieldset class="">
  							<legend>Keuring</legend>
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/keuring" class="home-content-thunb-title">Meer</a>
	 				</article>
	 				<article class="u-gridCol6 home-content-thunb thunb2">
	 					<fieldset class="">
  							<legend>Montage</legend>
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/montage"class="home-content-thunb-title">Meer</a>
	 				</article>
	 			</div>
	 			<div class="u-gridCol12 u-gridRow">
	 				<article class="u-gridCol6 home-content-thunb thunb3">
	 					<fieldset class="">
  							<legend>Verhuur</legend>
 						</fieldset>
	 					<a href="/verhuur"class="home-content-thunb-title">Assortiment</a>
	 				</article>
	 				<article class="u-gridCol6 home-content-thunb thunb4">
	 					<fieldset class="">
  							<legend>Verkoop</legend>
 						</fieldset>
 						
	 				<a href="/verkoop"class="home-content-thunb-title">Assortiment</a>
	 				</article>
	 			</div>
	 			<div class="u-gridCol12 u-gridRow">
	 				<article class="u-gridCol6 home-content-thunb thunb5">
	 					<fieldset class="">
  							<legend>Projecten</legend>
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/projecten" class="home-content-thunb-title"> Meer</a>
	 				</article>
	 				<article class="u-gridCol6 home-content-thunb thunb6">
	 					<fieldset class="">
  							<legend>Handleidingen</legend>
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/handleidingen"class="home-content-thunb-title">Meer</a>
	 				</article>
	 			</div> 
	 			<div class="u-gridCol12 u-gridRow">
	 				<article class="u-gridCol6 home-content-thunb thunb7">
	 					<fieldset class="">
  							<legend>Maandactie</legend>
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/categories/1340/#Maandactie" class="home-content-thunb-title">Meer</a>
	 				</article>
	 				<article class="u-gridCol6 home-content-thunb thunb8">
	 					<fieldset class="">
  							<legend>App</legend> 
 						</fieldset>
 						<canvas class="background-thunb-title"></canvas>
	 					<a href="/app"class="home-content-thunb-title">Meer</a>
	 				</article>
	 			</div>

 				
			</article>
			</div>
			
	<!--
			<article class="u-gridRow  home-content vier-content padding-of">
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
    
