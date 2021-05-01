let examples = document.getElementById("example");

let Excards = [
  {
    name: "Установка на <br>Honda Accord",
    img: "images/examples/1.jpg",
    img2: "images/examples/1_2.jpg",
  },
  {
    name: "Установка на <br>Toyota RAV4",
    img: "images/examples/2.jpg",
    img2: "images/examples/2_2.jpg",
  },
  {
    name: "Установка на <br>#########",
    img: "images/examples/3.jpg",
    img2: "images/examples/3_2.jpg",
  },
  {
    name: "Установка на <br>VW Touareg",
    img: "images/examples/4.jpg",
    img2: "images/examples/4_2.jpg",
  },
];
var id = 0;
var style = document.createElement("style");
document.head.appendChild(style);

Excards.forEach((card) => {
  id++;
  card.id = id;
  let div = document.createElement("div");
  div.className = " col-xl-4 col-12 cards workCards";
  div.innerHTML =
    '<img  src="' +
    card.img +
    '" id="excard' +
    card.id +
    '" class="card-img-top" alt="Card image cap">' +
    '<div  class="card-body " id="workEx"><p class="card-text">' +
    card.name +
    "</p></div>";
  style.sheet.insertRule(
    "#excard" + card.id + " {content: url(" + card.img + ");}"
  );

  style.sheet.insertRule(
    "#excard" + card.id + ":hover {content: url(" + card.img2 + ");}"
  );
  examples.append(div);
});
