(self["webpackChunkcraft_boilerplate"] = self["webpackChunkcraft_boilerplate"] || []).push([["/assets/app"],{

/***/ "./assets/javascript/app.js":
/*!**********************************!*\
  !*** ./assets/javascript/app.js ***!
  \**********************************/
/***/ (function() {

// Sliders
$('.splide.arch').each(function () {
  new Splide(this, {
    type: 'loop',
    perPage: 5,
    focus: 'center',
    autoplay: true,
    interval: 8000,
    flickMaxPages: 1,
    updateOnMove: true,
    pagination: false,
    throttle: 300,
    useScroll: true,
    breakpoints: {
      1440: {
        perPage: 5,
        padding: '0%'
      },
      768: {
        perPage: 1,
        padding: '20%'
      }
    }
  }).mount();
});
$('.splide.standard').each(function () {
  new Splide(this, {
    type: 'loop',
    perPage: 1,
    autoplay: true,
    interval: 8000,
    flickMaxPages: 1,
    updateOnMove: true,
    pagination: false,
    throttle: 300,
    useScroll: true
  }).mount();
}); //100vh Mobile

var vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', "".concat(vh, "px"));
window.addEventListener('resize', function () {
  var vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', "".concat(vh, "px"));
}); // Page Color Transitions

$(window).scroll(function () {
  // selectors
  var $window = $(window),
      $body = $('body'),
      $panel = $('.panel'); // Change 33% earlier than scroll position so colour is there when you arrive.

  var scroll = $window.scrollTop() + $window.height() / 3;
  $panel.each(function () {
    var $this = $(this); // if position is within range of this panel.
    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
    // Remember we set the scroll to 33% earlier in scroll var.
    // if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

    if ($this.position().top <= scroll + 300) {
      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match(/(^|\s)ct-\S+/g) || []).join(' ');
      }); // Add class of currently active div

      $body.addClass($(this).data('color'));
    }
  });
}).scroll(); // Start marquee

$('.marquee_text').each(function () {
  $(this).marquee({
    direction: 'left',
    duration: 8000,
    gap: 20,
    delayBeforeStart: 0,
    duplicated: true,
    startVisible: true
  });
}); // Mobile Nav

$(function () {
  $('.hamburger').click(function () {
    if (!$('body').hasClass("mobile-nav")) {
      $('body').addClass("mobile-nav");
    } else {
      $('body').removeClass("mobile-nav");
    }
  });
});
$(window).on('resize', function () {
  var win = $(this); //this = window

  if (win.width() >= 1152) {
    if ($('body').hasClass("mobile-nav")) {
      $('body').removeClass("mobile-nav"); // Toggle Hamburger Icon back to original state

      $('.menu-icon').removeClass("active");
      $('input.menu-icon__cheeckbox').prop('checked', false);
    }
  }
}); // Smooth Scroll

if (window.location.hash) {
  var hash = window.location.hash;

  if ($(hash).length) {
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, 'swing');
  }
}

jQuery(function ($) {
  // The speed of the scroll in milliseconds
  var speed = 1000;
  $('a[href*="#"]').filter(function (i, a) {
    return a.getAttribute('href').startsWith('#') || a.href.startsWith("".concat(location.href, "#"));
  }).unbind('click.smoothScroll').bind('click.smoothScroll', function (event) {
    var targetId = event.currentTarget.getAttribute('href').split('#')[1];
    var targetElement = document.getElementById(targetId);

    if (targetElement) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $(targetElement).offset().top - 120
      }, speed);
    }
  });
});

/***/ }),

/***/ "./assets/sass/app.scss":
/*!******************************!*\
  !*** ./assets/sass/app.scss ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ function(__webpack_require__) { // webpackRuntimeModules
/******/ var __webpack_exec__ = function(moduleId) { return __webpack_require__(__webpack_require__.s = moduleId); }
/******/ __webpack_require__.O(0, ["assets/app"], function() { return __webpack_exec__("./assets/javascript/app.js"), __webpack_exec__("./assets/sass/app.scss"); });
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);