let map = new google.maps.Map(
    document.getElementById("map_canvas"),
    mapOptions
);

let poly;

async function initialize() {
    addEventFreeHand(map);
    await getListPlace();
    loadAllPlace();
}

window.addEventListener("load", initialize);
