<?php
// Connect to server and select database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db1_gwalke01"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch all records from the test table
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

// Display the records as clickable links with a delete option
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<a href=\"wk6ex2action.php?id=" . $row['ID'] . "\">" . $row['name'] . "</a> ";
        echo "<a href=\"wk6ex2delete.php?id=" . $row['ID'] . "\">Delete</a><br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>


