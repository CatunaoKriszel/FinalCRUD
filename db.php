<?php
$host = "localhost";
$user = "astraea";
$pass = "Catunao@01";
$dbname = "user_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
