

function featuredProjects(){

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
	});

	// Position Home Tout
	function positionTout() {
		var headerHeight = $('#site-header').height();
		var toutHeight = windowHeight - headerHeight;
		$('#featured-projects').height(toutHeight);
		$('#site-header').css('top', toutHeight + 'px');
		$('.home-content').css('top', windowHeight + 50 + 'px');
		$('.home').css('height', windowHeight + 2 + 'px');
	}
	positionTout();
	$(window).resize(positionTout);
	
}

function homeScroll() {

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	var lastPosition = 0;
	var hasScrolled = false;
	var headerHeight = $('#site-header').height();
	var toutHeight = windowHeight - headerHeight;
	var navOffset = windowHeight - $('#site-header').height();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		navOffset = windowHeight - $('#site-header').height();
		headerHeight = $('#site-header').height();
		toutHeight = windowHeight - headerHeight;
	});

	function hideTout(){

		$('#tout').animate({
			top : -toutHeight
		}, 700);
		$('#site-header').animate({
			top : -1
		}, 700);

		$('.home-content').animate({
			top : headerHeight + 50
		}, 700, function(){
			$('body').css('overflow', 'auto');
			$('#logo').fadeIn();
		});

	
		$('.home-content').css('position', 'relative');
		$('.home-content').css('overflow', 'visible');
		$('#site-header').css('position', 'fixed');
		hasScrolled = true;
		
		$('.work-nav').addClass('selected');

	}
	function showTout(){
		$('#tout').animate({
			top : toutHeight
		}, 700);

		$('#site-header').animate({
			top : toutHeight
		}, 700);
		$('.home-content').animate({
			top : windowHeight + 50
		},700, function(){
			$('body').css('overflow', 'hidden');
		});

		$('.home-content').css('position', 'absolute');
		$('#site-header').css('position', 'absolute');
		hasScrolled = false;
		$('#logo').fadeOut();
		$('.work-nav').removeClass('selected');
		

	}
	$('.work-nav').click(hideTout);

	$('#site-header').css('border-top', '1px solid #CCC');

	$(window).bind('mousewheel DOMMouseScroll', function(event){
		var currentPosition = $(window).scrollTop();
		
	    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {

	        if(lastPosition == 0 && hasScrolled == true){
				showTout();
			}
	    }
	    else {
	        if(lastPosition == 0 && hasScrolled == false) {
	        	hideTout();	
			}
	    }

	    lastPosition = $(window).scrollTop();

	});


}