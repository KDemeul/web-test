$(document).ready(function(){
	var maxWidth = 0;
	$('.left-navbar-field-name').each(function(){
		$(this).show();
		maxWidth = Math.max(maxWidth,$('.left-navbar').width());
		$(this).hide();
	});
	$('.left-navbar').css('width',maxWidth);
	$('#customPanel').css('margin-left',maxWidth);
	$('.active').find('.left-navbar-field-icon').hide();
	$('.active').find('.left-navbar-field-name').show();

	$('.customTab').hide();
	$('#customTab-home').show();
});

$('.left-navbar-group-item').hover(
	function () {
		if(!$(this).hasClass('active')){
			$(this).find('.left-navbar-field-icon').stop().fadeOut(300,function(){
				$(this).parent().find('.left-navbar-field-name').stop().fadeIn(300);
			});
		} else {
			$(this).find('.left-navbar-field-name').stop().fadeOut(300,function(){
				$(this).parent().find('.left-navbar-field-icon').stop().fadeIn(300);
			});
		}
	}, 
	function () {
		if(!$(this).hasClass('active')){
			$(this).find('.left-navbar-field-name').stop().fadeOut(300,function(){
				$(this).parent().find('.left-navbar-field-icon').stop().fadeIn(300);
			});
		} else {
			$(this).find('.left-navbar-field-icon').stop().fadeOut(300,function(){
				$(this).parent().find('.left-navbar-field-name').stop().fadeIn(300);
			});

		}
	});

var idCurrentActive = "home";
$('.left-navbar-group-item').click(function(){
	var idClicked = $(this).attr('id');
	if(idCurrentActive != idClicked)
	{
		// MENU
		// Toggling previous
		$('#' + idCurrentActive).find('.left-navbar-field-name').stop().fadeOut(300,function(){
			$(this).parent().find('.left-navbar-field-icon').stop().fadeIn(300);
		});
		// Changing active
		$('#' + idCurrentActive).removeClass('active');
		$('#' + idClicked).addClass('active');

		// PANEL
		$('#customTab-' + idCurrentActive).fadeOut('fast', function(){
		$('.customTab').hide(); // Prevent animation getting stuck
			$('#customTab-' + idClicked).fadeIn('fast');		
		});
		
		// Changing pane
		idCurrentActive = idClicked;
	}
});