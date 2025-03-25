<?php
  // Check if quantity and size are passed from the previous form
  if (isset($_POST['selqty']) && isset($_POST['selsize'])) {
    $qty = htmlspecialchars($_POST['selqty']);
    $size = htmlspecialchars($_POST['selsize']);

    // Pass quantity and size to confirmation.php
    echo "<form action='confirmation.php' method='post'>";
    echo "You have selected $qty widget(s) of size $size.<br>";

    echo "<input type='hidden' name='selqty' value='$qty' />";
    echo "<input type='hidden' name='selsize' value='$size' />";
    echo "<input type='submit' value='Confirm Order'/>";
    echo "</form>";
  } else {
    echo "<h2>Missing data!</h2>";
  }
?>

