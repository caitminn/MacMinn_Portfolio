$(function(){
	$(window).on("scroll", function() {
	    if($(window).scrollTop() > 100) {
	        $(".mainNav").addClass("active");
	    } else {
	        //remove the background property so it comes transparent again (defined in your css)
	       $(".mainNav").removeClass("active");
	    }
	});

	console.log("It's working");

});