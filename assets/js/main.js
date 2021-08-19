$(function() {

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("site-navbar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// gpa tabs functionalty
$('.gpa-sec .nav.nav-tabs .nav-item a.nav-link').on('click' , function(){
    $(this).parents('.nav-item').siblings('.nav-item').children('.nav-link').removeClass('active');
})

// var domPosition = $(window).scrollTop();

// $(window).scroll(function() {
// 	var domPosition = $(window).scrollTop();
// 	var countOffset = Math.floor($('.privacy-animation').offset().top) - 100;
// 	var counterList1 = $('.numbers-container');
// 	console.log(domPosition , "current");
// 	console.log(countOffset , "is target");
// 	if(domPosition == countOffset) {
// 		$('.numbers-container').scrollTo('.last-9');
// 	}
// });

$(document).ready(function(){
	// $('.about-banner-slider ul').slick({
	// 	vertical: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	verticalSwiping: true,
	// 	autoplay: true,
	// 	speed: 500,
	// 	arrows: true,
	// 	prevArrow: '<div class="slick-prev"></div>',
	// 	nextArrow: '<div class="slick-next"></div>',
	// });

	
	
});