<?php
  $con = mysqli_connect('localhost', 'root', '') or die("Cannot connect");
  mysqli_select_db($con, 'corona_db') or die("Cannot select database");
?>
