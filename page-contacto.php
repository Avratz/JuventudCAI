<?php
/* Template Name: Contacto */

get_header(); ?>

<div class="container m-t-bar">
	<div class="row contact2-background">
<div class="col-sm-3"></div>
		<div class="col-sm-6 p-x-0 text-xs-center 6b-color">

		<h1 class="text-xs-center p-y-1 dashed"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
		</div>


			<?php endwhile; endif; ?>

	</div>
</div>

<?php get_footer(); ?>