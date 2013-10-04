<?php get_header(); ?>
<div class="ibam-contain middle">

	<div class="ibam-column">
	
		<div class="ibam-content">
		
			<?php include (TEMPLATEPATH . '/nav.php'); ?>
			
			<?php include (TEMPLATEPATH . '/categories.php'); ?>
			
			<div class="ibam-special-titles">
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<p>Browsing <strong><?php single_cat_title(''); ?></strong> topic(s).</p>
				<?php /* If this is a search result */ } elseif (is_search()) { ?>
				<p>Results for <strong>'<?php the_search_query(); ?>'</strong></p>
				<?php } ?>
			</div>
			
			<div class="ibam-posts">
				<?php if (have_posts()) : ?>
					<?php $count = 0; ?>
					<?php while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
						<?php $count++; ?>
						<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<h4 class="info"><?php echo time_ago(); ?> in <?php the_category(', ') ?> by <?php the_author()?> | <?php comments_number(); ?></h4>
						<?php if ($count == 1) : ?>
							<?php the_content(); ?>
						<?php else : ?>
							<?php the_post_thumbnail(array( 150,100 ), array( 'class' => 'alignright' )); ?>
							<?php the_excerpt(); ?>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
					<div class="navigation">
						<span class="next-posts"><?php next_posts_link('Newer Posts') ?></span>
						<span class="previous-posts"><?php previous_posts_link('Older Posts') ?></span>
					</div>
				<?php else : ?>
					<h2 class="title">Sorry...</h2>
					<p>No posts were found.</p>
				<?php endif; ?>
			</div>
			
		</div>
		
	</div>
	
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
	
</div>

<?php get_footer(); ?>