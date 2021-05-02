/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/examples.js ***!
  \**********************************/
// let examples = document.getElementById("example");
// let Excards = [
//   {
//     name: "Установка на <br>Honda Accord",
//     img: "images/examples/1.jpg",
//     img2: "images/examples/1_2.jpg",
//   },
//   {
//     name: "Установка на <br>Toyota RAV4",
//     img: "images/examples/2.jpg",
//     img2: "images/examples/2_2.jpg",
//   },
//   {
//     name: "Установка на <br>#########",
//     img: "images/examples/3.jpg",
//     img2: "images/examples/3_2.jpg",
//   },
//   {
//     name: "Установка на <br>VW Touareg",
//     img: "images/examples/4.jpg",
//     img2: "images/examples/4_2.jpg",
//   },
// ];
function redirectPost() {
  var form = document.createElement('form');
  document.body.appendChild(form);
  form.method = 'post';
  form.action = '/examples';

  for (var name in data) {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = name;
    input.value = data[name];
    form.appendChild(input);
  }

  form.submit();
}
/******/ })()
;