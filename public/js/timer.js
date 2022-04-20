/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/timer.js ***!
  \*******************************/
var countDownDate = new Date("April 30, 2022 12:10:10").getTime();
var x = setInterval(function () {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var day = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
  var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
  var seconds = Math.floor(distance % (1000 * 60) / 1000);
  document.getElementById("price").innerHTML = day + " д " + hours + " ч " + minutes + " м " + seconds + " с ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price").innerHTML = "";
  }

  document.getElementById("price_2").innerHTML = day + " д " + hours + " ч " + minutes + " м " + seconds + " с ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_2").innerHTML = "";
  }

  document.getElementById("price_3").innerHTML = day + " д " + hours + " ч " + minutes + " м " + seconds + " с ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_3").innerHTML = "";
  }

  document.getElementById("price_4").innerHTML = day + " д " + hours + " ч " + minutes + " м " + seconds + " с ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("price_4").innerHTML = "";
  }
}, 1000);
/******/ })()
;