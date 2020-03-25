<script>

setTimeout(function initMap() {

  <?php
    $styles = "
      [
        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#263c3f'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#6b9a76'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{color: '#38414e'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [{color: '#212a37'}]
        },
        {
          featureType: 'road',
          elementType: 'labels.text.fill',
          stylers: [{color: '#9ca5b3'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{color: '#746855'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry.stroke',
          stylers: [{color: '#1f2835'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{color: '#f3d19c'}]
        },
        {
          featureType: 'transit',
          elementType: 'geometry',
          stylers: [{color: '#2f3948'}]
        },
        {
          featureType: 'transit.station',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{color: '#17263c'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{color: '#515c6d'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.stroke',
          stylers: [{color: '#17263c'}]
        }
      ]
    ";

    $center_lat = -6.121435;
    $center_long = 106.774124;
    $zoom = 12;

    switch ($_GET["region"]) {
      case 'Jakarta':
        $center_lat = -6.121435;
        $center_long = 106.774124;
        $zoom = 12;
        break;

      default:
        break;
    }
  ?>

  var peta;

  // Menampilkan peta
  peta = new google.maps.Map(document.getElementById('peta'), {
    zoom: <?= $zoom; ?>,
    center: {lat: <?= $center_lat; ?>, lng: <?= $center_long; ?>},
    styles: <?= $styles; ?>,
    mapTypeId: 'terrain'
  }); // End var map

  peta.data.loadGeoJson('module/geo.json');
  peta.data.setStyle(function(feature) {
    var provinsi = feature.getProperty('provinsi');
    var kelurahan = feature.getProperty('kelurahan');
    var color = "gray";
    if (provinsi == "JAKARTA" && kelurahan == "KAMAL") {
      color = "red";
    }
    if (provinsi == "JAKARTA" && kelurahan == "KAMAL MUARA") {
      color = "yellow";
    }
    if (provinsi == "Jakarta" && kelurahan == "Tegal Alur") {
      color = "red";
    }
    return {
      fillColor: color,
      strokeWeight: 1
    }
  });

} // End initMap()
, 1500);

</script>
