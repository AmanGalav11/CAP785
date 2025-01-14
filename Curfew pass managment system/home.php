<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        body {
            height: 100vh; 
            overflow: hidden; 
        }

        .bac {
            position: relative; 
            height: 100%; 
            overflow: hidden; 
        }

        .bac::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url(./Image/curfew.jpg);
            background-size: cover;
            background-position: center;
            filter: blur(8px); 
            z-index: 1; 
        }

        .nav {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color: white;
            position: relative; 
            z-index: 2; 
        }

        .nav ul {
            list-style-type: none; 
            display: flex;
            padding: 10px; 
            color: black;
        }

        .nav li {
            margin: 0 50px;
        }

        .main {
            display: flex;
            justify-content: center;
            padding: 100px;
            font-size: 70px;
            position: relative;
            z-index: 2; 
        }

        .button {
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
        }
        .button1 {
            padding: 5px;
            border-radius: 10px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="bac">
        <div class="nav">
            <ul>
                <li><a href="Home.php" style="text-decoration: none; color: black;">Home</a></li>
                <li><a href="About.php" style="text-decoration: none; color: black;">About</a></li>
                <li><a href="view_passes.php" style="text-decoration: none; color: black;">View Pass</a></li>
                
            </ul>
            <ul>
                <li><button class="button"><a href="E-pass.php" style="text-decoration: none; color: white;"><b>Generate e-Pass</b></a></button></li>
                <li><button class="button1" ><a href="logout.php" style="text-decoration: none; color: red;"><b><h3>Logout</h3></b></a></button></li>
            </ul>
        </div>
           
        <div class="main">
            <h1 style="color:rgb(230, 140, 15); background-color: black;">Curfew e-Pass</h1>
            
        </div>
        
    </div>
</body>
</html>
