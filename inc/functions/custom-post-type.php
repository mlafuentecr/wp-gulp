<?php

/*
	
@package sunsettheme
	
	========================
		Custom type
	========================
*/

add_action( 'init', 'ende_init_custom_post_types' );
function ende_init_custom_post_types() {

   // Register CPTs
   register_post_type(
    'brand', 
    array(
      'labels' => array(
        'name' => __('Brands'),
        'singular_name' => __('Brand')
      ),
      'supports' => array(
        'title',
        'thumbnail'
      ),
      'menu_icon' => 'dashicons-shield',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_rest' => true,
      'capability_type' => 'post',
    ) 
  );

  register_taxonomy(
    'wine-type', 
    array(
      'brand',
    ), 
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => 'Wine Types',
        'singular_name' => 'Wine Type',
        'search_items' => 'Search Wine Types',
        'all_items' => 'All Wine Types',
        'parent_item' => 'Parent Wine Type',
        'parent_item_colon' => 'Parent Wine Type:',
        'edit_item' => 'Edit Wine Type',
        'update_item' => 'Update Wine Type',
        'add_new_item' => 'Add New Wine Type',
        'new_item_name' => 'New Wine Type Name',
        'menu_name' => 'Wine Types',
        'not_found' => 'No Wine Types found.'
      ),
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'wine-type'
      )
    )
  );

  flush_rewrite_rules();

}

