//Check if it's mobile - don't display fullscreen on mobile
if ($(window).width() > 767) {
	//Display fullscreen div with selected image as background when clicked
	$('img').click(function () {
		$('#Fullscreen').css('height', $(window).height());
		$('#Fullscreen').css('width', $(window).width());
		var src = $(this).attr('src');
		$('#Fullscreen').css('background-image', 'url(' + src + ')');
		$('#Fullscreen').fadeIn();
		$('#dimBackground').fadeIn();
	});
	//Hide when clicked again
	$('#Fullscreen').click(function () {
		closeOut();
	});
}

//Close image
function closeOut() {
	$('#Fullscreen').fadeOut();
	$('#dimBackground').fadeOut();
}

//Escape key hides image
document.onkeydown = function (e) {
	e = e || window.event;
	switch (e.keyCode) {
	case 27: //esc
		closeOut();
		break;
	}
};