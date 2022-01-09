<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/delete.php';
 require_once 'backend/functions/select-id.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title>TAPEKO</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">  
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- Font-Awesome Core CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>


<form action="delete.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>">
    <input type="hidden" name="image_existing" value="<?php echo $row['image_url']; ?>">

    <div class="form-group">
        <p>Är du säker på att du vill ta bort denna annons?</p>
        <p><?php echo ucwords($row['product_name']); ?></p>
    </div>

    <div class="form-group">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="..."> 
                </div>
            </div>
        </div>
    </div>

    <a href="admin.php?user=1" class="btn btn-outline-secondary">Avbryt</a>

    <button type="submit" class="btn btn-danger" name="delete">Ta bort</button>

</form>