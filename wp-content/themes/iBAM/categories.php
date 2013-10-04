<div class="ibam-categories">
	<ul>
		<?php
			$variable = wp_list_categories('echo=0&show_count=1&title_li=');
			$variable = str_replace(array('(',')'), array('<span>','</span>'), $variable);
			echo $variable;
		?>
	</ul>
</div>