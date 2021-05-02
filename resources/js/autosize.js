// ? Подганяем картинку под высоту экрана

// ? здесь идет проверка устройства клиента
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
} else {
    let baner = document.getElementById("banner");
    let banerHeight = window.innerHeight;
    baner.style.height = banerHeight - 80 + "px";
}
