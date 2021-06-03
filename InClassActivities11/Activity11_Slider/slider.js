$(document).ready(function() {
	$("#slider").bxSlider({
		auto: true,

		// Show only 1 slides
		minSlides: 1,
		maxSlides: 1,

		slideWidth: 250,
		slideMargin: 10,
		randomStart: true,

		// Move Slides one by one
		moveSlides: 1,

		// Automatic Transitions in 3 seconds
		pause: 3000,

		// Pager
		pagerSelector: $("#pager"),
		pagerType: "short"
	});
});