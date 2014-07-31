/* Navigation effects */
$(document).scroll(function () {
	if ($(this).scrollTop() >= 245) {
		$('.top-bar').addClass('shrink');
	} else {
		$('.top-bar').removeClass('shrink');
	}
});

/* Navigation effects */
$(document).scroll(function () {
	if ($(this).scrollTop() >= 347) {
		$('.sidebar').addClass('sticky-scroll');
	} else {
		$('.sidebar').removeClass('sticky-scroll');
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
  'top' : -(scrollPos/10)+"px",
});

}