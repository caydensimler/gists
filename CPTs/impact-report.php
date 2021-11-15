<?php

function register_cpt_impact_report() {

	/**
	 * Post Type: Impact Reports.
	 */

	$labels = [
		"name" => __( "Impact Reports", "starter-theme" ),
		"singular_name" => __( "Report", "starter-theme" ),
		"menu_name" => __( "Impact Reports", "starter-theme" ),
		"all_items" => __( "All Impact Reports", "starter-theme" ),
		"add_new" => __( "Add New", "starter-theme" ),
		"add_new_item" => __( "Add New Report", "starter-theme" ),
		"edit_item" => __( "Edit Report", "starter-theme" ),
		"new_item" => __( "New Report", "starter-theme" ),
		"view_item" => __( "View Report", "starter-theme" ),
		"view_items" => __( "View Impact Reports", "starter-theme" ),
		"search_items" => __( "Search Impact Reports", "starter-theme" ),
		"not_found" => __( "No Impact Reports found", "starter-theme" ),
		"not_found_in_trash" => __( "No Impact Reports found in Trash", "starter-theme" ),
		"parent" => __( "Parent Report", "starter-theme" ),
		"featured_image" => __( "Featured image", "starter-theme" ),
		"set_featured_image" => __( "Set featured image", "starter-theme" ),
		"remove_featured_image" => __( "Remove featured image", "starter-theme" ),
		"use_featured_image" => __( "Use as featred image", "starter-theme" ),
		"archives" => __( "Report archives", "starter-theme" ),
		"insert_into_item" => __( "Insert into report", "starter-theme" ),
		"uploaded_to_this_item" => __( "Uploaded to this report", "starter-theme" ),
		"filter_items_list" => __( "Filter reports list", "starter-theme" ),
		"items_list_navigation" => __( "Impact Reports list navigation", "starter-theme" ),
		"items_list" => __( "Impact Reports list", "starter-theme" ),
		"attributes" => __( "Impact Reports Attributes", "starter-theme" ),
		"name_admin_bar" => __( "Report", "starter-theme" ),
		"item_published" => __( "Report published", "starter-theme" ),
		"item_published_privately" => __( "Report published privately", "starter-theme" ),
		"item_reverted_to_draft" => __( "Report reverted to draft", "starter-theme" ),
		"item_scheduled" => __( "Report scheduled", "starter-theme" ),
		"item_updated" => __( "Report updated", "starter-theme" ),
		"parent_item_colon" => __( "Parent Report", "starter-theme" ),
	];

	$args = [
		"label" => __( "Impact Reports", "starter-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "impact-report", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 49.5,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category" ],
		"show_in_graphql" => false,
	];

	register_post_type( "impact-report", $args );
}

add_action( 'init', 'register_cpt_impact_report' );