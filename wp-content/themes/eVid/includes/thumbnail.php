<?php if (is_page()) { 
		  $width = get_option('evid_thumbnail_width_pages');
		  $height = get_option('evid_thumbnail_height_pages');
	  } else { 
		  $width = get_option('evid_thumbnail_width');
		  $height = get_option('evid_thumbnail_height');
	  };
	  
	  $classtext = 'thumbnail';
	  $titletext = get_the_title();

	  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	  $thumb = $thumbnail["thumb"];  ?>

<?php if($thumb != '') { ?>
	<div class="thumbnail-div-single">
		<a href="<?php the_permalink() ?>" title="<?php printf(__('Permanent Link to %s','eVid'), get_the_title()) ?>">
			<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
		</a>
	</div>
<?php } ?>