<?php
// Step 1: Connect to the database
$servername = "localhost";
$username = "root"; // 
$password = "root"; //
$dbname = "db1_gwalke01";     

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Insert data into the table
$sql = "INSERT INTO test (name, email, phone_number) 
        VALUES ('$_POST[txtName]', '$_POST[txtEmail]', '$_POST[txtPhoneNumber]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!<br/>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 3: Select all records from the table
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

// Step 4: Display the records
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone_number"]. "<br>";
    }
} else {
    echo "0 results";
}

// Step 5: Close the connection
$conn->close();
?>
