<?php
/*
Template Name: Keuring
*/
?>

<?php get_header(); ?>

	<div class="home-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home " id="post-<?php the_ID(); ?>">
			<article class="u-gridRow  home-content u-gridContainer">
				<div class="u-gridCol4 home-content-in">
					<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/checkmark.png" >
				</div>
				<div class="u-gridCol8 home-content-in no-right">
					<h4>Keuring & Inspectie</h4>
					<p>De Ladder en steigerkoning Bv keurt reeds jaren trappen en ladders conform NEN 2484 / EN 131 maar ook systeemsteigers  en rolsteigers conform NEN 1298 / EN 1004. We verzorgen jaarlijks de keuringen op locatie of op ons bedrijf wanneer de klant dit wenst.  Sinds 2013 keuren we ook klein handgereedschap conform NEN 3140 en hebben we eveneens een vaste keurmeester voor het keuren van bouwliften- tandheugelliften – verreikers – hoogwerkers en graafmachines.</p>
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content u-gridContainer">
				<div class="u-gridCol8 home-content-in">
					<h4>Keuring klimmateriaal</h4>
					<p> Bij bezoek aan U firma voor keuring van klimmateriaal geldt:<br />
						U verkrijgt ten aller tijden een inspectierapport met daarop aangegeven de materialen welke zijn goedgekeurd – afgekeurd of ter reparatie worden aangenomen. Het artikel krijgt indien goedgekeurd een artikelnummer en wordt zo nodig door ons gegraveerd en uiteraard voorzien van een inspectie stikker. Het nummer correspondeert met het door U later verkregen certificaat (kosten 15,00 euro)</p>
				</div>
				<div class="u-gridCol4 home-content-in no-right">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ladders.jpg" >
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content u-gridContainer">
				<div class="u-gridCol4 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/handgereedschap.jpg" >
				</div>
				<div class="u-gridCol8 home-content-in no-right">
					<h4>Keuring klein handgereedschap</h4>
					<p>Naast klimmateriaal keuren we ook klein handgereedschap en kunt U ook val beveiligingsmateriaal bij de inspecteur inleveren deze worden door onze collega nagekeken en ook hiervan ontvangt U een uitgebreid keuringsrapport en indien in orde een nieuw certificaat.</p>
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content u-gridContainer">
				<div class="u-gridCol6 home-content-in">
						<h4>Advies</h4>
						<p>Wij adviseren om voor het volgende jaar een nieuwe afspraak te maken daar het vaak erg moeilijk is om alle materialen op een vooraf bepaalde datum op de zaak te hebben liggen. Veel van onze klanten geven dan ook voorkeur op het zelf maken van een vervolgafspraak circa 10 werkdagen voor daadwerkelijke inspectie.</p>

				</div>
				<div class="u-gridCol6 home-content-in no-right">
						<h4>Ook mogelijk</h4>
						<p>Uiteraard hebben we verschillende klanten welke vrijwel nooit hun materiaal op de zaak kompleet hebben daar diversen bussen ook storingsdienst draaien. Deze klanten leveren vaak de materialen bij de Steigerkoning BV af op vrijdagmiddag en halen deze zaterdagmiddag of indien mogelijk maandagochtend weer op zodat men weer een geheel jaar aan de gang kan</p>
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content u-gridContainer">
				<div class="u-gridCol6 home-content-in">
						<h4>Actie</h4>
						<p>Let op: Voor keuring en inspectie kent de Steigerkoning BV de eerste en de laatste twee maanden van het jaar een speciaal tarief van slechts 35,00 euro per uur.</p>

				</div>
				<div class="u-gridCol6 home-content-in no-right">
						<h4>Voorrijkosten</h4>
						<ul>
							<li>Regio 1 (tot 5km) 25,00 euro</li>
							<li>Regio 2 (tot 15km) 45,00 euro</li>
							<li>Regio 3 (tot 50km) 60,00 euro</li>
						</ul>
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<div class="home-content-form">						
						<p class="contact-page-p">Afspraak of vragen? Neem dan hieronder contact met ons op. </p>
						<div class="u-gridContainer">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
			</div>
				<!--<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> 
				</div>
			-->
		</article>
	<?php endwhile; endif; ?>
	</div>
 
<?php get_footer(); ?>     
    
