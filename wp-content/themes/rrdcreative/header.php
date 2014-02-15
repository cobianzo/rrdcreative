<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title><?php echo wp_title('');  ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=0">
    <?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
   
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
                <div id="logo"><a href="index.html"><img src="images/rrdcreative_id.png" width="156" height="25" alt="rrdcreative"></a></div>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_id' => 'menu_links')); ?>
  
            </div>
            <div id="nav">
                <a href="#hero">
                <div id="btn" style="background-image: url(images/return_background.png);">Some of our clients:</div></a>
                <a href="#work1"><div id="btn">British Airways</div></a>
                <a href="#work2"><div id="btn">O2</div></a>
                <a href="#work3"><div id="btn">Kellogg's</div></a>
                <a href="#work7"><div id="btn">Waterford Wedgwood <br />Royal Doulton</div></a>
                <a href="#work4"><div id="btn">University of Edinburgh</div></a>
                <a href="#work5"><div id="btn">Architecture +<br />Design Scotland</div></a>
                <a href="#work10"><div id="btn">Willis</div></a>
                <a href="#work6"><div id="btn">Loft Living</div></a>
                <a href="#work8"><div id="btn">Compass</div></a>
                <a href="#work9"><div id="btn">Zurich</div></a>
               
            </div>	
        </div>   
        <!--Buffer Top------------------------------------------------------------------------->  
        <div id= "BufferTop"></div>
        <!--Hero------------------------------------------------------------------------->    