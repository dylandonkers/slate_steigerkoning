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
				<div class="u-gridCol6 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/images.jpg" >
						<a href="/keuring" class="assortiment-link">Keuring</a>
				</div>
				<div class="u-gridCol6 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/snelbouwsteiger.JPG" >
						<a href="#" class="assortiment-link">Monteren</a>
				</div>
			</article>
			<article class="u-gridRow  home-content een-content">
				<div class="u-gridCol8 home-content-in">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/modulaire_triangelbrug.jpg" >
				</div>
				<div class="u-gridCol4 home-content-in no-right">
					<h4>Gevelsteiger verhuur</h4>
					<p> hidfn ijsdijf ijdsie ivnsv civnox idvisin iv hdsv sdvs vush suhvsd painav uicvs uvvsdo iidfb ufb vsopijv sufvbs iweofibvf vihishdovhi ihs ivsdoiovbs visndvops diuvn sivns idcjnv sivfnsl sodnv sodnvjusn sodnvns sodjnv so</p>
				</div>
				<a href="/categories/1304/#Gevelsteiger" class="assortiment-link">assortiment</a>
			</article>

			<article class="u-gridRow  home-content twee-content">
				<div class="u-gridCol4 home-content-in">
					<h4>Trap Verkoop</h4>
					<p> hidfn ijsdijf ijdsie ivnsv civnox idvisin iv hdsv sdvs vush suhvsd painav uicvs uvvsdo iidfb ufb vsopijv sufvbs iweofibvf vihishdovhi ihs ivsdoiovbs visndvops diuvn sivns idcjnv sivfnsl sodnv sodnvjusn sodnvns sodjnv so</p>
					
				</div>
				<div class="u-gridCol8 home-content-in no-right">
						<img class="col-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ladders.jpg" >
				</div>
				<a href="/categories/1300/#Trappen" class="assortiment-link">assortiment</a>
			</article>

			<article class="u-gridRow  home-content drie-content">
				<div class="u-gridCol6 home-content-in">
						<iframe class="col-img" width="100%" height="300" src="//www.youtube.com/embed/ie0TNdcTYZY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="u-gridCol6 home-content-in no-right">
					<h4>Over ons</h4> 
					<p> hidfn ijsdijf ijdsie ivnsv civnox idvisin iv hdsv sdvs vush suhvsd painav uicvs uvvsdo iidfb ufb vsopijv sufvbs iweofibvf vihishdovhi ihs ivsdoiovbs visndvops diuvn sivns idcjnv sivfnsl sodnv sodnvjusn sodnvns sodjnv so</p>
				</div>
				<a href="#" class="assortiment-link">meer</a>
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
    
