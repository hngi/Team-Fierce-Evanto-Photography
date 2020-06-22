// Initialize and add the map
function initMap() {
    // The location of sw6
    var sw6 = {
        lat: 51.475220,
        lng: -0.202700
    };
    // The map, centered at sw6
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 4,
            center: sw6
        });
    // The marker, positioned at sw6
    var marker = new google.maps.Marker({
        position: sw6,
        map: map
    });
}