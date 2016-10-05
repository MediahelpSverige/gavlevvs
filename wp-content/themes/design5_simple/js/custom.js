
	$(document).ready(function() {
		
		$('.mainSlider').owlCarousel({
		    loop:true,
		    nav:true,
		    margin:0,
		    dots: false,
		    items: 1
		});
		
		$("#country_selector").countrySelect({
			//defaultCountry: "jp",
			//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
			preferredCountries: ['se']
		});
		
        //Tooltip
		//$('[data-toggle="tooltip"]').tooltip();
		
	 });
	 
	 
		
	//Footer fixed	
	$(window).bind("load", function() {        
       var footerHeight = 0,
           footerTop = 0,
           $footer = $(".footer");           
       positionFooter();       
       function positionFooter() {       
            footerHeight = $footer.height();
            footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";  
           
           if ( ($(document.body).height()+footerHeight) < $('html').height()) {
           	
               $footer.css({
                    position: "fixed",
                    bottom: "0px", 
                    left: "0", 
                    right: "0"
               })
           } else {
               $footer.css({
                    position: "relative",
                    display: "block"
               })
           }               
       }
       $(window)
	       .scroll(positionFooter)
	       .resize(positionFooter)
	       .click(positionFooter)               
	});	
	 //or	 
	// Footer Fixed
	function footerarea_css() {
		var window_height_for_footer = parseInt($(window).height());
		var document_height_for_footer = parseInt($('html body').outerHeight(true));
		if(document_height_for_footer < window_height_for_footer) {
		$('.footer').css('position', 'fixed').css('display', 'block').css('bottom', '0').css('left', '0').css('right', '0');
		}
		else {
		$('.footer').css('position', 'relative').css('display', 'block');
		}
	}
	$(window).resize(function () {
		footerarea_css();
	});
	$(window).load(function() {
		footerarea_css();
	});