<?php
/* Template Name: comision */
get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-sm-12">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; endif; ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
