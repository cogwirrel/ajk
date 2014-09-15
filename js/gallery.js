
var galleryIndex = 0;
var galleryImages = [];

$(document).ready(function() {

	// Gallery images
	var numImages = $('#gallery-container').find('img').length;
	
	for(var i = 0; i < numImages; i++) {
		galleryImages.push($('#gallery-img-' + i).attr('src'));
	}

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
		$('#gallery-modal-img').attr('src', galleryImages[galleryIndex % galleryImages.length]);
	});

	$('#gallery-button-prev').click(function() {
		galleryIndex--;
		if(galleryIndex < 0) {
			galleryIndex += galleryImages.length;
		}
		$('#gallery-modal-img').attr('src', galleryImages[galleryIndex % galleryImages.length]);
	});
});