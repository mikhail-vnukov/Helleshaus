function stretchAndBend(element) {
	var width = $(window).width();
	var marginLeft = (width - 1024);

	element.width(width - marginLeft);
	element.css('margin-left', -marginLeft);
	element.css('padding-left', marginLeft);

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