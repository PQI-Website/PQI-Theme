<script>
  /* Load content into sidebar */
	$('.shadowlink').click(function(event) {
		event.preventDefault();
		window.location.hash = $(this).data("details");

		var content = $('#details-' + $(this).data("details")).html();
	  $('div#sidebar').html(content);

    if ($(window).width() < 960)
      $.colorbox({html:$('<div>').append($('#sidebar').clone()).html()});
	});


	/* jQuery Random */
	$.fn.random = function() {
		return this.eq(Math.floor(Math.random() * this.length));
	}
	/* Select random person */
	$(window).load(function() {
    if ($(window).width() > 960 && window.location.hash == '')
      $(".shadowlink").random().click();
	});

</script>
