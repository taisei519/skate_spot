// Initialize and add the map
function initMap() {
  // The location of tokyoTower
  const tokyoTower = {lat: 35.6585769, lng: 139.7454506};
  // The map, centered at tokyoTower
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: tokyoTower,
  });
  // The marker, positioned at tokyoTower
  const marker = new google.maps.Marker({
    position: tokyoTower,
    map: map,
  });
}
