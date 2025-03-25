<?php
  // Check if quantity is passed from the previous form
  if (isset($_POST['selqty'])) {
    $qty = htmlspecialchars($_POST['selqty']);
    
    // Display available sizes and prices
    echo "<h2> You have selected " . $qty . " widget(s). </h2><br>";
    echo "Select the size for your widgets:<br>";

    echo "<form action='selectcolour.php' method='post'>";
    
    echo "<select name='selsize'>";
    echo "<option value='small'>Small - £15.75</option>";
    echo "<option value='medium'>Medium - £16.75</option>";
    echo "<option value='large'>Large - £17.75</option>";
    echo "<option value='extra_large'>Extra Large - £18.75</option>";
    echo "</select><br><br>";

    // Pass quantity to selectcolour.php
    echo "<input type='hidden' name='selqty' value='$qty' />";
    echo "<input type='submit' value='Select Colour'/>";
    echo "</form>";
  } else {
    echo "<h2>No quantity selected!</h2>";
  }
?>
