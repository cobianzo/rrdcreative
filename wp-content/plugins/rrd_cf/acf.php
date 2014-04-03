<?php 

function check_if_attachment_bg_style_height($post_id, $attach_id){
	$list_all_attach_id = (get_post_meta($post_id, 'images_background_resize', true));
	if (strpos(" ".$list_all_attach_id, "*$attach_id*" )) return 1;
	return false;
}


// page clients (main one)
if(function_exists("register_field_group"))
{
	$background_images_checkboxes = "";
	 if (is_admin()) :
	$post_id = $_GET['post'];	
	 $attachments = new Attachments( 'my_attachments' );
        $j = 2;
        if( $attachments->exist() ) : 
            while( $attachments->get() ) :	            
            	$attach_info = wp_get_attachment_image_src($attachments->id(), "thumbnail" );
	            $background_images_checkboxes .= "
	            <div style='float:left; text-align:center; margin:5px;' >
	            	<img width=100 height=100 src='".$attach_info[0]."' style='border:5px solid #ccaacc'><br>";
	            $background_images_checkboxes .= "
	            <input class='bg-style-height-input' data-attachid='".$attachments->id()."' name='bg-style-height-".$attachments->id()."' id='bg-style-height-".$attachments->id()."' 
	            	".(( check_if_attachment_bg_style_height($post_id, $attachments->id()) ==  1 )? "checked='checked" : '')." value='".$attachments->id()."' type='checkbox' 
	            	onclick='update_post_attachments_bg_input(\"bg-style-height-".$attachments->id()."\");'  />
	            </div>";
    	        $j++;
            endwhile;
        endif;
	endif;
	$background_images_checkboxes .= " <hr style='width:100%;'>
		<script>
			function update_post_attachments_bg_input(input_id) {
					var input_style = document.getElementById(input_id);
					var post_input 	= document.getElementById('acf-field-images_background_resize');
				    if (input_style.checked){
				    	post_input.value = post_input.value.replace('*'+input_style.value+'*', '')+'*'+input_style.value+'*';
				    }else{
				    	post_input.value = post_input.value.replace('*'+input_style.value+'*', '');
				    }
			}
		
		</script>
	
	";
	
	
	
	
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
				'instructions' => 'Image Position Horizontal (%)',
				'default_value' => 50,
				'placeholder' => '50',
				'prepend' => '%',
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
				'instructions' => 'Image Position Vertical (%)',
				'default_value' => 50,
				'placeholder' => '50',
				'prepend' => '%',
				'append' => '',
				'min' => 0,
				'max' => 100,
				'step' => '',
			),
			array (
				'key' => 'field_533ae80b5b57e',
				'label' => 'Background resize',
				'name' => 'background_resize',
				'type' => 'select',
				'instructions' => 'Select which dimension is going to determine the resizing of the background image',
				'choices' => array (
					'resize_width' => 'Adjust the width of the background to the width of the screen',
					'resize_height' =>  'Adjust the height of the background to the height of the container',
					'bg_size_100' =>  'Background size 100%',
				),
				'default_value' => 'resize_width',
				'allow_null' => 0,
				'multiple' => 0,
			),			
			array (
				'key' => 'field_533ae8fffffff',
				'label' => '',
				'name' => 'images_background_resize',
				'type' => 'text',
				'instructions' => 'For the rest of the images, select which ones will be adjusted by the height. Note that the list of images below is only updated when this page is Saved
					
				
				
				
				'.$background_images_checkboxes,
				'default_value' => '',
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
	
	
	register_field_group(array (
		'id' => 'acf_page-contact',
		'title' => 'Contact Details',
		'fields' => array (

			array (
				'key' => 'field_530b256aaabbbb',
				'label' => 'Card #1 Text',
				'name' => 'card_1_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_530b256aaaccccc',
				'label' => 'Card #2 Text',
				'name' => 'card_2_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '21',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				'the_content',
			),
		),
		'menu_order' => 0,
	));
	
	
		
	
	
	
	
}

// Locations

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_locations',
		'title' => 'Locations',
		'fields' => array (
			array (
				'key' => 'field_531391d170a79',
				'label' => 'Label Image',
				'name' => 'label_image',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5313922e70a7a',
				'label' => 'Latitude',
				'name' => 'latitude',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5313924770a7b',
				'label' => 'Longitude',
				'name' => 'longitude',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5313925a70a7c',
				'label' => 'Details',
				'name' => 'details',
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
					'value' => 'locations',
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





