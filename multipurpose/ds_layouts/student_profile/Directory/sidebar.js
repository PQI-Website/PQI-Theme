<script>
  /* Load content into sidebar on click */
	$('.shadowlink').click(function(event) {
		event.preventDefault();
		window.location.hash = $(this).data("details");

		var content = $('#details-' + $(this).data("details")).html();
	  $('div#sidebar').html(content);

    if ($(window).width() < 960)
      $.colorbox({html:$('<div>').append($('#sidebar').clone()).html()});
	});

	/* Load by specified hash */
	$(window).load(function() {
		if (window.location.hash != '')
			$(".shadowlink[data-details='"+window.location.hash.substring(1)+"']").click();
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

  /* Profile hash changed */
  $(window).bind('hashchange', function() {
    if (window.location.hash == '')
      $.colorbox.close();
		else {
			$(".shadowlink[data-details='"+window.location.hash.substring(1)+"']").click();
		}
  });
</script>
