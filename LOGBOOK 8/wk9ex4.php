<?php
    // Database connection
    $conn = mysqli_connect("localhost", "root", "root", "lottery");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch all weeks
    $sql = "SELECT * FROM lotto";
    $result = mysqli_query($conn, $sql);

    echo "<form action='' method='post'>";
    echo "<br/>Select the lottery week: ";
    echo "<select name='selweek'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['wk']}'>Week {$row['wk']} - {$row['lottodate']}</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' value='Show Numbers' />";
    echo "</form>";

    // Display selected week numbers
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selweek'])) {
        $week = $_POST['selweek'];
        $sql = "SELECT * FROM lotto WHERE wk=$week";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        echo "<h3>Lottery numbers for Week $row[wk] - $row[lottodate]:</h3>";
        echo "Number 1: $row[number1]<br/>";
        echo "Number 2: $row[number2]<br/>";
        echo "Number 3: $row[number3]<br/>";
        echo "Number 4: $row[number4]<br/>";
        echo "Number 5: $row[number5]<br/>";
        echo "Number 6: $row[number6]<br/>";
    }

    mysqli_close($conn);
?>
