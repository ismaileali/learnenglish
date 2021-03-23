<?php
/*
* Creating a function to create our CPT
*/
 
function teams_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Our Teams', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'Teams', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Our Teams', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent Teams', 'learnenglish' ),
            'all_items'           => __( 'All Our Teams', 'learnenglish' ),
            'view_item'           => __( 'View Teams', 'learnenglish' ),
            'add_new_item'        => __( 'Add New Teams', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit Teams', 'learnenglish' ),
            'update_item'         => __( 'Update Teams', 'learnenglish' ),
            'search_items'        => __( 'Search Teams', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Our Teams', 'learnenglish' ),
            'description'         => __( 'Teams news and reviews', 'learnenglish' ),
            'labels'              => $labels,
            'supports'            => array( 'title',  'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
        // Registering your Custom Post Type
        register_post_type( 'teams', $args );  
    } 
    add_action( 'init', 'teams_post_type', 0 );

?>