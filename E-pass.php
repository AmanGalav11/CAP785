<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];
    $duration = $_POST['duration'];
    $photo = ''; 

    $stmt = $conn->prepare("INSERT INTO epasse (user_id, name, address, reason, duration, photo) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $user_id, $name, $address, $reason, $duration, $photo);

    if ($stmt->execute()) {
        echo "E-Pass generated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate e-Pass</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    .button {
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
        }
</style>
<body>
    <h2>Generate e-Pass</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="reason" placeholder="Reason" required>
        <input type="text" name="duration" placeholder="Duration" required>
        <button type="submit">Generate e-Pass</button>
    </form>
    <br>
    <br>
    <div>
    <button class="button"><a href="view_passes.php" style="text-decoration: none; color: white;">View Pass</a></button>
    <button class="button"><a href="home.php" style="text-decoration: none; color: white;">Home</a></button>
    </div>
</body>
</html>
