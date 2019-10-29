<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN ENQUEUE
	========================
*/

//
function load_custom_wp_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() .'/'.WP_ENV. '/css/admin.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


/*
	========================
		Login ENQUEUE 
	========================
*/

function mlm_enqueue_style_script() {
wp_enqueue_style( 'core', get_template_directory_uri() .'/'.WP_ENV. '/css/login.css', false );wp_enqueue_script( 'my-js',  get_template_directory_uri().'/'.WP_ENV. '/js/login.js', false ); 
}

add_action( 'login_enqueue_scripts', 'mlm_enqueue_style_script', 10 );


/*
	========================
		FRONT-END ENQUEUE FUNCTIONS
	========================
*/

function mlm_scripts_style_script() {


	if(WP_ENV === 'dist'){
		wp_enqueue_script( 'site_main_js', get_template_directory_uri() .'/'.WP_ENV. '/js/bundle.min*.js', array(), '1.0.0', true );
	}else{
		
	}
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/'.WP_ENV. '/js/bootstrap.bundle.js', array( 'jquery' ) );


	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/'.WP_ENV. '/css/layout/bootstrap.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'wp-block-library' ); //add guternberg


}
add_action( 'wp_enqueue_scripts', 'mlm_scripts_style_script' );
















