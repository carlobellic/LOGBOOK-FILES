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

// Retrieve the 'id' from the query string
$id = $_GET['id'];

// Query to fetch the details of the selected person
$sql = "SELECT * FROM test WHERE ID = $id";
$result = $conn->query($sql);

// Fetch and display the person's details
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>
<form action="wk6ex2update.php?id=<?php echo $row['ID']; ?>" method="post">
    Name: <input type="text" name="txtName" value="<?php echo $row['name']; ?>" readonly /><br>
    Email: <input type="text" name="txtEmail" value="<?php echo $row['email']; ?>" /><br>
    Phone Number: <input type="text" name="txtPhoneNumber" value="<?php echo $row['phone_number']; ?>" /><br>
    <input type="submit" value="Save Changes" />
</form>

    <?php
} else {
    echo "No records found.";
}

$conn->close();
?>
