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
</head>

<body>
    

<header>
    <?php
        require_once('headeradmin.php');
    ?>

</header>

<main class="create=menu">
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
               
        <input type="submit" value="Submit" name="submit">
    </form>
</main>

<footer>
    <?php
        require_once('../footer.php');
    ?>
</footer>

</body>



</html>