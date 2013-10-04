<?php $feat_cat = get_catId(get_option('evid_feat_cat')); 
$ids = array(); ?>
<div id="header2">
    <div id="header3">
        <div class="prev"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/previous-hover-<?php echo $evid_color_scheme; ?>.gif" class="prev-button" alt="previous" /> </div>
        <div id="sections">
            <ul>
                <?php $my_query = new WP_Query("cat=$feat_cat&showposts=$evid_homepage_featured;");
while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
				<?php $width = 858;
					  $height = 277;
							  
					  $classtext = '';
					  $titletext = get_the_title();

					  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false);
					  $thumb = $thumbnail["thumb"]; ?>

                <?php // if there's a thumbnail
if($thumb != '') { ?>
                <li class="position">
                    <div class="featured" style="background-image: url('<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, '', true, true); ?>');">
                        <div class="featured-inside">
                            <div class="post-info-featured"><?php _e('Posted by','eVid') ?>
                                <?php the_author() ?>
                                <?php _e('in','eVid') ?>  <?php _e('on','eVid') ?>
                                <?php the_time('m jS, Y') ?>
                                |
                                <?php comments_popup_link(__('No Comments','eVid'), __('1 Comment','eVid'), __('% Comments','eVid')); ?>
                            </div>
                            <a href="<?php the_permalink() ?>" rel="bookmark" class="titles-featured" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>">
                            <?php truncate_title(35) ?>
                            </a>
                            <?php truncate_post(180) ?>
                            <div style="clear: both;"></div>
                            <div class="play-button"> <a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>" class="play-button-hover"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/play-video-hover.png" style="margin: 0px 0px 0px 0px; border: none;" alt="play video" /></a> </div>
                        </div>
                    </div>
                </li>
                <?php }; ?>
				<?php $ids[]= $post->ID; ?>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="next"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/next-hover-<?php echo $evid_color_scheme; ?>.gif" class="next-button" alt="next" /> </div>
    </div>
</div>