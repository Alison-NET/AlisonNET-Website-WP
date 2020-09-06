document.addEventListener("DOMContentLoaded", function() {

	// Custom JS

});

jQuery(document).ready(function($) { 
	new WOW().init();

	$('.slick-services').slick({
		dots: true
	
	});

	$('.top-information .close-icon').on('click', function(){
		$('.top-information').remove();
	});

	$('.form').submit(function() {
		var form = $(this);
		var msg = form.serialize();
		console.log(msg);
		$.ajax({
			type: 'POST',
			url: '<?php echo get_template_directory_uri(); ?>/inc/send-mail.php',
			data: msg,
			success: function(data) {
			// form.find('.form-submit').attr('disabled', 'disabled');
			// location.href = '/thanks';
			// form[0].reset();
			console.log(data);
			},
			error: function(xhr, str){
				alert('Виникла помилка при відправці форми: ' + xhr.responseCode);
			}
			});
			return false;
		});
});