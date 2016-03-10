// Implement Fuzzy Dates for storify
jQuery(document).ready(function() {
	jQuery('p#meta span').each(function() {
		var postDate = new Date(jQuery(this).text());
		jQuery(this).attr("datetime", postDate.toISOString()); 
		jQuery(this).text(jQuery.timeago(postDate.toISOString())); 
	});
});
/*
jQuery(document).ready(function() {
	jQuery('ul.meta li span[content]').each(function() {
		var postDate = new Date(jQuery(this).attr("content"));
		jQuery(this).attr("datetime", postDate.toISOString()); 
		jQuery(this).text(jQuery.timeago(postDate.toISOString())); 
	});
});
*/
jQuery(window).bind("load", function() {
	jQuery('div.block-ddblock div.slider-inner').each(function() {
		var largestHeight = 0;
		jQuery(this).find("div.slide").each(function(){
			var slideHeight = 0;
			jQuery(this).children().each(function(){
				slideHeight += jQuery(this).actual( "height" );
			});
			//console.log(slideHeight);
			if (slideHeight > largestHeight)
			{
				largestHeight = slideHeight;
			}
			//console.log(slideHeight);
		});
		jQuery(this).animate({height:largestHeight},1000);//.height(largestHeight+"px");
	});
});