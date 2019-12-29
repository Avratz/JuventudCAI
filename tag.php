<?php get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-sm-8">

			<h1><?php _e( 'Tag: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
