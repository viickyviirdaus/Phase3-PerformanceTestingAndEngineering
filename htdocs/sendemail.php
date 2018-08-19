<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

$firstname = $_REQUEST['firstname'] ;
$lastname = $_REQUEST['lastname'] ;
$email = $_REQUEST['email'] ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {}