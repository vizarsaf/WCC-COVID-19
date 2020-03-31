<?php
  include "../config/db.php";
  ob_start();
?>

{
  "type":"FeatureCollection",
  "features":[

    <?php
      $i = 0;
      $sql = "SELECT *
        FROM kelurahan
        WHERE polygon != ''
      ";
      $result = $con->query($sql);
      while ($row = $result->fetch_assoc()) { $i++; if ($i>1) echo ",";
    ?>
    {
      "type":"Feature",
      "properties":{
        "provinsi":"Jakarta",
        "kelurahan":"<?= $row["kelurahan"]; ?>",
        "menunggu_hasil":"<?= $row["menunggu_hasil"]; ?>",
        "positif":"<?= $row["positif"]; ?>",
        "last_update":"<?= $row["last_update"]; ?>",
        "source":"<?= $row["source"]; ?>"
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
