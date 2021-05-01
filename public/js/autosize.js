/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/autosize.js ***!
  \**********************************/
// ? Подганяем картинку под высоту экрана
// ? здесь идет проверка устройства клиента
// ! из-за этого все ломается
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {} else {
  var baner = document.getElementById("banner");
  var banerHeight = window.innerHeight;
  baner.style.height = banerHeight - 80 + "px"; //     let exampleRow = document.getElementById("exampleRow");
  //     let exampleRowHeight = window.innerHeight;
  //     exampleRow.style.height = exampleRowHeight - 80 + "px";
  //     let servicesRow = document.getElementById("servicesRow");
  //     let servicesRowHeight = window.innerHeight;
  //     servicesRow.style.height = servicesRowHeight - 80 + "px";
  //     let yndexMapRow = document.getElementById("yndexMapRow");
  //     let yndexMapRowHeight = window.innerHeight;
  //     yndexMapRow.style.height = yndexMapRowHeight - 80 + "px";
} // TODO: autosize for map
/******/ })()
;