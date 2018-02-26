<?php 
/*
Plugin Name: Generic
Plugin URI: http://foo.com
Description:  A Generic Widget , foundation for Custom Widget Building.
Version: 1.0
Author: generic g
Author URI: http://foo.com
License: none
*/
/*
if(!defined('ABSPATH')){
	exit;
}
*/
//Load Styles and Scripts
require_once(plugin_dir_path(__FILE__).'/includes/generic-scripts.php');
//Load Class
require_once(plugin_dir_path(__FILE__).'/includes/generic-class.php');
//Register Widget
function register_generic(){
	//Widget Class Name
	register_widget('Generic_Widget');
}
//Hook In
add_action('widgets_init','register_generic');