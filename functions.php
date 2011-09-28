<?php

add_action( 'after_setup_theme', 'get_tasktracker_setup' );

function get_tasktracker_setup() { 
	
	$menus = array(
		'primary_header' => 'Header at the very top of the page',
		'footer_one' => 'First level of links in the footer',
		'footer_two' => 'Second level of links in the footer'
		);		
    register_nav_menus( $menus );

}