(function( root, $, undefined ) {
	"use strict";

	$(function () {

		$("button").attr("aria-label", "Toggle Navigation").on("click", function() {
			$(this).toggleClass("close");
			$(".wrapper, .lines-button").toggleClass("pushed");
		});

		var $fullscreenBg = $(".fullscreen-bg");
		var theWindow = $(window);
		var bgAspect = $fullscreenBg.width() / $fullscreenBg.height();

		if ( (theWindow.width() / theWindow.height()) < bgAspect ) {
			$fullscreenBg.addClass("portrait");
		}
		else {
			$fullscreenBg.addClass("landscape");
		}

		theWindow.resize(function() {
			waitForFinalEvent(function(){
				updateViewportDimensions();
				if ( (theWindow.width() / theWindow.height()) < bgAspect ) {
					$fullscreenBg.removeClass("landscape");
					$fullscreenBg.addClass("portrait");
				}
				else {
					$fullscreenBg.removeClass("portrait");
					$fullscreenBg.addClass("landscape");
				}
			}, 100, "check window ratio");
		});

	var s = $(".home #sticky-nav");
	var pos = s.offset();                    
	$(window).scroll(function() {
	  var windowpos = $(window).scrollTop();
	  if (windowpos >= pos.top) {
	    s.addClass("stuck");
		  } else {
	    s.removeClass("stuck"); 
	  }
	});

	$(".fill").each(function() {
		imageFill(this);
	});

	$(".animate").css("opacity", 0);

		//Home page effects
	$(window).scroll( function(){
    scrollAnimate("section.animate", "fadeInUp");
	});

	if (window.matchMedia("(min-width: 768px)").matches) {
	  requestAnimationFrame(function(){parallax(".parallax", 0.4);});
	}
});

} ( this, jQuery ));

/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
var updateViewportDimensions = function() {
  var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName("body")[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
  return { width:x,height:y };
};

var scrollAnimate = function (el, animation) {
	$(el).each( function(){
		var top_of_object = $(this).position().top;
		var bottom_of_window = $(window).scrollTop() + $(window).height();

		bottom_of_window -= 200;

		if( bottom_of_window > top_of_object ){
			$(this).addClass("animated " + animation);
		}
	});
};

var parallax = function(e, speed){
  var top = $(window).scrollTop();
  top = +top.toFixed(2); //round numbers
  $(e).css({"-webkit-transform" : "translate3d(0, " + (top*speed)+"px, 0)"});
  $(e).css({"-ms-transform" : "translate3d(0, " + (top*speed)+"px, 0)"});
  $(e).css({"-moz-transform" : "translate3d(0, " + (top*speed)+"px, 0)"});
  $(e).css({"transform" : "translate3d(0, " + (top*speed)+"px, 0)"});
  requestAnimationFrame(function(){parallax(e, speed);});
};

(function() { //polyfill for requestAnimationFrame
    var lastTime = 0;
    var vendors = ["ms", "moz", "webkit", "o"];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+"RequestAnimationFrame"];
        window.cancelAnimationFrame = window[vendors[x]+"CancelAnimationFrame"] || window[vendors[x]+"CancelRequestAnimationFrame"];
    }
 
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function(callback) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
      }
 
    if (!window.cancelAnimationFrame) {
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
      }
}());

var imageFill = function(el) {
	var testImage = new Image();
	testImage.src = $(el).attr("src");

	var imageWidth = testImage.width;
	var imageHeight = testImage.height;

	var imageAspect = imageWidth / imageHeight;

	var container = $(el).closest("div");
	var containerAspect = container.width() / container.height();

	if (imageAspect > containerAspect) {
		$(el).addClass("fill-portrait");
	}
	else {
		$(el).addClass("fill-landscape");
	}
};


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
  var timers = {};
  return function (callback, ms, uniqueId) {
    if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
    if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.


// $(window).resize(function () {
//     waitForFinalEvent(function(){

//     }, 200, "check window ratio");
// });