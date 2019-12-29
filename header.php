<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favic.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1201787343219235',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=767472286625834";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	</head>
	<body <?php body_class(); ?>>
	  <nav class="navbar navbar-fixed-top navbar-dark bg-faded p-y-0">
	    <div class="container">
	      <div class="UpNav clearfix text-xs-center"><!--
	        <div class="media hidden-sm-down">
						<?php
						$queryhead = new WP_Query( array( 'category_name' => 'opinion', 'posts_per_page' => 1 ) );
							if ( $queryhead->have_posts() ) : while ( $queryhead->have_posts() ) : $queryhead->the_post();
						?>
	          <a class="media-left" href="<?php the_permalink();?>">
	            <img class="media-object img-circle" src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
	          </a>
	          <div class="media-body">
	            <span><h5 class="media-tag clearfix">Opinion</h5></span>
	            <h5 class="media-author clearfix"><?php the_author(); ?></h5>
	            <h5 class="media-heading"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
	          </div>
						<?php endwhile; wp_reset_postdata(); endif; ?>
	        </div>-->
				<div class="PartidosBox hidden-md-down pull-xs-left">
					<div id="carousel-partidos" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators sr-only">
										<li data-target="#carousel-partidos" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-partidos" data-slide-to="1"></li>
										<li data-target="#carousel-partidos" data-slide-to="2"></li>
									</ol>
								<div class="carousel-inner" role="listbox">
								<?php
								$queryproxpartidos = new WP_Query( array( 'post_type' => 'proxpartidos', 'posts_per_page' => 3, 'order' => 'DESC', ) );
								$active = true;
									if ( $queryproxpartidos->have_posts() ) : while ( $queryproxpartidos->have_posts() ) : $queryproxpartidos->the_post();
								?>
									<div class="carousel-item <?php if($active) {echo 'active';}?>" >
											<div class="boximgpartido">
													<h4><?php the_title(); ?></h4>
													<img src="<?php echo get_template_directory_uri(); ?>/img/escudos/<?php echo the_field('local') ?>.png" alt="<?php the_title(); ?>" width="56px" height="42px">
													VS
													<img src="<?php echo get_template_directory_uri(); ?>/img/escudos/<?php echo the_field('visitante') ?>.png" alt="<?php the_title(); ?>" width="56px" height="42px">
											</div>
									</div>
									<?php $active = false; ?>
									<?php endwhile; wp_reset_postdata(); endif; ?>
								</div>
								<a class="left carousel-control bgp" href="#carousel-partidos" role="button" data-slide="prev">
									<span class="icon-prev" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control bgp" href="#carousel-partidos" role="button" data-slide="next">
									<span class="icon-next" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
						</div>
					</div>
	        <a class="nbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo-AgrupacionJuventudCAI" /></a>					<div class="sumate hidden-sm-down pull-xs-right">	          <a href="http://juventudcai.com/sumate-agrupacion/"><button type="button" class="btn button-juv-outline btn-lg">SUMATE</button></a>	          <a href="http://socios.juventudcai.com/"><button type="button" class="btn button-juv btn-lg">SOCIOS 2.0</button></a>	        </div>
	      </div>
	      <button class="navbar-toggler hidden-sm-up clearfix" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
	        &#9776;
	      </button>
				<a class="nbar-brand-min" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo-AgrupacionJuventudCAI" /></a>
	      <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
					<?php html5blank_nav(); ?>
	      </div>
	        <ul class="social-icons m-b-0 hidden-md-down">
	          <a href="https://www.facebook.com/JuventudCAI/" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
	          <a href="https://twitter.com/JuventudCAIOK" target="_blank"><li><i class="fa fa-twitter" aria-hidden="true"></i></li></a>
	          <a href="https://www.instagram.com/juventudcai/" target="_blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
	          <a href="https://www.youtube.com/channel/UCEwHgIcmVkRnHX6-594tvQg" target="_blank"><li><i class="fa fa-youtube" aria-hidden="true"></i></li></a>
	          <a href="https://es.pinterest.com/JuventudCAI/" target="_blank"><li><i class="fa fa-pinterest" aria-hidden="true"></i></li></a>
	        </ul>
	    </div>
	  </nav>