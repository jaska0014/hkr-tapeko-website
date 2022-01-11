<!DOCTYPE html><?php
  require_once 'backend/config/db.php';
  require_once 'backend/functions/select.php';
?>

<html lang="sv">

<head>
  <meta charset="utf-8">
  <title>TAPEKO</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">  
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container fluid"> 
            <a class="navbar-brand" href="index.php"><img src="assets/images/tapeko.png" height="50" alt="TAPEKO logo"></a>
                <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="products.php">BEGAGNADE MÖBLER</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">VÅRA TJÄNSTER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">MÖBELTAPETSERARE</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>	

        <!-- Beh;ver struktureras -->
    <nav class="navbar d-flex pt-2" style="background-color: black">
    <div class="container fluid"> 
        <div class="d-flex flex-row bd-highlight">   <a class="text-start" <ol class="breadcrumb"> <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Hem</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li> </ol></a> </div>
                <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight text-light "> <a href="admin.php?user=1" class="text-decoration-none"> Admin <i class="fas fa-user-lock"></i></a></div>
          <div class="p-2 bd-highlight text-light"><a href="products.php" class="text-decoration-none"> Shop <i class="fas fa-shopping-bag"></i></a></div>
        </div>
        </div>
    </nav>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Välkommen Andrea!</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Nedan ser du en lista på dina annonser som ligger under aktiv försäljning just nu.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="add.php" class="btn btn-outline-secondary btn-lg px-4 me-sm-3">Skapa ny annons</a>
      </div>
    </div>
  </div>

<?php
require_once 'backend/includes/notifications.products.php';
?>


<!-- Start för Container till korten -->
<div class="container fluid">
    <div class="container">
        <div class="row row-cols-1 mt-4 row-cols-md-2 g-4">

          <?php
          if ($stmt->rowCount() > 0) 
          {
            while ($row = $stmt->fetch()) {
              echo '<div class="col mb-4">';
              echo '<div class="card product-card border-0">';
              echo '<img src="'.$row['image_url'].'" class="card-img-top" alt="...">';
              echo '<div class="card-body p-0 pt-3">';
              echo '<h5 class="card-title">'.$row['product_name'].'</h5>';
              echo '<div class="d-flex mb-3">';
              echo '<div class="pt-2 flex-fill">';
              echo '<p class="card-text1">'.$row['product_desc'].'</p>';
              echo '<a href="edit.php?id='.$row['product_id'].'" class="btn btn-outline-secondary mr-2">Redigera</a>';
              echo '<a href="delete.php?id='.$row['product_id'].'" class="btn btn-outline-danger">Ta bort</a>';
              echo '</div>';
              echo '<div class="p-2 flex-fill">';
              echo '<p class="card-text">Designer: '.$row['product_designer'].'</p>';
              echo '<p class="card-text">Årsmodell: '.$row['product_year'].'</p>';
              echo '<p class="card-text">Pris: '.$row['product_price'].'</p>';
              echo '<p class="card-text">Plats: '.$row['product_location'].'</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
            }
          } 
          else {
            echo '<div class="col mb-4">';
            echo '<div class="card border-0">';
            echo '<div class="p-2 flex-fill">';
            echo '<p class="card-text">Nothing in the database</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          ?>

        </div>
    </div>
</div>

  <!-- Footer -->
<footer class=" text-start bg-light">
  <!-- Grid container -->
  <div class="container mt-5 pt-5 pb-5">

 <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
               <!--Grid column-->
               <div class="col-lg-3 col-md-10 mb-10 mb-md-10">
          <h6 class="text-uppercase pt-5">BEGAGNADE MÖBLER</h6>

          <ul class="list-unstyled mb-1">
            <li>
              <a href="#!" class="text-dark text-decoration-none">Köp begagnade designmöbler</a>
            </li>
          </ul>
          <hr class="divider pb-5">
        </div>
        <!--Grid column-->
         <!--Grid column-->
         <div class="col-lg-3 col-md-10 mb-10 mb-md-10">
          <h6 class="text-uppercase pt-5">VÅRA TJÄNSTER</h6>

          <ul class="list-unstyled mb-1">
            <li>
              <a href="#!" class="text-dark text-decoration-none">Vad vi kan hjälpa till med</a>
            </li>
          </ul>
          <hr class="divider pb-5">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-10 mb-10 mb-md-10">
          <h6 class="text-uppercase pt-5">MÖBELTAPETSERARE</h6>

          <ul class="list-unstyled mb-1">
            <li>
              <a href="#!" class="text-dark text-decoration-none">Hitta en möbeltapetserare</a>
            </li>
          </ul>
          <hr class="divider pb-5">
        </div>
        <!--Grid column-->
         <!--Grid column-->
         <div class="col-lg-3 col-md-10 mb-10 mb-md-10">
          <h6 class="text-uppercase pt-5">SOCIALA MEDIER</h6>

          <ul class="list-unstyled mb-1">
            <li>
              <a href="#!" class="text-dark text-decoration-none">Följ oss på sociala medier</a>
            </li>
          <hr class="divider">
          <i id="social" class="fab fa-twitter fa-2x"></i>
          <i id="social" class="fab fa-instagram fa-2x"></i>
          <i id="social" class="fab fa-facebook fa-2x"></i>
        
          </ul>
        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

</footer>
<!-- Footer -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
