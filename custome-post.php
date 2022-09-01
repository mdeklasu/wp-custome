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


    register_taxonomy( 'portflio_category','slider', array( 
            	'labels' 				=> array(
                'name'                  => __( 'Portfolio Taxonomy', 'portfolio' ),
                'singular_name'         => __( 'Portfolio Taxonomy', 'portfolio' ),
                'search_items'          => __( 'Search Portfolio Taxonomy', 'portfolio' ),
                'popular_items'         => __( 'Popular Portfolio Taxonomy', 'portfolio' ),
                'all_items'             => __( 'All Portfolio Taxonomy', 'portfolio' ),
                'parent_item'           => __( 'Portfolio Taxonomy', 'portfolio' ),
                'parent_item_colon'     => __( 'Portfolio Taxonomy', 'portfolio' ),
                'edit_item'             => __( 'Edit Portfolio Taxonomy', 'portfolio' ),
                'update_item'           => __( 'Update Portfolio Taxonomy', 'portfolio' ),
                'add_new_item'          => __( 'Add New Portfolio Taxonomy', 'portfolio' ),
                'new_item_name'         => __( 'New Portfolio Taxonomy', 'portfolio' ),
                'add_or_remove_items'   => __( 'Add or remove Portfolio Taxonomy', 'portfolio' ),
                'choose_from_most_used' => __( 'Portfolio Taxonomy', 'portfolio' ),
                'menu_name'             => __( 'Portfolio Taxonomy', 'portfolio' ),
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
   
        
           
  
        
        add_action( 'init', 'portfolio_taxonomy' );
		
	}
	add_action('init','slider_post_ready');

			//Custome Post Type End


?>