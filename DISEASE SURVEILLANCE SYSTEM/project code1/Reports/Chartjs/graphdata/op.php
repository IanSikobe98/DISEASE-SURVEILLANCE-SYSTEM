<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","disease_surveillance_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,Totalpopulation FROM county_table WHERE name = 'MIGORI' ";
$result = $conn->query($sql);

if ($result = $conn->query($sql)) {
if ($result->num_rows > 0) {
    echo "<table><tr><th>County ID</th><th>name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["Totalpopulation"]. " " . $row["Totalpopulation"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
else{ printf("Query failed: %s\n", $conn->error);}
$conn->close();
?> 

</body>
</html>