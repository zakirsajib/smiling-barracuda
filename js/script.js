$ = jQuery.noConflict();

$(function ($) {
    "use strict";
    //LOADER
    $(window).on("load", function () {
        $(".loader").fadeOut(800);
    });

    /*----navbar-search----*/
    $('.search-icon').on('click', function () {
        $('.navbar-search-box').toggleClass("navbar-search-box-open");
        $(this).toggleClass("actives");

        if($(this).hasClass("actives")){
            $('.search-icon > i').toggleClass("fa-times");
            $('.search-icon > i').toggleClass("fa-search");
        }else {
            $('.search-icon > i').toggleClass("fa-search");
            $('.search-icon > i').toggleClass("fa-times");
        }
    });

    /* ------- Smooth scroll ------- */
    $(".scroll").on("click", function (event) {
        var menu = $("nav.navbar").innerHeight();
        event.preventDefault();
        $("html,body").animate({
            scrollTop: ($(this.hash).offset().top - 10)
        }, 1000);
    });
	
		
	/*-------------------------------------------------------------------*/
    /*  Makes the height of all selected elements (".match-height")
    /*  exactly equal. Requires jQuery matchHeight plugin.
    /*-------------------------------------------------------------------*/
    if ($.fn.matchHeight){
        $('.match-height').matchHeight();
    }

    /* ------- Sidebar Toggle ------ */
    $(".menu-icon").on("click",function () {
        $(".full-menu").toggleClass("open");
    });
    if($(".full-nav li a").hasClass("scroll")){
        $(".full-nav li a").on("click",function () {
            $(".full-menu").removeClass("open");
        });
    }

    
    /*------ MENU Fixed ------*/

    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }
    });
    
    $(document).ready(function(){
	    //Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('#scrollToTop').fadeIn();
			} else {
				$('#scrollToTop').fadeOut();
			}
		});
		
		//Click event to scroll to top
		$('#scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
		
		
		/* Blog masonry layout */
	    var $masonry = $('.blog-style-grid, .blog-style-largeimage').isotope({
	        itemSelector: '.post-item',
	        columnWidth: 0,
	        gutter: 0,
	    }).isotope('reloadItems');
	    //$masonry.imagesLoaded( function() {
	    //    $masonry.isotope('layout').css( 'opacity', 1 );
	    //});
	    $(window).load(function (){
	        setTimeout(function(){
	            $masonry.isotope('layout');
	        }, 0);
	    });

    });
    
    
});