<?php /* Template Name: Home Page  */ get_header(); ?>
	<section class="homeTop">
		<div class="heroContainer">


				<div id="mainPhoto" style="background-image: url(<?php the_field('hero_image'); ?>);">


					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<h1><?php echo get_field('hero_title'); ?></h1>
							</div>
						</div><!-- row -->
					<div class="row">
						<div class="col-xs-12 arrows">
							<a href="#mission"><span></span>SCROLL<br /><span class="glyphicon glyphicon-menu-down"></a>

						</div><!-- arrows -->
					</div><!-- row -->
					</div><!-- container -->
				</div><!-- mainPhoto -->

		</div><!-- heroContainer -->
	</section>
	<section  id="mission">
		<div class="contentContainer">
			<div class="container">
					<div class="row">

						<div class="col-xs-12 col-sm-5 blueBox">

							<?php if(have_posts()) : ?>
							   <?php while(have_posts()) : the_post(); ?>

									<div class="col-xs-12 hidden-sm hidden-md hidden-lg  thumbnail">
										<?php // check if the post has a Post Thumbnail assigned to it.
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}  ?>
									</div><!-- thumbnail -->
									<div class="text-side">
								 		<?php the_content(); ?>


										<div class="mission-btns">
				              <a href="#" class="btn-bordered">SCHOLARSHIP RECIPIENTS</a>
				              <a href="#" class="btn-bordered">COMMUNITY OUTREACH</a>
				              <a href="#" class="btn-bordered">YOUTH FOOTBALL CAMP</a>
				            </div>
									</div><!-- text-side -->

							   <?php endwhile; ?>

							<?php else : ?>

							<div class="alert alert-info">
							  <strong>No content in this loop</strong>
							</div>

							<?php endif; ?>

							</div><!-- text-side -->

						<div class="col-sm-7 hidden-xs img-responsive image-side">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php // check if the post has a Post Thumbnail assigned to it.
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('full', array('class' => 'img-responsive '));
							}  ?>
						</a>
						</div><!-- image-sidel -->
					</div><!-- row -->
	</div><!--container -->
</div><!-- ContentContainer -->
</section><!-- mission -->
<section id="img-btns">
	<img src="<?php echo get_template_directory_uri(); ?>/images/torn-angle.png" alt="Logo" class="torn-angle img-responsive">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
						<div class="row">
							<?php query_posts('cat=3'); ?>
							<?php query_posts('showposts=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div class="col-xs-6 homePost">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php // check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
								}  ?>
							</a>
								<!-- post title -->
							 <h2>
								 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							 </h2>
							 <!-- /post title -->
							 </div>
							 <?php $counter++;
			                   if ($counter % 2 == 0) {
			                   echo '</div><div class="row">';
			                 }
			                 endwhile; endif;  wp_reset_query(); ?>


						</div><!-- row -->

			</div><!-- row -->
		</div><!--container -->
	</section><!--img-btns -->
	


<?php get_footer(); ?>
