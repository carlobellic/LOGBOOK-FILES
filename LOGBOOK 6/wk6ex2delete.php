<?php
// Connect to server and select the database
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "db1_gwalke01"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the URL query string
$id = $_GET['id'];

// SQL query to delete the record with the given ID
$sql = "DELETE FROM test WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!<br>";
    echo "<a href='wk6ex2.php'>Back to the list</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
