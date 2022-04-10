<?php
session_start();
includ "db_connection.php";

if(isset($_POST['username']) && isset($_POST['password'])
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}
$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username))
{
    header("Location: index.html?error=Username is required");
    exit();
}
else if(empty($password)
{
    header("Location: index.html?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";

result = mysqli_query($connection, $sql);

if(mysql_num_rows($result) === 1
{
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $username && $row['password' === $password])
    {
        echo "Logged In!";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: index.html");
        exit();
    }
}