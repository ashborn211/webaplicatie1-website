<!doctype html>
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
        include_once('header.php');
    ?>
    </header>

    <main style="height: 100%; width: 100%;">


    <div class="container">
  	<div class="p-5 my-4 bg-light rounded-3">
        <h1>welkom bij mijn restaurant</h1>
        <p><a href="menu.php" target="_blank" class="btn btn-success btn-lg">menu</a></p>
        <p><a href="contact.php" target="_blank" class="btn btn-success btn-lg">contact</a></p>
        <p><a href="login.php" target="_blank" class="btn btn-success btn-lg">login</a></p>
        <p><a href="#" target="_blank" class="btn btn-success btn-lg">register</a></p>


    </div>

      
    </main>

    <footer>
      <?php
      include_once('footer.php');
      ?>
    </footer>
  </body>
</html>
