<?php
/* Template Name: Novedades */
get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-sm-8">

			<h1>ÚLTIMAS NOVEDADES</h1>

			<br>
<?php
			query_posts('showposts=10');
			get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
