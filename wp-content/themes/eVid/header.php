<?php global $evid_color_scheme, $evid_homepage_featured, $evid_homepage_posts, $evid_home_cat_one_title, $evid_home_cat_one_number, $evid_home_cat_two_title, $evid_home_cat_two_number, $evid_thumbnail_height_pages, $evid_thumbnail_height, $evid_thumbnail_usualheight, $evid_thumbnail_width_pages, $evid_thumbnail_width, $evid_thumbnail_usualwidth, $evid_homepage_popular, $evid_homepage_random, $evid_catnum_posts;
global $shortname, $category_menu, $exclude_pages, $exclude_cats, $hide, $strdepth, $strdepth2, $projects_cat, $page_menu; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if IE 7]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/iestyle.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/pngfix.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body>
<div class="lights"></div>
<!--This controls pages navigation bar-->
<div id="header">
    <div id="pages"> <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-<?php echo $evid_color_scheme; ?>.png" alt="logo" class="logo" /></a>
        <ul class="nav superfish">
			<?php if (get_option('evid_home_link') == 'on') { ?>
				<li class="page_item"><a href="<?php bloginfo('url'); ?>" class="title" title="home again woohoo"><?php _e('Home','eVid') ?></a></li>
			<?php }; ?>
			<?php if (get_option('evid_swap_navbar') == 'false') { ?>
				<?php echo $page_menu; ?>
			<?php } else { ?>
				<?php if ($category_menu <> '<li>No categories</li>') echo($category_menu); ?>
			<?php } ?>
		</ul>
        <div class="search_bg">
            <div id="search">
                <form method="get" action="<?php bloginfo('home'); ?>" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px">
                    <input type="text"  name="s" value="<?php echo wp_specialchars($s, 1); ?>"/>
                    <input type="image" class="input" src="<?php bloginfo('stylesheet_directory'); ?>/images/search-<?php echo $evid_color_scheme; ?>.gif" value="submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End pages navigation-->