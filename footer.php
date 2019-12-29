<div class="container m-t-bar-r ">
      <div class="row pre-finale">
        <div class="col-md-4 logo-col">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo-AgrupacionJuventudCAI" />
          <p><b>Juventud Independiente</b> es una agrupación política que alcanzo su auge cuando a fines de 1999 llevó a Pedro Iso a la presidencia.</p>
        </div>
        <div class="col-md-4 ulpf">
          <h2 class="p-b-1">Ultimos posts</h2>
					<?php
					$querylp2 = new WP_Query( array( 'post_type' => 'post',
																				 'posts_per_page' => 3,
																				 'category__not_in' => array(17)
																			 ) );
						if ( $querylp2->have_posts() ) : while ( $querylp2->have_posts() ) : $querylp2->the_post();
					?>
          <div class="last-postw clearfix">
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a class="postw-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(100,100)); // Declare pixel size you need inside the array ?>
						</a>
							<?php endif; ?>
            </a>
            <div class="postw-body">
							<h5 class="postw-tag clearfix"><?php the_category( ' ' ); ?></h5>
							<a href="<?php the_permalink();?>"><h5 class="postw-heading">
									<?php lim_tit("...", 18); ?>
							</h5></a>
              <p class="card-text"><small class="text-mutedw"><?php the_time('F j, Y'); ?></small></p>
            </div>
          </div>
					<?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
        <div class="col-md-4">

					<h2>¡Seguinos en las redes sociales!</h2>
					<div class="social">
					  <div class="facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
					    <a href="https://www.facebook.com/JuventudCAI/">
					      <span><b><span><?php echo get_scp_counter( 'facebook' ); ?></span></b> Fans en Facebook</span>
					    </a>
					   </div>

					  <div class="twitter">
							<i class="fa fa-twitter" aria-hidden="true"></i>
					    <a href="https://twitter.com/JuventudCAIOK">
					      <span><b><span><?php echo get_scp_counter( 'twitter' ); ?></span></b> Seguidores en Twitter</span>
					    </a>
					  </div>

					  <div class="instagram">
							<i class="fa fa-instagram" aria-hidden="true"></i>
					    <a href="https://www.instagram.com/juventudcai/">
					      <span><b><span>9208</span></b> Seguidores en Instagram</span>
					    </a>
					  </div>
					</div>
        </div>
      </div>
      <footer class="row">
          <div class="col-sm-9">
            <div class="sede">
              <ul>
			          <li><strong>Sede Social · Avellaneda:</strong></li>
              	<li class="direccion"><i class="fa fa-map-marker" aria-hidden="true"></i>Av. Mitre 470 (1870).</li>
			          <li class="telefono"><i class="fa fa-phone" aria-hidden="true"></i>4229-7600</li>
                <li class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:avellaneda@clubaindependiente.com">avellaneda@clubaindependiente.com</a></li>
              </ul>
            </div>
            <div class="sede">
                <ul>
  	              <li><strong>Sede Boyacá · Capital:</strong></li>
            	    <li class="direccion"><i class="fa fa-map-marker" aria-hidden="true"></i>Boyacá 470. </li>
  	              <li class="telefono"><i class="fa fa-phone" aria-hidden="true"></i>4633-7527</li>
                  <li class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:boyaca@clubaindependiente.com">boyaca@clubaindependiente.com</a></li>
                </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="datos text-xs-center">Agrupación Juventud Independiente - 2016</div>
          </div>
        </footer>
    </div>
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/elasticBar.js"></script>
    <script type="text/javascript">
        var feed = new Instafeed({
             get: 'user', useHttp: true,
    limit: 6,
    resolution: 'thumbnail',
          userId: '2134216978',
  	clientId: 'c07937921a3a49e2bed3191fdbfe33fa',
	  accessToken: '2134216978.c079379.05146ecd359b4fcb85f62bcbab156cb1'
        });
        feed.run();
    </script>
    <!-- Google Analytics -->
  </body>
</html>