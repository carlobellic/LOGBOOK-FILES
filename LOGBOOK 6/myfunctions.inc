<?php
// Function to calculate tax with tax allowance
function calculatetax($salary, $rate = 40, $taxAllowance = 0) {
    // Deduct tax allowance from the salary
    $taxableIncome = $salary - $taxAllowance;

    // If taxable income is less than 0, set tax to 0
    if ($taxableIncome < 0) {
        $taxableIncome = 0;
    }

    // Calculate tax on the taxable income
    $tax = ($taxableIncome * ($rate / 100));
    return $tax;
}
?>
