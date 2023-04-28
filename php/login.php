
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 4 Responsive Layout</title>
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