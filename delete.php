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
    <script type="text/javascript">

        $(document).ready(function() {
            
            // $('.datepicker').datepicker({
            //     format: 'dd/mm/yyyy',
            //     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
            // });
            
        });

    </script>

</head>


<form action="remove.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="image_existing" value="<?php echo $row['image']; ?>">

    <div class="form-group">
        <p>Är du säker på att du vill ta bort denna annons?</p>
        <p><?php echo ucwords($row['title'] . ' ' . $row['description']); ?></p>
    </div>

    <a href="index.php" class="btn btn-outline-secondary">Avbryt</a>

    <button type="submit" class="btn btn-danger" name="delete">Ta bort</button>

</form>