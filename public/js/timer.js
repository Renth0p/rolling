/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/timer.js":
/*!*******************************!*\
  !*** ./resources/js/timer.js ***!
  \*******************************/
/***/ (() => {

var countDownDate = new Date("May 21, 2022 12:10:10").getTime();
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

/***/ }),

/***/ "./resources/sass/auth.scss":
/*!**********************************!*\
  !*** ./resources/sass/auth.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/service.scss":
/*!*************************************!*\
  !*** ./resources/sass/service.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/contactpage.scss":
/*!*****************************************!*\
  !*** ./resources/sass/contactpage.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/project.scss":
/*!*************************************!*\
  !*** ./resources/sass/project.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/adaptation.scss":
/*!****************************************!*\
  !*** ./resources/sass/adaptation.scss ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/about.scss":
/*!***********************************!*\
  !*** ./resources/sass/about.scss ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/404.scss":
/*!*********************************!*\
  !*** ./resources/sass/404.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/base.scss":
/*!**********************************!*\
  !*** ./resources/sass/base.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/footer.scss":
/*!************************************!*\
  !*** ./resources/sass/footer.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/header.scss":
/*!************************************!*\
  !*** ./resources/sass/header.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/sass/main.scss":
/*!**********************************!*\
  !*** ./resources/sass/main.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/timer": 0,
/******/ 			"css/main": 0,
/******/ 			"css/header": 0,
/******/ 			"css/footer": 0,
/******/ 			"css/base": 0,
/******/ 			"css/404": 0,
/******/ 			"css/about": 0,
/******/ 			"css/adaptation": 0,
/******/ 			"css/project": 0,
/******/ 			"css/contactpage": 0,
/******/ 			"css/service": 0,
/******/ 			"css/auth": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/js/timer.js")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/404.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/base.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/footer.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/header.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/main.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/auth.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/service.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/contactpage.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/project.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/adaptation.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main","css/header","css/footer","css/base","css/404","css/about","css/adaptation","css/project","css/contactpage","css/service","css/auth"], () => (__webpack_require__("./resources/sass/about.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;