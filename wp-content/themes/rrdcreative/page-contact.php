<?php
/* Template for the About page */
get_header(); 
?>

</div>

<div id="contact">
    
    <div id="pens">
    <div id="penImage"></div>
    </div>
    
    <div id="business_cards">
    	<div id="business_card_1"></div>
    
    
    	<div id="business_card_2">
    		<div class='map-information' style='width:227px !important'>
    			<?php 
    			echo apply_filters("the_content", get_post_meta(get_the_ID(), "card_1_text", true));
    			?>
        	</div>
    	</div>
    
    
    	<div id="business_card_3">
    		<div class='map-information' style='width:227px !important'>
    			<?php 
				echo apply_filters("the_content", get_post_meta(get_the_ID(), "card_2_text", true));
    			?>

            </div>
    	</div>
        
        
    </div>
    
    
    
    
    <div id="iphone">
    <div id="iphoneImage">
    	<div id="iphoneSignalBar"></div>
    	<div id="iphoneHeaderBar"></div>
    	<a id="mapRefresh">View UK Map</a>
    	<div id="map">
        	<!--<div id="mapButton1" class="button"></div>
            <div id="mapButton2" class="button"></div>
            <div id="mapButton3" class="button"></div>-->
        </div>
        <div id="iphoneStatusBar"></div>
    </div>
    </div>
    
	<div id="coffee">
    <div id="coffeeImage"></div>
    </div>
    
</div>

<?php 
    $args = array( 'post_parent' => '0', 'post_type' => 'locations', 'orderby' => 'menu_order', 'order' => 'ASC');

    $loop = new WP_Query( $args );
    
    $total_locations = $loop -> found_posts;
    
?>

<script type="text/javascript">
    
    //<![CDATA[
    
 jQuery(document).ready(function($) {   
	/* ---------------------------------------------------------------------------------
		  |
		  | CONTACT PAGE - GOOGLE MAP FUNCTIONALITY
		  |
		   ---------------------------------------------------------------------------------*/
		
		
		
		
		
		/**
		 *
		 * Define Map parameters ***Move outside doc ready!!!
		 *
		 */
		
		var mapPlaceHolder,
                    <?php 
                    for ($i = 1; $i <= $total_locations; $i++) {
			echo 'Marker'.$i.', ';
			echo 'String'.$i.', ';
			echo 'window'.$i.', ';
                    }
                    ?>           
			activeMarkers	= [],
			infoWin			= new InfoBubble({
								maxWidth	: 207
							});

		
		
		
		/**
		 *
		 * Refresh Map
		 *
		 */
		function refreshMap(){
			closeOpenMarkers();
                        <?php
                        
                            $i = 1;
                            while ( $loop->have_posts() ) : $loop->the_post();
                                
           
                                $label = get_field('label_image');
                               
                                echo 'Marker'.$i.'.setIcon("'.$label[url].'"); ';
                                echo 'Marker'.$i.'.setPosition(new google.maps.LatLng('.get_field('latitude').','.get_field('longitude').')); ';
                                echo 'mapPlaceHolder.setZoom(5); '; 
                                echo 'mapPlaceHolder.setCenter(new google.maps.LatLng(54.865486, -4.1359)); ';
                           
                            $i++;
                            endwhile;
                        ?>
		}

		/**
		 *
		 * Build initial Google Map view and plot markers
		 *
		 */
		function buildMap() {
            //if mobile no draggable map
            if ($(window).width() <= 480) {
                var mapParameters	= {
                    zoom		:	5,
                    center		:	new google.maps.LatLng(54.865486, -4.1359),
                    mapTypeId	:	google.maps.MapTypeId.ROADMAP,
                    draggable   : false
                };
            }else{
                var mapParameters	= {
                    zoom		:	5,
                    center		:	new google.maps.LatLng(54.865486, -4.1359),
                    mapTypeId	:	google.maps.MapTypeId.ROADMAP,
                };
            }
            
           /* var mapParameters	= {
                zoom		:	5,
                center		:	new google.maps.LatLng(54.865486, -4.1359),
                mapTypeId	:	google.maps.MapTypeId.ROADMAP,
                //draggable   : false
            };*/
									
			mapPlaceHolder			= new google.maps.Map(document.getElementById('map'), mapParameters);
			
			
			
			// -------------- Define Markers for the map ----------------//
                        
                        <?php
                          
                            $j = 1;
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $label = get_field('label_image');
                        ?>    
                            Marker<?php echo($j); ?> = new google.maps.Marker({
                                position: new google.maps.LatLng(<?php the_field('latitude'); ?>, <?php the_field('longitude'); ?>),
                                map:	mapPlaceHolder,
                                icon:	'<?php echo $label[url];?>',
                                              });
                            String<?php echo($j); ?> = '<div class="map-information">' + '<?php echo substr(json_encode(get_field("details")),1,-1); ?>' + '</div>';
	
             	
			
														
			google.maps.event.addListener(Marker<?php echo($j); ?>, 'click', function() {				
				manageMapView(15, Marker<?php echo($j); ?>, infoWin);
				Marker<?php echo($j); ?>.setIcon('http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png');
				Marker<?php echo($j); ?>.setPosition(new google.maps.LatLng(<?php the_field('latitude'); ?>, <?php the_field('longitude'); ?>));
				resetWindows(infoWin, mapPlaceHolder, Marker<?php echo($j); ?>, String<?php echo($j); ?>);
				document.getElementById("mapRefresh").style.display = "block";
  			});
                        
                        <?php   
                            $j++;
                            endwhile;   
			?>								
			
		}
		
		
		
		
		/**
		 *
		 * Close ALL open map infoWindows and open select infoWindow based on parameters
		 *
		 */	
		function resetWindows(activeWindow, map, markerName, markerContent){
			closeOpenMarkers();
			activeWindow.setContent(markerContent);
			activeWindow.open(map, markerName);
			$('img[src="http://maps.gstatic.com/intl/en_us/mapfiles/iw_close.gif"]').css({'top':'13px !important', 'right':'13px !important'});
		}
		
		
		
		
		function manageMapView(zoom, markerName, windowName) {
			mapPlaceHolder.setZoom(zoom); 
			mapPlaceHolder.setCenter(markerName.getPosition());
			activeMarkers.push(windowName);
		}
		
		
		
		
		/**
		 *
		 * Close ALL open map infoWindows
		 *
		 */
		function closeOpenMarkers() {
			for(i in activeMarkers) {
				activeMarkers[i].close();
			}	
		}
		
		
		
		
		/**
		 *
		 * Load Google Map and initialise parameters
		 *
		 */
		google.maps.event.addDomListener(window, 'load', buildMap);
		
		
		
		
		/**
		 *
		 * Ensure detail view of map location is closed and original map view is reloaded
		 *
		 */
		$("#mapRefresh").on("click", function(e){
			e.preventDefault();
			refreshMap();
			$(this).hide();
		});
});
//]]>
 </script>   
<?php

get_footer(); 

?>