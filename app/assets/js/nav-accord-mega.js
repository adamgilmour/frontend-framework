function MobileNavInit() {
	
	//hide nav/menus
	Nav.hide();
	DropdownFirstLvlMenu.hide();
	DropdownSecondLvlMenu.hide();

	//unbind hover
	DropdownFirstLvlLink.off('mouseenter').off('mouseleave');

};

function DesktopNavInit(){

	//remove class / unbind click - mobile menu
	MobileToggle.removeClass('active').off('click');

	//remove mobile icons
	DropdownFirstLvlLink.find('span').remove();

	//remove class - nav
	Nav.removeClass('active');

	//remove class / unbind click - 1st level dropdown link
	DropdownFirstLvlLink.removeClass('active').off('click');

	//hide/removeclass - mobile parent dropdown
	DropdownFirstLvlMenu.hide().removeClass('open');

	//remove class - 2nd level dropdown link
	DropdownFirstLvlMenu.children('li').removeClass('active');

	//remove class - 2nd level dropdown menu
	DropdownSecondLvlMenu.removeClass('open');

	//unbind click - 2nd level dropdown link
	DropdownSecondLvlLink.off('click');

	//show nav/sub menus
	Nav.show();
	DropdownSecondLvlMenu.show();

};

//if nav is taller than viewport add scroll functionality - TODO
function addScroll(){	

	var windowHeight = $(window).height(),
		headerHeight = Header.outerHeight(true),
		navHeight = Nav.outerHeight(true);

	console.log(windowHeight)
	if (navHeight > windowHeight) {
		Nav.css({
			height: windowHeight - headerHeight,
			overflow: 'scroll'
		});
	};
	
}


function MobileNavOpenMenu(){

	//mobile button open
	MobileToggle.on('click', function(event) {
		event.preventDefault();

		if(!Nav.hasClass('active')) {
			//add class - nav container
			$(this).addClass('active')

			//show / add class nav container
			Nav.slideDown().addClass('active');
			
			//prevent user from scrolling bg content
			Body.addClass('no-scroll');

		} else {
			//remove active class to the nav container
			$(this).removeClass('active')

			//hide / remove class nav container
			Nav.slideUp().removeClass('active');
			
			//enable user to scroll bg content
			Body.removeClass('no-scroll');

			//close all others / remove classes
			DropdownFirstLvlLink.removeClass('active');
			DropdownFirstLvlMenu.slideUp().removeClass('open');
			DropdownSecondLvlLink.removeClass('active');
			DropdownSecondLvlMenu.slideUp().removeClass('open');
		}

	});
};

	
function MobileNavDropDowns() {

	//first level dropdown click spans
	DropdownFirstLvlLink.on('click', '> span', function() {

		//if dropdown container doesn't have a class of active open the menu
		if(!$(this).parent().hasClass('active')) {
			$(this).parent().addClass('active');
			$(this).next().slideDown().addClass('open');
		}

		//if dropdown container does have a class of active close the menu
		else {
			$(this).parent().removeClass('active');
			$(this).next().slideUp().removeClass('open');
			DropdownSecondLvlLink.removeClass('active')
			DropdownSecondLvlMenu.slideUp().removeClass('open');
		}
	});

	//second level
	DropdownSecondLvlLink.on('click', 'span', function() {
		if (!$(this).parent().find('ul').is(':visible')) {
			DropdownSecondLvlLink.removeClass('active')
			DropdownSecondLvlMenu.slideUp().removeClass('open');
		};

		if(!$(this).parent().hasClass('active')) {
			$(this).parent().addClass('active');
			$(this).next().slideDown().addClass('open');
		} 
		else {
			$(this).parent().removeClass('active');
			$(this).next().slideUp().removeClass('open');
		}
	});
	
};


function MobileNavIcons() {

	//remove icons for desktop
	DropdownFirstLvlLink.find('span').remove();

	//insert icons
	$('<span></span>').insertBefore(DropdownFirstLvlMenu);
	$('<span></span>').insertBefore(DropdownSecondLvlMenu);

};


function DesktopNavHoverMenu(){
	DropdownFirstLvlLink.hover(function() {
		$(this).addClass('open');
		$(this).find(DropdownFirstLvlMenu).stop(true, true).fadeIn();
	}, function() { 
		$(this).removeClass('open');
		$(this).find(DropdownFirstLvlMenu).stop(true, true).fadeOut();
	})
};



$(document).ready(function(){

	//global variables
	window.Body = $('body');
	window.Header = $('#header');
	window.MobileToggle = $('.mobile-toggle');
	window.Nav = $("#primary-nav");
	window.DropdownFirstLvlLink = $(".dropdown");
	window.DropdownFirstLvlMenu = $(".dropdown-menu");
	window.DropdownSecondLvlLink = $(".dropdown-menu li");
	window.DropdownSecondLvlMenu = $(".dropdown-menu ul");

	
	//switch between desktop/mobile nav functions at breakpoint
	enquire.register("screen and (max-width:991px)", {
		match : function(){
			MobileNavInit();
			MobileNavOpenMenu();
			MobileNavIcons();
			MobileNavDropDowns();
		}
	}).register("screen and (min-width:992px)", {
	    match : function() {
			DesktopNavInit();
			DesktopNavHoverMenu();
	    }
	})

});