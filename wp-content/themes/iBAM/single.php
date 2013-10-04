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
				<div class="scrollfollow previous-posts"><?php previous_post_link('%link') ?></div>
				<div class="scrollfollow next-posts"><?php next_post_link('%link') ?></div>
				<div class="ibam-post-related">
					<?php $tags = wp_get_post_tags($post->ID);
						if ($tags) {
							echo '<h4 class="subtitle">Related Posts</h4>';
							$first_tag = $tags[0]->term_id;
							$args=array(
								'tag__in' => array($first_tag),
								'post__not_in' => array($post->ID),
								'showposts'=>10,
								'caller_get_posts'=>1
							);
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<p>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
									<img src="<?php bloginfo('template_url') ?>/timthumb.php?src=<?php echo catch_that_image()?>&w=32&zc=1&q=32" alt="<?php the_title(); ?>"/>
									<span><strong><?php the_title(); ?></strong>
									<?php the_content_rss('', TRUE, '', 30); ?></span>
								</a>
							</p>
						<?php endwhile;
						}
					}?>
				</div>
				<?php endwhile; else: endif; ?>
			</div>
		</div>
	</div>
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<?php get_footer(); ?>