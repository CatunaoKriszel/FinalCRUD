<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully!";
} else {
    echo "Error: " . $conn->error;
}

header("Location: index.php");
?>
