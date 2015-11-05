

function featuredProjects(){

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		positionProjects();
	});

	// Center each of the projects
	function positionProjects(){
		$('.tout-project').each(function(){
			var leftOffset = (windowWidth - $(this).width()) / 2;
			var topOffset = (windowHeight - $(this).height()) / 2;
			$(this).css('margin-top', topOffset + 'px');
			$(this).css('margin-left', leftOffset + 'px');
		});
	}
	positionProjects();


	var navCount = $('#main-nav > li').length;
	var loadCount = 1;
	function loadNav(){
		$('#main-nav li:nth-child(' + loadCount + ') a').css('visibility', 'visible');
		$('#main-nav li:nth-child(' + loadCount + ') a').addClass('loaded');
		setTimeout(function(){
			$('#main-nav li:nth-child(' + loadCount + ') a').removeClass('loaded');
			if(loadCount < navCount){
				loadCount++
				setTimeout(function(){
					loadNav();
				}, 50)
				
			}
		}, 220);

	}
	loadNav();

	// Project Carousel

	var currentProject = 1;
	var projectNumber = $('#featured-projects').children().length;
	function nextProject(){
		var animationSpeed = 1000;
		var animationWait = 80;
		var activeProject = '.project-' + currentProject;
		if(currentProject == projectNumber){
			var nextProject = $('.project-1');
			currentProject = 1;
		}
		else{
			var nextProject = $('.project-' + currentProject++);
			currentProject++
		}
		var objNum = 1;
		var numElements = $(activeProject).children().length;
		function animateElementOut(currentNum){
			
			var currentNum = currentNum;
			var activeElement = $(activeProject + ' .project-obj:nth-child(' + currentNum + ')');
			activeElement.animate({
				'marginLeft' : -windowWidth * 2,
			}, animationSpeed);

			if(objNum <= numElements){
				setTimeout(function(){
					animateElementOut(objNum++);
				}, animationWait);
				animationWait = animationWait - 3;
				animationSpeed = animationSpeed - 10;
			}
		}
		animateElementOut(objNum);
		setTimeout(function(){
			$(activeProject).animate({
				'opacity' : 0,
				
			}, 1200)
		}, 300);
		

		
	}

	function prevProject(){

	}

	setTimeout(function(){
		nextProject();
	}, 1500)
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
			$('#site-header').css('top', toutHeight + 2 + 'px');
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
		window.scrollTo(0, 0);
		scrollReady = false;
		$('#tout').animate({
			top : 0
		}, 600);

		$('#site-header').animate({
			top : toutHeight + 2
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

function module() {
	setTimeout(function(){
		centerContent();
	}, 30);
	
	$(window).resize(centerContent)
	

	$('.module-link').click(function(event){
		event.preventDefault();
		var contentURL = $(this).attr('href');
		$('body').append('<div class="page-overlay"></div><iframe src="'+ contentURL +'" class="module" style="display:none;" frameborder="0" scrolling="no"></iframe>');
		if($(this).attr('size') == 'full'){
			$('.module').css('position', 'fixed');
			$('.module').css('left', '5%');
			$('.module').css('top', '5%');
			$('.module').css('min-width', '90%');
			$('.module').css('min-height', '90%');
		}
		$('.page-overlay').fadeIn('fast');
		setTimeout(function(){
			centerContent();
		}, 30);
		$('.module').fadeIn();
		$('.page-overlay').click(function(){
			$('.module').fadeOut('fast');
			$('.page-overlay').fadeOut('fast', function(){
				$('.page-overlay').remove();
				$('.module').remove();
			});
			
		});
	});
}

function centerContent(){
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$('.module').each(function(){
		var contentWidth = $(this).width();
		var contentHeight = $(this).height();
		var topOffset = (windowHeight - contentHeight) / 2;
		var leftOffset = (windowWidth - contentWidth) / 2;
		$(this).css('left', leftOffset + 'px');
		$(this).css('top', topOffset + 'px');
	})
	return;
}

(function($) {
	$.fn.dropcap = function() {
		$('p:first', this).each(function(){
			var content = $(this).text().trim();
			var cap = '<span class="dropcap">' + content.charAt(0) + '</span>';
			var content = cap + content.substr(1);
			$(this).html(content);
		})
		
	}
})(jQuery);

(function($) {
	$.fn.preloader = function(callback) {
		var theObj = $(this);
		var theChildren = $(this).children()
		$(theChildren).fadeTo(0, 0);
		var objheight = $(this).height();
		var objwidth = $(this).width();
		var topOffset = (objheight - 150) / 2;	
		var leftOffset = (objwidth - 150) / 2;
		var spinnerHTML = "<div class='load-wrapper'><div class='animation-block'><div class='bar1'><div class='bar'></div></div><div class='bar2'><div class='bar'></div></div><div class='bar3'><div class='bar'></div></div></div><span class='loading'>Loading</span></div>"
		var imageCount = 0;
		var imagesLoaded = 0;

		function displayObject(){
			$(theObj).find('.load-wrapper').fadeOut(function(){
				$(theChildren).fadeTo("fast", 1);
				callback();
			});
		};

		$(this).find('img').each(function(){
			imageCount++;
		});
		
		
		$(this).find('img').each(function(){
			
			$(this).load(function(){
				imagesLoaded++
				if(imagesLoaded == imageCount){
					displayObject();
				}
			})
		});
		$(this).prepend(spinnerHTML);
		//$(this).css('position', 'relative');
		$(this).find('.load-wrapper').css('margin-left', leftOffset + 'px');
		$(this).find('.load-wrapper').css('margin-top', topOffset + 'px');
		if(imageCount == 0){
			displayObject();
		}

	}
})(jQuery);
