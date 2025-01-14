<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curfew e-Pass Management System</title>
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
        .forpass {
            margin: 20px;
            color: rgb(86, 83, 83);
        }
        .register {
            display: flex;
            justify-content: center;
            border: 1px solid;
            margin: 10px;
            padding: 30px;
            width: 340px;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="form">
        <h2>Curfew e-Pass Management System</h2>
        <br>
        <form action="login.php" method="POST"> 
            <input type="text" name="username" id="username" placeholder="Email" class="input" required>
            <br>
            <input type="password" name="password" id="password" placeholder="Password" class="input" required>
            <br>
            <button type="submit" class="button">Log in</button> 
        </form>
        <h2 style="border: 1px solid black; width: 300px;"></h2>
        OR

        <a href="change_password.php" style="text-decoration: none;" class="forpass">Forgot Password?</a>
    </div>

    <div class="register">
        Don't have an account? <a href="register.php" style="text-decoration: none;"> Register Here</a>
    </div>
    
</body>
</html>
