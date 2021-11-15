<?php

function register_cpt_events() {
	$labels = [
		"name" => __( "Events", "gpc" ),
		"singular_name" => __( "Event", "gpc" ),
		"menu_name" => __( "Events", "gpc" ),
		"all_items" => __( "All Events", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Event", "gpc" ),
		"edit_item" => __( "Edit Event", "gpc" ),
		"new_item" => __( "New Event", "gpc" ),
		"view_item" => __( "View Event", "gpc" ),
		"view_items" => __( "View Events", "gpc" ),
		"search_items" => __( "Search Events", "gpc" ),
		"not_found" => __( "No Events found", "gpc" ),
		"not_found_in_trash" => __( "No Events found in Trash", "gpc" ),
		"parent" => __( "Parent Event:", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image", "gpc" ),
		"archives" => __( "Event archives", "gpc" ),
		"insert_into_item" => __( "Insert into Event", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this Event", "gpc" ),
		"filter_items_list" => __( "Filter Events list", "gpc" ),
		"items_list_navigation" => __( "Events list navigation", "gpc" ),
		"items_list" => __( "Events list", "gpc" ),
		"attributes" => __( "Events Attributes", "gpc" ),
		"name_admin_bar" => __( "Event", "gpc" ),
		"item_published" => __( "Event published", "gpc" ),
		"item_published_privately" => __( "Event published privately", "gpc" ),
		"item_reverted_to_draft" => __( "Event reverted to draft", "gpc" ),
		"item_scheduled" => __( "Event schedules", "gpc" ),
		"item_updated" => __( "Event updated", "gpc" ),
		"parent_item_colon" => __( "Parent Event:", "gpc" ),
	];

	$args = [
		"label" => __( "Events", "gpc" ),
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
		"rewrite" => [ "slug" => "events", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "events", $args );
}

add_action( 'init', 'register_cpt_events' );