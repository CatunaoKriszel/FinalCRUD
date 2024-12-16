<?php
$host = "localhost";
$user = "astraea";
$pass = "Catunao@01";
$dbname = "system_user";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
