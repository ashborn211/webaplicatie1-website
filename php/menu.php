<?php
include_once('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>thuisbezorgt</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    

<header>
<?php
        include_once('header.php');
    ?>
</header>

<main>
    
        <?php
      
            $query = "SELECT id, naam, prijs, brijschrijving, FROM menu";
            $stmt->execute();
            $result = $prepared -> fetchAll(PDO::FETCH_ASSOC);
             ?>
             
             <table>
             <?php
             $sn=1;
             foreach($result as $data) {
               
               ?>
                <tr>
               <td><?php echo $sn; ?> </td>
               <td><?php echo $data['id']; ?> </td>
               <td><?php echo $data['naam']; ?> </td>
               <td><?php echo $data['prijs']; ?> </td>
               <td><?php echo $data['beschrijving']; ?> </td>
                </tr>
                <?php
              }
              ?>
            </table>
              


</main>

<footer>
<?php
        include_once('footer.php');
    ?>
</footer>

</body>



</html>