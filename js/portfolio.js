

function featuredProjects(){

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
	});

	
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
	var scrollReady = true;
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		navOffset = windowHeight - $('#site-header').height();
		headerHeight = $('#site-header').height();
		toutHeight = windowHeight - headerHeight;
	});
	
	// Position Home Tout
	function positionTout() {
		var headerHeight = $('#site-header').height();
		var toutHeight = windowHeight - headerHeight;
		if(hasScrolled == false){
			$('#featured-projects').height(toutHeight);
			$('#site-header').css('top', toutHeight + 'px');
			$('.home-content').css('top', windowHeight + 50 + 'px');
			$('.home').css('height', windowHeight + 2 + 'px');
		}
		
	}
	positionTout();
	$(window).resize(positionTout);


	$('#wordmark').click(function(){
		if(hasScrolled == true){
			showTout();
		}
	})

	function hideTout(){
		scrollReady = false;
		$('#tout').animate({
			top : -toutHeight
		}, 600);
		$('#site-header').animate({
			top : -1
		}, 600);

		$('.home-content').animate({
			top : headerHeight + 50
		}, 600, function(){
			$('body').css('overflow', 'auto');

		});

	
		$('.home-content').css('position', 'relative');
		$('.home-content').css('overflow', 'visible');
		$('footer').fadeIn();
		$('#site-header').css('position', 'fixed');
		$('#logo').fadeIn();
		hasScrolled = true;
		
		$('.work-nav').addClass('selected');

	}
	function showTout(){
		scrollReady = false;
		$('#tout').animate({
			top : toutHeight
		}, 600);

		$('#site-header').animate({
			top : toutHeight
		}, 600);
		$('.home-content').animate({
			top : windowHeight + 50
		},600, function(){
			$('body').css('overflow', 'hidden');
			scrollReady = true;
		});

		$('.home-content').css('position', 'absolute');
		$('#site-header').css('position', 'absolute');
		$('footer').fadeOut();
		hasScrolled = false;
		$('#logo').fadeOut();
		$('.work-nav').removeClass('selected');
		

	}
	$('.work-nav').click(hideTout);

	$('#site-header').css('border-top', '1px solid #EAEAEA');
/*

	$(window).bind('mousewheel DOMMouseScroll', function(event){
		var currentPosition = $(window).scrollTop();
		
	    if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
	    	if(lastPosition == 0 && hasScrolled == true && scrollReady == false){
	    		setTimeout(function(){
	    			scrollReady = true;
	    		},1300)
	    	}
	    	
	    	// moving up
	        if(lastPosition == 0 && hasScrolled == true && scrollReady == true){
				showTout();
			}
	    }
	    else {
	    	// moving down
	        if(lastPosition == 0 && hasScrolled == false && scrollReady == true) {
	        	hideTout();	
			}
	    }

	    lastPosition = $(window).scrollTop();

	});

*/
	


}
function pieChart() {
	$('.design-abilities').css('display', 'inline-block');
	var designCount = 0;
	$('.design-abilities .ability').each(function(){
		designCount++;
	});
	function displayDesign(){
		var ability = '.design-abilities li:nth-last-of-type(' + designCount + ')'
		var barFill = $(ability + ' .fill').attr('value') + '%';
		$(ability).fadeIn('fast');
		$(ability + ' .bar-graph .fill').css('width', barFill);
		designCount--;
		if(designCount != 0){
			setTimeout(function(){
				displayDesign();
			}, 100);
		}
		else{
			return;
		}
	};
	displayDesign();

	$('.pie').click(function(){
		var abilitiesDiv = '.' + this.id.split('-')[0] + '-abilities';
		$('.pie').removeClass('selected');
		$(this).addClass('selected');
		$('.abilities').hide();
		
		$('.abilities').css('display', 'none');
		$('.ability').css('display', 'none');
		$('.fill').css('width', '0');
		var abilityCount = 0;
		$(abilitiesDiv + ' .ability').each(function(){
			abilityCount ++;
		})
		$(abilitiesDiv).css('display', 'inline-block');

		function displayAbility() {
			var ability = abilitiesDiv + ' li:nth-last-of-type(' + abilityCount + ')'
			var barFill = $(ability + ' .fill').attr('value') + '%';
			$(ability).fadeIn('fast');
			$(ability + ' .bar-graph .fill').css('width', barFill);
			abilityCount--;
			if(abilityCount != 0){
				setTimeout(function(){
					displayAbility();
				}, 100);
			}
			else{
				return;
			}
			
		}
		displayAbility();

	});

}

function contactForm() {
	$('#contact-iframe').load(function() {
	    this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
	});
	


}
