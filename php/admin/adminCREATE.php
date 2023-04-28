<?php
   include_once('../db.php');
   include_once('../inloggenhelper.php');
   if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
    header('location: ../index.php');
   }


if(isset($_POST["submit"])){
    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $beschrijving = $_POST['beschrijving'];
   
    $sql = "INSERT INTO menu (naam, prijs, beschrijving)
            VALUES (:naam, :prijs, :beschrijving)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);     
    $stmt->bindParam(":prijs", $_POST['prijs']);     
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);     
    $stmt->execute();
    header("location: adminCREATE.php");
}

    ?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMINCREATE</title>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script></head>
<script src="../../js/button.js"></script>

<body>
    

<header>
    <?php
        require_once('headeradmin.php');
    ?>

</header>

<main style="height: 100vh; width: 100vh;" class="create=menu">
    <form action="" method="post">
        <p>
        
            <label for="naam">naam:</label>
               <input type="text" name="naam" id="">
            </p>
            <p>
               <label for="prijs">prijs:</label>
               <input type="text" name="prijs" id="">
            </p>
            <p>
               <label for="beschrijving">beschrijving:</label>
               <input type="text" name="beschrijving" id="">
            </p>
               
            <input  type="submit" value="Submit" name="submit" onClick='return confirmSubmit()'>
    </form>
</main>

<footer>
    <?php
        require_once('../footer.php');
    ?>
</footer>

</body>