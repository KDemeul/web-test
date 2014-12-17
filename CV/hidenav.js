$(document).ready(function() {
	$('#nav').affix({
		offset: {
			top: $('#cover').height()
		}
	});
}); 


$(document).ready(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});

// $(document).ready(function(){
// 	$('[data-toggle="popover"]').popover({
// 		placement : 'top'
// 	});
// });

$(document).ready(function(){
	$(function(){
		$('.circle-button').popover({
			placement: 'top',
			trigger: 'hover',
			html: 'true',
			content: function() {
				return this.children[0].innerHTML;
			}
		});
	});
});