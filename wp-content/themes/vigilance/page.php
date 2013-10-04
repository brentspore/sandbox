<?php get_header(); ?>
<div id="content-top"></div>
<div id="content-bg">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<h1 class="pagetitle"><?php the_title(); ?></h1>
		<div class="entry page clear">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit this', 'vigilance' ), '<p>', '</p>' ); ?>
			<?php wp_link_pages(); ?>
		</div><!--end entry-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php comments_template( '', true); ?>
	<?php else : ?>
	<?php endif; ?>
	</div>
	<div id="ribbon">
		<img src="/wp-content/themes/vigilance_pro/images/ribbon1.png">
		<a href="http://twitter.com/iboughtamac"><img src="/wp-content/themes/vigilance_pro/images/ribbon2.png"></a>
		<img src="/wp-content/themes/vigilance_pro/images/ribbon3.png">
		<a href="http://facebook.com/brentspore"><img src="/wp-content/themes/vigilance_pro/images/ribbon4.png"></a>
		<img src="/wp-content/themes/vigilance_pro/images/ribbon5.png">
	</div>
	<div id="content-bottom">
		<a href="http://synergyprod.com"><img src="/wp-content/themes/vigilance_pro/images/synergy.png"></a><br />
		<p>This web production is proudly brought to you by <a href="mailto:hello@brentspore.com">Brent Spore</a></p>
	</div>
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>