
// home page featured projects tout carousel
function featuredProjects(){

	// WindowVars
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		
	});

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
	//getting rid of bars because of safari's poor performance
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1){
		//$('.middleground').hide();
		$('.background').hide();
		$('.foreground > .bar').hide();
	}
	
	var currentSlide = 0;
	var onDeck = 1;
	var prevSlide = 0;
	var slideTime = 7000;
	var transitionTime = 600;
	var slideNum = $('.tout-project').length;

	function nextSlide(){
		var slideMargin = 0;
		if(windowWidth < 1024){
			slideMargin = '-7.5%';
		}
		$('#project-' + onDeck).css({'left': windowWidth + 'px', 'visibility': 'visible'});

		$('#project-' + onDeck).animate({
				left : slideMargin
		}, transitionTime, function(){
			if (currentSlide == slideNum){
				currentSlide = 1;
			}
			else {
				currentSlide++;
			}
			$('#project-'+ currentSlide + ' > .project-details').animate({
				bottom : -20,
				opacity : 1
			}, 400);
			if(navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 || windowWidth < 500){
				
				if (currentSlide == slideNum){
					prevSlide = slideNum;
					onDeck = 1;
				}
				else {
					onDeck++;
					prevSlide++;
				}
				setTimeout(function(){
					$('#project-' + currentSlide).animate({
						left: -windowWidth
					}, transitionTime, function(){
						$('#project-' + currentSlide + ' > .tout-element').css('left', 0);
						$('#project-' + currentSlide).css('visibility', 'hidden');
						$('#project-'+ currentSlide + ' > .project-details').css({'bottom':'-70px', 'opacity':0})
					});
					nextSlide();
					
				}, slideTime);
			}
			else {
				$('#project-'+ currentSlide +' .foreground').animate({
					left : '-15%'
				}, slideTime, "linear");
				$('#project-'+ currentSlide +' .middleground').animate({
					left : '-10%'
				}, slideTime, "linear");
				$('#project-'+ currentSlide +' .background').animate({
					left : '-5%'
				}, slideTime, "linear", function(){
					if (currentSlide == slideNum){
						prevSlide = slideNum;
						onDeck = 1;
					}
					else {
						onDeck++;
						prevSlide++;
					}
					$('#project-' + currentSlide).animate({
						left: -windowWidth
					}, transitionTime, function(){
						$('#project-' + currentSlide + ' > .tout-element').css('left', 0);
						$('#project-' + currentSlide).css('visibility', 'hidden');
						$('#project-'+ currentSlide + ' > .project-details').css({'bottom':'-70px', 'opacity':0})
					});
					nextSlide();

				});
			}
			

		});

	}
	nextSlide();

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
	var wrapOffset = ((windowWidth - $('#site-header > .wrap').width()) / 2) + 10;
	if(windowWidth <= 1024){
		wrapOffset = ((windowWidth - $('#site-header > .wrap').width()) / 2) + (windowWidth * .075);
	}
	var scrollReady = true;
	$(window).resize(function(){
		windowHeight = $(window).height();
		windowWidth = $(window).width();
		wrapOffset = ((windowWidth - $('#site-header > .wrap').width()) / 2) + 10;
		if(windowWidth <= 1024){
			wrapOffset = ((windowWidth - $('#site-header > .wrap').width()) / 2) + (windowWidth * .075);
		}
		navOffset = windowHeight - $('#site-header').height();
		headerHeight = $('#site-header').height();
		toutHeight = windowHeight - headerHeight;
	});
	//scrolls window back to the top on unload so the browser doesn't try to scroll down on reload
	$(window).on('beforeunload', function() {
	    $(window).scrollTop(0);
	});
	
	// Position Home Tout
	function positionTout() {
		var headerHeight = $('#site-header').height();
		var toutHeight = windowHeight - headerHeight;
		$('.project-details').css('left', wrapOffset + 'px');
		$('.tout-element > .artwork').each(function(){
			if(this.height >= toutHeight * .7){
				$(this).css({'height':toutHeight * .80 + 'px', 'top':'0', 'width':'auto'});
			}
		});

		if(hasScrolled == false){
			$('.home-content').hide();
			$('#featured-projects').height(toutHeight);
			$('#site-header').css('top', toutHeight + 2 + 'px');
			$('.home-content').css('top', windowHeight + 50 + 'px');
			$('.home').css('height', windowHeight + 2 + 'px');
		}
		$('#site-header').css('visibility', 'visible');
		
	}
	function loadTout(){
		positionTout();
		featuredProjects();
	}
	$('#tout').preloader(loadTout);
	$(window).resize(positionTout);


	$('#wordmark').click(function(event){
		event.preventDefault();
		if(hasScrolled == true){
			showTout();
		}
	})

	function hideTout(){
		scrollReady = false;
		$('.home-content').show();
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
			$('.home-content').hide();
			scrollReady = true;
		});

		$('.home-content').css('position', 'absolute');
		$('#site-header').css('position', 'absolute');
		$('footer').fadeOut();
		hasScrolled = false;
		$('#logo').fadeOut();
		$('.work-nav').removeClass('selected');
	}
	$('.work-nav').click(function(event){
		event.preventDefault();
		hideTout();
		$('.work-nav').blur();
	});

	$('#site-header').css('border-top', '1px solid #EAEAEA');
}

