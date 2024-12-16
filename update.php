<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>

    <form action="" method="POST">
        <input type="text" name="name" value="<?= $user['name'] ?>" required>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
