<?php
/*
* Creating a function to create our CPT
*/
 
function portfolios_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Our Portfolios', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'Portfolios', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Our Portfolios', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent Portfolios', 'learnenglish' ),
            'all_items'           => __( 'All Our Portfolios', 'learnenglish' ),
            'view_item'           => __( 'View Portfolios', 'learnenglish' ),
            'add_new_item'        => __( 'Add New Portfolios', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit Portfolios', 'learnenglish' ),
            'update_item'         => __( 'Update Portfolios', 'learnenglish' ),
            'search_items'        => __( 'Search Portfolios', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Our Portfolios', 'learnenglish' ),
            'description'         => __( 'Portfolios news and reviews', 'learnenglish' ),
            'labels'              => $labels,
            'supports'            => array( 'title',  'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres','category'),
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
            'menu_icon'           => 'dashicons-images-alt',
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
        // Registering your Custom Post Type
        register_post_type( 'portfolio', $args );  
    } 
    add_action( 'init', 'portfolios_post_type', 0 );

?>