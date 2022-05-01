<!-- Created by Thomas Ramey and Jake Lindo on 4/15/22 -->
<!-- Contains configuration used for the database -->

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'RameyTL');
define('DB_PASSWORD', 'password123!');
define('DB_NAME', 'users');

/* Attempt to connect to MySQL database */
try{
    $cfg['Servers'][$i]['auth_type'] = 'HTTP';
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>