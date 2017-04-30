<footer>
  <section id="donate">
    <div class="container">
			<div class="row">
      <div class="col-xs-12">
				<h2><?php  get_field('test', 'options'); ?></h2>
	      <a href="#" class="btn-main">DONATE</a>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- donate -->
	<section id="sponsors">



        <div class="container">
          <h2>THANK YOU TO OUR SPONSORS</h2>
					<div class="row">
				    <div class="col-md-12">
				      <div class="carousel slide multi-item-carousel" id="theCarousel">
				        <div class="carousel-inner">
				          <div class="item active">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
				          </div>
				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
				          </div>
				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
				          </div>
				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
				          </div>
				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
				          </div>
				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
				          </div>
				          <!-- add  more items here -->
				          <!-- Example item start:  -->

				          <div class="item">
				            <div class="col-xs-3"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
				          </div>

				          <!--  Example item end -->
				        </div>
				        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
				      </div>
				    </div>
				  </div><!-- row -->
          <a href="#" class="btn-alt">Become a Sponsor</a>
        </div>
  </section><!-- sponsors -->

      <div class="lowerFooterContainer">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-xs-12 col-sm-3 footerLogo">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="Logo" class="logo-img">
                </div>
                <div class="col-xs-12 col-sm-9">
                <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>

                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="stay-connected">
                <h5>STAY CONNECTED</h5>
                <div class="footerSocial">
                  <a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook"></span></a>
                  <a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter"></span></a>
                  <a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube"></span></a>
                  <a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram"></span></a>
                </div>
              </div><!-- stay-connected -->
            </div>
          </div><!-- row -->
        </div><!-- container-->


      <div class="container">
        <div class="row">
          <div class="col-xs-12 bottomFooter">
            <p class="copyright" style="font-size:16px;">&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

				  <p class="childressLink" style="font-size:14px; padding-top:0;">created by <a href="https://childressagency.com/">The Childress Agency</a></p>
          </div>
        </div><!-- row -->
      </div><!-- container -->
      </div><!-- lowerFooterContainer -->
</footer>

</div> <!-- close main container -->
</body>

<script type="text/javascript" src="http://localhost/vandr-2/wp-content/themes/blank-bootstrap-gulp-sass-wp-theme-master/js/script.js"></script>
</html>
