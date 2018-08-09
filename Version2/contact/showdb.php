<?php
$servername = "localhost";
$username = "root";
$password = "Mill*on";
$dbname = "customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CustomerName, FirstName, LastName, Address, City, PostalCode, Country, Email FROM Customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr align=left><th>Customer Name</th><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>Zip Code</th><th>Country</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["CustomerName"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["PostalCode"]."</td><td>".$row["Country"]."</td><td>".$row["Email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
