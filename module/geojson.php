<?php
  include "../config/db.php";
  ob_start();
?>

{
  "type":"FeatureCollection",
  "features":[

    <?php
      $i = 0;
      $sql = "SELECT
        kelurahan,
        polygon
        FROM kelurahan
        WHERE polygon != ''
      ";
      while ($row = $con->query($sql)->fetch_assoc()) { $i++; if ($i>1) echo ",";
    ?>
    {
      "type":"Feature",
      "properties":{
        "provinsi":"Jakarta",
        "kelurahan":"<?= $row["kelurahan"]; ?>"
      },
      "geometry":{
        "type":"Polygon",
        "coordinates":[
          [
            <?= $row["polygon"]; ?>
          ]
        ]
      }
    }
    <?php } ?>

  ]
}
