<?php
    // Check if both age and gender are set
    if (isset($_POST["txtage"]) && is_numeric($_POST["txtage"]) && isset($_POST["txtgender"])) {
        $age = (int)$_POST["txtage"];
        $gender = $_POST["txtgender"];

        // Output message based on age
        if ($age < 21) {
            echo "You are under 21 years old<br/>";
        } else {
            echo "You are 21 years old or over<br/>";
        }

        // Output message based on gender
        if (strtolower($gender) == "male") {
            echo "You are Male.<br/>";
        } elseif (strtolower($gender) == "female") {
            echo "You are Female.<br/>";
        } else {
            echo "Gender not specified correctly.<br/>";
        }

    } else {
        echo "Please enter a valid age and gender.<br/>";
    }
?>
