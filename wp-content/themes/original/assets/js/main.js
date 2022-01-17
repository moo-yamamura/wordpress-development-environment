(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
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

},{}],2:[function(require,module,exports){
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

},{}],3:[function(require,module,exports){
"use strict";

var _siteHeader = require("./_partial/_site-header.js");

var _siteFooter = require("./_partial/_site-footer.js");

(0, _siteHeader.siteHeader)();
(0, _siteFooter.siteFooter)();

},{"./_partial/_site-footer.js":1,"./_partial/_site-header.js":2}]},{},[3])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvanMvX3BhcnRpYWwvX3NpdGUtZm9vdGVyLmpzIiwic3JjL2pzL19wYXJ0aWFsL19zaXRlLWhlYWRlci5qcyIsInNyYy9qcy9tYWluLmpzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7OztBQ0FBO0FBQ08sSUFBTSxVQUFVLEdBQUcsU0FBYixVQUFhLEdBQU07QUFDOUIsRUFBQSxPQUFPLENBQUMsR0FBUixDQUFZLDhCQUFaO0FBQ0QsQ0FGTTs7Ozs7Ozs7Ozs7O0FDRFA7QUFDTyxJQUFNLFVBQVUsR0FBRyxTQUFiLFVBQWEsR0FBTTtBQUM5QixFQUFBLE9BQU8sQ0FBQyxHQUFSLENBQVksOEJBQVo7QUFDRCxDQUZNOzs7Ozs7O0FDRFA7O0FBQ0E7O0FBRUE7QUFDQSIsImZpbGUiOiJnZW5lcmF0ZWQuanMiLCJzb3VyY2VSb290IjoiIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCl7ZnVuY3Rpb24gcihlLG4sdCl7ZnVuY3Rpb24gbyhpLGYpe2lmKCFuW2ldKXtpZighZVtpXSl7dmFyIGM9XCJmdW5jdGlvblwiPT10eXBlb2YgcmVxdWlyZSYmcmVxdWlyZTtpZighZiYmYylyZXR1cm4gYyhpLCEwKTtpZih1KXJldHVybiB1KGksITApO3ZhciBhPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIraStcIidcIik7dGhyb3cgYS5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGF9dmFyIHA9bltpXT17ZXhwb3J0czp7fX07ZVtpXVswXS5jYWxsKHAuZXhwb3J0cyxmdW5jdGlvbihyKXt2YXIgbj1lW2ldWzFdW3JdO3JldHVybiBvKG58fHIpfSxwLHAuZXhwb3J0cyxyLGUsbix0KX1yZXR1cm4gbltpXS5leHBvcnRzfWZvcih2YXIgdT1cImZ1bmN0aW9uXCI9PXR5cGVvZiByZXF1aXJlJiZyZXF1aXJlLGk9MDtpPHQubGVuZ3RoO2krKylvKHRbaV0pO3JldHVybiBvfXJldHVybiByfSkoKSIsIi8vIF9zaXRlLWZvb3Rlci5qc1xuZXhwb3J0IGNvbnN0IHNpdGVGb290ZXIgPSAoKSA9PiB7XG4gIGNvbnNvbGUubG9nKCdUaGlzIG1vZHVsZSBpcyBcIlNpdGUgRm9vdGVyXCInKTtcbn07IiwiLy8gX3NpdGUtaGVhZGVyLmpzXG5leHBvcnQgY29uc3Qgc2l0ZUhlYWRlciA9ICgpID0+IHtcbiAgY29uc29sZS5sb2coJ1RoaXMgbW9kdWxlIGlzIFwiU2l0ZSBIZWFkZXJcIicpO1xufTsiLCJpbXBvcnQgeyBzaXRlSGVhZGVyIH0gZnJvbSAnLi9fcGFydGlhbC9fc2l0ZS1oZWFkZXIuanMnO1xuaW1wb3J0IHsgc2l0ZUZvb3RlciB9IGZyb20gJy4vX3BhcnRpYWwvX3NpdGUtZm9vdGVyLmpzJztcblxuc2l0ZUhlYWRlcigpO1xuc2l0ZUZvb3RlcigpOyJdfQ==
