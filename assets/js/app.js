$( document ).ready(function(){
	//mobile sidenav script
	$(".button-collapse").sideNav();

	//navbar scrollspy script
	$('.scrollspy').scrollSpy();

	//top of the screen button actions
	$('.fixed-action-btn').on('click', function(){
		$("body").scrollTop(0);
	});
});
