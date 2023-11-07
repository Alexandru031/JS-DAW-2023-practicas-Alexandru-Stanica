var coordX = 39.478695
var coordY = -0.645774

var map = L.map('map').setView([coordX, coordY], 15.5);

var marker = L.marker([coordX, coordY]).addTo(map).bindPopup("CIFPF Cheste Informática");

var circle = L.circle([coordX, coordY], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 50
}).addTo(map);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

document.getElementById('pos').innerHTML = `Tu posición es X: ${coordX} Y: ${coordY}`

function mapaPos() {
    map.flyTo(L.latLng(coordX, coordY), 16) /* Cambia a la posición actual
     */
}