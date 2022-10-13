<?php
$servername = "localhost";
$username = "m5awy";
$password = "password";
$dbname = "test";
if (isset($_GET['id'])){
    $id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM sqli WHERE ID=".$id;
$result = $conn->query($sql);
if (!empty($result) && $result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "ID : ". $row["ID"] . "<br/>";
}
}
$conn->close();
}
?>