	<?php //get_template_part('searchform'); ?>
		<div class="col-md-4">
			<div class="TwitterFeed m-b-1">				<h2 class="watouch">Twitter</h2>
				<a class="twitter-timeline" data-lang="es" data-height="300" data-link-color="#d80c25" href="https://twitter.com/JuventudCAIOK" data-tweet-limit="1"  data-chrome="nofooter noborders noheader">Tweets by JuventudCAIOK</a>
			</div>
<!--
			<div class="ProximaFecha m-b-1">
				<h2>Último partido</h2>
				<?php
				$querylg = new WP_Query( array( 'post_type' => 'ultimo_partido', 'posts_per_page' => 1 ) );
					if ( $querylg->have_posts() ) : while ( $querylg->have_posts() ) : $querylg->the_post(); ?>
					<img src="<?php the_field('back') ?>" alt="<?php the_title(); ?>">
					<?php endwhile; wp_reset_postdata(); endif; ?>

			</div> -->
		<!--	<div class="TablaPosiciones m-b-1">
				<?php //echo do_shortcode('[mstw_team_schedule team=50 league=afa2016 season=2016]'); ?>
			</div> -->
			<div id="instafeed" class="m-b-1">
                        <h2 class="watouch">Instagram</h2>

			</div>
			<div class="UltimoGol m-b-1">

			</div>
			<div class="FacebookFeed m-b-1">
			<div class="fb-page" data-href="https://www.facebook.com/JuventudCAI/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/JuventudCAI/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JuventudCAI/">Agrupacion Juventud Independiente</a></blockquote></div>
			</div>
		</div>
	</div>
</div>
		<?php //if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>