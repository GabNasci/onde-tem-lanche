let map;

async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");

    map = new Map(document.getElementById("map"), {
        center: { lat: -24.02914406263776, lng: -52.37632620906734 },
        zoom: 14,
        maxZoom: 18,
        minZoom: 14,
        disableDefaultUI: true,
    });


}


window.initMap = initMap;


