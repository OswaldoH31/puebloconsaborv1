
  
function initMap() {
    var coord = {lat: 21.1437, lng: -98.4181};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: coord,
        zoom: 13,
    });
    
    var marker = new google.maps.Marker({
    position: coord,
    map: map,
        title: 'Huejutla de Reyes'
    });
}

