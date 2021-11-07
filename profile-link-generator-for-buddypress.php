<?php
/**
* Plugin Name: Profile Link Generator for Buddypress
* Description: Redirects Your Users to Their Buddypress Profile Page. Just Create A Blank Page With Permalink Base As Profile. Rest All Will Be Taken Care By Us. Enjoy..!!
* Version: 1.0.3
* Author: Yaglewad Onkar
* Author URI: https://onkar-yaglewad.pantheonsite.io
* License:      GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
**/

function profile_link_generator_62(){
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if($_SERVER['REQUEST_URI'] == '/profile/' && is_plugin_active('buddypress/bp-loader.php') && is_user_logged_in()){
		global $current_user;
		wp_redirect( get_bloginfo('url') . '/members/'. $current_user->user_login . '/profile/'); 
		exit();
	}
		elseif($_SERVER['REQUEST_URI'] == '/profile/' && is_plugin_active('buddypress/bp-loader.php') ){
		global $current_user;
		wp_redirect( get_bloginfo('url') . '/wp-login.php/' ); 
		exit(); }
 }
add_action('init', 'profile_link_generator_62');
