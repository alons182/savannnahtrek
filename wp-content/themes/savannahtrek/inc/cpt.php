<?php


function my_taxonomies_tours() {
  $labels = array(
    'name'              => _x( 'Type Tour', 'taxonomy general name' ),
    'singular_name'     => _x( 'Type Tour', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Types Tour' ),
    'all_items'         => __( 'All Types Tour' ),
    'parent_item'       => __( 'Parent Type Tour' ),
    'parent_item_colon' => __( 'Parent Type Tour:' ),
    'edit_item'         => __( 'Edit Type Tour' ), 
    'update_item'       => __( 'Update Type Tour' ),
    'add_new_item'      => __( 'Add New Type Tour' ),
    'new_item_name'     => __( 'New Type Tour' ),
    'menu_name'         => __( 'Types Tour' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'type-tour', 'tour', $args );
}
add_action( 'init', 'my_taxonomies_tours', 0 );
