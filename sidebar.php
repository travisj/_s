<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _s
 */
?>
	<div id="secondary" class="widget-area col-lg-sidebar" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<div class="badges">
				<a target="_blank" href="http://www.swap-bot.com/"><img class="hover" data-hover="<?php echo get_bloginfo('template_url') ?>/sidebar_rollover.gif" src="<?php echo get_bloginfo('template_url') ?>/sidebar.gif"></a>
				<img src="<?php echo get_bloginfo('template_url') ?>/orangedivider.gif">
				<a target="_blank" href="https://www.facebook.com/Swapbot"><img src="<?php echo get_bloginfo('template_url') ?>/facebook.gif"></a>
				<a target="_blank" href="https://www.twitter.com/SwapbotNews"><img src="<?php echo get_bloginfo('template_url') ?>/twitter.gif"></a>
				<a href="/rachels-matchbox-template/"><img src="<?php echo get_bloginfo('template_url') ?>/template.gif"></a>
				<a href="/swap-craft-term-glossary/"><img src="<?php echo get_bloginfo('template_url') ?>/glossary.gif"></a>
				<img src="<?php echo get_bloginfo('template_url') ?>/orangedivider.gif">
			</div>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h3 class="widget-title"><?php _e( 'Archives', '_s' ); ?></h3>
				<select id="archives-select">
					<option value="_">Select month</option>
					<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option' ) ); ?>
				</select>
			</aside>

			<aside id="categories" class="widget">
				<h3 class="widget-title"><?php _e( 'Categories', '_s' ); ?></h3>
				<?php wp_dropdown_categories('hierarchical=1&show_option_none=Select category'); ?>
			</aside>

			<aside id="meta" class="widget hide">
				<h1 class="widget-title"><?php _e( 'Meta', '_s' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

			<?php require 'ad.php'; ?>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
