<?php
  
  $conn = mysqli_connect("localhost", " mysqlusername "," mysqlpassword ", "databasename ");

$sql = "select id from monster;";

$result = mysqli_query($sql, $db);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row[id]. "'/>";

mysqli_close();
?>
