<?php global $vigilance; ?>
	<div id="footer">
	</div>
</div><!--end wrapper-->
<?php wp_footer(); ?>
<?php
	if ($vigilance->statsCode() != '' ) {
		echo $vigilance->statsCode();
	}
?>
</body>
</html>
