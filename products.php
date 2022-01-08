<?php
  require_once 'backend/config/db.php';
  require_once 'backend/functions/select.php';
?>

<!DOCTYPE html>
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
                        <a class="nav-link" href="product-detail.php">VÅRA TJÄNSTER</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">MÖBELTAPETSERARE</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>	

<!-- NAV börjar (Behover struktureras) -->
    <nav class="navbar d-flex pt-2" style="background-color: black">
    <div class="container fluid"> 
        <div class="d-flex flex-row bd-highlight"   <a class="text-start" <ol class="breadcrumb"> <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Hem</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produkter</li> </ol></a> </div>
                <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight text-light "> <a href="admin.php" class="text-decoration-none"> Admin <i class="fas fa-user-lock"></i></a></div>
          <div class="p-2 bd-highlight text-light"><a href="products.php" class="text-decoration-none"> Shop <i class="fas fa-shopping-bag"></i></a></div>
        </div>
        </div>
    </nav>
<!-- NAV slutar -->

<!-- Container för Huvudrubrik och Filtrering --> 
            <div class="container fluid px-4 my-5 text-left">
                <div class="row">
                <h1 class="display-4 fw-bold">Begagnade möbler</h1>

                <!-- ej responsiv placering -->
                <div class="col d-flex justify-content-end pt-2 pb-3">
                 <a href="add.php" class="btn btn-outline-secondary btn-lg">Ladda upp annons</a>
                </div>
                <!-- ej responsiv placering -->
                 <p class="lead mb-2">Reduce your environmental footprint by reusing pre-loved design furniture.</p>
                 </div>
                </div>
        
<!-- Huvudrubrik slut och dess container --> 

<!-- Filtreringcontainer börjar  --> 
<div class="container fluid px-4 my-5 text-left sticky-top"> 
    <div class="d-grid gap-2 d-md-block">
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio1">Show all</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio2">Fåtöljer</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio3">Soffor</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio4">Bord</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio5">Annat</label>
    </div>
 </div>
    <!-- Filtreringscontainer slutar -->

<!-- Start för Container till korten -->
<div class="container fluid">
    <div class="container">
        <div class="row row-cols-1 mt-4 row-cols-md-2 g-4">

          <?php
          if ($stmt_upcoming->rowCount() > 0) 
          {
            while ($row = $stmt_upcoming->fetch()) {
              echo "<div class='card card-event' data-id='".$row['id']."' style='min-width: 18rem ;width: 18rem; height: 18rem;'>";
              echo "<img src='".$row['image']."'class='card-img-top' alt='green'>";
              echo "<a href='edit.php?id=".$row['id']."' class='update btn btn-sm btn-primary'>Update</a>";
              echo "<a href='remove.php?id=".$row['id']."' class='delete btn btn-sm btn-danger'>Delete</a>";
              echo "<div class='card-body'>";
              echo "<p class='card-text'>".strtoupper($row['title'])."</p>";
              echo "<p class='card-under'>Starts on ".date_format(date_create($row['date']),"Y/m/d")."</p>";
              echo "</div>";
              echo "</div>";
            }
          } 
          else {
              echo "<div class='card card-event' style='width: 18rem;'>";
              echo "<img src='assets/images/bummer.png'class='card-img-top' alt='green'>";
              echo "<a href='add.php?id=' type='submit' class='btn btn-primary btn-sm mr-3;> <i class='fa fa-plus mr-1'></i>CREATE </a>";
              echo "<div class='card-body'>";
              echo "</div>";
              echo "</div>";
          }
        ?>





        </div>
    </div>
</div>

<!--Container för korten slutar ALLA DIVAR MÅSTE VARA STÄNGDA -->

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
          <i class="fab fa-twitter fa-2x"></i>
          <i class="fab fa-instagram fa-2x"></i>
          <i class="fab fa-facebook fa-2x"></i>
        
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