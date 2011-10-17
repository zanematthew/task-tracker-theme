<?php

define( 'GET_TT_DIR', get_theme_root() . '/' . get_template());

add_action( 'after_setup_theme', 'get_tt_theme_setup' );

function get_tt_theme_setup() { 
	
	$menus = array(
		'primary_header' => 'Header at the very top of the page',
		'footer_one' => 'First level of links in the footer',
		'footer_two' => 'Second level of links in the footer'
		);		

    register_nav_menus( $menus );
  	
	wp_enqueue_script( 'get-tt-script', get_bloginfo( 'template_directory' ) . '/script.js', array('jquery','jquery-ui-dialog'), '0.0.1' );   

    add_action( 'wp_head', 'get_tt_ajax_url' );
    add_action( 'wp_footer', 'get_tt_footer' );
   
    // set-up whats needed for the login
    loginSetup();

    //
    wp_enqueue_script( 'flex-slider-script', get_bloginfo( 'template_directory' ) . '/library/js/flex-slider-1.7/jquery.flexslider-min.js', array('jquery'), '1.7' );   
    wp_enqueue_style( 'flex-slider-style', get_bloginfo( 'template_directory' ). '/library/js/flex-slider-1.7/flexslider.css', '' , 'all' );   

}

// print our ajax url
function get_tt_ajax_url(){
	print '<script type="text/javascript"> var ajax_url = "'. admin_url("admin-ajax.php") .'";</script>';	
}

// Anything to get stuffed into the footer goes here.
function get_tt_footer(){	
	create_div( "get_tt_login_dialog" );
}

// Used for creating blank divs, rely on *_target for ajax "target"
function create_div( $element_id=null ){
	print '<div id="'.$element_id.'"><div id="'.$element_id . '_target"></div></div>';
}

// Get files needed for login div
function loginSetup() {
	// make a blank div for ui-dialog
    add_action( 'wp_footer', 'create_div' );

    // allow for ajax
    add_action( 'wp_ajax_get_tt_load_template', 'get_tt_load_template' );
    add_action( 'wp_ajax_nopriv_get_tt_load_template', 'get_tt_load_template'); 
    
    add_action( 'wp_ajax_nopriv_get_tt_login_submit', 'get_tt_login_submit' );

	// load css    
	$dependencies['style'] = array('wp-jquery-ui-dialog');

    wp_enqueue_style( 'wp-jquery-ui-dialog' );
    wp_enqueue_style( 'get-tt-login-style', get_bloginfo('template_url') . '/css/login.css', $dependencies['style'], 'all' );        
    wp_enqueue_script( 'jquery-ui-effects' );        
}

// Helper used to load a template via ajax
function get_tt_load_template() {
    
	if ( $_POST['template'] == null )
        die( 'Yo, you need a fucking template!');

	load_template( GET_TT_DIR . '/custom/login.php' );
    die();	
}

function get_tt_login_submit() {
    // @todo needs to be generic for cpt
    check_ajax_referer( 'get-tt-ajax-forms', 'security' );
    
    // @todo this should include EVEERYTHING needed for ajax login to work!
    // js, css, actions etc.
    $creds = array();
    $creds['user_login'] = $_POST['user_name'];
    $creds['user_password'] = $_POST['password'];

    if ( !empty( $_POST['remember'] ) && $_POST['remeber'] == 'on' )
        $creds['remember'] = true;
    else            
        $creds['remember'] = false;
        
    $user = wp_signon( $creds, false );

    if ( is_wp_error( $user ) )
        $user->get_error_message();


    die();
}
