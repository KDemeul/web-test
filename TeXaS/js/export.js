$.fn.createPart = function() { 
	if(typeof $(this).html() != "undefined"){
		if($(this).length == 2){
			$('#latex-export').append("<p>" + "\\part{" + $(this).eq(1).html() + '}' + '</p>');
		} else {
			$('#latex-export').append("<p>" + "\\part*{" + $(this).eq(0).html() + '}' + '</p>');
		}
	}
}
$.fn.createChapter = function() {
	if(typeof $(this).html() != "undefined"){
		if($(this).length == 2){
			$('#latex-export').append("<p>" + "\\chapter{" + $(this).eq(1).html() + '}' + '</p>');
		} else {
			$('#latex-export').append("<p>" + "\\chapter*{" + $(this).eq(0).html() + '}' + '</p>');
		}
	}
}
$.fn.createSection = function() {
	if(typeof $(this).html() != "undefined"){
		if($(this).length == 2){
			$('#latex-export').append("<p>" + "\\section{" + $(this).eq(1).html() + '}' + '</p>');
		} else {
			$('#latex-export').append("<p>" + "\\section*{" + $(this).eq(0).html() + '}' + '</p>');
		}
	}
}
$.fn.createSubsection = function() {
	if(typeof $(this).html() != "undefined"){
		if($(this).length == 2){
			$('#latex-export').append("<p>" + "\\subsection{" + $(this).eq(1).html() + '}' + '</p>');
		} else {
			$('#latex-export').append("<p>" + "\\subsection*{" + $(this).eq(0).html() + '}' + '</p>');
		}
	}
}
$.fn.createSubsubsection = function() {
	if(typeof $(this).html() != "undefined"){
		if($(this).length == 2){
			$('#latex-export').append("<p>" + "\\subsubsection{" + $(this).eq(1).html() + '}' + '</p>');
		} else {
			$('#latex-export').append("<p>" + "\\subsubsection*{" + $(this).eq(0).html() + '}' + '</p>');
		}
	}
}
$.fn.createParagraph = function() {
	if(typeof $(this).html() != "undefined"){
		$(this).each(function(){
			$('#latex-export').append("<p>" + $(this).html());
		})
	}
}


function exportToPDFButton(){
	$('#latex-export').empty();
	$('.row-edit').each(function(){
		// console.log($(this).html());
		
		if($(this).children('div').length == 2 ){ // It's a title
			$(this).children('div').children('h1').createPart();
		$(this).children('div').children('h2').createChapter();
		$(this).children('div').children('h3').createSection();
		$(this).children('div').children('h4').createSubsection();
		$(this).children('div').children('h5').createSubsubsection();
		} else { // It's a paragraph
		$(this).children('div').createParagraph();
	}
});
}