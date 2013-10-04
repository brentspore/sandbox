<?php get_header(); ?>

<?php if (get_option('evid_featured') == 'on') { include(TEMPLATEPATH . '/includes/featured.php'); } ?>

<div id="wrapper2">
<div id="container">
    <div id="left-div">
        <!--Begind recent post-->
<?php 
	if (get_option('evid_duplicate') == 'false') {
		$args=array(
			'showposts'=>get_option('evid_homepage_posts'),
			'post__not_in' => $ids,
			'paged'=>$paged,
			'category__not_in' => get_option('evid_exlcats_recent'),
		);
	} else {
		$args=array(
			'showposts'=>get_option('evid_homepage_posts'),
			'paged'=>$paged,
			'category__not_in' => get_option('evid_exlcats_recent'),
		);
	};
	query_posts($args); ?>		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="home-post-wrap">
            <div class="home-post-wrap-top">
                <div class="comment-buble">
                    <?php comments_popup_link('0', '1', '%'); ?>
                </div>
                <div class="date">
                    <?php the_time('m jS, Y') ?>
                </div>
            </div>
            <div class="thumbnail-div">
                
				<?php $width = 189;
					  $height = 175;
							  
					  $classtext = 'linkimage';
					  $titletext = get_the_title();

					  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
					  $thumb = $thumbnail["thumb"]; ?>

                <?php // if there's a thumbnail
					if($thumb != '') { ?>
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
                <?php }; ?>
				
                <div class="overlay"> </div>
                <div class="post-info2">
                    <h2><a href="<?php the_permalink() ?>" class="post-info-title" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>">
                        <?php truncate_title(30) ?>
                        </a></h2>
                    <?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
                </div>
            </div>
			
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/post-bottom-<?php echo $evid_color_scheme; ?>.gif" style="margin: 0px 0px 0px 0px; float: left;" alt="post bottom" /> </div>
    <?php endwhile; ?>
        
        <?php if (get_option('evid_home_nav') == 'on') : ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
		else { ?>
			<p class="pagination">
				<?php next_posts_link(__('&laquo; Previous Entries','eVid')) ?>
	            <?php previous_posts_link(__('Next Entries &raquo;','eVid')) ?>
			</p>
		<?php } ?>
		<?php endif; ?>

	<?php endif; wp_reset_query(); ?>
		
        <!--end recent post-->
        <div style="clear: both;"></div>
        <?php if (get_option('evid_catbox') == 'on') { include(TEMPLATEPATH . '/includes/catbox.php'); } ?>
        <div style="clear: both;"></div>
        <?php if (get_option('evid_randompopular') == 'on') { include(TEMPLATEPATH . '/includes/popular.php'); } ?>
    </div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
</div>
</body>
</html>