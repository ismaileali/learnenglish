<?php
/*
* Creating a function to create our CPT
*/
 
function work_process_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Work Process', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'Process', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Work Process', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent Process', 'learnenglish' ),
            'all_items'           => __( 'All Work Process', 'learnenglish' ),
            'view_item'           => __( 'View Process', 'learnenglish' ),
            'add_new_item'        => __( 'Add New Process', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit Process', 'learnenglish' ),
            'update_item'         => __( 'Update Process', 'learnenglish' ),
            'search_items'        => __( 'Search Process', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Work Process', 'learnenglish' ),
            'description'         => __( 'Process news and reviews', 'learnenglish' ),
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
            'menu_icon'           => 'dashicons-podio',
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
        // Registering your Custom Post Type
        register_post_type( 'work-process', $args );  
    } 
    add_action( 'init', 'work_process_post_type', 0 );

?>