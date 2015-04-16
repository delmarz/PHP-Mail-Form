$(function(){
	
	"use strict";


	var wheight = $(window).height();

	$('body').css('height', wheight);

	$(window).resize(function() {
		wheight = $(window).height();
		$('body').css('height', wheight;
	});



});