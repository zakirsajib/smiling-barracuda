$=jQuery.noConflict();$(function($){"use strict";$(window).on("load",function(){$(".loader").fadeOut(800)});$(".scroll").on("click",function(event){var menu=$("nav.navbar").innerHeight();event.preventDefault();$("html,body").animate({scrollTop:($(this.hash).offset().top-10)},1000)});if($.fn.matchHeight){$('.match-height').matchHeight()}
$(".menu-icon").on("click",function(){$(".full-menu").toggleClass("open")});if($(".full-nav li a").hasClass("scroll")){$(".full-nav li a").on("click",function(){$(".full-menu").removeClass("open")})}
$(window).scroll(function(){var $scroll=$(window).scrollTop();var $navbar=$(".navbar");if($scroll>100){$navbar.addClass("scroll-nav")}else{$navbar.removeClass("scroll-nav")}});$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('#scrollToTop').fadeIn()}else{$('#scrollToTop').fadeOut()}});$('#scrollToTop').click(function(){$('html, body').animate({scrollTop:0},800);return!1})})})