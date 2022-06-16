<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$em=$_POST["email"];
$name=$_POST["name"];
$tx=$_POST["subject"];
// Enroll_no,name,age,marks
$sql = "INSERT INTO `contact` (`Name`, `email`, `mes`) VALUES ('$name','$em','$tx');
if ($conn->query($sql) === TRUE) {
echo "Row created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>