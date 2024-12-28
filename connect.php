<?php
$hostname = "localhost";
$username = "root";
$password = "Password";
$dbname = "text";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
