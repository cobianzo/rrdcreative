<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title><?php echo ($a = wp_title(''))? $a : get_bloginfo('blogname');  ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=0">
    <?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
   <?php 
        global $post; 
        if ($post->ID == 21 ){
    ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <?php } ?>
</head>

<body>
<!--IE specific div elements-->
<div id="wrapper">
    <div id="container">
        <!--Header Including Responsive Menus------------------------------------------------------------------------->
        <div id='header'>
            
            <div id="menu">
                
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'dropdown')); ?>
                <div id="dropdownCover"></div>
                <div id="dropdownButton"></div>
                <div id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/images/rrdcreative_id.png" width="156" height="25" alt="<?php bloginfo('name'); ?>"></a></div>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'menu_links')); ?>
            </div>

                