<?php

function register_cpt_projects() {
	$labels = array(
		"name" => __( "Projects", "gpc" ),
		"singular_name" => __( "Project", "gpc" ),
		"menu_name" => __( "Projects", "gpc" ),
		"all_items" => __( "All Projects", "gpc" ),
		"add_new" => __( "Add New", "gpc" ),
		"add_new_item" => __( "Add New Project", "gpc" ),
		"edit_item" => __( "Edit Project", "gpc" ),
		"new_item" => __( "New Project", "gpc" ),
		"view_item" => __( "View Project", "gpc" ),
		"view_items" => __( "View Projects", "gpc" ),
		"search_items" => __( "Search Project", "gpc" ),
		"not_found" => __( "No Projects found", "gpc" ),
		"not_found_in_trash" => __( "No Projects found in Trash", "gpc" ),
		"parent_item_colon" => __( "Parent Project:", "gpc" ),
		"featured_image" => __( "Featured image", "gpc" ),
		"set_featured_image" => __( "Set featured image", "gpc" ),
		"remove_featured_image" => __( "Remove featured image", "gpc" ),
		"use_featured_image" => __( "Use as featured image for this project", "gpc" ),
		"archives" => __( "Project archives", "gpc" ),
		"insert_into_item" => __( "Insert into project", "gpc" ),
		"uploaded_to_this_item" => __( "Uploaded to this project", "gpc" ),
		"filter_items_list" => __( "Filter projects list", "gpc" ),
		"items_list_navigation" => __( "Projects list navigation", "gpc" ),
		"items_list" => __( "Projects list", "gpc" ),
		"attributes" => __( "Projects Attributes", "gpc" ),
		"name_admin_bar" => __( "Project", "gpc" ),
		"parent_item_colon" => __( "Parent Project:", "gpc" ),
	);

	$args = array(
		"label" => __( "Projects", "gpc" ),
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
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projects", "with_front" => false ),
		"query_var" => true,
		"menu_icon" => "dashicons-category",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "projects", $args );
}

add_action( 'init', 'register_cpt_projects' );