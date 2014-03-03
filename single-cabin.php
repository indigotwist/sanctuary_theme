<?php
/*
 Template Name: Cabins Post Type
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="cabin-images">
				<?php $featured_img = get_field('featured_cabin_image'); ?>
				<img class="featured-image" src="<?php echo $featured_img['url']; ?>" alt="<?php echo $featured_img['alt']; ?>">

				<?php if( have_rows('cabin_thumbnails') ): ?>
					<div class="cabin-thumbnails">
						<?php while( have_rows('cabin_thumbnails') ): the_row();
							// vars
							$image = get_sub_field('image');
							$link = get_sub_field('link');
							?>

							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>

							<img class="thumbnail-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div><!-- #cabin-images -->

			<div class="cabin-text">
				<h2 class="post-title"><?php the_title(); ?></h2>

				<p class="post-description"><?php the_field('description'); ?></p>

				<?php if( have_rows('art_making_features') ): ?>
					<div class="art-features">
						<h3 class="features-heading">Art making features:</h3>

						<ul class="features-list">
							<?php while( have_rows('art_making_features') ): the_row();
								// vars
								$feature = get_sub_field('art_features');
								?>

								<li><?php echo $feature; ?></li>
							<?php endwhile; ?>
						</ul>
					</div><!-- #art-features -->
				<?php endif; ?>

				<?php if( have_rows('standard_features') ): ?>
					<div class="standard-features">
						<h3 class="features-heading">Standard cabin features include:</h3>

						<ul class="features-list">
							<?php while( have_rows('standard_features') ): the_row();
								// vars
								$feature = get_sub_field('features');
								?>

								<li><?php echo $feature; ?></li>
							<?php endwhile; ?>
						</ul>
					</div><!-- #standard-features -->
				<?php endif; ?>

				<div class="pricing">
					<p>Once accepted <a href="#">(application process):</a></p>
					<p><span>&#36;<?php the_field('price_without_meal_plan'); ?></span> per night without <a href="#">meal plan</a></p>
					<p><span>&#36;<?php the_field('price_with_meal_plan'); ?></span> per night with meal plan</p>
				</div>

				<button class="availability">check availability</button>
			</div><!-- #cabin-text -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
