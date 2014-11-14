<?php
/*
Template Name: Page w/ sidebar on left
*/
?>

<?php get_header(); ?>
	<div class="threecolumns-wrapper u-gridContainer">
		<div class="u-gridCol3">
		<?php get_sidebar(); ?>
		</div>
		<div class="u-gridCol9">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">

				<?php dynamic_sidebar('Filter area'); ?>
				<h2><?php the_title(); ?></h2>
				<div id="filter_search_results"></div>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
