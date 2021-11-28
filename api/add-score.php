<?php
$servername = "ale1480792.mysql";
$username = "ale1480792_mysql";
$password = "OeeP2:OO";

try {
  $name_input = $_POST['name'];
  $score = $_POST['score'];

  $connection = mysqli_connect("ale1480792.mysql","ale1480792_mysql","OeeP2:OO","ale1480792_top_scrore") or die("Error " . mysqli_error($connection));
  $sql = "INSERT INTO scores(is_alex, score, `name`) VALUES (0, ".$score.", '".$name_input."')";
  $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

  echo json_encode(0);
} catch(PDOException $e) {
  echo json_encode(1);
}
?>