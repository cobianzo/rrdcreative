<?php 


// page clients (main one)
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




// page about us
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_about-boxes',
		'title' => 'About Boxes',
		'fields' => array (
			array (
				'key' => 'field_530b2a103cbfa',
				'label' => 'Button',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_530b23af6916b',
				'label' => 'Box Image',
				'name' => 'box_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_530b240cd0363',
				'label' => 'Box Positon X',
				'name' => 'box_positon_x',
				'type' => 'number',
				'instructions' => 'Horizontal Box position',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 3,
				'step' => '',
			),
			array (
				'key' => 'field_530b24c654191',
				'label' => 'Box Positon Y',
				'name' => 'box_positon_y',
				'type' => 'number',
				'instructions' => 'Vertical Box position',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 4,
				'step' => '',
			),
			array (
				'key' => 'field_530b2a293cbfb',
				'label' => 'Pop-up',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_530b256cb6a65',
				'label' => 'Pop-up Content',
				'name' => 'pop-up_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_530b265088806',
				'label' => 'Pop-up positon X',
				'name' => 'pop-up_positon_x',
				'type' => 'number',
				'instructions' => 'Horizontal pop-up position',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 3,
				'step' => '',
			),
			array (
				'key' => 'field_530b26d8d4db1',
				'label' => 'Pop-up positon Y',
				'name' => 'pop-up_positon_y',
				'type' => 'number',
				'instructions' => 'Horizontal pop-up position',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 4,
				'step' => '',
			),
			array (
				'key' => 'field_530b2939bf951',
				'label' => 'Pop-up Rows',
				'name' => 'pop-up_rows',
				'type' => 'number',
				'instructions' => 'Horizontal pop-up position',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 4,
				'step' => '',
			),
			array (
				'key' => 'field_530b29b7645fb',
				'label' => 'Pop-up Columns',
				'name' => 'pop-up_columns',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 1,
				'max' => 3,
				'step' => '',
			),
			array (
				'key' => 'field_530b793f2c0b4',
				'label' => 'Mobile',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_530b796c2c0b5',
				'label' => 'Responsive Content',
				'name' => 'responsive_content',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'about_boxes',
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
		'menu_order' => 0,
	));
	
	
	
	
	// homepage, bg main image.
	register_field_group(array (
		'id' => 'acf_home',
		'title' => 'Home',
		'fields' => array (
			array (
				'key' => 'field_5301bba681799',
				'label' => 'Background Image',
				'name' => 'background_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '16',
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
		'menu_order' => 0,
	));
}
