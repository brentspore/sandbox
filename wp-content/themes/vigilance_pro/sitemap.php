<?php
/*
Template Name: Sitemap
*/
?>
<?php get_header(); ?>
	<h1 class="pagetitle"><?php bloginfo( 'title' ); ?> <?php _e( 'Sitemap', 'vigilance' ); ?></h1>
	<div class="entry">
		<h2><?php _e( 'Pages', 'vigilance' ); ?></h2>
		<ul>
			<?php wp_list_pages( 'sort_column=menu_order&depth=0&title_li=' ); ?>
		</ul>
		<h2><?php _e( 'Categories', 'vigilance' ); ?></h2>
		<ul>
			<?php wp_list_categories( 'depth=0&title_li=&show_count=1' ); ?>
		</ul>
		<h2><?php _e( 'Monthly Archives', 'vigilance' ); ?></h2>
		<ul>
			<?php wp_get_archives( 'type=monthly&limit=12' ); ?>
		</ul>
	</div><!--end-entry-->
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>