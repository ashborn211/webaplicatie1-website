<?php
session_start();
$servername = 'localhost';
$database = 'menu';
$user = 'velican';
$pass = 'velican009';
$charset = 'utf8mb4';

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";

try
{
    // set the PDO error mode to exception
$connect = new PDO($dsn, $user, $pass);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "verbinding is gemaakt.";
}

catch (PDOException $e) 
{
echo $e->getMessage();
die("Sorry database probleem");

}
?>