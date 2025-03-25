<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>

<head>
<title>Student Marks</title>
</head>
<body>
<table border="1" align="center">
<tr><th>Year</th><th>Grade</th></tr>

<?php
  foreach ($mymarks as $index => $value) {
    echo "<tr><td>$index</td><td>$value</td></tr>";
  }
?>

</table>

<br/>
<?php
  echo "My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>
</body>
</html>


