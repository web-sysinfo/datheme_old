<?php
// Register Menu
register_nav_menus( array(
    'primary-menu'      => __('Header Menu', 'xcode'), 
    'secondary-menu'    => __('Footer Menu', 'xcode')
) );

// Post Thumbnails Show in Post Edit 
add_theme_support('post-thumbnails');
// Add Header Options
add_theme_support( 'custom-header' );
add_theme_support( 'editor-styles', 'widgets-block-editor', 'customize-selective-refresh-widgets' );

add_post_type_support('page', 'excerpt');

// Create Service Post

add_action( 'init', function() {
	register_post_type( 'Service', array(
	'labels' => array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'menu_name' => 'Services',
		'all_items' => 'All Services',
		'edit_item' => 'Edit Service',
		'view_item' => 'View Service',
		'view_items' => 'View Services',
		'add_new_item' => 'Add New Service',
		'add_new' => 'Add New Service',
		'new_item' => 'New Service',
		'parent_item_colon' => 'Parent Service:',
		'search_items' => 'Search Services',
		'not_found' => 'No Services found',
		'not_found_in_trash' => 'No Services found in Trash',
		'archives' => 'Service Archives',
		'attributes' => 'Service Attributes',
		'insert_into_item' => 'Insert into Service',
		'uploaded_to_this_item' => 'Uploaded to this Service',
		'filter_items_list' => 'Filter Services list',
		'filter_by_date' => 'Filter Services by date',
		'items_list_navigation' => 'Services list navigation',
		'items_list' => 'Services list',
		'item_published' => 'Service published.',
		'item_published_privately' => 'Service published privately.',
		'item_reverted_to_draft' => 'Service reverted to draft.',
		'item_scheduled' => 'Service scheduled.',
		'item_updated' => 'Service updated.',
		'item_link' => 'Service Link',
		'item_link_description' => 'A link to a Service.',
	),
	'public' => true,
	'hierarchical' => true,
	'show_in_rest' => true,
	'menu_icon' => 'dashicons-megaphone',
	'supports' => array(
		0 => 'title',
		1 => 'editor',
        2 => 'excerpt',
		3 => 'thumbnail',
		4 => 'custom-fields',
	),
	'delete_with_user' => false,
) );
} );




