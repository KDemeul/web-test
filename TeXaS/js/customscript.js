function addListener(div){
	div.keypress(function(e){ keyPressEditable(e,$(this)) });
	div.keydown(function(e){ keyDownEditable(e,$(this)) });
	div.focusin(function(e){ focusInEditable($(this)) });
	div.focusout(function(e){ focusOutEditable($(this)) });
}

function createNewPart(currentDiv,addNumerotation,addInToc){
	var newDiv = '<div class="row row-edit">' + 
	'<div class="col-xs-2 title-number">';
	if(addNumerotation == 'numerotation'){
		newDiv += '<h1>Part 1.</h1>';
	}
	newDiv += '</div>' +
	'<div contenteditable="true" class="col-xs-9 editable-field title-text">' + 
	'<h1>Part</h1>' +
	'</div>' +
	'</div>';
	currentDiv.after(newDiv);
	addListener(currentDiv.next());
	refreshNumerotation();
}

function createNewChapter(currentDiv,addNumerotation,addInToc){
	var newDiv = '<div class="row row-edit">' + 
	'<div class="col-xs-2 title-number">';
	if(addNumerotation == 'numerotation'){
		newDiv += '<h2>Chapter 1.</h2>';
	}
	newDiv += '</div>' +
	'<div contenteditable="true" class="col-xs-9 editable-field title-text">' + 
	'<h2>Chapter</h2>' +
	'</div>' +
	'</div>';
	currentDiv.after(newDiv);
	addListener(currentDiv.next());
	refreshNumerotation();
}


function createNewSection(currentDiv,addNumerotation,addInToc){
	var newDiv = '<div class="row row-edit">' + 
	'<div class="col-xs-2 title-number">';
	if(addNumerotation == 'numerotation'){
		newDiv += '<h3>Section 1.</h3>';
	}
	newDiv += '</div>' +
	'<div contenteditable="true" class="col-xs-9 editable-field title-text">' + 
	'<h3>Section</h3>' +
	'</div>' +
	'</div>';
	currentDiv.after(newDiv);
	addListener(currentDiv.next());
	refreshNumerotation();
}


function createNewSubsection(currentDiv,addNumerotation,addInToc){
	var newDiv = '<div class="row row-edit">' + 
	'<div class="col-xs-3 title-number">';
	if(addNumerotation == 'numerotation'){
		newDiv += '<h4>Subsection 1.</h4>';
	}
	newDiv += '</div>' +
	'<div contenteditable="true" class="col-xs-8 editable-field title-text">' + 
	'<h4>Subsection</h4>' +
	'</div>' +
	'</div>';
	currentDiv.after(newDiv);
	addListener(currentDiv.next());
	refreshNumerotation();
}


function createNewSubsubsection(currentDiv,addNumerotation,addInToc){
	var newDiv = '<div class="row row-edit">' + 
	'<div class="col-xs-3 title-number">';
	if(addNumerotation == 'numerotation'){
		newDiv += '<h5>Subsubsection 1.</h5>';
	}
	newDiv += '</div>' +
	'<div contenteditable="true" class="col-xs-8 editable-field title-text">' + 
	'<h5>Subsubsection</h5>' +
	'</div>' +
	'</div>';
	currentDiv.after(newDiv);
	addListener(currentDiv.next());
	refreshNumerotation();
}

function createNewParagraph(currentDiv){
	currentDiv.after('<div class="row row-edit">' + 
		'<div contenteditable="true" class="col-xs-11 editable-field title-text">' + 
		'...' +
		'</div>' +
		'</div>');
	addListener(currentDiv.next());
	refreshNumerotation();
}

function refreshNumerotation(){
	var partNumber = 0;
	var chapNumber = 0;
	var sectionNumber = 0;
	var subsectionNumber = 0;
	var subsubsectionNumber = 0;
	$('.title-number').each(function(){
		$(this).find('h1').each(function(){
			partNumber++;
			$(this).text('Part ' + partNumber + '.');
			chapNumber = 0;
			sectionNumber = 0;
			subsectionNumber = 0;
			subsubsectionNumber = 0;
		});
		$(this).find('h2').each(function(){
			chapNumber++;
			$(this).text('Chapter ' + chapNumber + '.');
			sectionNumber = 0;
			subsectionNumber = 0;
			subsubsectionNumber = 0;
		});
		$(this).find('h3').each(function(){
			sectionNumber++;
			$(this).text(sectionNumber + '.');
			subsectionNumber = 0;
			subsubsectionNumber = 0;
		});
		$(this).find('h4').each(function(){
			subsectionNumber++;
			$(this).text(sectionNumber + '.' + subsectionNumber + '.');
			subsubsectionNumber = 0;
		});
		$(this).find('h5').each(function(){		
			subsubsectionNumber++;
			$(this).text(sectionNumber + '.' + subsectionNumber + '.' + subsubsectionNumber + '.');
		});
	});
}


