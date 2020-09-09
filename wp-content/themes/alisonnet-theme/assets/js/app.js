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

	$('.notification-card .close-icon').on('click',function(){
		let card = $('.notification-card');
		card.removeClass('notification-card--active animate__animated animate__fadeInRight');

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