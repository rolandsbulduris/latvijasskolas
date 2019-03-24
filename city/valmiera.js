ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [57.533699, 25.423622],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 10,
            clusterDisableClickZoom: true
        });
        myMap.behaviors.disable('scrollZoom');

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);

    $.ajax({
        url: "valmiera.json"
    }).done(function(data) {
        objectManager.add(data);
    });

}