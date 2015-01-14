<?php
/*
Template Name: checkout
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
				<h2 class="title-Af"><?php the_title(); ?></h2>
				<div class="Content-text">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div> <!-- content-text -->
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?> 