<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMINCREATE</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    

<header>
    <?php
        require_once('../header.php');
    ?>

</header>


<main>
    <h1>welkom admin </h1>
    <?php
    $sql = "INSERT INTO menu (id, naam, prijs, beschrijving)
            VALUES (:id, :naam, :prijs, :beschrijving)";
    $stmt = $connect->prepare($sql);   
    $stmt->bindParam(":id", $_POST['id']);   
    $stmt->bindParam(":naam", $_POST['naam']);     
    $stmt->bindParam(":prijs", $_POST['prijs']);     
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);     

?>
    
</main>

<footer>
    <?php
        require_once('../footer.php');
    ?>
</footer>

</body>



</html>