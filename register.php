<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $state = $_POST['state'];

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, state) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $state);

    if ($stmt->execute()) {
        echo "Registration successful!";
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
    <title>Register</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
        body {
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
        }
        .form {
            border: 1px solid;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 400px;
            height: 500px;
        }
        .input {
            padding: 10px;
            margin: 5px;
            width: 200px;
        }
        .button {
            padding: 5px;
            margin: 10px;
            width: 220px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
            border: none;
            color: white;
            font-family: sans-serif;
            font-size: large;
        }
    .button {
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
        }

    </style>
<body>
    <div class="form">
        <h2>Curfew e-Pass Management System</h2>
        <br>
    <form method="POST" action="">
        <br>
            <input type="text" name="username" placeholder="Username" class="input" required>
            <br>
            <input type="email" name="email" placeholder="Email" class="input" required>
            <br>
            <input type="password" name="password" placeholder="Password" class="input" required>
            <br>
            <input type="text" name="state" placeholder="State" class="input" required>
            <br>
            <button type="submit" class="button">Register Now</button>
    </form>
</div>
    <button class="button"><a href="index.php" style="text-decoration: none; color: white;">Login</a></button>
</body>
</html>
