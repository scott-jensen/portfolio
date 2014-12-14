

function featuredProjects(){
	var navHeight = $('#site-header').height();
	var windowHeight = $(window).height();

	$('#tout').css('height', windowHeight - navHeight + 'px' );
}