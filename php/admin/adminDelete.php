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
</head>

<body>
    

<header>
    <?php
        include_once('headeradmin.php');
    ?>

</header>


<main>
<td>
    <form action="" method="post">
            <p>
            <label for="id">id:</label>
               <input type="text" name="id" id="">

            </p>
            <input type="submit" value="Submit" name="submit">

        </form>
</td>
    
</main>

<footer>
    <?php
        require_once('../footer.php');
    ?>
</footer>


    
    

</body>



</html>