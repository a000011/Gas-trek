/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/autosize.js ***!
  \**********************************/
// ? Подганяем картинку под высоту экрана
// ? здесь идет проверка устройства клиента
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {} else {
  var baner = document.getElementById("banner");
  var banerHeight = window.innerHeight;
  baner.style.height = banerHeight - 80 + "px";
}
/******/ })()
;