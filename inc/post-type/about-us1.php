<?php
/*
* Creating a function to create our CPT
*/
 
function about1_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Abouts', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'About', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Abouts', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent About', 'learnenglish' ),
            'all_items'           => __( 'All Abouts', 'learnenglish' ),
            'view_item'           => __( 'View About', 'learnenglish' ),
            'add_new_item'        => __( 'Add New About', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit About', 'learnenglish' ),
            'update_item'         => __( 'Update About', 'learnenglish' ),
            'search_items'        => __( 'Search About', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Abouts', 'learnenglish' ),
            'description'         => __( 'About news and reviews', 'learnenglish' ),
            'labels'              => $labels,
            'supports'            => array( 'title',  'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres', 'post_tag','category'),
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
        register_post_type( 'abouts', $args );  
    } 
    add_action( 'init', 'about1_post_type', 0 );

?>