/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/scroll.js ***!
  \********************************/
var mainPoint = document.getElementById("mainPoint");
var indexList = document.getElementById("indexList");
var gboPoint = document.getElementById("gboPoint");
var priceList = document.getElementById("priceList");
var mapPoint = document.getElementById("mapPoint");
var map = document.getElementById("mapHeader");
var serviceDiv = document.getElementById("servisHeader");
gboPoint.addEventListener('click', function () {
  scrollToElem(serviceDiv);
});
mapPoint.addEventListener('click', function () {
  scrollToElem(map);
}); // gboPoint.addEventListener('click', function(){ scrollToJustAbove(priceList)});

function scrollToElem(element) {
  element.scrollIntoView({
    behavior: 'smooth',
    block: "center"
  });
}
/******/ })()
;