
/*
Theme Name: JAKPRO
Author: JAKPRO
Version: 1.0
*/
/*
Authors: Acit Jazz || chit.eureka@gmail.com
*/

/*
$(window).scroll(function(){
	console.log($(window).scrollTop());
	if($(window).scrollTop()<=250){
		$('.header').removeClass('fixheader');
	}else{
		$('.header').addClass('fixheader');
	}
});*/

// Detect Screen
$(function(){
  $('.fullscreen').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  $('.autoheight').css({ height: $(window).innerHeight() + 'px' });

  $(window).resize(function(){
	$('.fullscreen').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
  	$('.autoheight').css({ height: $(window).innerHeight() + 'px' });
  });
});
$(document).ready(function() {
	 $(".owl-carousel").owlCarousel();
	//accordion careers
	$( "#accordion" ).accordion({
	  heightStyle: "content"
	});
	$('.scroll').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 2000);
		return false;
	});
	$('#main-menu').slicknav({
	    afterOpen: function(trigger){
	        var that = trigger.parent().children('ul');
	        $('.slicknav_menu ul li.slicknav_open ul').each(function(){
	            if($(this).get( 0 ) != that.get( 0 )){
	                $(this).slideUp().addClass('slicknav_hidden');
	                $(this).parent().removeClass('slicknav_open').addClass('slicknav_collapsed');
	            }
	        })
	    },
		label: '',
		duration: 1000,
		easingOpen: "easeOutBounce", //available with jQuery UI
		prependTo:'#navbox'
	});
	$( ".search_btn" ).click(function() {
	  $("#searchcontent" ).toggleClass( "showsearch" );
	});
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,

	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
});
$(window).load(function() {
$('.flexslider').flexslider();
});
