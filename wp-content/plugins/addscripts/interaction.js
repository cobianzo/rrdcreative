jQuery(document).ready(function($) {
    
    //Variables
	var dropdownActive = false;
	var footerSlideActive = false;
	
	var currentSection;
	
	//Set nav
	$('#nav').localScroll({duration: 350 , offset: { top: -65} });
	
	//aboutScroller
	
	$('#scrollDownBtn').click(function(e) { 
		
        	$('#about_summary_content').animate({'marginTop':  -660}, 500);

	});
	
	$('#scrollUpBtn').click(function(e) { 
		
        	$('#about_summary_content').animate({'marginTop':  0}, 250);

	});
	
	
	//Dropdown content menus 
	
	
	
	
	// btn1
	$('#about-btn1').click(function(e) { 
		
        	$('#content-dropdown1').animate({'marginTop':  0}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg_cover.jpg) 50% 0% no-repeat"});
			$("#about-btn1").hide();
			$("#about-btn2").hide();
			$("#about-btn3").hide();
		
	});
	
	$('#content-dropdown1-closebtn').click(function(e) { 
		
        	$('#content-dropdown1').animate({'marginTop':  -1200}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg.jpg) 50% 0% no-repeat"});
			$("#about-btn1").show();
			$("#about-btn2").show();
			$("#about-btn3").show();
		
	});
	
	// btn2
	$('#about-btn2').click(function(e) { 
		
        	$('#content-dropdown2').animate({'marginTop':  0}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg_cover.jpg) 50% 0% no-repeat"});
			$("#about-btn1").hide();
			$("#about-btn2").hide();
			$("#about-btn3").hide();
	});
	
	$('#content-dropdown2-closebtn').click(function(e) { 
		
        	$('#content-dropdown2').animate({'marginTop':  -1200}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg.jpg) 50% 0% no-repeat"});
			$("#about-btn1").show();
			$("#about-btn2").show();
			$("#about-btn3").show();
	});
	
	
	// btn3
	$('#about-btn3').click(function(e) { 
		
        	$('#content-dropdown3').animate({'marginTop':  0}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg_cover.jpg) 50% 0% no-repeat"});
			$("#about-btn1").hide();
			$("#about-btn2").hide();
			$("#about-btn3").hide();
	});
	
	$('#content-dropdown3-closebtn').click(function(e) { 
		
        	$('#content-dropdown3').animate({'marginTop':  -1200}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg.jpg) 50% 0% no-repeat"});
			$("#about-btn1").show();
			$("#about-btn2").show();
			$("#about-btn3").show();
	});
	
	
	
	
	
	
	//Dropdown menus
	$('#dropdownButton').click(function(e) { 
		if(dropdownActive == false){
        	$('#dropdown').animate({'marginTop':  40}, 500);
			dropdownActive = true;
		}else if(dropdownActive == true){
        	$('#dropdown').animate({'marginTop':  -370}, 800);
			dropdownActive = false;
		}
	});
	
	$('#footerButton').click(function(e) {
    	if (document.documentElement.clientWidth > 0 && document.documentElement.clientWidth < 600) {
		    if(footerSlideActive == false){
        	    $('#footerSlide').animate({'bottom':  10}, 500);
			    footerSlideActive = true;
		    }else if(footerSlideActive == true){
            	$('#footerSlide').animate({'bottom':  -40}, 500);
	    		footerSlideActive = false;
		    }
	}else{
		if(footerSlideActive == false){
        	$('#footerSlide').animate({'bottom':  10}, 500);
			footerSlideActive = true;
		}else if(footerSlideActive == true){
        	$('#footerSlide').animate({'bottom':  -30}, 500);
			footerSlideActive = false;
		}
	}
});
	
	//Show/hide text on index
	
	var section1 = false;
	var section2 = false;
	var section3 = false;
	var section4 = false;
	var section5 = false;
	var section6 = false;
	var section7 = false;
	var section8 = false;
	var section9 = false;
	var section10 = false;
	
	var booleanHolder;
	
	$("#see_more_index_1, #see_more_index_2, #see_more_index_3, #see_more_index_4, #see_more_index_5, #see_more_index_6, #see_more_index_7, #see_more_index_8, #see_more_index_9, #see_more_index_10").css("cursor" , "pointer");
	
	if (document.documentElement.clientWidth <= 1024 && document.documentElement.clientWidth > 0) {
    
		$("#see_more_index_1 , #see_more_index_2, #see_more_index_3, #see_more_index_4, #see_more_index_5, #see_more_index_6, #see_more_index_7, #see_more_index_8, #see_more_index_9, #see_more_index_10").css("display" , "block");
		
		$("#container1, #container2, #container3, #container4, #container5, #container6, #container7, #container8, #container9, #container10").css("display" , "none");
	
		/*$("#see_more_index_1, #see_more_index_2, #see_more_index_3, #see_more_index_4, #see_more_index_5, #see_more_index_6, #see_more_index_7, #see_more_index_8").click(function () {
			currentSection = this.id.substring(15,17);
			$("#container" + currentSection).slideToggle("fast");
			alert(section1);
			if(Boolean("section" + currentSection) == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
			}
		});*/
		
		$("#see_more_index_1").click(function () {
			
			$("#container1").slideToggle("fast");
			
			if(section1 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section1 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section1 = false;
			}
		});
		
		$("#see_more_index_2").click(function () {
			
			$("#container2").slideToggle("fast");
			
			if(section2 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section2 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section2 = false;
			}
		});
		
		$("#see_more_index_3").click(function () {
			
			$("#container3").slideToggle("fast");
			
			if(section3 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section3 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section3 = false;
			}
		});
		
		$("#see_more_index_4").click(function () {
			
			$("#container4").slideToggle("fast");
			
			if(section4 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section4 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section4 = false;
			}
		});
		
		$("#see_more_index_5").click(function () {
			
			$("#container5").slideToggle("fast");
			
			if(section5 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section5 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section5 = false;
			}
		});
		
		$("#see_more_index_6").click(function () {
			
			$("#container6").slideToggle("fast");
			
			if(section6 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section6 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section6 = false;
			}
		});
		
		$("#see_more_index_7").click(function () {
			
			$("#container7").slideToggle("fast");
			
			if(section7 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section7 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section7 = false;
			}
		});
		
		$("#see_more_index_8").click(function () {
			
			$("#container8").slideToggle("fast");
			
			if(section8 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section8 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section8 = false;
			}
		});
		
		$("#see_more_index_9").click(function () {
			
			$("#container9").slideToggle("fast");
			
			if(section9 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section9 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section9 = false;
			}
		});
		
		$("#see_more_index_10").click(function () {
			
			$("#container10").slideToggle("fast");
			
			if(section10 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section10 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section10 = false;
			}
		});
	
	}
	
	//Show/hide text on client pages
	
	$("#see_more, #see_more1, #see_more2, #see_more3, #see_more4, #see_more5, #see_more6").css("cursor" , "pointer");
	
	/*$("#see_more, #see_more1, #see_more2, #see_more3, #see_more4").click(function () {
		currentSection = this.id.substring(8,10);
		$("#more_text" + currentSection).slideToggle("fast");
	});*/
	
	$("#see_more1").click(function () {
			
			$("#more_text1").slideToggle("fast");
			
			if(section1 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section1 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section1 = false;
			}
		});
		
		$("#see_more2").click(function () {
			
			$("#more_text2").slideToggle("fast");
			
			if(section2 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section2 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section2 = false;
			}
		});
		
		$("#see_more3").click(function () {
			
			$("#more_text3").slideToggle("fast");
			
			if(section3 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section3 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section3 = false;
			}
		});
		
		$("#see_more4").click(function () {
			
			$("#more_text4").slideToggle("fast");
			
			if(section4 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section4 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section4 = false;
			}
		});
		
		$("#see_more5").click(function () {
			
			$("#more_text5").slideToggle("fast");
			
			if(section5 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section5 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section5 = false;
			}
		});
		
		$("#see_more6").click(function () {
			
			$("#more_text6").slideToggle("fast");
			
			if(section6 == false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section6 = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section6 = false;
			}
		});
		
		
		
		
		
		
		/* ---------------------------------------------------------------------------------
		  |
		  | ABOUT PAGE - MODAL FUNCTIONALITY
		  |
		   ---------------------------------------------------------------------------------*/
		$(window).resize(function() {
			if($(window).width() > 1200) {
				$('#modal-1').css({'left': $(window).width()/2 - $('#modal-1').width()/2 + 'px' });
			}
			else {
				$('#modal-1').css({'left':15 + '%'});
			}
		});
		
		
		
		
		/**
		 *
		 * Open Modal
		 *
		 */
		$(".modal-link").on("click", function(e){
			e.preventDefault();
			var modalURL			= $(this).attr("href");
			$("#modal-background").css({'display':'block'});
			$(modalURL).show();
			$('#modal-1').css({'left': $(window).width()/2 - $('#modal-1').width()/2 + 'px' });
		});
		
		
		
		
		/**
		 *
		 * Close Modal
		 *
		 */
		$(".close-modal").on("click", function(e){
			e.preventDefault();
			$("#modal-background, #modal-1").css({'display':'none'});
		});
		
		
		
		
		
		
		
		
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
			dublinMarker,
			dublinString,
			dublinwindow,
			edinburghMarker,
			edinburghString,
			edinburghwindow,
			londonMarker,
			londonString,
			londonwindow,
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
			edinburghMarker.setIcon('http://www.rrdcreative.com/images/contact/edinburgh-label.png');
			edinburghMarker.setPosition(new google.maps.LatLng(55.944788, -3.206841));
			dublinMarker.setIcon('http://www.rrdcreative.com/images/contact/dublin-label.png');
			dublinMarker.setPosition(new google.maps.LatLng(53.309448, -6.256599));
			londonMarker.setIcon('http://www.rrdcreative.com/images/contact/london-label.png');
			londonMarker.setPosition(new google.maps.LatLng(51.512773, -0.084243));
			mapPlaceHolder.setZoom(5); 
			mapPlaceHolder.setCenter(new google.maps.LatLng(54.865486, -4.1359));
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
				
			// Edinburgh office
			edinburghMarker 		= 	new google.maps.Marker({
                                            position	: 	new google.maps.LatLng(55.944788, -3.206841),
                                            map			:	mapPlaceHolder,
                                            icon		:	'http://www.rrdcreative.com/images/contact/edinburgh-label.png',
                                        });
			edinburghString 		= 	"<div class='map-information' style='width:207px !important'>" +
											"<p><img src='http://www.rrdcreative.com/images/branding/rrd-creative-logo.png' alt='RRD Creative'>" + 
											"<br><strong>Edinburgh</strong></p>" +
										  	"<p>Exchange Place 2" +
											"<br>5 Semple Street" +
											"<br>Edinburgh EH3 8BL</p>" +
											"<p><strong>e</strong> <a href='mailto:corey.stewart@rrd.com'>corey.stewart@rrd.com</a></p>" + 
											"</div>";
	
		
		
			// Dublin office
			dublinMarker 			= 	new google.maps.Marker({
                                            position	: 	new google.maps.LatLng(53.309448, -6.256599),
                                            map			:	mapPlaceHolder,
                                            icon		:	'http://www.rrdcreative.com/images/contact/dublin-label.png'
                                        });
			dublinString 			= 	"<div class='map-information' style='width:207px !important'>" +
											"<p><img src='http://www.rrdcreative.com/images/branding/rrd-creative-logo.png' alt='RRD Creative'>" + 
											"<br><strong>Dublin</strong></p>" +
										  	"<p>Unit 6b" +
											"<br>Westgate Business Park" +
											"<br>Ballymount" +
											"<br>Dublin 24</p>" +
											"<p><strong>e</strong> <a href='mailto:liz.a.cahalane@rrd.com'>liz.a.cahalane@rrd.com</a></p>" + 
											"</div>";
	
		
		
			// London office
			londonMarker 			= 	new google.maps.Marker({
                                            position	: 	new google.maps.LatLng(51.512773, -0.084243),
                                            map			:	mapPlaceHolder,
                                            icon		:	'http://www.rrdcreative.com/images/contact/london-label.png'
                                        });
			londonString 			= 	"<div class='map-information' style='width:207px !important'>" +
											"<p><img src='http://www.rrdcreative.com/images/branding/rrd-creative-logo.png' alt='RRD Creative'>" + 
											"<br><strong>London</strong></p>" +
										  	"<p>85 Gracechurch Street" +
											"<br>London EC3V 0AA</p>" +
											"<p><strong>e</strong> <a href='mailto:eleanor.broderick@rrd.com'>eleanor.broderick@rrd.com</a><br>" +
											"<strong></strong><br>" +
											"<strong></strong></p>" + 
											"</div>";
															
			
			
			
			// Handle click event for Edinburgh location												
			google.maps.event.addListener(edinburghMarker, 'click', function() {				
				manageMapView(15, edinburghMarker, infoWin);
				edinburghMarker.setIcon('http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png');
				edinburghMarker.setPosition(new google.maps.LatLng(55.944788, -3.206841));
				resetWindows(infoWin, mapPlaceHolder,edinburghMarker, edinburghString);
				document.getElementById("mapRefresh").style.display = "block";
  			});
			
			
			// Handle click event for Dublin location
			google.maps.event.addListener(dublinMarker, 'click', function() {
    			manageMapView(17, dublinMarker, infoWin);
				dublinMarker.setIcon('http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png');
				dublinMarker.setPosition(new google.maps.LatLng(53.309448, -6.356599));
				resetWindows(infoWin, mapPlaceHolder,dublinMarker, dublinString);
				document.getElementById("mapRefresh").style.display = "block";
  			});
			
			
			// Handle click event for London location
			google.maps.event.addListener(londonMarker, 'click', function() {
    			manageMapView(17, londonMarker, infoWin);
				londonMarker.setIcon('http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png');
				londonMarker.setPosition(new google.maps.LatLng(51.512773, -0.084243));
				resetWindows(infoWin, mapPlaceHolder,londonMarker, londonString);
				document.getElementById("mapRefresh").style.display = "block";
  			});
									
			
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
		
		
		
		
		
		/**
		 *
		 * DEPRECATED - Map functionality 
		 *
		 */
		/*$("#mapButton1, #mapButton2, #mapButton3").css("cursor" , "pointer");
		
		$('#mapButton1, #mapButton2, #mapButton3').click(function(e) {
			<!-- When location asset is ready replace line below with $("#map").css("background-image", "url("imageLocation")"); -->
			$("#map").css("background-color" , "#f30");
		});
		
		$('#mapButton2').click(function(e) { 
			$("#map").css("background-color" , "#09f");
		});
		
		$('#mapButton3').click(function(e) { 
			$("#map").css("background-color" , "#f30");
		});*/
		
		

		
		
		
		
		
	
});