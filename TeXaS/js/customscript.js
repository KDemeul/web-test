$(document).ready(function(){
	// Strip width
	var stripWidth = $(window).width()-205;
	$('.strip').css("width",stripWidth);
	// Control strip
	$('.editable-field').keypress(function(e){
		// STRIP HANDLING 
		//ctrl + shift + E shortcut 
		if(e.which == 5){ 
			if( $(this).next().hasClass("strip-visible") ){
				$(this).next().removeClass("strip-visible");
			} else {
				$('.editable-field').next().removeClass("strip-visible");
				$(this).next().addClass("strip-visible");
			}
		}


		$('.editable-field').each(function(){
			if ($(this).next().hasClass("strip-visible")){
				$(this).next().slideDown("fast");
			} else {
				$(this).next().slideUp("fast");
			}
		})
	});

	// Hide all at start
	$(".strip").hide();

	
});