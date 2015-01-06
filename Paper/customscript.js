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
	
	var newLine, el, title, link, ToC;

	ToC = "<p><ul class=\"fa-ul\">";

	$(document).find(".chapter").each(function() {
		el = $(this);
		title = el.find("h1");

		newLine = "<li class=\"big-font\">" + title.text() + "</li>";

		newLine += "<ul class=\"fa-ul\">";

		$(this).find("h4").each(function(){
			newLine += "<li>" + $(this).text() + "</li>";
		});

		newLine += "</ul></p>";

		ToC += newLine;

	});

	ToC += "</ul></p>";

	$("#contenttableofcontent").html(ToC);
});