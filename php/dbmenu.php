
    
<?php
$servername = "localhost";
$username = "velican";
$password = "velican009";




try {
    $conn = new PDO("mysql:host=$servername;dbname=menu", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

