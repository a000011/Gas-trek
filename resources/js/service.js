let service = document.getElementById("services");

let cards = [
  {
    name: "Установка, диагностика и ремонт ГБО Тольятти<br>&ensp;",
    img: "img/service/test.png",
  },
  {
    name: "Большой опыт работы со всеми видами ГБО 2 и 4 поколения",
    img: "img/service/gbo.png",
  },
  {
    name: "Установка ГБО 4 поколения 4-6-8и цилиндровые двигатели",
    img: "img/service/4gbo.jpg",
  },
  {
    name: "Установка ГБО 2 поколения",
    img: "img/service/gbo-2.jpg",
  },
  {
    name: "Демонтаж ГБО",
    img: "img/service/demontazh.jpg",
  },
  {
    name: "Установка ГБО на Газели",
    img: "img/service/gbo-gazel-1.jpg",
  },
];
cards.forEach((card) => {
  let div = document.createElement("div");
  div.className = "col-xl-4 col-12 cards";
  div.innerHTML =
    '<div class="service-card">' + "<h2>" + card.name + "</h2>" + "</div>";
  service.append(div);
});
