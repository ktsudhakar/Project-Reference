$(document).ready(function() {
	/*Scroll Animation Starts Here*/
	// Add smooth scrolling to all links
	$("a").on('click', function(event) {

	// Make sure this.hash has a value before overriding default behavior
	if (this.hash !== "") {
	  // Prevent default anchor click behavior
	  event.preventDefault();

	  // Store hash
	  var hash = this.hash;

	  // Using jQuery's animate() method to add smooth page scroll
	  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	  $('html, body').animate({
	    scrollTop: $(hash).offset().top
	  }, 800, function(){

	    // Add hash (#) to URL when done scrolling (default click behavior)
	    window.location.hash = hash;
	  });
	} // End if
	});
	/*Scroll Animation Ends Here*/

	var maxHeight = -1;

   $('.boxshadow').each(function() {
     maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
   });

   $('.boxshadow').each(function() {
     $(this).height(maxHeight);
   });


	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
	    $('.navbar-nav a').bind('click', function(event) {
	        var $anchor = $(this);
	        $('html, body').stop().animate({
	            scrollTop: $($anchor.attr('href')).offset().top
	        }, 1500, 'easeInOutExpo');
	        event.preventDefault();
	    });
	});
});

$(document).click(function(e) {
    if (!$(e.target).is('a') || $(e.target).is('.navbar-nav a')) {
        $('.collapse').collapse('hide');       
    }
});

$(window).scroll(function() {
	if ($("header").offset().top > 100) {
		$("header").addClass("top-nav-collapse");
    } else {
        $("header").removeClass("top-nav-collapse");
    }
});