var stripIsDisplayed = false;
function keyPressEditable(e,currentDiv){
	// STRIP HANDLING 
	if(e.which == 5){ 	//ctrl + shift + E shortcut 
		if (!stripIsDisplayed){
			$('.strip').detach().insertAfter(currentDiv);
			$('.strip').slideDown(100);
			stripIsDisplayed = true;
		} else {
			// Check if the strip is the next div
			if( currentDiv.next().hasClass("strip") ){
				// We have to hide it
				$('.strip').slideUp(100);	
				stripIsDisplayed = false;
			} else {
				// We have to move it here
				var currentDiv = currentDiv;
				$('.strip').slideUp(100, function(){
					$('.strip').detach().insertAfter(currentDiv);
					$('.strip').slideDown(100);
					stripIsDisplayed = true;
				});
			}
		}
	} 
}

function keyDownEditable(e,currentDiv){
	if(e.which == 38){ // up arrow
		e.preventDefault();
		focusPrev(currentDiv);
	} else if(e.which == 40){ // down arrow
		e.preventDefault();
		focusNext(currentDiv);
	} else if(e.which == 8){ // remove 
		if(currentDiv.children('.editable-field').text() == '')
		{
			currentDiv.css('background-color','#E74C3C');
			currentDiv.hide("fast",function(){
				focusPrev(currentDiv);
				currentDiv.remove();
				refreshNumerotation();
			});
		}
	} else if(e.which == 13) { 	//enter 
		e.preventDefault();
		createNewParagraph(currentDiv);
		focusNext(currentDiv);
	} 
}

function focusInEditable(currentDiv){
	// console.log("Focus in " + currentDiv.html());
}

function focusOutEditable(currentDiv){
	// console.log(currentDiv.children('.editable-field').text());
	if(currentDiv.children('.editable-field').text() == '')	{
		currentDiv.css('background-color','#E74C3C');
		currentDiv.hide("fast",function(){
			focusPrev(currentDiv);
			currentDiv.remove();
			refreshNumerotation();
		});
	}
}

function focusNext(currentDiv){
	// console.log("Focusing on next editable-field");
	var nextDiv;
	var found = false;
	$(".row-edit").each(function(){
		if(found == true){
			nextDiv = $(this);
			found = false;
		}
		if(currentDiv.is($(this))){
			// console.log("found next!");
			found = true;
		}
	});
	nextDiv.children('.editable-field').focus();
}

function focusPrev(currentDiv){
	// console.log("Focusing on previous editable-field");
	var prevDiv;
	var found = false;
	// console.log(currentDiv.html());
	$($(".row-edit").get().reverse()).each(function(){
		// console.log($(this).html());
		if(found == true){
			prevDiv = $(this);
			found = false;
		}
		if(currentDiv.is($(this))){
			// console.log("found previous!");
			found = true;
		}
	});
	prevDiv.children('.editable-field').focus();
}

// STRIP FUNCTIONNALITIES

function onClickTitleButton(){
	// Retrieve div above the strip
	var currentDiv;
	$('.row-edit').each(function(){
		if($(this).next().hasClass('strip')){
			currentDiv = $(this);
		}
	});
	var valueChecked = $('.checkbox[name=titleRadio]:checked').val();
	var addNumerotation = $('.checkbox[name=numerotation]:checked').val();
	var addInToc = $('.checkbox[name=toc]:checked').val();
	console.log(valueChecked + ' - ' + addNumerotation + ' - ' + addInToc);
	if(valueChecked == 'part'){
		createNewPart(currentDiv,addNumerotation,addInToc);
	} else if (valueChecked == 'chapter'){ // chapter
		createNewChapter(currentDiv,addNumerotation,addInToc);
	} else if (valueChecked == 'section'){ // section
		createNewSection(currentDiv,addNumerotation,addInToc);
	} else if (valueChecked == 'subsection'){ // subsection
		createNewSubsection(currentDiv,addNumerotation,addInToc);
	}else if (valueChecked == 'subsubsection'){ // subsubsection
		createNewSubsubsection(currentDiv,addNumerotation,addInToc);
	} else { // paragraph
		createNewParagraph(currentDiv);
	}
	focusNext(currentDiv);
}


$( document ).ready(function() {
	// Control strip
	$('.strip').hide();
	$('.row-edit').keypress(function(e){ keyPressEditable(e,$(this)) });
	$('.row-edit').keydown(function(e){ keyDownEditable(e,$(this)) });
	$('.row-edit').focusin(function(e){ focusInEditable($(this)) });
	$('.row-edit').focusout(function(e){ focusOutEditable($(this)) });
});