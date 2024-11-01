<?php
/*
Plugin Name: WCZ Hot Posts
Plugin URI: http://webcarezone.com/project/wcz-hot-posts
Description: This plugin shows most commented posts of last month with thumbnail, title, author's avatar of the posts in a dynamic way.
Version: 1.0
Author: Fida Al Hasan
Author URI: http://fida.webcarezone.com
*/

/*
Copyright (C) 2013  Fida Al Hasan

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

global $nd_login_vars, $wpdb;

$nd_login_vars['plugin_path'] = WP_PLUGIN_DIR.'/wcz-hot-posts';
$nd_login_vars['plugin_url'] = WP_PLUGIN_URL.'/wcz-hot-posts';

function wcz_hot_posts(){
    $current_month = date('n');
    if($current_month==1){ $last_month=12; }else{ $last_month=$current_month-1; }
    $args = array(
        'posts_per_page' => 8,
        'monthnum'       => $last_month,
        'orderby'        => 'comment_count',
     );
    ?>
<div style=" width: 87%; margin: 0 auto 30px auto;">
<?php query_posts($args); ?>
<?php  while (have_posts()) : the_post(); ?>
<div class="new-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'wcz-hot-posts' ); ?></a><span><?php the_title(); ?></span><ul><?php echo get_avatar( get_the_author_meta('ID'), 50 ); ?></ul></div>
<?php endwhile; ?>
</div>
<?php
wp_reset_query();
}

add_image_size( 'wcz-hot-posts', 75, 75, true );


###[ Shortcode ]######################################################[ WEBCAREZONE.COM ]####

add_shortcode('wczhotposts', 'wcz_hot_posts');

###[ Style ]######################################################[ WEBCAREZONE.COM ]####

function wcz_hot_posts_style(){
	wp_enqueue_style('wcz-hot-posts', WP_PLUGIN_URL .'/wcz-hot-posts/css/style.css');
}
add_action('init', 'wcz_hot_posts_style');

###[ Widget ]######################################################[ WEBCAREZONE.COM ]####

function wcz_hot_posts_widget() {
	class WCZHotPosts extends WP_Widget {
	    function WCZHotPosts() {  
	        $widget_ops = array('description' => __( 'Most commented posts of last month with post title, thumbnail & author avatar','wcz') );
			$this->WP_Widget('nd_ajax_login', __('WCZ Hot Posts','wcz'), $widget_ops);  
	    }
	    function widget($args, $instance) {
	        wcz_hot_posts($args);
	    }
	} 
	register_widget('WCZHotPosts');
}
add_action('init', 'wcz_hot_posts_widget', 1);

###[ Option Page ]###############################################[ WEBCAREZONE.COM ]####

if(is_admin())
include 'wcz_admin.php';

?>