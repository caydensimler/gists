<?php

function register_cpt_episodes() {
	$labels = [
		"name" => __( "Episodes", "gpc" ),
		"singular_name" => __( "Episode", "gpc" ),
		"menu_name" => __( "Episodes", "gpc" ),
		"all_items" => __( "All Episodes", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Episode", "gpc" ),
		"edit_item" => __( "Edit Episode", "gpc" ),
		"new_item" => __( "New Episode", "gpc" ),
		"view_item" => __( "View Episode", "gpc" ),
		"view_items" => __( "View Episodes", "gpc" ),
		"search_items" => __( "Search Episodes", "gpc" ),
		"not_found" => __( "No Episodes found", "gpc" ),
		"not_found_in_trash" => __( "No Episodes found in trash", "gpc" ),
		"parent" => __( "Parent Episode", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "Episode archives", "gpc" ),
		"insert_into_item" => __( "Insert into episode", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this episode", "gpc" ),
		"filter_items_list" => __( "Filter episodes list", "gpc" ),
		"items_list_navigation" => __( "Episodes list navigation", "gpc" ),
		"items_list" => __( "Episodes list", "gpc" ),
		"attributes" => __( "Episodes Attributes", "gpc" ),
		"name_admin_bar" => __( "Episode", "gpc" ),
		"item_published" => __( "Episode published", "gpc" ),
		"item_published_privately" => __( "Episode published privately", "gpc" ),
		"item_reverted_to_draft" => __( "Episode reverted to draft", "gpc" ),
		"item_scheduled" => __( "Episode scheduled", "gpc" ),
		"item_updated" => __( "Episode updated", "gpc" ),
		"parent_item_colon" => __( "Parent Episode", "gpc" ),
	];

	$args = [
		"label" => __( "Episodes", "gpc" ),
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
		"rewrite" => [ "slug" => "episodes", "with_front" => false ],
		"query_var" => true,
		"menu_position" => 55,
		"menu_icon" => "dashicons-microphone",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "episodes", $args );
}

add_action( 'init', 'register_cpt_episodes' );