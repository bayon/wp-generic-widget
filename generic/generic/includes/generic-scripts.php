<?php
//add scripts
function generic_scripts(){
	//add css
	wp_enqueue_style('generic-style',plugins_url().'/generic/css/style.css');
	//add js
	wp_enqueue_script('generic-script',plugins_url().'/generic/js/main.js');
}

add_action('wp_enqueue_scripts','generic_scripts');