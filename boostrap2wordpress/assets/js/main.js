$(function(){
	//cache the window object
	var $window = $(window);

	//parallax background effect
	$('section[data-type="background"]').each(function(){
		var $bgobj = $(this); //assinging the object

		$(window).scroll(function(){
			//scroll the background at var speed
			// the yPos is a negative value bacause we re scrolling

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			// put together our final background position
			var  coords = '50% '+ yPos + 'px';

			//move the background
			$bgobj.css({ backgroundPosition: coords});

		}); // end the window scroll 
	});
});