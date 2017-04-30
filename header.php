<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <header>
        <div class="blueContainer">
    			<div class="container">
    				<div class="row">
    					<div class="col-xs-6 donateArea">
    						<a href="<?php echo home_url(); ?>/#"><span class="btn btn-info donateButton">DONATE TODAY!</span></a>
    					</div><!-- donateArea -->
    						<div class="col-xs-6 socialIcons">

    								<a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook"></span></a>
    								<a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter"></span></a>
    								<a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube"></span></a>
    								<a href="<?php echo home_url(); ?>/#"><span class="btn btn-info socialButton"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram"></span></a>

    						</div><!-- socialIcons -->

    				</div><!-- row -->
    			</div><!-- container-->
    		</div><!-- blueContainer-->
        <div class="orangeContainer">
    				<div class="container">
    						<!-- logo -->
    						<div class="row">

    								<div class="col-xs-5 logo">
    									<a href="<?php echo home_url(); ?>">

    										<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="Logo" class="logo-img">
    									</a>
    								</div><!-- /logo -->

    								<!-- nav -->
                    <nav class="col-xs-7 navbar navbar-default" role="navigation">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse">
                       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                      </div><!-- /.navbar-collapse -->
                    </nav>
    							 </div><!-- row -->
    					 </div><!-- container -->
    				 </div><!-- orangeContainer -->
           </header>

    <div id="main-container" >
