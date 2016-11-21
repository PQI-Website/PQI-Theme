// Fix subscripts globally
jQuery(document).ready(function() {
	$("body *").replaceText( /LaAlO3/gi, "LaAlO<sub>3<\/sub>" );
	$("body *").replaceText( /SrTiO3/gi, "SrTiO<sub>3<\/sub>" );
	$("body *").replaceText( /TiO2/gi, "TiO<sub>2<\/sub>" );
	$("body *").replaceText( /CH3OH/gi, "CH<sub>3<\/sub>OH" );
});

//Disable image links in storify
jQuery(window).on('load', function(){
	jQuery('div#storify-minimal div.element.image a').click(function(e) {
		e.preventDefault();
	});
});

// Implement Fuzzy Dates for storify
jQuery(document).ready(function() {
	jQuery('p#meta span').each(function() {
		var postDate = new Date(jQuery(this).text());
		var offset = postDate.getTimezoneOffset()*60000;
		postDate.setTime(postDate.getTime() - offset);
		
		jQuery(this).attr("datetime", postDate.toISOString()); 
		jQuery(this).text(jQuery.timeago(postDate.toISOString())); 
	});
});

//Disable image links in storify
jQuery(window).on('load', function(){
	jQuery('div#storify-minimal div.element.image a').click(function(e) {
		e.preventDefault();
	});
});


jQuery(window).bind("load resize", ddblockSizeCheck);

function ddblockSizeCheck() {
	jQuery('div.block-ddblock div.slider-inner').each(function() {
		var largestHeight = 0;
		jQuery(this).find("div.slide").each(function(){
			var slideHeight = 0;
			jQuery(this).children().each(function(){
				slideHeight += jQuery(this).actual( "height" );
			});
			jQuery(this).css('min-height', slideHeight);
			//console.log(slideHeight);
			if (slideHeight > largestHeight)
			{
				largestHeight = slideHeight;
			}
			//console.log(slideHeight);
		});
		jQuery(this).animate({height:largestHeight},0.1);//.height(largestHeight+"px");
	});
	jQuery('div.block-ddblock div.slider').each(function() {
		var actualWidth=jQuery(this).actual( "width" );
		jQuery(this).find("div.slide").each(function(){
			jQuery(this).animate({width:actualWidth},0.1);
		});
	});
}

// Clickable table rows
jQuery(document).ready(function() {
    jQuery('div.view-members-directory tr.clickable-rows').click(function() {
        var href = jQuery(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });
});

$(window).load(function() { 
   $("img").each(function(){ 
      var image = $(this); 
      if(image.context.naturalWidth == 0 || 
      image.readyState == 'uninitialized'){  
         $(image).unbind("error").hide();
      } 
   }); 
});
