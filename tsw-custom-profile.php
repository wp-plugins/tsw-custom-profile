<?php
/*
Plugin Name: TSW Custom Profile
Plugin URI: https://themes.tradesouthwest.com/plugins/TSW-Custom-Profile/
Description: Custom post type plugin for posting banner like articles to top of TSW theme Jacqui.
Author: Larry Judd Oliver
Author URI: http://tradesouthwest.com/
Version: 1.0.0
License: GNU General Public License v3.0
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/*  Copyright 2014  Tradesouthwest  (email : larry@tradesouthwest.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    
*/

/**
 * tsw custom profile post type function.
 * 
 * This function creates a new post type for WordPress theme Jacqui and is specific to this theme.
 *
 * @since 1.0.0
 *
 */

// create custom post type for menu profile

add_action( 'init', 'register_tswcust_custom_profile' );

function register_tswcust_custom_profile() {
    $labels = array( 
        'name' => __( 'Custom Profiles', 'tswcust' ),
        'singular_name' => __( 'Custom Profile', 'tswcust' ),
        'add_new' => __( 'Add New - limit 12', 'tswcust' ),
        'add_new_item' => __( 'Add New Custom Profile', 'tswcust' ),
        'edit_item' => __( 'Edit Custom Profile', 'tswcust' ),
        'new_item' => __( 'New Custom Profile', 'tswcust' ),
        'view_item' => __( 'View Custom Profile', 'tswcust' ),
        'search_items' => __( 'Search Custom Profiles', 'tswcust' ),
        'not_found' => __( 'No custom profiles found', 'tswcust' ),
        'not_found_in_trash' => __( 'No custom profiles found in Trash', 'tswcust' ),
        'parent_item_colon' => '',
        'menu_name' => 'Custom Profiles'
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom post profile.',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'page-category', 'link_category', 'post_format' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 45,
        'menu_icon' => plugin_dir_url( __FILE__ ) . 'tsw-profile/icon_pin24.png',
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'custom_profile', $args );
}
require_once dirname( __FILE__ ) . '/tsw-profile-feed.php';
?>
