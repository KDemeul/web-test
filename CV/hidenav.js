$(document).ready(function() {
	console.log("ready!");
	var navpos = $('#mainnav').offset();
	console.log(navpos.top);
	$(window).bind('scroll', function() {
		if ($(window).scrollTop() > navpos.top) {
			$('#mainnav').addClass('navbar-fixed-top');
			$('#about').addClass('offset-top');
		}
		else {
			$('#mainnav').removeClass('navbar-fixed-top');
			$('#about').removeClass('offset-top');
		}
	});
});