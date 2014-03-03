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
	
	
	$('div[id^="about-btn"]').click(function(e) {
             var index = $(this).attr('id').replace("about-btn","");
            
             $('#content-dropdown' + index).animate({'marginTop':  0}, 1000);
             $('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg_cover.jpg) 50% 0% no-repeat"});
             $('div[id^="about-btn"]').hide();
        });
	
	
	$('div[id^="content-dropdown-closebtn"]').click(function(e) { 
		var index = $(this).attr('id').replace("content-dropdown-closebtn","");
                
        	$('#content-dropdown' + index).animate({'marginTop':  -1200}, 1000);
			
			$('#about-wrapper').css({"background":"url(http://www.rrdcreative.com/images/about/about_bg.jpg) 50% 0% no-repeat"});
			$('div[id^="about-btn"]').show();
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
	
        var count_index = $('[id^=see_more_index_]').length;
       
        var section = [];
        for ( var i = 1; i <= count_index; i = i + 1 ) {
            section[i] = false;
        }
                
	var booleanHolder;
	$('[id^=see_more_index_]').css("cursor" , "pointer"); 
	
        //$("#see_more_index_1, #see_more_index_2, #see_more_index_3, #see_more_index_4, #see_more_index_5, #see_more_index_6, #see_more_index_7, #see_more_index_8, #see_more_index_9, #see_more_index_10").css("cursor" , "pointer");
	
	if (document.documentElement.clientWidth <= 1024 && document.documentElement.clientWidth > 0) {
    
                $('[id^=see_more_index_]').css("display" , "block");
		
                $('[id^=read-container]').css("display" , "none");
		
                for ( var i = 1; i <= count_index; i = i + 1 ) {
                    $("#see_more_index_" + i).click(function () {
                        
                        var index = $(this).attr('id').replace("see_more_index_","");
			
			$("#read-container" + index).slideToggle("fast");
			
			if(section[index] === false)
			{
				$(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
				section[index] = true;
			}
			else
			{
				$(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
				section[i] = false;
			}
                    });
                }                
	}
	
	//Show/hide text on client pages
        var count_more = $('[id^=see_more]').length;
        var section_more = [];
            for ( var i = 1; i <= count_more; i = i + 1 ) {
                section_more[i] = false;
            }
                
	$('[id^=see_more]').css("cursor" , "pointer"); 
        
        for ( var i = 1; i <= count_more; i = i + 1 ) {
            $("#see_more" + i).click(function () {
                var index = $(this).attr('id').replace("see_more","");
                $("#more_text"+index).slideToggle("fast");
                if(section_more[index] === false)
                {

                        $(this).html("Read Less <img src=http://www.rrdcreative.com/images/readmore_arrow_up.png>" );
                        section_more[index] = true;
                }
                else
                {
                        $(this).html("Read More <img src=http://www.rrdcreative.com/images/readmore_arrow.png>" );
                        section_more[index] = false;
                }
            });
        }             
		
		
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
		
		
		
		
		
		
		
		
	
		

		
		
		
		
		
	
});