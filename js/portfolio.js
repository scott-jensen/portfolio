

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
		$(this).css('left', windowWidth + 400 + 'px');
	})

	function cycleProjects(activeProject){	

		if(activeProject == 1){
			animateProjectOut($('.project-1'));
			setTimeout(function(){
				animateProjectIn($('.project-2'))
			},200);
			
		}
		else if(activeProject ==2){
			
		}
		else if(activeProject == 3){
			
		}

	}

	function animateProjectOut(theProject){
		var totalElements = 0;
		var animateElement = 1;
		theProject.find('.shrapnel').each(function(){
			totalElements ++;
		});
		function moveElement(){
			theProject.find('.shrapnel-' + animateElement).animate({
				left: -windowWidth - 400
			}, 1000, 'swing');
			setTimeout(function(){
				if(animateElement <= totalElements){
					animateElement++
					moveElement();
				};
			},30);
		};
		moveElement();	
		theProject.find('.project-images').addClass('project-prev');
		theProject.animate({
			opacity:0
		}, 1000);
		
	};

	function animateProjectIn(theProject){
		var totalElements = 0;
		var animateElement = 1;
		theProject.find('.project-images').addClass('project-next');
		theProject.css('opacity', '0');
		theProject.find('.shrapnel').each(function(){
			$(this).css('left', windowWidth + 'px');
			totalElements ++;
		});
		function moveElement(){
			$('.shrapnel-' + animateElement).animate({
				left: 0
			}, 1000, 'swing');
			setTimeout(function(){
				if(animateElement <= totalElements){
					animateElement++
					moveElement();
				};
			},30);

		};
		moveElement();	
		setTimeout(function(){
			theProject.find('.project-images').removeClass('project-next');
		},200);
		theProject.animate({
			opacity:1
		},1200);
		
	};

	setTimeout(function(){
		cycleProjects(1);
	},2000);
}