$(window).on("load resize",function(e){ //run every time the window is resized
	if (window.innerWidth > 767) {
		document.getElementById("caret").style.display = "inline-block";
		document.getElementById("caret1").style.display = "inline-block";
		$(".dropdown").hover(function () {
			$(this).addClass('open')
		}, function () {
			$(this).removeClass('open')
		});
	} else {
			$(".dropdown").hover(function () {
			$(this).removeClass('open')
		});
		document.getElementById("caret").style.display = "none";
		document.getElementById("caret1").style.display = "none";
	}
});