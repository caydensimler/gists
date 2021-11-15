<?php

function register_cpt_clients() {
	$labels = [
		"name" => __( "Clients", "gpc" ),
		"singular_name" => __( "Client", "gpc" ),
		"menu_name" => __( "Clients", "gpc" ),
		"all_items" => __( "All Clients", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Client", "gpc" ),
		"edit_item" => __( "Edit Client", "gpc" ),
		"new_item" => __( "New Client", "gpc" ),
		"view_item" => __( "View Client", "gpc" ),
		"view_items" => __( "View Clients", "gpc" ),
		"search_items" => __( "Search Clients", "gpc" ),
		"not_found" => __( "No Clients found", "gpc" ),
		"not_found_in_trash" => __( "No Clients found in Trash", "gpc" ),
		"parent" => __( "Parent Client:", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "Client archives", "gpc" ),
		"insert_into_item" => __( "Insert into Client", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this Client", "gpc" ),
		"filter_items_list" => __( "Filter Clients list", "gpc" ),
		"items_list_navigation" => __( "Clients list navigation", "gpc" ),
		"items_list" => __( "Clients List", "gpc" ),
		"attributes" => __( "Clients Attributes", "gpc" ),
		"name_admin_bar" => __( "Client", "gpc" ),
		"item_published" => __( "Client published", "gpc" ),
		"item_published_privately" => __( "Client published privately", "gpc" ),
		"item_reverted_to_draft" => __( "Client reverted to draft", "gpc" ),
		"item_scheduled" => __( "Client scheduled", "gpc" ),
		"item_updated" => __( "Client updated", "gpc" ),
		"parent_item_colon" => __( "Parent Client:", "gpc" ),
	];

	$args = [
		"label" => __( "Clients", "gpc" ),
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
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "clients", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-rest-api",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "clients", $args );
}

add_action( 'init', 'register_cpt_clients' );