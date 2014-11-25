<?php
/*
Template Name: Montage
*/
?>

<?php get_header(); ?>

	<div class="home-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">

			<article class="u-gridRow  home-content een-content">
				<div class="u-gridCol4 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/full19679039.jpg" >
				</div>
				<div class="u-gridCol8 home-content-in no-right">
					<h4>Montages</h4>
					<p>Wanneer er geen tijd is, of het werk specialisme met zich meebrengt kunt u altijd een beroep doen op de ervaring van ons bedrijf. Wij verhelpen voor u het gehele klimprobleem, en verzorgen ook het transport van de materialen van en naar de bouwplaats.Wel dient u voor een goede indicatie van de kosten tijdig contact met onze planning op te nemen, daar er eerst een werkopname ter plaatse gedaan moet worden. Deze wordt vervolgens bekeken en hiervan verkrijgt u een uitgewerkte vrijblijvende offerte met daarin kosten voor huur, transport, montage en demontage.</p>
				
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content twee-content">
				<div class="u-gridCol5 home-content-in">
					<h4>Montage & demontage</h4>
					<p>Wij verzorgen in hoofdzaak de montage en demontage van:</p>
						<ul>
							<li>Aluminium gevelsteiger</li>
							<li>Aluminium rolsteiger</li>
							<li>Aluminium hangbruggen</li>
							<li>Aluminium dakrandbeveiliging</li>
							<li>Stalen steigers en bouwliften</li>
						</ul>
				</div>
				<div class="u-gridCol7 home-content-in no-right">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/image1.jpg" >
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content drie-content">
				<div class="u-gridCol6 home-content-in">
						<h4>Dit doen wij ook!</h4>
						<p>Naast de vaak ingewikkelde stalen steigers - monteren we ook op aanvraag de systeem en rolsteigers. Uiteraard wordt hierbij de vloerhoogte zo mogelijk aangepast naar de wens van de klant - daar het hier veelal vaste maten betreft is het zeer belangrijk om bij de werkopname goed aan te geven welke werkzaamheden men met de steiger wil gaan doen.</p>
				</div>
				<div class="u-gridCol6 home-content-in no-right">
						<h4>Ook mogelijk</h4>
						<p>Uiteraard kunnen ook de systeemsteigers deels worden uitgebouwd maar nooit in die maten als dat met stalen steiger mogelijk is. We kennen onder andere bij de aluminium gevelsteiger een uitbouw met konsoles met 30 cm en bij de rol of snelbouwsteigers de uitbouwconsoles van 150 cm - veelal gebruikt voor werkzaamheden te verrichten aan een dakkappel.</p>
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content vier-content">
				<div class="u-gridCol8 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tandheugelliftt.jpg" >
				</div>
				<div class="u-gridCol4 home-content-in no-right">
					<h4>Tandheugelliften</h4>
					<p>Tandheugelliften - bouwliften zijn leverbaar in 230 volt en 380 volt. Uiteraard vanaf 8 meter vastgezet met muurverankering. Goede stroomvoorziening en goede verlengsnoer absolute noodzaak Hefvermogen 300 / 500 kg.</p>
				
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<article class="u-gridRow  home-content vijf-content"> 
				<div class="u-gridCol6 home-content-in"> 
					<h4>Snelbouwsteiger</h4>
					<p>Let wel dat de steigers tijdig bevestigd en tijdig afgemeld dienen te worden - voor elke montage ontvangt U duidelijk de voorwaarden bij de offerte welke is gespecificeerd in:</p>
					<ul>
						<li>Huurprijs per week</li>
						<li>Montage en demontage</li>
						<li>Kosten voor transport</li>
						<li>Mogelijk werk in regie</li>
					</ul>
				
				</div>
				<div class="u-gridCol6 home-content-in no-right">
					<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/snelbouwsteiger.JPG" >
				</div>
				<a href="#" class="assortiment-link-scroll assortiment-link">Maak uw afspraak</a>
			</article>

			<div class="u-gridRow home-content-form">						
						<p class="contact-page-p">Afspraak of vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
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
    
