<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
	<?php query_posts( 'showposts=25' ); ?>
	<?php if (have_posts()) : ?>
		<h1 class="pagetitle"><?php bloginfo( 'title' ); ?> <?php _e( 'Archives', 'vigilance' ); ?></h1>
		<div class="entry">
			<h2><?php _e( 'Recent Posts', 'vigilance' ); ?></h2>
		</div><!--end-entry-->
		<img class="archive-comment" src="<?php bloginfo( 'template_url' ); ?>/images/comments-bubble-archive.gif" width="17" height="14" alt="<?php _e( 'comment', 'vigilance' ); ?>"/>
	<?php while (have_posts()) : the_post(); ?>
		<div class="entries">
			<ul>
				<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="comments_number"><?php comments_number( '0', '1', '%', '' ); ?></span><span class="archdate"><?php the_time(__ ( 'n.j.y', 'vigilance' )); ?></span><?php the_title(); ?></a></li>
			</ul>
		</div><!--end entries-->
	<?php endwhile; endif; ?>
		<div class="entry">
			<h2><?php _e( 'Monthly Archives', 'vigilance' ); ?></h2>
			<ul>
				<?php wp_get_archives( 'type=monthly&show_post_count=1' ); ?>
			</ul>
		</div><!--end-entry-->
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>