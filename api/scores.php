<?php
$servername = "ale1480792.mysql";
$username = "ale1480792_mysql";
$password = "OeeP2:OO";

try {
  $connection = mysqli_connect("ale1480792.mysql","ale1480792_mysql","OeeP2:OO","ale1480792_top_scrore") or die("Error " . mysqli_error($connection));
  $sql = "SELECT * FROM scores order by score DESC LIMIT 10";
  $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
  $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
  echo json_encode($emparray);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>