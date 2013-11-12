<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

  <div class="row">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info hide">
			<?php do_action( '_s_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
  </div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/site.js"></script>
</body>
</html>
