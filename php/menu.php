<?php
require_once('db.php');

$sql = "SELECT id, naam, prijs, beschrijving FROM menu ORDER BY id ASC";
$stmt = $connect->prepare($sql);
$stmt -> FetchAll(PDO::FETCH_ASSOC);
$stmt->execute();
$result = $stmt ->FetchAll(PDO::FETCH_ASSOC);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>thuisbezorgt</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<table>
        <?php
        
             foreach($result as $data) {
               
               ?>
                <tr>
               <td><?php echo $data['id']; ?> </td>
               <td><?php echo $data['naam']; ?> </td>
               <td><?php echo $data['prijs']; ?> </td>
               <td><?php echo $data['beschrijving']; ?> </td>
                </tr>
                <?php
              }
              ?>
            </table>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../menu-img/sushi.png" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../menu-img/friet.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../menu-img/salade.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../menu-img/burger.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top"  src="" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top"  src="" alt="Card image cap">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">bestellen</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</main>

<footer>
<?php
        include_once('footer.php');
    ?>
</footer>

</body>



</html>