<?php

function register_cpt_team() {
	$labels = array(
		"name" => __( "Team", "gpc" ),
		"singular_name" => __( "Team Member", "gpc" ),
		"menu_name" => __( "Team", "gpc" ),
		"all_items" => __( "Team", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Team Member", "gpc" ),
		"edit_item" => __( "Edit Team Member", "gpc" ),
		"new_item" => __( "New Team Member", "gpc" ),
		"view_item" => __( "View Team Member", "gpc" ),
		"view_items" => __( "View Team", "gpc" ),
		"search_items" => __( "Search Team Member", "gpc" ),
		"not_found" => __( "No Team Members found", "gpc" ),
		"not_found_in_trash" => __( "No Team Members found in Trash", "gpc" ),
		"parent_item_colon" => __( "Parent Team Member", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image for this team member", "gpc" ),
		"archives" => __( "Team Member archives", "gpc" ),
		"insert_into_item" => __( "Insert into team member", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this team member", "gpc" ),
		"filter_items_list" => __( "Filter team list", "gpc" ),
		"items_list_navigation" => __( "Team Members list navigation", "gpc" ),
		"items_list" => __( "Team list", "gpc" ),
		"attributes" => __( "Team Members Attributes", "gpc" ),
		"name_admin_bar" => __( "Team Member", "gpc" ),
		"parent_item_colon" => __( "Parent Team Member", "gpc" ),
	);

	$args = array(
		"label" => __( "Team", "gpc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "people", "with_front" => false ),
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		// "taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "team", $args );
}

add_action( 'init', 'register_cpt_team' );