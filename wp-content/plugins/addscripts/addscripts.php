<?php
/*
Plugin Name: Add Scripts
Plugin URI: 
Description: Custom plugin for rddcreative. It adds required css and js files
Author: Cobianzo Ltd.
Version: 1.0
Author URI: http://cobianzo.com/
*/

function rddcreative_styles(){
    wp_register_style('rddcreative_stylesheet', plugins_url('style.css', __FILE__));  
    wp_enqueue_style('rddcreative_stylesheet');
    wp_register_style('about_css', plugins_url('about.css', __FILE__));  
    wp_enqueue_style('about_css');
    wp_register_style('contact_css', plugins_url('contact.css', __FILE__));  
    wp_enqueue_style('contact_css');
    wp_register_style('Roboto', 'http://fonts.googleapis.com/css?family=Roboto');  
    wp_enqueue_style('Roboto');  
}

add_action('wp_enqueue_scripts', 'rddcreative_styles');

function rddcreative_scripts() {
    wp_register_script('localscroll', plugins_url('jquery.localscroll-1.2.7-min.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('localscroll');
    wp_register_script('scrollTo', plugins_url('jquery.scrollTo-1.4.2-min.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('scrollTo');
    wp_register_script('interaction', plugins_url('interaction.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('interaction');
    wp_register_script('infobubble', plugins_url('infobubble.js', __FILE__), array('jquery'),'1.1', true);
    wp_enqueue_script('infobubble');
}

add_action('wp_enqueue_scripts', 'rddcreative_scripts');  






add_action("wp_footer", "select_menu_on_client_single", 21);
function select_menu_on_client_single(){ 

	if (is_single() && get_post_type() ==  'clients'){ ?>
	
		<script>
		jQuery('.menu-item-28').addClass('current-menu-item');
		</script>
		<?php
	}
}

