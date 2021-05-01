let mainPoint = document.getElementById("mainPoint");
let indexList = document.getElementById("indexList");

let gboPoint = document.getElementById("gboPoint");
let priceList = document.getElementById("priceList");

let mapPoint = document.getElementById("mapPoint");
let map = document.getElementById("mapHeader");

let serviceDiv = document.getElementById("servisHeader");


gboPoint.addEventListener('click', function(){ scrollToElem(serviceDiv) });
mapPoint.addEventListener('click', function(){ scrollToElem(map)});
// gboPoint.addEventListener('click', function(){ scrollToJustAbove(priceList)});

function scrollToElem(element){
    element.scrollIntoView({behavior: 'smooth', block:"center"});
}