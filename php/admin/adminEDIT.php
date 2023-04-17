
<?php
   include_once('../db.php');
   include_once('../inloggenhelper.php');
   if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
    header('location: ../index.php');
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
<?php
 $stmt = $connect->prepare("SELECT * FROM menu WHERE ID = :id");
 $stmt->execute(['id' => $_GET['id']]);
 $data = $stmt->fetch();
   if(isset($_POST["submit"])){
   
    
    $sql = "UPDATE menu SET
        naam = :naam,
        prijs = :prijs,
        beschrijving = :beschrijving,
        prijs = :prijs,
        WHERE ID = :id
    ";
    $stmt = $connect->prepare($sql);   
    $stmt->bindParam(":id", $data['id']);   
    $stmt->bindParam(":naam", $_POST['naam']);     
    $stmt->bindParam(":prijs", $_POST['prijs']);     
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);     
    $stmt->execute();
    header("location: adminEDIT.php");
}



?>
    <form action="" method="post">
        <p>
            <label for="naam">naam:</label>
               <input type="text" name="naam" value="<?php echo $data['naam']; ?>" id="">
            </p>
            <p>
               <label for="prijs">prijs:</label>
               <input type="text" name="prijs" value="<?php echo $data['prijs']; ?> "id="">
            </p>
            <p>
               <label for="beschrijving">beschrijving:</label>
               <input type="text" name="beschrijving" value="<?php echo $data['beschrijving']; ?>"id="">
            </p>
            <p>
               <label for="id">id:</label>
               <input type="text" name="id"value="<?php echo $data['id']; ?>" id="" >
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