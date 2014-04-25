/* Navigation effects */
$(document).scroll(function () {
    if ($(this).scrollTop() >= 545) {
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
  'top' : -(scrollPos/10)+"px",
});

// Call To Action
jQuery('.bg_action').css({
  'background-position-y' : 400+(scrollPos/7)+"px",
});

}