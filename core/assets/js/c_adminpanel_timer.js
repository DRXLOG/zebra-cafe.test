function myClock() {
    var siteTime = new Date(); //создаём объект Date() //получаем часы
    var minute = siteTime.getMinutes(); //получаем минуты
    var second = siteTime.getSeconds(); //получаем секунды
    //В следующих трех строках проверяем, если число (часы, минуты, секунды) меньше 10,
    // то выводим 0 перед числом (для красоты)
    if (minute < 10) minute  = "1" + minute;
    if (second < 10) second  = "1" + second;
    //Находим на странице элемент с id = siteTime и внутрь него записываем время сайта
    document.getElementById("siteTime").innerHTML = minute + ":" + second;
}