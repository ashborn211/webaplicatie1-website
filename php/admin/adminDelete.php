<?php
 include_once('../db.php');
 include_once('../inloggenhelper.php');
 if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){
  header('location: ../index.php');
 }
 
   if(isset($_POST["submit"])){
        $id = $_POST['id'];
 
    $sql = "DELETE FROM menu WHERE ID= :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();
        header("location: adminDelete.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMINDELETE</title>
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
        include_once('headeradmin.php');
    ?>

</header>


<main style="height: 100vh; width: 100vh;">

<td>
    <form action="" method="post">
            <p>
            <label for="id">id:</label>
               <input type="text" name="id" id="">

            </p>
            <input  type="submit" value="Submit" name="submit" onClick='return confirmSubmit()'>

        </form>
</td>
    
</main>

<footer>
    <?php
        require_once('../footer.php');
    ?>
</footer>


    
    

</body>



