<?php get_header(); ?>
<div id="content-top"></div>
<div id="content-bg">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-header">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="date"><?php the_time( __( 'F j', 'vigilance' )); ?>, <?php the_time( 'Y' ); ?></div>
				<div class="comments"><?php comments_popup_link( __( 'Leave a comment', 'vigilance' ),  __( '1 Comment', 'vigilance' ), __ngettext ( '% Comment', '% Comments', get_comments_number (),'vigilance' )); ?></div>
			</div><!--end post header-->
			<div class="meta clear">
				<div class="tags"><?php the_tags(__( 'tagged: ', ', ', '', 'vigilance' )); ?></div>
				<div class="author"><?php printf( __( 'by %s', 'vigilance' ), get_the_author()); ?></div>
			</div><!--end meta-->
			<div class="entry clear">
				<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail( array(250,9999), array( 'class' => 'alignleft' ) ); ?>
				<?php the_content(__( 'read more...', 'vigilance' )); ?>
				<?php edit_post_link( __( 'Edit this', 'vigilance' ), '<p>', '</p>' ); ?>
				<?php wp_link_pages(); ?>
			</div><!--end entry-->
			<div class="post-footer">
				<p><?php _e( 'from &rarr;', 'vigilance' ); ?> <?php the_category( ', ' ); ?></p>
			</div><!--end post footer-->
		</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<div class="navigation index">
			<div class="alignleft"><?php next_posts_link( __( '&laquo; Older Entries', 'vigilance' )); ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'vigilance' )); ?></div>
		</div><!--end navigation-->
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