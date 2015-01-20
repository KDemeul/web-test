$(document).ready(function(){
	// Strip width
	var stripWidth = $(window).width()-205;
	$('.strip').css("width",stripWidth);
	// Control strip
	$('.editable-field').keypress(function(e){
		// STRIP HANDLING 
		//ctrl + shift + E shortcut 
		if(e.which == 5){ 
			// Check if the strip is the next div
			console.log("Next component is " + $(this).next().attr("class"));
			if( $(this).next().hasClass("strip") ){
				// Slide it up then remove
				console.log("Sliding up and removing");
				$(this).next().slideUp("fast", function(){
					$(this).remove();
				});
			} else { 
				// we have to remove the strip anywhere else ...
				$('.editable-field').each(function(){
					if( $(this).next().hasClass("strip") ){
						console.log("Removing: " + $(this).next().text());
						$(this).next().slideUp("fast", function(){
							$(this).remove();
						});
					}
				});
				//  ... and pop it here
				var newStrip = $('<div class="row strip"></div>');
				newStrip.load("strip/strip.html");
				newStrip.hide();
				$(this).after(newStrip);
				$(document).ajaxComplete(function(){
					$('.strip').slideDown('slow');
				});
			}	
		}
	});
});