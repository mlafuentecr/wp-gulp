<?php

/*
	
@package sunsettheme
	
	========================
		menuNav FUNCTIONS
	========================
*/
function register_navwalker(){
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// blank_nav this is call from header  blank_nav();
function blank_nav()
{
	wp_nav_menu(
	array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'bs-example-navbar-collapse-1',
    'menu_class'      => 'navbar-nav mr-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
		)
	);
}

// Register HTML5 Blank Navigation
function register_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
			  'primary' => __( 'Primary Menu', 'menuNav'), 	// Main Navigation
        'sidebar-menu' 	=> __('Sidebar Menu', 'menuNav'), 	// Sidebar Navigation
        'extra-menu' 		=> __('Extra Menu', 'menuNav') 		// Extra Navigation if needed (duplicate as many as you need!)
    ));
}

	// Add Actions
	add_action('init', 'register_menu');








