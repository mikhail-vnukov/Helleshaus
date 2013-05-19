function stretchAndBend(element) {
	var width = $(window).innerWidth();
	var marginLeft = element.offset().left + 15;

	element.width(width);
	element.css('margin-left', -marginLeft);
	$(".article-main").css('margin-left', marginLeft);

}
(function($) {
	$(document).ready(function() {

		// stretch stretched divs
		stretchAndBend($(".article-main-wrapper"));
		// charge go top button
		$('#gtop').click(function() {
			window.scrollTo(0,0);
			return false;
		});


	});
})(jQuery);