//gallery for inline project carousels on home page
function projectGallery(){
	var slideCounter = 0;
    var imagesLoaded = 0;
    var iframeHeight = $(window).height();
    var userInteraction = false;
    var galleryVisible = false;
    $('#full-project').height($(window).height());
    if($(window).width() > 768){
    	$('#full-project').preloader(displayGallery);
    }
    else {
    	displayGallery();
    }

    // function to show gallery when loaded
    function displayGallery() {
         if(userInteraction == false){
                $('#project-info').css('bottom', '0px');
         }
    };

    // size the images in the gallery
    function sizeGallery() {
        var viewWidth = $(window).width();
        var viewHeight = $(window).height();
        var viewRatio = viewWidth / viewHeight;

        if(viewWidth > 768){
            $('.project-image').each(function(){
                var imageWidth = $(this).width();
                var imageHeight = $(this).height();
                var imageRatio = imageWidth / imageHeight;

                // for height
                if (imageRatio > viewRatio) {
                    $(this).css('height', viewHeight + 'px');
                    $(this).css('width', viewHeight * imageRatio + 'px'); 
                    var leftOffset = -(($(this).width() - viewWidth) / 2);
                    $(this).css('margin-left', leftOffset + 'px'); 

                }
                // for width
                else if (imageRatio < viewRatio) {
                    $(this).css('width', viewWidth + 'px');
                    $(this).css('height', viewWidth / imageRatio + 'px');
                    var topOffset = -(($(this).height() - viewHeight) / 2);
                    $(this).css('margin-top', '0px');
                }

            });
        }

        //displayGallery();
        galleryVisible = true;

    };

    //count the images in the gallery
    $('.project-image').each(function(){
        slideCounter++;
    });
    //check for load on each image
    $('.project-image').each(function(){
        $(this).load(function(){
            imagesLoaded++;

            if(imagesLoaded == slideCounter) {
                sizeGallery();
            }
        })
        
    });
    // fallback if load isn't called
    setTimeout(function(){
        if (galleryVisible == false){
            sizeGallery();  
        }
    }, 3000);

    function hideDescription() {
        var boxHeight = $('#project-info').height();
        var titleOffset = $('h1').height();
        var hideValue = -(boxHeight - titleOffset) + 30;
        $('#project-info').css('bottom', hideValue + 'px');
    };

    // carousel

    $('.slide').css('left', '100%');
    $('#slide1').css('left', '0');

    var currentSlide = 1;
    function nextSlide() {
        if(currentSlide == slideCounter){
            upcomingSlide = '#slide1';
            mainSlide = '#slide' + currentSlide;
            currentSlide = 1;
        }
        else {
            upcomingSlide = '#slide' + (currentSlide + 1);
            mainSlide = '#slide' + currentSlide; 
            currentSlide ++;
        }
        $(upcomingSlide).css('left', '100%');
        $(upcomingSlide).fadeTo(0, 1)
        $(mainSlide).fadeTo(200, .3, function(){
            $(mainSlide).animate({
                left : '-100%'
            }, 400);
            $(upcomingSlide).animate({
                left : '0%'
            }, 400);
         });

    }
    function prevSlide() {
        if(currentSlide == 1){
            upcomingSlide = '#slide' + slideCounter;
            mainSlide = '#slide' + currentSlide;
            currentSlide = slideCounter;
        }
        else {
            upcomingSlide = '#slide' + (currentSlide - 1);
            mainSlide = '#slide' + currentSlide; 
            currentSlide --;
        }
        $(upcomingSlide).css('left', '-100%');
        $(upcomingSlide).fadeTo(0, 1)
        $(mainSlide).fadeTo(200, .3, function(){
            $(mainSlide).animate({
                left : '100%'
            }, 400);
            $(upcomingSlide).animate({
                left : '0%'
            }, 400);
         });

    }


    $('#next-btn').click(function(){
        hideDescription();
        nextSlide();
        userInteraction = true;
    });
    $('#prev-btn').click(function(){
        hideDescription();
        prevSlide();
        userInteraction = true;
    });
    $('#project-info').mouseenter(function(){
        $(this).css('bottom', '0');
    });

    $('.related-project').click(function(){
        window.top.location.href = 'file:///Users/Scott/Sites/www/portfolio/index.html#' + this.id + '-gallery';

    });

    $(window).resize(sizeGallery);
}

