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
				}, 500);
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

$(document).ready(function(){
	var width = $('.cell').width();
	$('.cell').css({
		'height': width+'px'
	});
	$('.toggling').css({
		'height': width/2+'px'
	});
});


$(document).ready(function() {
	$('.cell').children("div").hide();
	$('.cell').hover(function() {
		jQuery(this).children("div").slideToggle("fast",function() {
		});
	});

	$('.desc-project').hide();

	var arrayId = ["#desc-slamsson","#desc-starcraft","#desc-guarding","#desc-needle"];
	var beingDisplay = "none";
	
	$('.cell').click(function(event) {
		// // Get id of element to display
		var toDisplay = "#desc-" + event.target.id;
		if(toDisplay == "#desc-")
			toDisplay = "#desc-" + $(event.target).parent().attr('id');
		// Hide other element
		for (var i = 0 ; i < 4 ; i++) {
			if(arrayId[i] != toDisplay && arrayId != beingDisplay)
				$(arrayId[i]).hide();
		};

		if(toDisplay == beingDisplay){
			$('.desc-project').fadeOut();
			beingDisplay = "none";
			indexDisplay = -1;
		} else if (beingDisplay == "none") {
			$('.desc-project').fadeIn();
			$(toDisplay).fadeIn();
			beingDisplay = toDisplay;
		} else {
			$(toDisplay).fadeIn();
			// $(beingDisplay).hide("slow");
			beingDisplay = toDisplay;
		}

		if(beingDisplay != "none"){
			$('html,body').delay(10).animate({
				scrollTop: $(beingDisplay).offset().top
			}, 500);
		} else {
			$('html,body').delay(10).animate({
				scrollTop: $('#projects').offset().top
			}, 500);
		}
	});

	$('.next-pj').click(function() {
		if(beingDisplay == "#desc-slamsson"){
			$('#starcraft').trigger("click");
		} else if(beingDisplay == "#desc-starcraft"){
			$('#guarding').trigger("click");
		} else if(beingDisplay == "#desc-guarding"){
			$('#needle').trigger("click");
		} else if(beingDisplay == "#desc-needle"){
			$('#slamsson').trigger("click");
		}
	});

	$('.previous-pj').click(function() {
		if(beingDisplay == "#desc-slamsson"){
			$('#needle').trigger("click");
		} else if(beingDisplay == "#desc-starcraft"){
			$('#slamsson').trigger("click");
		} else if(beingDisplay == "#desc-guarding"){
			$('#starcraft').trigger("click");
		} else if(beingDisplay == "#desc-needle"){
			$('#guarding').trigger("click");
		}
	});	

	$('.close-pj').click(function() {
		if(beingDisplay == "#desc-slamsson"){
			$('#slamsson').trigger("click");
		} else if(beingDisplay == "#desc-starcraft"){
			$('#starcraft').trigger("click");
		} else if(beingDisplay == "#desc-guarding"){
			$('#guarding').trigger("click");
		} else if(beingDisplay == "#desc-needle"){
			$('#needle').trigger("click");
		}
	});

});
