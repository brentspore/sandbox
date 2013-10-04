jQuery(function(){

	jQuery(".play-button").hover(function() {
		jQuery(this).children(".play-button-hover").animate({opacity: "show"}, "slow");
	}, function() {
		jQuery(this).children(".play-button-hover").animate({opacity: "hide"}, "fast");
	});
	
	jQuery(".next").hover(function() {
		jQuery(this).children(".next-button").animate({opacity: "show"}, "slow");
	}, function() {
		jQuery(this).children(".next-button").animate({opacity: "hide"}, "fast");
	});
	
	jQuery(".prev").hover(function() {
		jQuery(this).children(".prev-button").animate({opacity: "show"}, "slow");
	}, function() {
		jQuery(this).children(".prev-button").animate({opacity: "hide"}, "fast");
	});
	
	jQuery(".embed-button").click(function() {
		jQuery(".video-tags").animate({opacity: "hide"}, "fast")
		jQuery(".video-related").animate({opacity: "hide"}, "fast")
	    jQuery(".video-rate").animate({opacity: "hide"}, "fast");
		jQuery(".video-share").animate({opacity: "hide"}, "fast")
		jQuery(".video-link").animate({opacity: "hide"}, "fast")
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-embed").animate({opacity: "show"}, "fast");
	});

	jQuery(".share-button").click(function() {
		jQuery(".video-tags").animate({opacity: "hide"}, "fast")
		jQuery(".video-related").animate({opacity: "hide"}, "fast")
	    jQuery(".video-rate").animate({opacity: "hide"}, "fast");
		jQuery(".video-link").animate({opacity: "hide"}, "fast")
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-share").animate({opacity: "show"}, "fast");
	});
	jQuery(".link-button").click(function() {
		jQuery(".video-tags").animate({opacity: "hide"}, "fast")
		jQuery(".video-related").animate({opacity: "hide"}, "fast")
	    jQuery(".video-rate").animate({opacity: "hide"}, "fast");
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-link").animate({opacity: "show"}, "fast");
	});

	jQuery(".tags-button").click(function() {
		jQuery(".video-related").animate({opacity: "hide"}, "fast")
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-tags").animate({opacity: "show"}, "fast");
	});
	jQuery(".rate-button").click(function() {
		jQuery(".video-tags").animate({opacity: "hide"}, "fast")
		jQuery(".video-related").animate({opacity: "hide"}, "fast")
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-rate").animate({opacity: "show"}, "fast");
	});
	
	jQuery(".related-button").click(function() {
		jQuery("#video-inside").animate({opacity: "hide"}, "fast");
		jQuery(".video-related").animate({opacity: "show"}, "fast");
	});
	
	jQuery(".close").click(function() {
		jQuery(this).parent(".video2").animate({opacity: "hide"}, "slow");
		jQuery("#video-inside").animate({opacity: "show"}, "slow");
		jQuery(".video-rate").animate({opacity: "hide"}, "slow");
		jQuery(".video-tags").animate({opacity: "hide"}, "slow");
		jQuery(".video-comment").animate({opacity: "hide"}, "slow");
		jQuery(".video-link").animate({opacity: "hide"}, "slow");
		jQuery(".video-share").animate({opacity: "hide"}, "slow");
		jQuery(".video-embed").animate({opacity: "hide"}, "slow");
	});
	jQuery(".video-button-hover").hover(function() {
		jQuery(this).children(".video-button-hover-image").animate({opacity: "show"}, "slow");
	}, function() {
		jQuery(this).children(".video-button-hover-image").animate({opacity: "hide"}, "fast");
	});
	jQuery(".lights-button").click(function() {
		jQuery(".lights").slideToggle("slow");
		jQuery(this).toggleClass("active"); return false;
	});

});