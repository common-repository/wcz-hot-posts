<?php

add_action('admin_menu', 'register_wczhp_menu_page');
add_action( 'admin_init', 'register_wczhp_settings' );
define( 'WCZHP_DOMAIN', 'wcz-hot-posts' );

function register_wczhp_menu_page() {

add_menu_page('WCZ Hot Posts', 'WCZ Hot Posts', 'add_users', __FILE__, 'wczhp_plugin_menu', plugins_url('wcz-hot-posts/img/icon.png'));

add_submenu_page(__FILE__, __('How to Use | WCZ Hot Posts', WCZHP_DOMAIN ), __('How to Use', WCZHP_DOMAIN ), 'add_users', __FILE__, 'wczhp_plugin_menu');
}

function register_wczhp_settings() {
register_setting( 'wczhp-settings-group', 'wczhp_options' );
}

include "admin/sidebar.php";

function wczhp_plugin_menu() {
if ( !current_user_can( 'manage_options' ) )  {
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
include "admin/usage.php";
}

?>