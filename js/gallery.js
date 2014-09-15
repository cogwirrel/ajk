
var galleryIndex = 0;

$(document).ready(function() {

	// Gallery images
	var images = [
		"http://placekitten.com/300/300",
		"http://placekitten.com/400/400",
		"http://placekitten.com/300/250",
		"http://placekitten.com/300/300",
		"http://placekitten.com/400/400",
		"http://placekitten.com/300/250",
		"http://placekitten.com/300/300",
		"http://placekitten.com/400/400",
		"http://placekitten.com/300/250",
		"http://placekitten.com/300/300",
		"http://placekitten.com/400/400"];

	// Generate gallery
	generateGallery(images);

	$('.gallery-thumb').click(function() {
		var src = $(this).attr('src');
		galleryIndex = parseInt($(this).attr('data-gallery-id'));
		var img = '<img id="gallery-modal-img" src="' + src + '" class="gallery-modal-img"/>';
		$('#gallery-modal').modal();
		$('#gallery-modal').on('shown.bs.modal', function(){
			$('#gallery-modal .modal-body .gallery-img').html(img);
		});
		$('#gallery-modal').on('hidden.bs.modal', function(){
			$('#gallery-modal .modal-body .gallery-img').html('');
		});
	});

	$('#gallery-button-next, .gallery-img').click(function() {
		galleryIndex++;
		$('#gallery-modal-img').attr('src', images[galleryIndex % images.length]);
	});

	$('#gallery-button-prev').click(function() {
		galleryIndex--;
		if(galleryIndex < 0) {
			galleryIndex += images.length;
		}
		$('#gallery-modal-img').attr('src', images[galleryIndex % images.length]);
	});

	// Refresh skrollr as we've changed the height of the site
	sk.refresh();
});

var generateGallery = function(images) {
	var gallery = "";
	for(var i = 0; i < images.length / 4; i++) {
		gallery += '<div class="row">\n';

		for(var j = 0; j < 4; j++) {

			gallery += '<div class="col-md-3">\n';
			gallery += '<a href="javascript:void(0);">';

			var index = i * 4 + j;
			if(index < images.length) {
				gallery += '<img data-gallery-id="' + index + '" class="gallery-thumb" src="' + images[index] + '"></img>';
			}

			gallery += '</a>';
			gallery += '</div>';
		}

		gallery += '</div>\n';
		gallery += '<div class="space-15"></div>\n';
	}
	$('#gallery-container').html(gallery);
}
