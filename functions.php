<?php
/*
 *  Author: Mario Lafuente
 *  URL: mariolafuente.com | 
 *  0.1  Global Variables
 * Theme Support
 * 


// /*------------------------------------*\
// 	Functions
// \*------------------------------------*/
add_filter('show_admin_bar', '__return_false');

global $WP_ENV;

require get_template_directory().'/inc/functions/cleanup.php';
require get_template_directory().'/inc/functions/admin_look.php';
require get_template_directory().'/inc/functions/enqueue.php';
require get_template_directory().'/inc/functions/menuNav.php';
require get_template_directory().'/inc/functions/element-support.php';
require get_template_directory().'/inc/functions/custom-post-type.php';
require get_template_directory().'/inc/functions/dashboad-menu.php';




?>
