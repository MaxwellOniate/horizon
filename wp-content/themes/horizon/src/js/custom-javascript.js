(function ($) {
	// STICKY NAV
	const navOffset = $("#main-nav").offset().top;
	$(window).scroll(function () {
		const scrollY = $(window).scrollTop();

		if (scrollY >= navOffset) {
			$("#main-nav").addClass("fixed-top");
		} else {
			$("#main-nav").removeClass("fixed-top");
		}
	});

	// ABOUT PAGE GALLERY

	$(".gallery-bottom").on("click", function (e) {
		if (e.target.src) {
			$(".gallery-top-img").attr("src", e.target.src);
			$(".gallery-top-img").css("opacity", "0");
			$(".gallery-top-img").stop().animate({ opacity: 1.0 }, "slow");
			$(".gallery-active-img").removeClass("gallery-active-img");
			$(e.target).addClass("gallery-active-img");
		}
	});
})(jQuery);
