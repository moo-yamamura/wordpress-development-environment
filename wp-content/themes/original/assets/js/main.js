(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

var _siteHeader = require("./partial/_site-header.js");

var _siteFooter = require("./partial/_site-footer.js");

(0, _siteHeader.siteHeader)();
(0, _siteFooter.siteFooter)();

},{"./partial/_site-footer.js":2,"./partial/_site-header.js":3}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.siteFooter = void 0;

// _site-footer.js
var siteFooter = function siteFooter() {
  console.log('This module is "Site Footer"');
};

exports.siteFooter = siteFooter;

},{}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.siteHeader = void 0;

// _site-header.js
var siteHeader = function siteHeader() {
  console.log('This module is "Site Header"');
};

exports.siteHeader = siteHeader;

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvanMvbWFpbi5qcyIsInNyYy9qcy9wYXJ0aWFsL19zaXRlLWZvb3Rlci5qcyIsInNyYy9qcy9wYXJ0aWFsL19zaXRlLWhlYWRlci5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTs7O0FDQUE7O0FBQ0E7O0FBRUE7QUFDQTs7Ozs7Ozs7OztBQ0pBO0FBQ08sSUFBTSxVQUFVLEdBQUcsU0FBYixVQUFhLEdBQU07QUFDOUIsRUFBQSxPQUFPLENBQUMsR0FBUixDQUFZLDhCQUFaO0FBQ0QsQ0FGTTs7Ozs7Ozs7Ozs7O0FDRFA7QUFDTyxJQUFNLFVBQVUsR0FBRyxTQUFiLFVBQWEsR0FBTTtBQUM5QixFQUFBLE9BQU8sQ0FBQyxHQUFSLENBQVksOEJBQVo7QUFDRCxDQUZNIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oKXtmdW5jdGlvbiByKGUsbix0KXtmdW5jdGlvbiBvKGksZil7aWYoIW5baV0pe2lmKCFlW2ldKXt2YXIgYz1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlO2lmKCFmJiZjKXJldHVybiBjKGksITApO2lmKHUpcmV0dXJuIHUoaSwhMCk7dmFyIGE9bmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIitpK1wiJ1wiKTt0aHJvdyBhLmNvZGU9XCJNT0RVTEVfTk9UX0ZPVU5EXCIsYX12YXIgcD1uW2ldPXtleHBvcnRzOnt9fTtlW2ldWzBdLmNhbGwocC5leHBvcnRzLGZ1bmN0aW9uKHIpe3ZhciBuPWVbaV1bMV1bcl07cmV0dXJuIG8obnx8cil9LHAscC5leHBvcnRzLHIsZSxuLHQpfXJldHVybiBuW2ldLmV4cG9ydHN9Zm9yKHZhciB1PVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmUsaT0wO2k8dC5sZW5ndGg7aSsrKW8odFtpXSk7cmV0dXJuIG99cmV0dXJuIHJ9KSgpIiwiaW1wb3J0IHsgc2l0ZUhlYWRlciB9IGZyb20gJy4vcGFydGlhbC9fc2l0ZS1oZWFkZXIuanMnO1xuaW1wb3J0IHsgc2l0ZUZvb3RlciB9IGZyb20gJy4vcGFydGlhbC9fc2l0ZS1mb290ZXIuanMnO1xuXG5zaXRlSGVhZGVyKCk7XG5zaXRlRm9vdGVyKCk7IiwiLy8gX3NpdGUtZm9vdGVyLmpzXG5leHBvcnQgY29uc3Qgc2l0ZUZvb3RlciA9ICgpID0+IHtcbiAgY29uc29sZS5sb2coJ1RoaXMgbW9kdWxlIGlzIFwiU2l0ZSBGb290ZXJcIicpO1xufTsiLCIvLyBfc2l0ZS1oZWFkZXIuanNcbmV4cG9ydCBjb25zdCBzaXRlSGVhZGVyID0gKCkgPT4ge1xuICBjb25zb2xlLmxvZygnVGhpcyBtb2R1bGUgaXMgXCJTaXRlIEhlYWRlclwiJyk7XG59OyJdfQ==
