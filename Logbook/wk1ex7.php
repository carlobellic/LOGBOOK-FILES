<html>
<body>
<?php
    $hourlyrate = 5.75;  // Hourly rate
    $hoursperweek = 40;  // Hours per week
    $taxrate = 0.22;     // Tax rate (22%)
    
    $gross = $hourlyrate * $hoursperweek;  // Gross earnings
    $tax = $gross * $taxrate;  // Calculate tax amount
    $net = $gross - $tax;  // Net earnings after tax
    
    // Output the results
    echo "Gross Earnings: $" . number_format($gross, 2) . "<br>";
    echo "Tax Amount: $" . number_format($tax, 2) . "<br>";
    echo "Net Earnings (After Tax): $" . number_format($net, 2) . "<br>";
?>
</body>
</html>

