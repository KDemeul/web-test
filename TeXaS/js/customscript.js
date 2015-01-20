function addListenner(currentDiv){
	currentDiv.next().keypress(function(e){ keyPressEditable(e,$(this)) });
	currentDiv.next().keydown(function(e){ keyDownEditable(e,$(this)) });
	currentDiv.next().focusin(function(){ focusInEditable($(this)) });
	currentDiv.next().focusout(function(){ focusOutEditable($(this)) });
}

function createNewPart(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><h1>Part</h1></div>');
	addListenner(currentDiv);
}

function createNewChapter(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><h2>Chapter</h2></div>');
	addListenner(currentDiv);
}


function createNewSection(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><h3>Section</h3></div>');
	addListenner(currentDiv);
}


function createNewSubsection(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><h4>Subsection</h4></div>');
	addListenner(currentDiv);
}


function createNewSubsubsection(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><h5>Subsubsection</h5></div>');
	addListenner(currentDiv);
}

function createNewParagraph(currentDiv){
	currentDiv.after('<div contenteditable="true" class="row editable-field latex"><p></p></div>');
	addListenner(currentDiv);
}


var stripIsDisplayed = false;
function keyPressEditable(e,currentDiv){
	// STRIP HANDLING 

	console.log("key press: " + e.which);
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
	} else if(e.which == 13){ 	//enter 
		e.preventDefault();
		createNewParagraph(currentDiv);
		currentDiv.next().focus();
	} 
}

function keyDownEditable(e,currentDiv){
	console.log("key down: " + e.which);
	if(e.which == 38){
		var cursorPos = window.getSelection().getRangeAt(0).startOffset;
		console.log("cursorPos: " + cursorPos);
		if(cursorPos == 0){
			currentDiv.prev().focus();
		}
	} else if(e.which == 40){
		var cursorPos = window.getSelection().getRangeAt(0).startOffset;
		console.log("cursorPos: " + cursorPos + " textLength: " + currentDiv.text().length);
		if(cursorPos == currentDiv.text().length){
			focusNext(currentDiv);
		}
	} else if(e.which == 8){
		if(currentDiv.text() == '')
		{
			currentDiv.css('background-color','#E74C3C');
			currentDiv.hide("slow",function(){
				currentDiv.prev().focus();
				currentDiv.remove();
			});
		}
	}
}

function focusInEditable(currentDiv){
	// console.log(currentDiv.html());
	console.log("Focus in " + currentDiv.text());
	// if(currentDiv.html() == '<p>Paragraph</p>'){
	// 	currentDiv.text('');
	// } else if(currentDiv.html() == '<h1>Part</h1>'){
	// 	currentDiv.html('<h1></h1>');
	// } else if(currentDiv.html() == '<p>Paragraph</p>'){
	// 	currentDiv.text('');
	// } else if(currentDiv.html() == '<p>Paragraph</p>'){
	// 	currentDiv.text('');
	// } else if(currentDiv.html() == '<p>Paragraph</p>'){
	// 	currentDiv.text('');
	// } else if(currentDiv.html() == '<p>Paragraph</p>'){
	// 	currentDiv.text('');
	// } else {
	// 	currentDiv.text('');
	// }
}

function focusOutEditable(currentDiv){
	if(currentDiv.text() == '')
	{
		currentDiv.css('background-color','#E74C3C');
		currentDiv.hide("slow",function(){
			currentDiv.remove();
		});
	}
}

function focusNext(currentDiv){
	var nextDiv;
	var found = false;
	$('.editable-field').each(function(){
		if(found == true){
			console.log("here");
			nextDiv = $(this);
			found = false;
		}
		if(currentDiv.is($(this))){
			console.log("found!");
			found = true;
		}
	});
	nextDiv.focus();
}

$( document ).ready(function() {
	// Control strip
	$('.strip').hide();
	$('.editable-field').keypress(function(e){ keyPressEditable(e,$(this)) });
	$('.editable-field').keydown(function(e){ keyDownEditable(e,$(this)) });
	$('.editable-field').focusin(function(e){ focusInEditable($(this)) });
	$('.editable-field').focusout(function(e){ focusOutEditable($(this)) });
});


// STRIP FUNCTIONNALITIES

function onClickTitleButton(){
	// Retrieve div above the strip
	var currentDiv;
	$('.editable-field').each(function(){
		if($(this).next().hasClass('strip')){
			currentDiv = $(this);
		}
	});
	var valueChecked = $('.checkbox[name=titleRadio]:checked').val();
	if(valueChecked == 'part'){
		createNewPart(currentDiv);
	} else if (valueChecked == 'chapter'){ // chapter
		createNewChapter(currentDiv);
	} else if (valueChecked == 'section'){ // section
		createNewSection(currentDiv);
	} else if (valueChecked == 'subsection'){ // subsection
		createNewSubsection(currentDiv);
	}else if (valueChecked == 'subsubsection'){ // subsubsection
		createNewSubsubsection(currentDiv);
	} else { // paragraph
		createNewParagraph(currentDiv);
	}
	currentDiv.next().focus();
}