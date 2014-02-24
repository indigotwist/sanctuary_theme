<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary_theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social-nav">
			<ul>
				<li class="tumblr-link">
					<a href="https://www.tumblr.com/" target="_blank">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/sanctuary_theme/img/logo-tumblr.png" alt="tumblr">
					</a>
				</li>
				<li class="twitter-link">
					<a href="https://twitter.com/" target="_blank">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/sanctuary_theme/img/logo-twitter.png" alt="twitter">
					</a>
				</li>
				<li class="pinterest-link">
					<a href="https://www.pinterest.com/" target="_blank">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/sanctuary_theme/img/logo-pinterest.png" alt="pinterest">
					</a>
				</li>
				<li class="facebook-link">
					<a href="https://www.facebook.com/" target="_blank">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/sanctuary_theme/img/logo-facebook.png" alt="facebook">
					</a>
				</li>
			</ul>
		</div>
		<div class="site-info">
			&copy; copyright <?php bloginfo('name'); ?> Eco-Retreat <?php echo date('Y'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>