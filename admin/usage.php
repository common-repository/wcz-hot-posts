<div class="wrap"><h2><img src="<?php echo WP_PLUGIN_URL; ?>/wcz-hot-posts/img/icon2.png" alt="i"> WCZ Hot Posts Plugin</h2>
<br/><div style="width: 65%; float: left;">
<div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
	<h3 class="hndle" style="padding:5px;"><span>About this plugin</span></h3>
<div class="inside"><p align="justify">WCZ Hot Posts Plugin created by Web Care Zone Team. This plugin shows 8 most commented posts of last month. It shows Thumbnail, Title, Author's Avatar of the post in a dynamic way. We didn't use any Java Script in this plugin for faster performance. It is a light plugin actually so much light. It won't increase your site's load time. If you like this plugin please give a review to it <a href="http://wordpress.org/support/view/plugin-reviews/wcz-hot-posts" target="_blank">here</a> Enjoy it :)</p></div></div>

<div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
	<h3 class="hndle" style="padding:5px;"><span>Widget Usage Instructions</span></h3>
<div class="inside">
<p align="justify">Go to <strong>Appearance > Widgets</strong>. Then drag and drop the <strong>WCZ Hot Posts</strong> widget on your theme's sidebar to activate it.<br>
Please don't place it in sidebar which width is below 900px.</p>
</div></div>


<div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
	<h3 class="hndle" style="padding:5px;"><span>Shortcode Usage Instructions</span></h3>
<div class="inside">
<p> <b>Put this shortcode in your blog post/page/widget:</b><br/>

Just copy it: <code><span style="color: #000000"><span style="color: #0000BB"> &#91;wczhotposts&#93;</span></span></code><br/>
</p><p>
<b> Or, insert this php code in your theme or any other template file:</b><br/>
<br/>
Just copy it: <code><span style="color: #000000"><span style="color: #0000BB">   &#60;&#63;php wcz_hot_posts&#40;&#41;; </span><span style="color: #0000BB">&#63;&#62;</span></span>
</code>
</p></div></div>

<div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
	<h3 class="hndle" style="padding:5px;"><span>F.A.Q</span></h3>
<div class="inside">
<b>Q: How can I increase/decrease posts number?</b><br>
<b>A:</b> Go here <a href="/wp-admin/plugin-editor.php?file=wcz-hot-posts/wcz-hot-posts.php" target="_blank">Click</a> . Find this line <code>'posts_per_page' => 8,</code> . Here replace the  <code>8</code>  with your desire number and save it.<br><br>
<b>Q: How can I increase/decrease thumbnail image size?</b><br>
<b>A:</b> Go here <a href="/wp-admin/plugin-editor.php?file=wcz-hot-posts%2Fcss%2Fstyle.css&plugin=wcz-hot-posts%2Fwcz-hot-posts.php" target="_blank">Click</a> . Here in the <code>.new-wrapper img</code> class change the image width and height.<br><br>
<b>Q: How can I increase/decrease Avatar image size?</b><br>
<b>A:</b> Go here <a href="/wp-admin/plugin-editor.php?file=wcz-hot-posts%2Fcss%2Fstyle.css&plugin=wcz-hot-posts%2Fwcz-hot-posts.php" target="_blank">Click</a> . Here in the <code>.new-wrapper ul img</code> class change the image width and height.<br><br>
<b>Q: Plugin isn't perfectly centered in the site. How can I center it?</b><br>
<b>A:</b> Different site has different width that's why sometimes plugin don't center perfectly .To center go here <a href="/wp-admin/plugin-editor.php?file=wcz-hot-posts/wcz-hot-posts.php" target="_blank">Click</a> . Here find this <code>&#60;div style=" width: 87%; margin: 0 auto 30px auto;"&#62;</code> and change the width.<br><br>
<b>Q: I don't want to show the Avatar. How can I remove it?</b><br>
<b>A:</b> Go here <a href="/wp-admin/plugin-editor.php?file=wcz-hot-posts/wcz-hot-posts.php" target="_blank">Click</a> . Here remove this line <code>&#60;ul&#62;&#60;&#63;php echo get_avatar( get_the_author_meta('ID'), 50 ); &#63;&#62;&#60;/ul&#62;</code>.
</div></div>

<div class="postbox" style="display: block;float:left;margin:5px;clear:left; width: 99%;">
	<h3 class="hndle" style="padding:5px;"><span>About the team</span></h3>
<div class="inside">
<p align="justify">
<p style="text-align: center;"><a href="http://webcarezone.com" target="_blank"><img src="<?php echo WP_PLUGIN_URL; ?>/wcz-hot-posts/img/wcz.png"></a></p>
This great plugin is written by Web Care Zone team. Web Care Zone is one of the most leading Web Design & Development company in Bangladesh. Their services are: Website Design, Logo Design, Search Engine Optimization, Website Security, Website Speed Optimization, Facebook Page Design and many more. In recent years they started to contribute in WordPress.<br>
<b>Mobile:</b> +880-1677690868<br>
<b>Mail:</b> contact@webcarezone.com<br>
<b>Web:</b> <a href="http://webcarezone.com" target="_blank">www.webcarezone.com</a></p>
</div></div>
</div>

<?php echo wczhp_sidebar(); ?>

</div>
