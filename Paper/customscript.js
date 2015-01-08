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

$(document).ready(function() {
	$('#nav').affix({
		offset: {
			top: $('#title').height()
		}
	});
}); 

$(document).ready(function() {
	
	var newLine, el, title, link, ToC;

	ToC = "<p><ol>";

	$(document).find(".chapter").each(function() {
		el = $(this);
		title = el.find("h1");

		newLine = "<li class=\"big-font\">" + title.text() + "</li>";

		newLine += "<ol>";

		$(this).find("h4").each(function(){
			newLine += "<li>" + $(this).text() + "</li>";
		});

		newLine += "</ol></p>";

		ToC += newLine;

	});

	ToC += "</ol></p>";

	$("#contenttableofcontent").html(ToC);
});