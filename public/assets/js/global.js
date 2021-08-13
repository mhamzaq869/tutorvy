
// aos animation

AOS.init({
	duration: 1200,
});

//

// navbar js

(function ($) {
	"use strict";

	$(function () {
		var header = $(".start-style");
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();
			if (scroll >= 10) {
				// header.removeClass('start-style').addClass("scroll-on"); 
			} else {
				// header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});

	//Animation

	$(document).ready(function () {
		$('body.hero-anime').removeClass('hero-anime');
	});

	//Menu On Hover

	$('body').on('mouseenter mouseleave', '.nav-item', function (e) {
		if ($(window).width() > 750) {
			var _d = $(e.target).closest('.nav-item'); _d.addClass('show');
			setTimeout(function () {
				_d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
			}, 1);
		}
	});

	//Switch light/dark

	$("#switch").on('click', function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		}
		else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});

})(jQuery);


// preloader

setTimeout(function () {
	$('#preloaderbody').fadeOut();// or fade, css //display however you'd like.
}, 250);

// NAVBAR 

$(document).ready(function () {
	$(".navbar-toggler").click(function () {
		$(".start-header").toggleClass("start-header-nav");
	});
});

//   scroll to top

var btn = $('#button');

$(window).scroll(function () {
	if ($(window).scrollTop() > 300) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
});

btn.on('click', function (e) {
	e.preventDefault();
	$('html, body').animate({ scrollTop: 0 }, '300');
});

// scroll card 

$(window).on('scroll', function () {
	var trainPosition = Math.round($(window).scrollTop() / $(window).height() * 32);
	$('.train').css('transform', 'translateX(' + (trainPosition - (+200)) + '%)');

});


var page = document.getElementById('pages');
var last_pane = page.getElementsByClassName('panes');
last_pane = last_pane[last_pane.length - 1];
var dummy_x = null;

window.onscroll = function () {

	// Horizontal Scroll.

	var y = document.body.getBoundingClientRect().top;
	page.scrollLeft = -y;

	// Looping Scroll.

	var diff = window.scrollY - dummy_x;
	if (diff > 0) {
		window.scrollTo(0, diff);
	}
	else if (window.scrollY == 0) {
		window.scrollTo(0, dummy_x);
	}
}

// Adjust the body height if the window resizes.

window.onresize = resize;

// Initial resize.

resize();

// Reset window-based vars

function resize() {

	// var w = page.scrollWidth-window.innerWidth+window.innerHeight;
	// document.mian.style.height = w + 'px';
	// dummy_x = last_pane.getBoundingClientRect().left+window.scrollY;

}