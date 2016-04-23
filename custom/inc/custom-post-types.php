<?php

/**
 * Custom post type declaration - Works
 */
add_action( 'init', 'create_post_type' );

function create_post_type() {

/* --- WORKS ----*/
register_post_type(
    'partner',   
    array(
        'label' => 'Partners',
        'labels' => array(
            'name' => 'Partners',
            'singular_name' => 'Partner',
            'all_items' => 'All partners',
            'add_new_item' => 'Add a new partner',
            'edit_item' => 'Edit partner',
            'new_item' => 'New partner',
            'view_item' => 'See partner',
            'search_items' => 'Search partners',
            'not_found' => 'No partner found',
            'not_found_in_trash'=> 'No partners found in trash'
        ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
        'title',
        'excerpt',
        'editor',
        'thumbnail'
    ),
    'has_archive' => false
    )
);

/* --- RESULTS ----*/
register_post_type(
    'result',   
    array(
        'label' => 'Results',
        'labels' => array(
            'name' => 'Results',
            'singular_name' => 'Result',
            'all_items' => 'All results',
            'add_new_item' => 'Add a new result',
            'edit_item' => 'Edit result',
            'new_item' => 'New result',
            'view_item' => 'See result',
            'search_items' => 'Search results',
            'not_found' => 'No result found',
            'not_found_in_trash'=> 'No results found in trash'
        ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
        'title',
        'excerpt',
        'editor'
    ),
    'has_archive' => false
    )
);

}

?>