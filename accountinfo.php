<?php


?>







<!doctype html>
<html lang="en">
	<head>
		<link rel="icon" type="image/png" sizes="32x32" href="images/abstractClimbing.PNG">
		<title>Account Info</title>
		<link rel="stylesheet" href="css/styleFile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="scripts/scripts.js"></script>
	</head>

    <script>
        var url_string = window.location;
        var url = new URL(url_string);
        var user = url.searchParams.get("user");

    </script>

	<body>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="index.html">Home</a>  
			<a href="chalk.html">Types of Chalk</a>
			<a href="technique.html">About us</a>
			<a href="types.html">Types of Climbing</a>
			<a href="shoes.html">Types of Shoes</a>   
		  </div>
		
		  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
		<h1> Account information </h1>

		<h1>

            <script>
                namecheck: if (user == null) {
                    break namecheck;
                } else {

                    document.write("Welcome " + user + "!");
                    
                }
            </script>
        </h1>

        <h2>
            Here you can update some information about yourself 
            <form>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname">
            </form>

        </h2>
		

	</body>
</html>