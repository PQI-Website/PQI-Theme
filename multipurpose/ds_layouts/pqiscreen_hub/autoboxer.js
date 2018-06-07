$( document ).ready(function() {
	var availSpace = $('div.view-storify-publications').actual( 'height' ) - $('div.view-storify-publications .view-header').actual( 'height' );
	//console.log(availSpace);
	$('div.view-storify-publications div.view-content').children('.views-row').each(function () {
		var thisBlock = $(this).actual( 'outerHeight', { includeMargin : true });
		//console.log(thisBlock);  // Get the actual space being used
		if ((availSpace - thisBlock) < 0)
			$(this).hide();
		else
			availSpace = availSpace - thisBlock;
	});
});

//http://dreamerslab.com/blog/en/get-hidden-elements-width-and-height-with-jquery/