ymaps.ready(function () {
  var myMap = new ymaps.Map('map', {
    center: [57.940995, 60.026658],
    zoom: 16
  }, {
    searchControlProvider: 'yandex#search'
  }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      hintContent: '',
      balloonContent: ''
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image',
      // Своё изображение иконки метки.
      iconImageHref: 'img/icons/map-marker.svg',
      // Размеры метки.
      iconImageSize: [28, 40],
      // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-14, -20]
    });

  myMap.geoObjects
    .add(myPlacemark)
    .add(myPlacemarkWithContent);
});