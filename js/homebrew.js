/*

File Name : Homebrew.JS
Author : Rohan Krishna
Package Name : Techastra-Zeus

*/


jQuery(document).ready(function($) {

	var $ = jQuery;

  //Owl Carousel
	$('#owlCarousel').owlCarousel({
    items: 4
  });

	//Delay Anchor Effect
	$("#eventLink").click(function(e) {
  		e.preventDefault();
  		var destination = $(this).attr('href');
  		setTimeout(function() { window.location.href = destination; }, 500);
	});

	//Smooth Scroll Courtsey of CSS Tricks
	$(function() {
  	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


  //Events Links
  $('.event-desc-inner').hide();
  $('.senior-event-desc').hover(function(e) {
    $(this).children(".event-desc-inner").slideToggle();
    e.preventDefault();
  });

  $('.junior-event-desc').hover(function(e) {
    $(this).children(".event-desc-inner").slideToggle();
    e.preventDefault();
  });

});
