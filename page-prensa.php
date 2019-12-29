<?php
/* Template Name: Prensa */
get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-sm-8">

			<h1>PRENSA</h1>

			<br>

			<?php
			$pquery4 = new WP_Query( array(
				'category_name' => 'prensa',
				'posts_per_page' => 1 ) );
				if ( $pquery4->have_posts() ) : while ( $pquery4->have_posts() ) : $pquery4->the_post();
			?>
			<div class="col-sm-12">
				<?php the_post_thumbnail('Slider'); ?>
				<div class="card-block">
					<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
					<?php html5wp_excerpt('html5wp_index', ''); ?>
					<p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small></p>
				</div>
			</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>


					<?php
						$paged = (get_query_var('page')) ? get_query_var('page') : 1;

					$query9 = new WP_Query( array( 'post_type' => 'post',
																				 'posts_per_page' => 10,
																			   'offset' => 1,
																				 'category_name' => 'prensa',
																				  'orderby' => 'date',
																				 	'order' => 'DESC',
																				 'paged' => $paged
																			 ) );
						$row = 0;
						if ( $query9->have_posts() ) : while ( $query9->have_posts() ) : $query9->the_post();
						if ($row == 0) {
								echo '<div class="row">';
								echo '<div class="card-group p-t-1">';
						}

					?>
						<div class="col-lg-6">
							<div class="card">
								<?php the_post_thumbnail('custom-size'); ?>
								<div class="card-block">
									<a href="<?php the_permalink();?>"><h4><?php the_title(); ?></h4></a>
									<?php html5wp_excerpt('html5wp_index', ''); ?>
									<p class="card-text"><small class="text-muted"><?php the_time('F j, Y'); ?></small></p>
								</div>
							</div>
						</div>
					<?php
					if ($row == 1) {
						echo '</div>';
						echo '</div>';
						$row = 0;
					} else {
						$row++;
					}

				endwhile; wp_reset_postdata(); endif; wp_reset_query();
				if ($row == 1) {
					echo '</div>';
					echo '</div>';
					$row = 0;
				}
				?>

				<div class="mas pag">
				<?php next_posts_link('<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>', $query9->max_num_pages) ?>
				</div>
				<div class="menos pag">
				<?php previous_posts_link('<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>') ?>
				</div>
	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
