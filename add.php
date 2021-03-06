<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/insert.php';
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
</head>

<body>
    <!-- NAV -->
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
                        <a class="nav-link" aria-current="page" href="products.php">BEGAGNADE MÖBLER</a>
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
        <div class="d-flex flex-row bd-highlight"   <a class="text-start" <ol class="breadcrumb"> <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Hem</a></li>
            <li class="breadcrumb-item active" aria-current="page">Skapa annons</li> </ol></a> </div>
          <div class="d-flex flex-row-reverse bd-highlight">
          <div class="p-2 bd-highlight text-light"> <a href="admin.php?user=1" class="text-decoration-none"> Admin <i class="fas fa-user-lock"></i></a></div>
          <div class="p-2 bd-highlight text-light"><a href="products.php" class="text-decoration-none"> Shop <i class="fas fa-shopping-bag"></i></a></div>
        </div>
        </div>
        </nav>

    <div class="container fluid my-5"> 

      <form action="add.php" method="post" enctype="multipart/form-data">
      <h2>Skapa ny annons</h2>

          <!--(1) product_name -->
          <div class="form-group">
              <label for="product_name">Rubrik:</label>
              <input id="product_name" name="product_name" class="form-control" placeholder="Inkludera sökord som t.ex. märke, designer, årgång" required>
          </div>

          <!--(2) product_type -->
          <div class="form-group">
              <label for="product_type">Välj kategori:</label>
                  <select id="product_type" name="product_type" class="form-control" required>
                      <option> Fåtölj</option>
                      <option> Soffa</option>
                      <option> Bord</option>
                      <option> Annat</option>
                  </select>
          </div>

          <!--(3) product_designer -->
          <div class="form-group">
              <label for="product_designer">Designer:</label>
              <input name="product_designer" id="product_designer" class="form-control" placeholder="Vilken designer har skapat möbeln" required>
          </div>

          <!--(4) product_year -->
          <div class="form-group">
              <label for="product_year">Årsmodell:</label>
              <input type="number" name="product_year" id="product_year" class="form-control" placeholder="Vilken årsgång var den skapad" required>
            </div>

          <!--(5) product_price -->
          <div class="form-group">
              <label for="product_price">Pris:</label>
              <input type="number" name="product_price" id="product_price" class="form-control" placeholder="Endast fast pris" required step="any">
            </div>

          <!--(6) product_location -->
          <div class="form-group">
              <label for="product_location">Plats:</label>
              <input name="product_location" id="product_location" class="form-control" placeholder="Var finns möbeln att hämta" required>
          </div>

          <!--(7) product_desc -->
          <div class="form-group">
              <label for="product_desc">Beskrivning:</label>
              <textarea id="product_desc" name="product_desc" class="form-control" rows="3" required></textarea>
          </div>

          <!--(8) image_url -->
          <div class="form-group">
              <label for="image">Bilder</label>
              <input type="file" class="form-control" rows="3" id="image" name="image" required>
          </div>

          <button class="btn btn-outline-success" name="create" type="submit">Spara</button>
          <a href="index.php" class="btn btn-primary" name="cancel" type="button">Avbryt</a> 
      </form> 
   
    </div>
<br>  

</body>

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
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>








