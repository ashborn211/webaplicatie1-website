
<?php
/*hier word er gekeken of er een connectie is met de database en dat je de juiste inloggegevens gebruikt hebt voor admin rechten*/
   include_once('../db.php');
   include_once('../inloggenhelper.php');
   if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
    header('location: ../index.php');
   }

/*dit zorgt ervoor dat als je op submit drukt dat de database word bewerkt */
     if(isset($_POST["submit"])){
        $naam = $_POST['naam'];
        $prijs = $_POST['prijs'];
        $beschrijving = $_POST['beschrijving'];

        

      $sql = "UPDATE menu SET
          naam = :naam,
          prijs = :prijs,
          beschrijving = :beschrijving,
          prijs = :prijs
          WHERE ID = :id";
      $stmt = $connect->prepare($sql);   
      $stmt->bindParam(":id", $_POST['id']);   
      $stmt->bindParam(":naam", $_POST['naam']);     
      $stmt->bindParam(":prijs", $_POST['prijs']);     
      $stmt->bindParam(":beschrijving", $_POST['beschrijving']);     
      $stmt->execute();
      header("location: adminEDIT.php");
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../js/button.js"></script>
</head>

<body>
    

<header>
    <?php
        require_once('headeradmin.php');
    ?>

</header>


<main style="height: 100vh; width: 100vh;" class="create=menu">

    <form action="" method="post">
        <p>
        <label for="id">id:</label>
               <input type="text" name="id"value="" id="" >
            
            </p>
            <p>
               <label for="prijs">prijs:</label>
               <input type="text" name="prijs" value=" "id="">
            </p>
            <p>
               <label for="beschrijving">beschrijving:</label>
               <input type="text" name="beschrijving" value=""id="">
            </p>
            <p>
            <label for="naam">naam:</label>
               <input type="text" name="naam" value="" id="">
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



</html>