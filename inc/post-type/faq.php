<?php
/*
* Creating a function to create our faq
*/
 
function faq_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Our FAQ', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Our FAQ', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent FAQ', 'learnenglish' ),
            'all_items'           => __( 'All Our FAQ', 'learnenglish' ),
            'view_item'           => __( 'View FAQ', 'learnenglish' ),
            'add_new_item'        => __( 'Add New FAQ', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit FAQ', 'learnenglish' ),
            'update_item'         => __( 'Update FAQ', 'learnenglish' ),
            'search_items'        => __( 'Search FAQ', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Our FAQ', 'learnenglish' ),
            'description'         => __( 'FAQ news and reviews', 'learnenglish' ),
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
            'menu_icon'           => 'dashicons-superhero',
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
        // Registering your Custom Post Type
        register_post_type( 'faq', $args );  
    } 
    add_action( 'init', 'faq_post_type', 0 );

?>