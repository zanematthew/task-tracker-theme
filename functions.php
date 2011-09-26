<?php

add_action( 'after_setup_theme', 'get_tasktracker_setup' );

function get_tasktracker_setup() { 
	
	$menus = array(
		'primary_header' => 'Header at the very top of the page',
		'primary_footer' => 'Footer at the very bottom of the page'
		);		
    register_nav_menus( $menus );
}