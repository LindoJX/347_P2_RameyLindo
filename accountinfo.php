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

        <div class="wrapper">
        <h2>Account info</h2>
        <p>Here you can fill out some info about yourself.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Interest</label>
                <input type="text" name="interest" class="form-control">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>How many years have you been interested in this activity?</label>
                <input type="text" name="length" class="form-control">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>   
		

	</body>
</html>