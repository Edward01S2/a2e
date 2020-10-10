(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/app"],{

/***/ "./resources/assets/scripts/app.js":
/*!*****************************************!*\
  !*** ./resources/assets/scripts/app.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/alpine.js");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(alpinejs__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var lity__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! lity */ "./node_modules/lity/dist/lity.js");
/* harmony import */ var lity__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(lity__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! gsap/ScrollTrigger */ "./node_modules/gsap/ScrollTrigger.js");
/* harmony import */ var gsap_ScrollToPlugin__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! gsap/ScrollToPlugin */ "./node_modules/gsap/ScrollToPlugin.js");
/**
 * External Dependencies
 */







gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_5__["ScrollTrigger"], gsap_ScrollToPlugin__WEBPACK_IMPORTED_MODULE_6__["ScrollToPlugin"]);
swiper__WEBPACK_IMPORTED_MODULE_3__["default"].use([swiper__WEBPACK_IMPORTED_MODULE_3__["Navigation"], swiper__WEBPACK_IMPORTED_MODULE_3__["Autoplay"], swiper__WEBPACK_IMPORTED_MODULE_3__["Pagination"]]);
$(document).ready(function () {
  var aboutSwiper = new swiper__WEBPACK_IMPORTED_MODULE_3__["default"]('.about-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 32,
    autoplay: {
      delay: 10000
    },
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev'
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets'
    },
    on: {
      slideChangeTransitionEnd: function slideChangeTransitionEnd() {
        var active = $('.about-slider .swiper-slide-active').attr('data-subtitle');
        $('.slide-subtitle').text(active);
      }
    }
  });
  $('.return-top').on('click', function (e) {
    e.preventDefault();
    gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].to(window, {
      duration: 2,
      scrollTo: {
        y: 0
      }
    });
  });
  var navLinks = gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].utils.toArray("nav .nav-link"); //console.log(navLinks);

  navLinks.forEach(function (link, i) {
    link.addEventListener("click", function (e) {
      var href = e.currentTarget.getAttribute("href");
      var anchor = href.substring(href.indexOf("#"));

      if (document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap__WEBPACK_IMPORTED_MODULE_4__["gsap"].to(window, {
          duration: 1.5,
          scrollTo: {
            y: anchor,
            offsetY: 100
          }
        });
      }
    });
  });
});

(function ($, sr) {
  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function debounce(func, threshold, execAsap) {
    var timeout;
    return function debounced() {
      var obj = this,
          args = arguments;

      function delayed() {
        if (!execAsap) func.apply(obj, args);
        timeout = null;
      }

      ;
      if (timeout) clearTimeout(timeout);else if (execAsap) func.apply(obj, args);
      timeout = setTimeout(delayed, threshold || 100);
    };
  }; // smartresize 


  jQuery.fn[sr] = function (fn) {
    return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
  };
})(jQuery, 'smartresize');
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/styles/app.css":
/*!*****************************************!*\
  !*** ./resources/assets/styles/app.css ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************************!*\
  !*** multi ./resources/assets/scripts/app.js ./resources/assets/styles/app.css ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/edward/Desktop/wordpress/a2e/wp-content/themes/a2e/resources/assets/scripts/app.js */"./resources/assets/scripts/app.js");
module.exports = __webpack_require__(/*! /Users/edward/Desktop/wordpress/a2e/wp-content/themes/a2e/resources/assets/styles/app.css */"./resources/assets/styles/app.css");


/***/ }),

/***/ "jquery":
/*!**********************************!*\
  !*** external {"this":"jQuery"} ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["jQuery"]; }());

/***/ })

},[[0,"/scripts/manifest","/scripts/vendor"]]]);
//# sourceMappingURL=app.js.map