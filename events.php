<?php /* Template Name: Events Page  */ get_header(); ?>

<div class="container">
		<div class="row">

			<div class="col-md-8">
				<?php
				$args = array( 'numberposts' => 3 );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>

					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php // check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('full', array('class' => 'img-responsive image-side '));
					}  ?>
				</a>
				 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				<?php endforeach; ?>

			</div>

			<div class="col-md-4">


			</div>

		</div><!--- row -->
		<div class="row">
			<div class="col-xs-12">
				<?php echo do_shortcode('[[ecwd id="130"]'); ?>
			</div>
		</div><!-- row -->
</div><!-- container -->


<?php get_footer(); ?>
