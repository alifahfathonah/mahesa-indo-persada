/*
Author       : Code-Theme
Template Name: Find Houses - HTML5 Template
Version      : 1.0
*/

"use strict";

jQuery(document).on('ready', function ($) {

	/*---------------------------------
	 //------ PRELOADER ------//
	 ----------------------------------*/
	$('#status').fadeOut();
	$('#preloader').delay(200).fadeOut('slow');

	/*---------------------------------
	 //------ ANIMATE HEADER ------//
	 ----------------------------------*/
	$(window).on('scroll', function () {
		var sticky = $(".sticky-header");
		var scroll = $(window).scrollTop();
		if (scroll < 265) {
			sticky.removeClass("sticky");
		} else {
			sticky.addClass("sticky");
		}
	});

	/*----------------------------------
	//------ SMOOTHSCROLL ------//
	-----------------------------------*/
	smoothScroll.init({
		speed: 1000, // Integer. How fast to complete the scroll in milliseconds
		offset: 200, // Integer. How far to offset the scrolling anchor location in pixels

	});

	/*----------------------------------
	//------ LIGHTCASE ------//
	-----------------------------------*/
	$('a[data-rel^=lightcase]').lightcase();


	/*----------------------------------
	//------ ISOTOPE GALLERY ------//
	-----------------------------------*/
	/* activate jquery isotope */
	$(window).on('load', function () {
		var $container = $('.portfolio-items').isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.col-xs-12'
			}
		});
	});
	// bind filter button click
	var filters = $('.filters-group ul li');
	filters.on('click', function () {
		filters.removeClass('active');
		$(this).addClass('active');
		var filterValue = $(this).attr('data-filter');
		// use filterFn if matches value
		$('.portfolio-items').isotope({
			filter: filterValue
		});
	});

	/*----------------------------------
	//------ JQUERY SCROOLTOP ------//
	-----------------------------------*/
	var go = $(".go-up");
	$(window).on('scroll', function () {
		var scrolltop = $(this).scrollTop();
		if (scrolltop >= 50) {
			go.fadeIn();
		} else {
			go.fadeOut();
		}
	});

}(jQuery));
