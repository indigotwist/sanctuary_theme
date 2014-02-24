<?php
/**
* Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div class="text-block text-block-1">
	<p class="image-header image-header-1"><?php the_field('image_description_header_1'); ?></p>
	<p class="image-description image-description-1"><?php the_field('image_description_1'); ?></p>
</div>

<div class="text-block text-block-2">
	<p class="image-header image-header-2"><?php the_field('image_description_header_2'); ?></p>
	<p class="image-description image-description-2"><?php the_field('image_description_2'); ?></p>
</div>

<div class="text-block text-block-3">
	<p class="image-header image-header-3"><?php the_field('image_description_header_3'); ?></p>
	<p class="image-description image-description-3"><?php the_field('image_description_3'); ?></p>
</div>

<div class="text-block text-block-4">
	<p class="image-header image-header-4"><?php the_field('image_description_header_4'); ?></p>
	<p class="image-description image-description-4"><?php the_field('image_description_4'); ?></p>
</div>

<div class="text-block text-block-5">
	<p class="image-header image-header-5"><?php the_field('image_description_header_5'); ?></p>
	<p class="image-description image-description-5"><?php the_field('image_description_5'); ?></p>
</div>

<?php get_footer(); ?>