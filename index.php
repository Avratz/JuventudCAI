<?php get_header(); ?>

<div class="container m-t-bar">
	<div class="row">
		<div class="col-md-8">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators sr-only">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>				<div class="carousel-inner" role="listbox">				<?php				$query = new WP_Query( array( 'category__not_in' => array(17), 'posts_per_page' => 3 ) );				$active = true;					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();				?>				<div class="carousel-item <?php if($active) {echo 'active';}?>">						<?php the_post_thumbnail('custom-size'); ?>					<div class="carousel-caption">				    	<a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>				    	<div class="hidden-xs-down"><?php html5wp_excerpt('html5wp_index', ''); ?></div>				  </div>				</div>					<?php $active = false; ?>					<?php endwhile; wp_reset_postdata(); endif; ?>				</div>				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">					<span class="icon-prev" aria-hidden="true"></span>					<span class="sr-only">Previous</span>				</a>				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">					<span class="icon-next" aria-hidden="true"></span>					<span class="sr-only">Next</span>				</a>
			</div>
			<div class="card-group p-t-1">
				<?php
				$query2 = new WP_Query( array( 'post_type' => 'post',
																			 'posts_per_page' => 2,
																			 'offset' => 3,
																			 'category__not_in' => array(17)
																		 ) );
					if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post();
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
			<div class="jumbotron jumbotron-fluid">
				<a href="http://juventudcai.com/sumate-agrupacion/">
				<div class="container zoomfx">
					<img src="<?php echo get_template_directory_uri(); ?>/img/box_sumate.jpg" alt="Sumate a la Agrupación" />
				</div>
				</a>
			</div>
			<div class="card-group p-t-1">
				<?php
				$query9 = new WP_Query( array( 'post_type' => 'post',
																			 'posts_per_page' => 2,
																			'offset' => 5,
																			 'category__not_in' => array(17)
																		 ) );
					if ( $query9->have_posts() ) : while ( $query9->have_posts() ) : $query9->the_post();
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
			<div class="row">
				<div class="col-sm-12">

				</div>
				<?php
				$query4 = new WP_Query( array( 'category_name' => 'opinion', 'posts_per_page' => 2 ) );
					if ( $query4->have_posts() ) : while ( $query4->have_posts() ) : $query4->the_post();
				?>
				<div class="col-sm-6">
						<div class="card card-inverse">
							<img class="card-img" src="<?php the_post_thumbnail_url('opinion-size'); ?>" />
							<div class="card-img-overlay">
								<h5 class="cat-opinion"><a href="<?php get_category_link();?>">OPINIÓN</a></h5>
								<a href="<?php the_permalink(); ?>">
								<h4 class="card-title"><?php the_title(); ?></h4>
								</a>
							</div>
						</div>
				</div>
			<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
			<div class="card-group p-t-1">
				<?php
				$query99 = new WP_Query( array( 'post_type' => 'post',
																			 'posts_per_page' => 2,
																			'offset' => 7,
																			 'category__not_in' => array(17)
																		 ) );
					if ( $query99->have_posts() ) : while ( $query99->have_posts() ) : $query99->the_post();
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>