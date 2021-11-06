$(document).ready(function() {
	$('.burger-menu').click (function(event) {
		$('.mobile-menu, .burger-menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
	$('.header__link-1').on("mouseover mouseout", function() {
		$('.header__link-line-1').toggleClass('active');
	});
	$('.header__link-2').on("mouseover mouseout", function() {
		$('.header__link-line-2').toggleClass('active');
	});
	$('.header__link-3').on("mouseover mouseout", function() {
		$('.header__link-line-3').toggleClass('active');
	});
});