/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/faq.js ***!
  \*****************************/
var summaryCollection = document.getElementsByTagName('summary');
var signsCollection = document.getElementsByClassName('faq-open-icon');

var _loop = function _loop(i) {
  summaryCollection[i].onclick = function () {
    if (signsCollection[i].innerHTML === '+') signsCollection[i].innerHTML = '—';else signsCollection[i].innerHTML = '+';
  };
};

for (var i = 0; i < summaryCollection.length; i++) {
  _loop(i);
}
/******/ })()
;