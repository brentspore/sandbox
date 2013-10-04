 <span class="boldtext">1. How do I installed eVid onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;eVid.&quot; Via ftp, upload the &quot;eVid&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to upload the plugin files. Inside the zip folder you downloaded there will be a folder named &quot;plugin.&quot; Within this folder are several other files and folders which need to be uploaded to your Wordpress plugins directory. This directory will be located at /public_html/blog/wp-content/plugins. Once you have the plugins uploaded you will need to activate them via your Wordpress control panel. Login to your wordpress admin area and click on the &quot;plugins&quot; link. Activate the following plugins: Related Posts, Wp Post Ratings and Wp Page Navi.</p> 
  <p>Next you need to select eVid and make it your default theme. Click on the design link, and under the themes tab locate eVid from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>eVid utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Key&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandiwdth left) </p> 
  <p><span class="style2">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the eVid directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try folowing <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent">In this theme, the title/logo is an image, which means you will need an image editor to add your own text. You can do this by opening the blank logo image located at Photoshop Files/logo.jpg, or by opening the logo PSD file located at Photoshop Files/logo.psd. Replace the edited logo with the old logo by placing it in the following directory: theme/eVid/images. If you need more room, or would like to edit the logo further, you can always do so by opening the original fully layered PSD file located at Photoshop Files/eVid.psd </div> 
 
<span class="boldtext">4. How do I manage advertisements on my blog? </span> 
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Design&quot; and then &quot;Current Theme Options&quot; to reveal the various theme options. </div> 
 
<span class="boldtext">5. Can I change how many recent posts are displayed on the homepage? </span> 
<div class="indent">You sure can. The number of recent posts being displayed on the homepage can be changed at any time via the custom option pages in wp-admin. </div> 
 
<span class="boldtext">6. How do I setup the Featured Articles on the homepage? </span> 
<div class="indent"> 
  <p>The Featured Articles are pulled from a specific category. You can choose which category is used for the Featured Articles section via the Theme Options page in wp-admin. Under the General > Featured Articles section of ePanel (the elegant themes options page) you will see a dropdown menu where you can choose your featured articles category.</p></div> 
	
<span class="boldtext">7. How do I setup the "Recent from X" category boxes on the homepage? </span> 
<div class="indent"> 
  <p>These are customizable from within the theme's option menu within wp-admin. Log in, click &quot;Design,&quot; and then &quot;Current Theme Options.&quot; You will see various fields involving the &quot;Homepage Category Boxes.&quot; Here you can choose a title for your box, which category the box pulls its posts from, as well as how many posts are displayed. </p> 
  </div> 
  
  <span class="boldtext">8. How do I add videos to my posts? </span> 
  <div class="indent"> 
  <p>This theme can embed videos from other sources, but does not have a native video player. This means that you can only post videos that are taken from online video sources such as Youtube. When you make a new post you will need to add a custom field with the Key &quot;Video&quot; In the Value area just paste the embed code from your video host. For example, an embed code from youtube looks like this:</p> 
  <p>&lt;object width=&quot;425&quot; height=&quot;344&quot;&gt;&lt;param name=&quot;movie&quot; value=&quot;http://www.youtube.com/v/WneDU-K3Sww&amp;hl=en&amp;fs=1&quot;&gt;&lt;/param&gt;&lt;param name=&quot;allowFullScreen&quot; value=&quot;true&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;http://www.youtube.com/v/WneDU-K3Sww&amp;hl=en&amp;fs=1&quot; type=&quot;application/x-shockwave-flash&quot; allowfullscreen=&quot;true&quot; width=&quot;425&quot; height=&quot;344&quot;&gt;&lt;/embed&gt;&lt;/object&gt;</p> 
  <p>You will notice that some video hosts try to add in links to their website, you probably want to delete these. All you need is the object and or embed codes. </p> 
  <p class="style1">Important Note: There is a bug with the upgrade of WordPress 2.6 that adds random &quot;/&quot; to the embed code when you add it. For this reason you need to add the code twice. After you click &quot;Add Custom Field&quot; you will notice that the code in the value area refreshes and the &quot;/&quot; appear. After this occurs simply delete the embed code from the value area and paste in the original embed code again and then press the &quot;update&quot; button. If you don't do this the video won't show up. </p> 
  </div> 