<?php
// Include the functions from myfunctions.inc
include("myfunctions.inc");



// Set your salary, tax rate, and tax allowance
$salary = 15000; // Replace with your actual salary
$rate = 22;      // Replace with your actual tax rate
$taxAllowance = 5000; // Replace this with the actual tax allowance amount

// Calculate the tax using the calculatetax function (with tax allowance)
$tax = calculatetax($salary, $rate, $taxAllowance);

// Output the result
html_h2("Tax Calculation with Allowance");
echo "I pay £" . $tax . " tax after a £" . $taxAllowance . " tax allowance.";
?>

