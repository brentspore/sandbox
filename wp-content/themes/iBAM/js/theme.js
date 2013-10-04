jQuery(function ($) {
	// toggle the categories panel
	$('.show-categories').click(function() {
		$('.ibam-categories').slideToggle('fast');
		return false;
	});
	
	// scrollfollow for next / previous posts
	$('.scrollfollow').scrollFollow({
		speed: 400,
		offset: 50
	});
});