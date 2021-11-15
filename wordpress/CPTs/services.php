<?php

function register_cpt_services() {
	$labels = [
		"name" => __( "Services", "custom-post-type-ui" ),
		"singular_name" => __( "Service", "custom-post-type-ui" ),
		"menu_name" => __( "Services", "custom-post-type-ui" ),
		"all_items" => __( "All Service", "custom-post-type-ui" ),
		"add_new" => __( "Add New", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Service", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Service", "custom-post-type-ui" ),
		"new_item" => __( "New Service", "custom-post-type-ui" ),
		"view_item" => __( "View Service", "custom-post-type-ui" ),
		"view_items" => __( "View Services", "custom-post-type-ui" ),
		"search_items" => __( "Search Services", "custom-post-type-ui" ),
		"not_found" => __( "No Services found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Service found in Trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Service:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this service", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image", "custom-post-type-ui" ),
		"archives" => __( "Service archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into service", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Uploaded to this service", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter services list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Services list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Services list", "custom-post-type-ui" ),
		"attributes" => __( "Services Attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Service", "custom-post-type-ui" ),
		"item_published" => __( "Service published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Service published privately", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Service reverted to draft", "custom-post-type-ui" ),
		"item_scheduled" => __( "Service scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Service updated", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Service:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Services", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "services", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'register_cpt_services' );