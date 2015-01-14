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
        			<iframe class="video-home"width="560" height="315" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
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
						<img class="actie-maand" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ACTIE.gif" >
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
	
		</article>
	<?php endwhile; endif; ?>
	</div>
 
<?php get_footer(); ?>     
    
