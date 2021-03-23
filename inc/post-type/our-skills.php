<?php
/*
* Creating a function to create our CPT
*/
 
function Skills_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Our Skills', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'Skills', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Our Skills', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent Skills', 'learnenglish' ),
            'all_items'           => __( 'All Our Skills', 'learnenglish' ),
            'view_item'           => __( 'View Skills', 'learnenglish' ),
            'add_new_item'        => __( 'Add New Skills', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit Skills', 'learnenglish' ),
            'update_item'         => __( 'Update Skills', 'learnenglish' ),
            'search_items'        => __( 'Search Skills', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Our Skills', 'learnenglish' ),
            'description'         => __( 'Skills news and reviews', 'learnenglish' ),
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
        register_post_type( 'skills', $args );  
    } 
    add_action( 'init', 'skills_post_type', 0 );

?>