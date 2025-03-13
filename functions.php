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
register_post_type( 'team', array(
	'labels' => array(
		'name' => 'Teams',
		'singular_name' => 'Team',
		'menu_name' => 'Team',
		'all_items' => 'All Team',
		'edit_item' => 'Edit Team',
		'view_item' => 'View Team',
		'view_items' => 'View Team',
		'add_new_item' => 'Add New Team',
		'add_new' => 'Add New Team',
		'new_item' => 'New Team',
		'parent_item_colon' => 'Parent Team:',
		'search_items' => 'Search Team',
		'not_found' => 'No team found',
		'not_found_in_trash' => 'No team found in Trash',
		'archives' => 'Team Archives',
		'attributes' => 'Team Attributes',
		'insert_into_item' => 'Insert into team',
		'uploaded_to_this_item' => 'Uploaded to this team',
		'filter_items_list' => 'Filter team list',
		'filter_by_date' => 'Filter team by date',
		'items_list_navigation' => 'Team list navigation',
		'items_list' => 'Team list',
		'item_published' => 'Team published.',
		'item_published_privately' => 'Team published privately.',
		'item_reverted_to_draft' => 'Team reverted to draft.',
		'item_scheduled' => 'Team scheduled.',
		'item_updated' => 'Team updated.',
		'item_link' => 'Team Link',
		'item_link_description' => 'A link to a team.',
	),
	'public' => true,
	'hierarchical' => true,
	'show_in_rest' => true,
	'menu_icon' => 'dashicons-admin-users',
	'supports' => array(
		0 => 'title',
		1 => 'page-attributes',
		2 => 'thumbnail',
		3 => 'custom-fields',
	),
	'taxonomies' => array(
		0 => 'post_tag',
	),
	'delete_with_user' => false,
) );
} );

// Register custom action hook during WordPress initialization
// function register_team_hook() {
//     do_action(get_template_part( 'template-parts/team-cards', get_post_type() ));
// }
// add_action('init', 'register_team_hook');



