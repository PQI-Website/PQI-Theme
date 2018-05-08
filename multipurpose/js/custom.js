// Fix subscripts globally
/*
jQuery(document).ready(function() {
	jQuery("body *").replaceText( /LaAlO3/gi, "LaAlO<sub>3<\/sub>" );
	jQuery("body *").replaceText( /SrTiO3/gi, "SrTiO<sub>3<\/sub>" );
	jQuery("body *").replaceText( /TiO2/gi, "TiO<sub>2<\/sub>" );
	jQuery("body *").replaceText( /CH3OH/gi, "CH<sub>3<\/sub>OH" );
});
*/

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