// dispatch function to handle redirecting urls between mobile and desktop experiences
function dispatch(){
	var windowWidth = $(window).width();
	var projectID = $('body').attr('id');

	// rediret to the homepage if screen size is bigger than iPad portrait
	if($('body').hasClass('project-page') && !$('body').hasClass('home')){
		if(windowWidth > 768 && self == top ) {
			window.location.replace('http://scottjensen.design#' + projectID + '-gallery')
		}
	}
	// check for hash and load project if mobile and on homepage
	else if($('body').hasClass('home')){
		var windowHash = window.location.hash;
		// if there is a hash but they are on mobile
		if(windowHash.length > 1 && windowWidth < 768){
			var projectNum = windowHash.split('-gallery')[0];
			console.debug(projectNum.split('#')[1]);
			window.location.replace('/' + projectNum.split('#')[1]);
		}
		// if there is a hash on desktop, load the project
		else if(windowHash.length > 1){
			var projectNum = windowHash.split('-gallery')[0];
			launchModule('full', '/' + projectNum.split('#')[1]);
		}
	}
}

// Gallery hover state overlays
function projectOverlay (){
    $('.project').mouseenter(function(){

        var projectOverlay = $(this).find('.overlay');
        var projectTitle = $(this).find('h4');
        var projectMeta = $(this).find('.project-meta');

        $(projectOverlay).stop();
        $(projectTitle).stop();
        $(projectMeta).stop();  

        $(projectOverlay).animate({
            left : '0px'
        }, 300);
        $(projectTitle).animate({
            left : '20px'
        }, 370);
        $(projectMeta).animate({
            left : '20px'
        }, 440);

        $('.project').mouseleave(function(){  
            $(projectOverlay).stop();
            $(projectTitle).stop();
            $(projectMeta).stop();        
            $(projectOverlay).animate({
                left : '120%'
            }, 320);
            $(projectTitle).animate({
                left : '480px'
            }, 430);
            $(projectMeta).animate({
                left : '580px'
            }, 490);
        });

    });
    $('.project').click(function(){
        window.location.hash = this.id + '-gallery';
    });
    $('.related-project').click(function(){
        window.location.hash = this.id + '-gallery';
    });
}

