<?php global $vigilance; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<?php if ( is_front_page() ) : ?>
		<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' );?></title>
	<?php elseif ( is_404() ) : ?>
		<title><?php _e( 'Page Not Found |', 'vigilance' ); ?> <?php bloginfo( 'name' ); ?></title>
	<?php elseif ( is_search() ) : ?>
		<title><?php printf(__ ("Search results for '%s'", "vigilance"), attribute_escape(get_search_query())); ?> | <?php bloginfo( 'name' ); ?></title>
	<?php else : ?>
		<title><?php wp_title($sep = '' ); ?> | <?php bloginfo( 'name' );?></title>
	<?php endif; ?>

	<!-- Basic Meta Data -->
	<meta name="copyright" content="Design is copyright 2008 - <?php echo date('Y'); ?> The Theme Foundry" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<?php if ((is_single() || is_category() || is_page() || is_home()) && (!is_paged())) {} else { ?>
		<meta name="robots" content="noindex,follow" />
	<?php } ?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/favicon.ico" />

	<!--Stylesheets-->
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" rel="stylesheet" />
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/ie.css" /><![endif]-->
	<!--[if lte IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/stylesheets/ie6.css" /><![endif]-->

	<!--WordPress-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--WP Hook-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="skip-content"><a href="#content"><?php _e( 'Skip to content', 'vigilance' ); ?></a></div>
	<div id="wrapper">
		<div id="top-ribbon"><a href="/"><img src="/wp-content/themes/vigilance_pro/images/top-ribbon.png"></a></div>
		<div id="header" class="clear">
			<div id="nav">
				<ul>
					<?php if ( ($vigilance->useMenus() == 'true' ) && ( function_exists('wp_nav_menu') ) ) : ?>
						<?php wp_nav_menu( array( 'theme_location' => 'nav-1', 'depth' => '1' ) ); ?>
					<?php else : ?>
						<?php if ($vigilance->hideHome() !== 'true' ) : ?>
							<li class="page_item <?php if (is_front_page()) echo( 'current_page_item' );?>"><a href="<?php bloginfo( 'url' ); ?>"><?php _e( 'Home', 'vigilance' ); ?></a></li>
						<?php endif; ?>
						<?php if ($vigilance->hidePages() !== 'true' ) : ?>
							<?php wp_list_pages( 'title_li=&depth=1&exclude='. $vigilance->excludedPages()); ?>
						<?php endif; ?>
						<?php if ($vigilance->hideCategories() != 'true' ) : ?>
							<?php wp_list_categories( 'title_li=&depth=1&exclude=' . $vigilance->excludedCategories()); ?>
						<?php endif; ?>
					<?php endif; ?>
				</ul>
			</div><!--end nav-->
		</div><!--end header-->
		<?php if (is_page_template( 'left-sidebar.php' )) :?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<div id="content" class="pad <?php if (is_page_template( 'no-sidebar.php' )) echo( 'no-sidebar' );?>">
			<?php if (!is_page_template( 'no-sidebar.php' )) : ?>
				<?php if (is_file(STYLESHEETPATH . '/header-banner.php' )) include(STYLESHEETPATH . '/header-banner.php' ); else include(TEMPLATEPATH . '/header-banner.php' ); ?>
			<?php endif; ?>
			<?php if (is_front_page()) : ?>
				<?php if (is_file(STYLESHEETPATH . '/header-alertbox.php' )) include(STYLESHEETPATH . '/header-alertbox.php' ); else include(TEMPLATEPATH . '/header-alertbox.php' ); ?>
			<?php endif; ?>