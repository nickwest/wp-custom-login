<?php
/*
Plugin Name: WSU Custom Login
Plugin URI: http://blogs.wayne.edu/web/
Description: Custom style sheet for the wp-admin login
Author: Nick West (4sqr mayor of marketing)
Version: 1.0
Author URI: http://nickwest.me/
*/ 

// display custom login styles
function wp_custom_login() {
	
	// full plugin path
	$pluginUrl = site_url('', 'https') . '/wp-content/mu-plugins/wp-custom-login/wp-custom-login.css';
	
	echo '<link rel="stylesheet" type="text/css" href="' . $pluginUrl . '" />';

}
add_action('login_head', 'wp_custom_login');


function wp_field_names_change($translated_text, $text, $domain){

	switch ($text) {
		case 'Username':
			return 'AccessID';
		break;
	}
	
	return $translated_text;
}
add_filter('gettext', 'wp_field_names_change', 1, 3 ); 



// This hooks in right after the password field
function wp_custom_login_foot(){
	
	//echo 'hi';
	
}
add_action('login_form', 'wp_custom_login_foot');
?>