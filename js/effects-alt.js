/* Navigation effects */
$(document).scroll(function () {
	if ($(this).scrollTop() >= 245) {
		$('.top-bar').addClass('shrink');
	} else {
		$('.top-bar').removeClass('shrink');
	}
});

/* Smooth scroll */
$('#top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
 });

/* Parallax effects */
$(window).scroll(function(e){
    scrollBanner();
  });

// Calcualte the parallax scrolling
function scrollBanner() {

//Get the scoll position of the page
scrollPos = jQuery(this).scrollTop();

// Hero Text
jQuery('.header-text').css({
  'margin-top' : -(scrollPos/7)+"px",
});

// Hero Background
jQuery('.header_alt').css({
  'background-position-y' : -70-(scrollPos/3)+"px",
});

}