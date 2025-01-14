<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        .nav{
            display:flex;
            justify-content: space-evenly;
            
        }
       
        .main{
          display: flex;
          justify-content: space-evenly;
          top: 150px;
            
        }
        .card1{
            border: 1px solid;
            padding: 10px;
            background-color:rgb(165, 171, 177);
        }
        .card2{
            border: 1px solid;
            padding: 10px;
            background-color:rgb(165, 171, 177);
        }
        .button {
            position: absolute;
            left:700px;
            padding: 5px;
            border-radius: 10px;
            background-color: rgb(9, 149, 219);
        }
        
    </style>
</head>
<body>
    <div class="nav">
        <H1>Here the details of Developer</H1>
    </div>
    
        <div class="main">
            <div class="card1">
                <img src="./Image/photo new.png" alt="Aman Galav" height="100px">
            <h3>Name : Aman Galav</h3>
            <h3>College : Lovely Professional University</h3>
            <h3>Degree : Master of Computer Application</h3>
            <h3>Specilization : Web Development</h3>
            <h3>Worked at : Capgemini</h3>

            </div>
            
            <div class="card2">
                <img src="./Image/nikhilesh.jpg" alt="Nikhilesh" height="100px">
            <h3>Name : Nikhilesh Kumar Upadhyay </h3>
            <h3>College : Lovely Professional University</h3>
            <h3>Degree : Master of Computer Application</h3>
            <h3>Specilization : Web Development</h3>
            <h3>Offer Rejected : Wayspare</h3>
            </div>   
       
        
    </div>
    <br>
    <br>
    <button class="button"><a href="home.php" style="text-decoration: none; color: white;"><b>Home</b></a></button>
    
</body>
</html>