<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/insert.php';
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
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
                        <a class="nav-link" aria-current="page" href="products.php">ANNONSER</a>
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

        <!-- Breadcrumbs -->
        <nav class="navbar d-flex pt-2" style="background-color: black">
        <div class="container fluid"> 
          <div class="d-flex flex-row bd-highlight">   <a class="text-start text-decoration-none" <ol class="breadcrumb"> <li class="breadcrumb-item active" aria-current="page">Hem</li> </ol></a> </div>
          <div class="d-flex flex-row-reverse bd-highlight">
          <div class="p-2 bd-highlight text-light"> <a href="admin.php?user=1" class="text-decoration-none"> Admin <i class="fas fa-user-lock"></i></a></div>
          <div class="p-2 bd-highlight text-light"><a href="products.php" class="text-decoration-none"> Shop <i class="fas fa-shopping-bag"></i></a></div>
        </div>
        </div>
        </nav>
        <!-- Breadcrumbs -->
        
    <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-lg-3 p-3 p-lg-5 pt-lg-3 mx-auto bg-light text-start">
        <h1 class="display-4 fw-bold pt-3 lh-1">REUSE<br> REDUCE<br> TAPEKO</h1>
        <p class="lead">Var en del av förändringen från enormt slöseri, till bättre användning. Vi hjälper dig förminska ditt miljöavtryck genom att återanvända begagnade designmöbler. Vi kallar det Tapeko</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="products.php" class="btn btn-outline-secondary btn-lg px-4">Börja shoppa</a>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 p-0 overflow-hidden">
          <img class="rounded-lg-3" src="assets/images/stol1.jpg" alt="armchair">
      </div>
    </div>
  </div> 

  <div class="px-4 p-5 my-5 text-center">
    <h3>VÅR VISION</h3>
    <div class="col-lg-6 mx-auto">
      <p class="vision mb-4">Ingen designmöbel skall någonsin hamna på soptippen.</p>
    </div>
  </div>

 <!-- Reuse börjar -->
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 offset-lg-1 p-0 overflow-hidden">
          <img class="img-fluid rounded-lg-3" src="assets/images/green.jpg" alt="armchair">
      </div>
    <div class="col-lg-3 p-3 p-lg-5 pt-lg-3 mx-auto text-start">
        <h1 class="display-4 fw-bold lh-1">REUSE</h1>
        <p>PTV är en möbeltapetserare som specialiserar sig på 1900-tals skandinaviska DUX klassiker.</p>
        <p>”Bekväma sittplatser är en konst, men det borde det inte vara. Att göra möbler att sitta på ska tillverkas med sådan konst att sitta i dem inte behöver vara en konst.” <br>- Bruno Mathsson</p>
      </div>
    </div>
  </div>
<!-- Reuse slutar -->  

 <!-- PTV börjar -->
 <div class="container-fluid my-5">
    <div class="row">
    <div class="col-lg-3 p-3 p-lg-5 pt-lg-3 mx-auto text-start">
        <h1 class="display-4 fw-bold lh-1">PTV</h1>
        <p>PTV är en möbeltapetserare som specialiserar sig på 1900-tals skandinaviska DUX klassiker.</p>
        <p>"Oavsett om du köper en vintage fåtölj, eller lämnar in en älskad möbel för renovering, så kan du vara säker på att det är en stor mängd kunskap, kärlek och intresse för design bakom våran disk."</p>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Hitta en möbeltapetserare</button>
      </div>
      <div class="col-lg-6 offset-lg-1 p-0 overflow-hidden">
          <img class="img-fluid rounded-lg-3" src="assets/images/soffbord.jpg" alt="armchair">
      </div>
    </div>
  </div>
<!-- PTV slutar --> 

 <!-- Reduce börjar -->
 <div class="container-fluid my-5">
    <div class="row">
    <div class="col-lg-6 offset-lg-1 p-0 overflow-hidden">
          <img class="img-fluid rounded-lg-3" src="assets/images/brickwall.jpg" alt="armchair">
      </div>
    <div class="col-lg-3 p-3 p-lg-5 pt-lg-3 mx-auto text-start">
        <h1 class="display-4 fw-bold lh-1">REDUCE</h1>
        <p>Hållbarhet är en av våra absolut främsta prioriteringar och vi har fått utmärkelser för att vi har sett till att varje steg av våran arbetsprocess, från att du lämnar av en möbel till att du har fått tillbaka den, har varit gjord på ett miljövänligt sett.</p>
        </div>
    </div>
  </div>
<!-- Reduce slutar -->  

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