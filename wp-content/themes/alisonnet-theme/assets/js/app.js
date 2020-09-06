document.addEventListener("DOMContentLoaded", function() {
	// Custom JS
});

tryMuteTopInfo();

function tryMuteTopInfo(){

	console.log(localStorage);
	let currDate = new Date();
	let topInfoAppearTime = Date.parse(localStorage.getItem('topInfoAppearTime'));
	
	if(!topInfoAppearTime)return;

	if(currDate<topInfoAppearTime){
		$('.top-information').remove();
	}else{
		localStorage.removeItem('topInfoAppearTime');
	}
};

jQuery(document).ready(function($) { 

	// localStorage.clear();

	turnOnLibrariesStaff();

	$('.top-information .close-icon').on('click', function(){
		
		let currDate = new Date();
		let appearTime = new Date();
		appearTime.setMinutes(currDate.getMinutes()+1);

		localStorage.setItem('topInfoAppearTime', appearTime);
		console.log(localStorage);
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
	
		

		function turnOnLibrariesStaff(){
			new WOW().init();

			$('.slick-services').slick({
				dots: true
			
			});
		
			$('.slick-product-images, .slick-product-entry-images').slick({
				dots: true,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear'
			  });
		}
});