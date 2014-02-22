<?php 



if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_clients',
		'title' => 'Clients',
		'fields' => array (
			array (
				'key' => 'field_5301b788775c8',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_52fcf6c528c06',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_530366ab673eb',
				'label' => 'Background Image X',
				'name' => 'background_image_x',
				'type' => 'number',
				'instructions' => 'Image Position Horizontal',
				'default_value' => 50,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => 100,
				'step' => '',
			),
			array (
				'key' => 'field_5303674c00baf',
				'label' => 'Background Image Y ',
				'name' => 'background_image_y',
				'type' => 'number',
				'instructions' => 'Image Position Vertical',
				'default_value' => 50,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => 100,
				'step' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'clients',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 30,
	));
}
