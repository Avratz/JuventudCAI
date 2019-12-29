<?php get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-md-8">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="p-y-1">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->
			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas #
			$categoria = the_category_ID(FALSE);
			?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php //comments_template(); ?>

		</article>
		<!-- /article -->
		<?php
	if ( is_single() ) {
		 $cat = the_category_ID(FALSE);
		 $post = get_the_ID();
		 $args = array(
			'cat'=>$cat,
			'showposts' => 2,
			'post__not_in' => array($post)
	);
}
	?>
	<?php endwhile; else: endif; ?>

	<H2>Post Relacionados</h2>
	<div class="card-group p-t-1">
		<?php
		$queryrelated = new WP_Query($args);
			if ( $queryrelated->have_posts() ) : while ( $queryrelated->have_posts() ) : $queryrelated->the_post();
		?>
		<div class="card">
			<a href="<?php the_permalink();?>">
					<div class="zoomfxwi">
					<?php the_post_thumbnail('custom-size'); ?>
					</div>
					</a>
			<div class="card-block">
				<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
				<?php html5wp_excerpt('html5wp_index', ''); ?>
				<p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small></p>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
	<div class="card-group p-t-1">
<?php
	if ( is_single() ) {
		 $cat = the_category_ID(FALSE);
		 $post = get_the_ID();
		 $args = array(
			'cat'=>$cat,
			'showposts' => 2,
			'offset' => 2,
			'post__not_in' => array($post)
	);
}
	?>
		<?php

		$queryrelated2 = new WP_Query($args);
			if ( $queryrelated2->have_posts() ) : while ( $queryrelated2->have_posts() ) : $queryrelated2->the_post();
		?>
		<div class="card">
			<a href="<?php the_permalink();?>">
					<div class="zoomfxwi">
					<?php the_post_thumbnail('custom-size'); ?>
					</div>
					</a>
			<div class="card-block">
				<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
				<?php html5wp_excerpt('html5wp_index', ''); ?>
				<p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small></p>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
</div>


<?php get_sidebar('single'); ?>

<?php get_footer(); ?>
