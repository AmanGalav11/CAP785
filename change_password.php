<?php
session_start();
include 'db.php'; 

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['change_password'])) {
       
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];

        
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $stmt->bind_param("ss", $hashed_password, $email);
            $stmt->execute();

            $message = "Your password has been successfully changed.";
        } else {
            $message = "No user found with that email.";
        }

        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form {
            border: 1px solid;
            padding: 20px;
            background-color: white;
            width: 400px;
        }
        .input {
            margin: 10px;
            padding: 10px;
            width: 80%;
        }
        .button {
            padding: 10px;
            background-color: rgb(9, 149, 219);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .message {
            margin: 10px;
            color: green;
        }
    </style>
</head>
<body>

    <div class="form">
        <h2>Change Password</h2>
        <form action="" method="POST">
            <input type="email" name="email" class="input" placeholder="Enter your email" required>
            <input type="password" name="new_password" class="input" placeholder="New Password" required>
            <button type="submit" name="change_password" class="button">Change Password</button>
        </form>

        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>

</body>
</html>
