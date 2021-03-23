<?php
/*
* Creating a function to create Pricings
*/
 
function pricing_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Pricings', 'Post Type General Name', 'learnenglish' ),
            'singular_name'       => _x( 'Pricing', 'Post Type Singular Name', 'learnenglish' ),
            'menu_name'           => __( 'Pricings', 'learnenglish' ),
            'parent_item_colon'   => __( 'Parent Pricing', 'learnenglish' ),
            'all_items'           => __( 'All Pricings', 'learnenglish' ),
            'view_item'           => __( 'View Pricing', 'learnenglish' ),
            'add_new_item'        => __( 'Add New Pricing', 'learnenglish' ),
            'add_new'             => __( 'Add New', 'learnenglish' ),
            'edit_item'           => __( 'Edit Pricing', 'learnenglish' ),
            'update_item'         => __( 'Update Pricing', 'learnenglish' ),
            'search_items'        => __( 'Search Pricing', 'learnenglish' ),
            'not_found'           => __( 'Not Found', 'learnenglish' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'learnenglish' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'Pricings', 'learnenglish' ),
            'description'         => __( 'Pricing news and reviews', 'learnenglish' ),
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
            'menu_icon'           => 'dashicons-money-alt',
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
        // Registering your Custom Post Type
        register_post_type( 'pricing', $args );  
    } 
    add_action( 'init', 'pricing_post_type', 0 );

?>