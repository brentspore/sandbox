<?php get_header(); ?>
<div id="wrapper2" style="margin-top: -1px; background-position: 0px 0px;">
<div id="container">
<div id="left-div">
    <!--Begind recent post-->
	<?php 
	if (is_archive() || is_search() || is_tag()) {
		if (is_archive()) $post_number = get_option('evid_archivenum_posts');
		if (is_search()) $post_number = get_option('evid_searchnum_posts');
		if (is_tag()) $post_number = get_option('evid_tagnum_posts');
		global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged");
	}
	?>
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
                <h2 class="post-info-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>">
                    <?php truncate_title(30) ?>
                    </a></h2>
                <div style="clear: both;"></div>
                <?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
            </div>
        </div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/post-bottom-<?php echo $evid_color_scheme; ?>.gif" style="margin: 0px 0px 0px 0px; float: left;" alt="post bottom" /> </div>
    <?php endwhile; ?>
    <div style="clear: both;"></div>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
    <p class="pagination">
        <?php next_posts_link(__('&laquo; Previous Entries','eVid')) ?>
	    <?php previous_posts_link(__('Next Entries &raquo;','eVid')) ?>
    </p>
    <?php } ?>
    <!--end recent post-->
    <?php else : ?>
    <!--If no results are found-->
    <h1><?php _e('No Results Found','eVid') ?></h1>
    <p><?php _e('The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.','eVid') ?></p>
    <!--End if no results are found-->
    <?php endif; ?>
	<?php if (is_archive() || is_search() || is_tag()) wp_reset_query(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>
