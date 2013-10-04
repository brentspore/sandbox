<div class="ibam-sidebar">

	<div class="ibam-search">
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	
	<div class="ibam-social">
		<div class="ibam-social-inner">
			<p>Follow via</p>
			<a class="icon-twitter" href="http://twitter.com/iboughtamac" title="Follow @iboughtamac">Twitter</a>
			<a class="icon-facebook" href="http://facebook.com/iboughtamac" title="Facebook fan">Facebook</a>
			<a class="icon-email" href="#" title="Subscribe via email">Email</a>
			<a class="icon-rss" href="http://feeds.feedburner.com/iboughtamac?format=xml" title="Subscribe via RSS">RSS</a>
		</div>
	</div>
	
	<div class="ibam-about">
		<?php // use about site text from install ?>
		<h4 class="subtitle">Unwrapped a new Mac?</h4>
		<?php echo get_bloginfo('description'); ?>
	</div>
	
	<div class="ibam-sidebar-box">
		<h4 class="subtitle">Getting Started</h4>
		<p>Check out a few tutorials on how to get started with your new Apple Computer, discover new software, or learn how to be more productive.</p>
		<ul class="ibam-fetched-posts">
			<?php // change category ID to match tutorials ?>
			<?php $custom_query = new WP_Query('cat=8&showposts=3'); ?>
			<?php if ($custom_query->have_posts()): while ($custom_query->have_posts()): $custom_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
					<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo catch_that_image()?>&w=32&zc=1&q=32" alt="<?php the_title(); ?>"/>
					<span><strong><?php the_title(); ?></strong>
					<?php the_content_rss('', TRUE, '', 20); ?></span>
				</a>
			</li>
			<?php endwhile; else : endif; ?>
		</ul>
	</div>
	
	<div class="ibam-sidebar-box">
		<?php // these links are added by the WordPress link manager ?>
		<ul class="ibam-nested-links">
			<?php wp_list_bookmarks('categorize=1&show_description=1'); ?>
		</ul>
	</div>
	
</div>