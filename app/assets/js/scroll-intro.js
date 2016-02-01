$(document).ready(function(){

	var windowHeight = $(window).height(),
		headerHeight = $('#header').height();

	$(window).on('load resize',function () {
		windowHeight = $(window).height();
		headerHeight = $('#header').height();

		//set slider max height of viewport
		$('.intro-scroll').css('height',windowHeight - headerHeight);

	});

	//scroll down button function
	$('.scroll-down-wrap span').on('click',function(){
		$('html, body').animate({
            scrollTop: windowHeight - headerHeight
        }, 1000, 'easeInOutCubic' );
	})

});