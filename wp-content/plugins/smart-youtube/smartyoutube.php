<?php
/*
Plugin Name: Smart Youtube
Plugin URI: http://www.prelovac.com/vladimir/wordpress-plugins/smart-youtube
Description: Insert YouTube videos in posts, comments and RSS feeds with ease and full customization.
Author: Vladimir Prelovac
Version: 3.7
Author URI: http://www.prelovac.com/vladimir/

Updates:
3.7 - wp3.0 compatibility
3.6.1 - Added Ipad compatbility (credits Lew Ayotte)
3.6 - Added compatibility with other youtube plugins such as wp-youtube ([yt]...[/yt] type code)
3.5 - Fixed Iphone issues
3.4.3 - Fixed privacy option
3.4.2 - Supports new #! style youtube urls
3.4.1 - Fixed widget
3.4 - Completely rewritten the plugin, added new HD video support, added video privacy option
3.3.2 - Fixed xHTML validation for playlists (credit Dietmar)
3.3.1 - Fixed Iphone validation (credit John Neumann)
3.3 - Supports migrated blogs from Wordpress.com replacing [youtube=youtubeadresss]
3.2 - Added title to widget, fixed HTML code issue with widget
3.1.1 - param closed properly for validation
3.1 - wmode transparent parameter updated to better handle transparancy
3.0 - Added video template, option to set sidebar video size, fixed sidebar widget code, fixed video syntax issue
2.8.1 - Display Annotioans added as option
2.8 - Support for playlists
2.7.5 - Plugin url updated to use WP_PLUGIN_URL
2.7.4 - Added option to remove info&ratings
2.7.3 - Removed annotiations
2.7 - Supports a sidebar widget for videos
2.6 - Added option to remove search button
2.5 - Added DVD quality support (httpvq)
2.4.1 - Small fixes in embed and rss links
2.4 - Added support for extra parameters like &start=50 to start the video at 50th second of play
2.2 - Full xHTML validaiton
2.1 - Made the application iPhone compatible and allowed full screen
2.0 - Support for playback high quality YouTube videos
1.9 - Added video autoplay option
1.8 - Solved Problem with HTML validation, enabled full video preview in RSS
1.6 - Solving a problem with wordpress handling special characters
1.5 - Added new admin interface and more options to control the video

To-Do: 
- marinas javascript suggestion for hq videos
- add editor button
- The plugin places a preview image in the RSS feed which is great, but it links to the video on http://www.youtube.com. I would like to change it so the image links to the blog post so I can generate some traffic on my blog. 
- localization
- the images appear under the embedded Smart Youtube videos. Is there any way to edit the z-index for Smart Youtube CSS? I
- would like to use multiple instances of the Smart YouTube plugin. I saw the reply that said to simply use multiple calls in one instance of the widget, but that doesn't let me choose different videos for different pages. 
- was wondering if it's possible to get a vid and playlist in a custom page template?? Is it possible to add a preview image to search results?
- I wondered if there were a way to bring the video to the forefront layer (perhaps z-index)? I know this actually breaks good design practice in my intended use, but have a look here:
- However, on one page I have two videos and therefore I want to add a a parameter to the second video embed URL to _not_ start automatically. Something like httpv://www.youtube.com/watch?v=xyz123&autostart=off
- Single videos work well from wordpress on the Iphone/ipod. Is there a way to make the playlists work, just getting the ? cube instead of image.
- I would like to "inject" automatically this preview image url in a custom field, in each post, to auto-generate the thumb on my homepage with this image.
*/



if (isset($smart_youtube)) return false;

require_once(dirname(__FILE__) . '/smartyoutube.class.php');

$smart_youtube = new SmartYouTube();