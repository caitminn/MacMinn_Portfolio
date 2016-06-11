$(function(){
	$(window).on("scroll", function() {
	    if($(window).scrollTop() > 100) {
	        $(".mainNav").addClass("active");
	    } else {
	        //remove the background property so it comes transparent again (defined in your css)
	       $(".mainNav").removeClass("active");
	    }
	});

	$('.fa-bars').on('click', function() {
		// We need to display flex the main nav
		console.log('Hi!');
		$('#menu-main-navigation').toggleClass('show');
	});

	console.log("It's working");

});