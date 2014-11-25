<?php
/*
Template Name: page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry u-gridRow ">
				<h4 class="button3">Hier vind u al onze handleidingen terug.</h4>
				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/opbouw_aluminium_rolsteiger.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>opbouw aluminium rolsteiger</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/instruktie_Hangbruggen_Takel.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>instruktie Hangbruggen Takel</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handlock_System_Altrex.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handlock System Altrex</p>
					</div>
				</a>

				<a  class="u-gridCol3 no-right" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handleiding_Tube-Lock_concept_2014-01.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handleiding Tube-Lock concept_2014-01</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handleiding_steigerhouten_meubels.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handleiding steigerhouten meubels</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handleiding_steigerhouten_meubelen2.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handleiding steigerhouten meubelen2</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/handleiding_materiaallift.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>handleiding materiaallift</p>
					</div>
				</a>

				<a  class="u-gridCol3 no-right" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handeleiding_dakdekkerspannelift.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handeleiding dakdekkerspannelift</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"  href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Handbrug_installatie.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Handbrug installatie</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/Checklist_steiger.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>Checklist steiger</p>
					</div>
				</a>

				<a  class="u-gridCol3" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/CCE04072014.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>CCE04072014</p>
					</div>
				</a>

				<a  class="u-gridCol3 no-right" target="_blank"   href="http://ladderensteigerkoning.lijktmeduidelijk.nl/files/2014/11/bediningsintructie_kanalenlift.pdf">
					<div class="pdf-box">	
						<img  class="pdf-box-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pdf.png" >
				 		<p>bediningsintructie_kanalenlift</p>
					</div>
				</a>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> 
			</div> <!-- content-text -->
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?> 