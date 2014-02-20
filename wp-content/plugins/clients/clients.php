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
function my_attachments( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
    array(
      'name'      => 'caption',                       // unique field name
      'type'      => 'textarea',                      // registered field type
      'label'     => __( 'Caption', 'attachments' ),  // label to display
      'default'   => 'caption',                       // default value upon selection
    ),
  );

  $args = array(

    // title of the meta box (string)
    'label'         => 'Additional Images',

    // all post types to utilize (string|array)
    'post_type'     => array( 'clients' ),

    // meta box position (string) (normal, side or advanced)
    'position'      => 'normal',

    // meta box priority (string) (high, default, low, core)
    'priority'      => 'low',

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => array (image),  // no filetype limit

    // include a note within the meta box (string)
    'note'          => '',

    // by default new Attachments will be appended to the list
    // but you can have then prepend if you set this to false
    'append'        => true,

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Add image', 'attachments' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Attach', 'attachments' ),

    // which tab should be the default in the modal (string) (browse|upload)
    'router'        => 'browse',

    // fields array
    'fields'        => $fields,

  );

  $attachments->register( 'my_attachments', $args ); // unique instance name
}

add_action( 'attachments_register', 'my_attachments' );
?>