//Dribbble shots
function dribbbleGallery(){
	var dataURL = "https://api.dribbble.com/v1/users/ScottJensen/shots?access_token=74a5e6faf815227977fab652c9c6cfd67c70d3ade9fdfc3c1818258db190b3bb"
	$.getJSON(dataURL, function(dribbbleList) {
	    for(i = 1; i <= 6; i++){
	        var shotHTML = '<li class="project thumb-' + i + '"><div class="live-area"><div class="overlay"></div><img src="' + dribbbleList[i-1].images.normal + '" /><h4 class="project-title">' + dribbbleList[i-1].title + '</h4><div class="project-meta"><h5>Description:</h5><p>' + dribbbleList[i-1].description.replace(/(<([^>]+)>)/ig,"").substring(0,78) + '...</p></div></div><a href="' + dribbbleList[i-1].html_url + '" class="project-link" target="_blank"></a></li>';
	        $('#dribbble-gallery .project-list').append(shotHTML);
	        
	    };
	    projectOverlay();
	});
}
	

// pie chart function for about page abilities
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

// moved this out of the module function so it can be utilized by the dispatch function
function launchModule(size, contentURL){
	$('body').append('<div class="page-overlay"></div><iframe src="'+ contentURL +'" class="module" style="display:none;" frameborder="0" scrolling="no"></iframe>');
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		$(window).resize(function(){
			windowHeight = $(window).height();
			windowWidth = $(window).width();
		});
		if(size == 'full'){
			$('.module').css('position', 'fixed');
			$('.module').css('left', windowWidth * .05 + 'px');
			$('.module').css('top', windowHeight * .05 + 'px');
			$('.module').css('width', windowWidth * .9 + 'px');
			$('.module').css('height', windowHeight * .9 + 'px');
			$(window).resize(function(){
				$('.module').css('left', windowWidth * .05 + 'px');
				$('.module').css('top', windowHeight * .05 + 'px');
				$('.module').css('width', windowWidth * .9 + 'px');
				$('.module').css('height', windowHeight * .9 + 'px');
			});
		}
		$('.page-overlay').fadeIn('fast');
		setTimeout(function(){
			centerContent();
		}, 30);
		$('.module').fadeIn();
		$('.page-overlay').click(function(){
			window.location.hash = '';
			$('.module').fadeOut('fast');
			$('.page-overlay').fadeOut('fast', function(){
				$('.page-overlay').remove();
				$('.module').remove();
			});
		});
};

function module() {
	setTimeout(function(){
		centerContent();
	}, 30);
	var windowWidth = $(window).width();
	$(window).resize(function(){
		centerContent();
		windowWidth = $(window).width();
	})

	$('.module-link').click(function(event){
		if(windowWidth > 768){
			event.preventDefault();
			var size = $(this).attr('size');
			var contentURL = $(this).attr('href');
			launchModule(size, contentURL);
		}
	});
}

// global function for centering something on the page
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

// dropcap plugin
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

// preloader plugin
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
		var contentLoaded = false;

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
					if(contentLoaded == false){
						displayObject();
					}
					contentLoaded = true;
				}
			})
		});
		$(this).prepend(spinnerHTML);
		//$(this).css('position', 'relative');
		$(this).find('.load-wrapper').css('margin-left', leftOffset + 'px');
		$(this).find('.load-wrapper').css('margin-top', topOffset + 'px');
		if(imageCount == 0){
			if(contentLoaded == false){
				displayObject();
			}
			contentLoaded = true;
		}
		setTimeout(function(){
			if(contentLoaded == false){
				displayObject();
			}
		}, 4000);

	}
})(jQuery);
