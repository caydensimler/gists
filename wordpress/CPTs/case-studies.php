<?php

function register_cpt_case_study() {
	$labels = [
		"name" => __( "Case Studies", "gpc" ),
		"singular_name" => __( "Case Study", "gpc" ),
		"menu_name" => __( "Case Studies", "gpc" ),
		"all_items" => __( "All Case Studies", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Case Study", "gpc" ),
		"edit_item" => __( "Edit Case Study", "gpc" ),
		"new_item" => __( "New Case Study", "gpc" ),
		"view_item" => __( "View Case Study", "gpc" ),
		"view_items" => __( "View Case Studies", "gpc" ),
		"search_items" => __( "Search Case Studies", "gpc" ),
		"not_found" => __( "No Case Studies found", "gpc" ),
		"not_found_in_trash" => __( "No Case Studies found in Trash", "gpc" ),
		"parent" => __( "Parent Case Study:", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "Case Study archives", "gpc" ),
		"insert_into_item" => __( "Insert into Case Study", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this Case Study", "gpc" ),
		"filter_items_list" => __( "Filter Case Studies list", "gpc" ),
		"items_list_navigation" => __( "Case Studies list navigation", "gpc" ),
		"items_list" => __( "Case Studies List", "gpc" ),
		"attributes" => __( "Case Studies Attributes", "gpc" ),
		"name_admin_bar" => __( "Case Study", "gpc" ),
		"item_published" => __( "Case Study published", "gpc" ),
		"item_published_privately" => __( "Case Study published privately", "gpc" ),
		"item_reverted_to_draft" => __( "Case Study reverted to draft", "gpc" ),
		"item_scheduled" => __( "Case Study scheduled", "gpc" ),
		"item_updated" => __( "Case Study updated", "gpc" ),
		"parent_item_colon" => __( "Parent Case Study:", "gpc" ),
	];

	$args = [
		"label" => __( "Case Studies", "gpc" ),
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
		"rewrite" => [ "slug" => "case-studies", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-chart-area",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "case-studies", $args );
}

add_action( 'init', 'register_cpt_case_study' );