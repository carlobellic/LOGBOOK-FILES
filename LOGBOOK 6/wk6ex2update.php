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

// Retrieve the 'id' from the query string
$id = $_GET['id']; // We passed this id from wk6ex2.php

// Retrieve the updated values from the form
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$phone_number = $_POST['txtPhoneNumber'];

// Prepare the SQL query to update the record
$sql = "UPDATE test SET email='$email', phone_number='$phone_number' WHERE ID=$id";

// Execute the update query
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
