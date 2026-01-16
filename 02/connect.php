<?php 
declare(strict_types=1); 

$host = "localhost"; 
$db = "Week2";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db";

//try to connect, if connected echo a yay!
try {
    $pdo = new PDO ($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Connected.</p>";

}
catch(PDOException $e) {

    die("Database connection Failed.". $e->getMessage());
}

