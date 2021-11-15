<?php

function register_cpt_news() {
	$labels = [
		"name" => __( "News", "gpc" ),
		"singular_name" => __( "News", "gpc" ),
		"menu_name" => __( "News", "gpc" ),
		"all_items" => __( "All News", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New News", "gpc" ),
		"edit_item" => __( "Edit News", "gpc" ),
		"new_item" => __( "New News", "gpc" ),
		"view_item" => __( "View News", "gpc" ),
		"view_items" => __( "View News", "gpc" ),
		"search_items" => __( "Search News", "gpc" ),
		"not_found" => __( "No News found", "gpc" ),
		"not_found_in_trash" => __( "No News found in Trash", "gpc" ),
		"parent" => __( "Parent News:", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "News archives", "gpc" ),
		"insert_into_item" => __( "Insert into news", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this news", "gpc" ),
		"filter_items_list" => __( "Filter news list", "gpc" ),
		"items_list_navigation" => __( "News list navigation", "gpc" ),
		"items_list" => __( "News list", "gpc" ),
		"attributes" => __( "News Attributes", "gpc" ),
		"name_admin_bar" => __( "News", "gpc" ),
		"item_published" => __( "News published", "gpc" ),
		"item_published_privately" => __( "News published privately", "gpc" ),
		"item_reverted_to_draft" => __( "News reverted to draft", "gpc" ),
		"item_scheduled" => __( "News scheduled", "gpc" ),
		"item_updated" => __( "News updated", "gpc" ),
		"parent_item_colon" => __( "Parent News:", "gpc" ),
	];

	$args = [
		"label" => __( "News", "gpc" ),
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
		"hierarchical" => true,
		"rewrite" => [ "slug" => "news", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "post_tag" ],
	];

	register_post_type( "news", $args );
}

add_action( 'init', 'register_cpt_news' );