<?php get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-sm-8">

			<h1><?php _e( 'Categoria: ', 'html5blank' ); single_cat_title(); ?></h1>
			<br>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
