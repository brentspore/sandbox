<?php get_header(); ?>
<div class="ibam-contain middle">
	<div class="ibam-column">
		<div class="ibam-content">
			<?php include (TEMPLATEPATH . '/nav.php'); ?>
			<?php include (TEMPLATEPATH . '/categories.php'); ?>	
			<div class="ibam-posts">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<h4 class="info"><?php echo time_ago(); ?> in <?php the_category(', ') ?> by <?php the_author()?> | <?php comments_number(); ?></h4>
					<?php the_content(); ?>
				</div>
				<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div>
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<?php get_footer(); ?>