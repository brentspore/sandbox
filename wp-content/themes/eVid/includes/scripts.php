<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/slider.js"></script>

<?php if (is_home()) : ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scrollTo.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/serialScroll.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/init.js"></script>
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery('ul.superfish').superfish();
		<?php if (get_option('evid_disable_toptier') == 'on') echo('jQuery("ul.nav > li > a > span.sf-sub-indicator").parent().attr("href","#");'); ?>
	});
</script>