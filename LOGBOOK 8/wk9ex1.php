<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "root", "lottery");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Generate lottery numbers
    $lottodate = date("Y-m-d");
    echo "The lottery numbers for $lottodate are:<br>";

    $numbers = [];

    while (count($numbers) < 6) {
        $num = rand(1, 49);
        if (!in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    }

    sort($numbers);
    echo implode(", ", $numbers);

    // Insert into database
    $sql = "INSERT INTO lotto (lottodate, number1, number2, number3, number4, number5, number6)
            VALUES ('$lottodate', $numbers[0], $numbers[1], $numbers[2], $numbers[3], $numbers[4], $numbers[5])";

    if (!mysqli_query($conn, $sql)) {
        echo "<br/>Error: " . mysqli_error($conn);
    } else {
        echo "<br/>This week's numbers have been saved";
    }

    mysqli_close($conn);
?>



