<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$interest = $length = "";
$username = "";
$interest_err = $length_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["interest"]))){
        $interest_err = "Please enter an interest.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                    $username = trim($_POST["username"]);
            }

            // Close statement
            unset($stmt);
        }
    }


    // Check input errors before inserting in database
//     if(empty($interest_err) && empty($time_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO interests (username, interest, length) VALUES (:username, :interest, :length)";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":interest", $param_interest, PDO::PARAM_STR);
            $stmt->bindParam(":length", $param_length, PDO::PARAM_STR);

            // Set parameters
            $param_username = $username;
            $param_interest = $interest;
            $param_length = $length;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: accountinfo.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
//     }

    // Close connection
    unset($pdo);
}

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
        </form>
    </div>   
		

	</body>
</html>