<?php

// declare strict types
declare(strict_types=1);

// database variables
$host = "localhost"; 
$db = "Lab1";
$user = "root";
$password = "";

// data source name info
$dsn = "mysql:host=$host;dbname=$db";

// exception handler
try {

    // create new pdo
    $pdo = new PDO ($dsn, $user, $password);
    // set pdo attributes
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // display connection successful message
    echo "<p>Connection succesful!.</p>";

}
// error handler
catch(PDOException $e) {

    // display connection failed message
    die("Database connection Failed.". $e->getMessage());
}
?>