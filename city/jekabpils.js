ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [56.500010, 25.867972],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 20,
            clusterDisableClickZoom: true
        });
        myMap.behaviors.disable('scrollZoom');

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);

    $.ajax({
        url: "jekabpils.json"
    }).done(function(data) {
        objectManager.add(data);
    });

}