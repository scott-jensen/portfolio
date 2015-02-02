

function featuredProjects(){

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
	});

	// Position Tout
	var navHeight = $('#site-header').height();
	$('#tout').css('height', windowHeight - navHeight + 'px' );
	setTimeout(function(){
		$('.project-1').animate({
			opacity: 1
		},500)
	}, 800)
	
	$(window).resize(function(){
		$('#tout').css('height', windowHeight - navHeight + 'px' );
	});
	$('.project-images').each(function(){
		var projectHeight = $(this).find('.picture-1').height();
		$(this).css('margin-top', (windowHeight - projectHeight) / 2 - 60 + 'px');
	});

	$(window).resize(function(){
		$('.project-images').each(function(){
			var projectHeight = $(this).height();
			$(this).css('margin-top', (windowHeight - projectHeight) / 2 - 60 + 'px');
		});
	});

	// Carousel
	var windowWidth = $(window).width();
	var currentProject = 1;
	var prevProject = 3;
	var nextProject = 2;

	$('.project-2').find('.project-images').addClass('project-next');
	$('.project-2').fadeTo(0, 0);
	$('.project-2').find('.shrapnel').each(function(){
		$(this).css('left', windowWidth + 2200 + 'px');
	})

	function cycleProjects(activeProject){	

		if(activeProject == 1){
			animateProjectOut($('.project-1'));
			setTimeout(function(){
				animateProjectIn($('.project-2'))
			},300);
			
		}
		else if(activeProject ==2){
			animateProjectOut($('.project-2'));
			setTimeout(function(){
				animateProjectIn($('.project-3'))
			},300);
		}
		else if(activeProject == 3){
			animateProjectOut($('.project-3'));
			setTimeout(function(){
				animateProjectIn($('.project-1'))
			},300);
		}

	}

	function animateProjectOut(theProject){
		var totalElements = 0;
		var animateElement = 1;
		var animateTimer = 100;
		var animateSpeed = 1200;
		theProject.find('.shrapnel').each(function(){
			totalElements ++;
		});
		function moveElement(){
			theProject.find('.shrapnel-' + animateElement).addClass('shrapnel-out');
			theProject.find('.shrapnel-' + animateElement).animate({
				left: -windowWidth - 1000
			}, animateSpeed, 'swing');
			setTimeout(function(){
				if(animateElement <= totalElements){
					animateElement++
					animateTimer = animateTimer - 10;
					animateSpeed = animateSpeed - 120;
					moveElement();
				};
			},animateTimer);
		};
		moveElement();	
		theProject.find('.project-images').addClass('project-prev');
		theProject.animate({
			opacity:0
		}, 1200);
		
	};

	function animateProjectIn(theProject){
		var totalElements = 0;
		var animateElement = 1;
		var animateTimer = 100;
		var animateSpeed = 1200;
		theProject.find('.project-images').addClass('project-next');
		theProject.css('opacity', '0');
		theProject.find('.shrapnel').each(function(){
			$(this).css('left', windowWidth + 'px');
			totalElements ++;
		});
		function moveElement(){
			theProject.find('.shrapnel-' + animateElement).addClass('shrapnel-in');
			$('.shrapnel-' + animateElement).animate({
				left: 0
			}, animateSpeed, 'swing');
			setTimeout(function(){
				if(animateElement <= totalElements){
					animateElement++
					animateTimer = animateTimer - 20;
					animateSpeed = animateSpeed - 90;
					moveElement();
				};
			},animateTimer);

		};
		moveElement();	
		setTimeout(function(){
			theProject.find('.project-images').removeClass('project-next');
		},200);
		theProject.animate({
			opacity:1
		},1200);
		
	};

	var projectCounter = 1;
	function runProjects(){
		setTimeout(function(){
			cycleProjects(projectCounter);
			if(projectCounter == 3){
				projectCounter = 1;
			}
			else {
				projectCounter++
			}
			
		},3000, function(){
			runProjects();
		});
	}
	runProjects();
	
}

function homeScroll() {
	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	var lastPosition = 0;
	var navOffset = windowHeight - $('#site-header').height();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		navOffset = windowHeight - $('#site-header').height();
	});

	$('#site-header').css('border-top', '1px solid #CCC');

	$(window).scroll(function() {

		var currentPosition = $(window).scrollTop();

		/* Auto Scroll Stuff
	    clearTimeout($.data(this, 'scrollTimer'));
	    $.data(this, 'scrollTimer', setTimeout(function() {
	    	
	        if(currentPosition > lastPosition && currentPosition < navOffset){
				$('html, body').animate({
					scrollTop : $('#site-header').offset().top
				}, 500);
			
			}
			else if(currentPosition < lastPosition && currentPosition < navOffset){
				$('html, body').animate({
					scrollTop : 0
				}, 500);
			}
			lastPosition = $(window).scrollTop();
	        console.log("Haven't scrolled in 250ms!");
	    }, 250));
		*/

		// Fixing the nav when scrolling
	    if(currentPosition >= navOffset){
	    	$('#site-header').css('position', 'fixed');
	    	$('#project-gallery').css('margin-top', '96px');
	    	$('#site-header').css('border-top', 'none');
	    }
	    else{
	    	$('#site-header').css('position', 'relative');
	    	$('#project-gallery').css('margin-top', '0px');
	    	$('#site-header').css('border-top', '1px solid #CCC');
	    }

	});




		


}