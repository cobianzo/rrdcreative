<?php

/*
Plugin Name: Clients Custom Post Type
Plugin URI: 
Description: Custom plugin for rddcreative. It creates the client custom post type
Author: Cobianzo Ltd.
Version: 1.0
Author URI: http://cobianzo.com/
*/
add_action( 'init', 'create_clients' );

function create_clients() {
    $labels = array(
    'name' => _x('Clients', 'post type general name'),
    'singular_name' => _x('Client', 'post type singular name'),
    'add_new' => _x('Add New', 'Client'),
    'add_new_item' => __('Add new Client'),
    'edit_item' => __('Edit client'),
    'new_item' => __('New client'),
    'view_item' => __('View client'),
    'search_items' => __('Search clients'),
    'not_found' =>  __('No clients found'),
    'not_found_in_trash' => __('No clients found in Trash'),
    'parent_item_colon' => ''
  );

  $supports = array('title',  'page-attributes');

  register_post_type( 'clients',
    array(
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
      'hierarchical' => true
    )
  );
}

