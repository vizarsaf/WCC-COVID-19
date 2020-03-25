<script>

setTimeout(function initMap() {

  <?php
    //Jakarta
    $center_lat = -6.194128;
    $center_long = 106.801226;
    $zoom = 15;
    
    switch ($_GET["region"]) {
      case 'Jakarta':
        $center_lat = -6.194128;
        $center_long = 106.801226;
        $zoom = 15;
        break;

      default:
        break;
    }
  ?>

  var peta;

  // Menampilkan peta
  peta = new google.maps.Map(document.getElementById('peta'), {
    zoom: <?= $zoom; ?>,
    // center: {lat: -6.194128, lng: 106.801226},
    center: {lat: <?= $center_lat; ?>, lng: <?= $center_long; ?>},
    mapTypeId: 'terrain'
  }); // End var map

} // End initMap()
, 1500);

</script>
