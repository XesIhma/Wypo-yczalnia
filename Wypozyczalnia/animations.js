$(document).ready(function(){
	
	

	 $('.scroll_left').click(function() {
		event.preventDefault();
		$(this).siblings('.category_wraper').animate({
			scrollLeft: "-=400px"
		}, "slow");	
		});

		$('.scroll_right').click(function() {
			event.preventDefault();
			$(this).siblings('.category_wraper').animate({
				scrollLeft: "+=400px"
			}, "slow");
		});





	
	$('.category_wraper').scroll(function() {// Fires each time the container is scrolled
    if($(this).scrollLeft() == 0) {
			$(this).siblings('.scroll_left').hide();// Fires when the container is at its left 
                                   // most scroll position
    }
    else if($('.scroll_left').css('display') != 'block') {
			$(this).siblings('.scroll_left').show(); // Fires when the container is at any other
                                   // scroll position and the element is hidden
    }
		if($(this).scrollLeft() >= 2368 - $(this).width()) {
			$(this).siblings('.scroll_right').hide();// Fires when the container is at its left 
																 // most scroll position
	}
	else if($('.scroll_right').css('display') != 'block') {
		$(this).siblings('.scroll_right').show(); // Fires when the container is at any other
																 // scroll position and the element is hidden
	}
}).scroll();




	
	
});
