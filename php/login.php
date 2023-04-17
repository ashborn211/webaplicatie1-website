
<!DOCTYPE html>
<html lang="en">
<head>
    <title>thuisbezorgt</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    

<header>
    <?php
        require_once('header.php');
    ?>

</header>


<main>

    <?php
        require_once('inloggenhelper.php');
        
    ?>
    <form action="admin/adminCREATE.php" method="post">
        <input type="email" name="email" id="" placeholder="email">
        <input type="password" name="password" id="">
        <input type="submit" value="login">
    </form>
</main>

<footer>
    <?php
        require_once('footer.php');
    ?>
</footer>

</body>



</html>

>>>>>>> 6369c5737342923fb9f31b252dbe7c476d9a9523
