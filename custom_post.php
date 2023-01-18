<?php

function slider_post_ready(){
    register_post_type('slider',array(
        'labels'            =>array(
        'name'              =>__('Slider','textdomainek'),
        'singulare_name'	=>__('slider','textdomainek'),
        'add_new'			=>__('Add New Slider','textdomainek'),
        'add_new_item'		=>__('Add New Slider','textdomainek'),
        'edit_item'          => __( 'Edit Slider','textdomainek'),
        'all_items'			=>__('All Slider','textdomainek'),
        'search_items'		=>__('Search Slider','textdomainek'),
        'not_found'			=>__('Slider Not Found','textdomainek'),
        ),
        'public'			=>true,
        'menu_icon'			=> 'dashicons-align-center',
        'capability_type'	=>'page',
        'supports'			=>array('title','thumbnail','editor')
    ));
    register_taxonomy( 'Catagory_taxonomy','slider', array( 
        'labels' 				=> array(
        'name'                  => __( 'Catagory ', 'Catagory' ),
        'menu_name'             => __( 'Categories ', 'Catagory' ),
        'singular_name'         => __( 'Catagory ', 'Catagory' ),
        'add_new_item'          => __( 'Add New Catagory ', 'Catagory' ),
        'new_item_name'         => __( 'New Catagory ', 'Catagory' ),
        'search_items'          => __( 'Search Catagory ', 'Catagory' ),
        'popular_items'         => __( 'Popular Catagory ', 'Catagory' ),
        'all_items'             => __( 'All Catagory ', 'Catagory' ),
        'parent_item'           => __( 'Catagory ', 'Catagory' ),
        'parent_item_colon'     => __( 'Catagory ', 'Catagory' ),
        'edit_item'             => __( 'Edit Catagory ', 'Catagory' ),
        'update_item'           => __( 'Update Catagory ', 'Catagory' ),
        'add_or_remove_items'   => __( 'Add or remove Catagory ', 'Catagory' ),
        'choose_from_most_used' => __( 'Catagory ', 'Catagory' ),
        
    ),
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => false,
        'hierarchical'      => true,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    ));
add_action( 'init', 'Catagory_taxonomy' );  
}
add_action('init','slider_post_ready');
