$(window).on("load resize",function(e){ //run every time the window is resized
	var isMobile = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
	if (!isMobile || $(window).width() >= 768) {
		document.getElementById("caret").style.display = "inline-block";
		$(".dropdown").hover(function () {
			$(this).addClass('open')
		}, function () {
			$(this).removeClass('open')
		});
	}
	else {
		document.getElementById("caret").style.display = "none";
	}
});