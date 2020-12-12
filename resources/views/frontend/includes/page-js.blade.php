
<script src="assets/findhouse/js/jquery.min.js"></script>
<script src="assets/findhouse/js/tether.min.js"></script>
<script src="assets/findhouse/js/bootstrap.min.js"></script>
<script src="assets/findhouse/js/mmenu.min.js"></script>
<script src="assets/findhouse/js/mmenu.js"></script>
<script src="assets/findhouse/js/jquery.form.js"></script>
<script src="assets/findhouse/js/jquery.validate.min.js"></script>
<script src="assets/findhouse/js/smooth-scroll.min.js"></script>
<script src="assets/findhouse/js/forms.js"></script>
<script src="assets/findhouse/js/ajaxchimp.min.js"></script>
<script src="assets/findhouse/js/newsletter.js"></script>
<script src="assets/findhouse/js/leaflet.js"></script>
<script src="assets/findhouse/js/leaflet-gesture-handling.min.js"></script>
<script src="assets/findhouse/js/leaflet-providers.js"></script>
<script src="assets/findhouse/js/leaflet.markercluster.js"></script>
<script src="assets/findhouse/js/map-single.js"></script>
<script src="assets/findhouse/js/color-switcher.js"></script>
<script src="assets/findhouse/js/inner.js"></script>
@stack('scripts')
<script>
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

	/*----------------------------------
	//------ MAGNIFIC POPUP ------//
	-----------------------------------*/
	$(document).ready(function () {
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});

	/*----------------------------------------------
	//------ FILTER TOGGLE (ON GOOGLE MAPS) ------//
	----------------------------------------------*/
	$('.filter-toggle').on('click', function () {
		$(this).parent().find('form').stop(true, true).slideToggle();
	});

	/*----------------------------------
	//------ RANGE SLIDER ------//
	-----------------------------------*/
	$(".slider-range").slider({
		range: true,
		min: 5000,
		max: 200000,
		step: 1000,
		values: [60000, 130000],
		slide: function (event, ui) {
			$(".slider_amount").val("$" + ui.values[0].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + ui.values[1].toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
		}
	});
	$(".slider_amount").val("Price Range: $" + $(".slider-range").slider("values", 0).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - $" + $(".slider-range").slider("values", 1).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

}(jQuery));

</script>
