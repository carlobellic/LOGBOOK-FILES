<?php
  // Check if the necessary POST data is available
  if (isset($_POST['selqty']) && isset($_POST['selsize'])) {
    $qty = htmlspecialchars($_POST['selqty']);
    $size = htmlspecialchars($_POST['selsize']);
    
    // Set price based on the selected size
    switch ($size) {
      case 'small':
        $price_per_widget = 15.75;
        break;
      case 'medium':
        $price_per_widget = 16.75;
        break;
      case 'large':
        $price_per_widget = 17.75;
        break;
      case 'extra_large':
        $price_per_widget = 18.75;
        break;
      default:
        $price_per_widget = 0;
        break;
    }

    // Calculate the total price
    $total_price = $price_per_widget * $qty;

    // Display order summary
    echo "<h2> You have selected " . $qty . " widget(s) of size $size. </h2><br>";
    echo "<h2> Price per widget: £" . number_format($price_per_widget, 2) . "</h2><br>";
    echo "<h2> Total price: £" . number_format($total_price, 2) . "</h2><br>";

    // Show a message confirming the selection of the color
    if (isset($_POST['selcolour'])) {
        $colour = htmlspecialchars($_POST['selcolour']);
        echo "<h2> The selected colour is: $colour.</h2>";
    }
  } else {
    echo "<h2>Missing order details!</h2>";
  }
?>
