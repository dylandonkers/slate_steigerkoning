<?php
/*
Template Name: Landingspage
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
 					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
 				</fieldset>
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
			</article>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
 
<?php get_footer(); ?>     
    
