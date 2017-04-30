<?php /* Template Name: About Page  */ get_header(); ?>
<div class="darkOrangeContainer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>BUILDING TOMORROW'S LEADERS TODAY</h1>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- darkOrangeContainer -->
<section>
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-7 aboutImage " >
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php // check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('full', array('class' => 'img-responsive image-side '));
				}  ?>
			</a>

			</div>

			<div class="col-xs-12 col-sm-5">
				<?php if(have_posts()) : ?>
				   <?php while(have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('aboutText'); ?>>

						<?php the_content(); ?>


						<div class="mission-2-btns">
							<a href="#" class="btn-bordered">SCHOLARSHIP RECIPIENTS</a>
							<a href="#" class="btn-bordered">COMMUNITY OUTREACH</a>
							<a href="#" class="btn-bordered">YOUTH FOOTBALL CAMP</a>
						</div>


					</div><!-- abboutText -->

				   <?php endwhile; ?>

				<?php else : ?>

				<div class="alert alert-info">
				  <strong>No content in this loop</strong>


				</div>

				<?php endif; ?>
				<?php wp_reset_query ?>

				<p><?php  get_field('about_lower_content'); ?></p>
			</div>

		</div><!-- row -->
	</div><!-- container -->
<section>


<?php get_footer(); ?>
