<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make It Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Make It Home</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Index.php">HOME</a></li>
                    <li><a href="Models.php">MODELS</a></li>
                    <li><a href="floorplan/build/index.html">FLOOR&nbspPLAN</a></li>
                    <li><a href="floorplan/build/index2.html">CUSTOMIZE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
	                <li><a href="logout.php">Logout</a></li>
              </div>
                   
        </div> 
        <div class="content">
            <h1>Make<br><span>It</span> <br>Home</h1>
            <p class="par">Design your Dream Home <br> <br> <br>


        </div>
    </div>
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
   
