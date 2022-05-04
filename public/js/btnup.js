/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/btnup.js ***!
  \*******************************/
$(function () {
  $('.scrollup').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });
});
$(window).scroll(function () {
  if ($(this).scrollTop() > 200) {
    $('.scrollup').fadeIn();
  } else {
    $('.scrollup').fadeOut();
  }
});
/******/ })()
;