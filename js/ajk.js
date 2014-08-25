$(document).ready(function() {
	skrollr.init({
		smoothScrolling: true
	});

	$('#quote-corner').click(function() {
		$('.contact').removeClass('contact-no-highlight');
		$('.contact').addClass('contact-highlight');

		window.setTimeout(function() {
			$('.contact').addClass('contact-no-highlight');
			$('.contact').removeClass('contact-highlight');
		}, 300);
		
	});
});