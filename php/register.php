<?php 
require_once('ADMINACCOUNT.php');
if(isset($_POST["submit"])){
    $naam = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    
    
    $sql = "INSERT INTO normalaccount (naam, email, password)
    VALUES (:naam, :email, :password)";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);     
$stmt->bindParam(":email", $_POST['email']);     
$stmt->bindParam(":password", $_POST['password']);     
$stmt->execute();
header("location: register.php");
    


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    

<header>
    <?php
        require_once('header.php');
    ?>

</header>


<main style="height: 100%; width: 100%;">

    <?php
        require_once('inloggenhelper.php');
        
    ?>
    <form action="" method="post">
        <input type="username" name="username" id="" placeholder="username">
        <input type="email" name="email" id="" placeholder="email">
        <input type="password" name="password" id="" placeholder="password">
        <input type="submit" value="register">
    </form>

    <?php
    
    ?>
</main>

<footer>
    <?php
        require_once('footer.php');
    ?>
</footer>

</body>



</html>