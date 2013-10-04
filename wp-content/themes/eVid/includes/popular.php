<!--Begin Popular Articles-->

<div class="home-post-wrap-box" style="margin-top: 15px;"> <span class="headings"><?php _e('Popular Articles','eVid') ?></span>
    <div class="cat-box-items2">
<ul>
<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0, ".$evid_homepage_popular);
foreach ($result as $post) {
setup_postdata($post);
$postid = $post->ID;
$title = $post->post_title;
$commentcount = $post->comment_count;
if ($commentcount != 0) { ?>
<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
<?php echo $title ?></a> (<?php echo $commentcount ?>)</li>
<?php } } ?>
</ul>
    </div>
</div>
<!--End Popular Articles-->
<!--Begin Random Articles-->
<div class="home-post-wrap-box" style="margin-top: 15px;"> <span class="headings"><?php _e('Random Articles','eVid') ?></span>
    <div class="cat-box-items2">
        <ul>
            <?php query_posts("orderby=rand&showposts=$evid_homepage_random&caller_get_posts=1");
  while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>">
                <?php the_title() ?>
                </a></li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
    </div>
</div>
<!--End Random Articles-->
