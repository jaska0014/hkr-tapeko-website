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

            <!-- Ladda upp och ta dig till add php typ ej klar--> 
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="add.php" class="btn btn-outline-secondary btn-lg px-4">Ladda upp annons</a>
                </div>
                <!-- Ladda upp slut typ ej klar --> 

        <h1 class="display-4 fw-bold">Begagnade möbler</h1> 
        <p class="lead mb-4">Reduce your environmental footprint by reusing pre-loved design furniture.</p>
<!-- Huvudrubrik slut --> 

<!-- Filtrering börjar --> 
<div class="sticky-top"> 
    <div class="d-grid gap-2 d-md-block">
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio1">Show all</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio2">Fåtöljer</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio3">Soffor</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio4">Bord</label>
        <label class="btn btn-light btn-outline-secondary btn-sm" for="btnradio5">Annat</label>
    </div>
    <!-- Filtrering slutar -->
</div>
<!-- Container för Huvudrubrik och Filtrering slutar --> 

<!-- Start för Container till korten --> 
<div class="container fluid">
<div class="container">
<div class="row row-cols-1 mt-4 row-cols-md-2 g-4">

<!-- Card 1 start --> 
  <div class="col mb-4">
    <div class="card">
      <img src="assets/images/cover2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Z</h5>

<div class="d-flex mb-3">
    <div class="p-2 flex-fill">
        <p class="card-text">Nyrenoverad snurrfåtölj med ny bärande väv och ny DUX original kuddsats i tobaksbrunt skinn Elmotiqie.</p>
    </div>
        <div class="p-2 flex-fill">
            <p class="card-text">Designer: DUX</p>
            <p class="card-text">Årsmodell: 1969</p>
            <p class="card-text">Skick: NYRENOVERAD</p>
            <p class="card-text">Upholsterer: PTV, Göteborg</p>
        </div>
</div>
            <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
    </div>
    </div>
  </div>
<!-- Card 1 slut -->
<!-- Card 2 start Linnea har ändrat i just detta kort med förslag i koden-->
  <div class="col mb-4">
    <div class="card border-0">
      <img src="assets/images/cover.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">PERNILLA MED FOTPALL</h5>
            <div class="d-flex mb-3">
                <div class="p-2 flex-fill">
                    <p class="card-text">Ett renoveringsobjekt som fortfarande går att använda som den är. Kostnad för helrenovering ca. 18.000 ink. moms.</p>
                    <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                </div>
                <div class="p-2 flex-fill">
                    <p class="card-text">Designer: BRUNO MATHSSON</p>
                    <p class="card-text">Årsmodell: 1960</p>
                    <p class="card-text">Pris: 18.000 KR</p>
                    <p class="card-text">Upholsterer: Göteborg</p>
                </div>
            </div>
      </div>
    </div>
  </div>
  <!-- Card 2 slut -->
  <!-- Card 3 start -->
  <div class="col mb-4">
    <div class="card">
      <img src="assets/images/cover.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LIGGFÅTÖLJ PERNILLA</h5>
            <div class="d-flex mb-3">
                <div class="p-2 flex-fill">
                    <p class="card-text">With DUX´s double-spring system, with thousands of dynamically interlinked springs.</p>
                    <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                </div>
                <div class="p-2 flex-fill">
                    <p class="card-text">Designer: BRUNO MATHSSON</p>
                    <p class="card-text">Årsmodell: 1969</p>
                    <p class="card-text">Skick: BRA</p>
                    <p class="card-text">Upholsterer: PTV, Göteborg</p>
                </div>
            </div>         
      </div>
    </div>
  </div>
  <!-- Card 3 slut -->
  <!-- Card 4 start -->
  <div class="col mb-4">
    <div class="card">
      <img src="assets/images/cover2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">RITZY SOFA</h5>
            <div class="d-flex mb-3">
                <div class="p-2 flex-fill">
                    <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                </div>
                <div class="p-2 flex-fill">
                    <p class="card-text">Designer: BRUNO MATHSSON</p>
                    <p class="card-text">Årsmodell: 1970</p>
                    <p class="card-text">Skick: RENOVERAD</p>
                    <p class="card-text">Upholsterer: PTV, Göteborg</p>
                </div>
            </div>  
      </div>
    </div>
  </div>
</div>
<!-- Card 4 och övre container slut -->

<!-- 4 understa Cards börjar -->
<div class="container fluid"> 
<div class="row row-cols-1 mt-4 row-cols-md-2 g-4">

<!-- Card 5 start -->
<div class="col mb-4">
    <div class="card">
    <img src="assets/images/cover2.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">FÅTÖLJER, 2 ST</h5>
                <div class="d-flex mb-3">
                    <div class="p-2 flex-fill">
                        <p class="card-text">With DUX´s double-spring system, with thousands of dynamically interlinked springs.</p>
                        <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <p class="card-text">Designer: BRUNO MATHSSON</p>
                        <p class="card-text">Årsmodell: 1969</p>
                        <p class="card-text">Skick: BRA</p>
                        <p class="card-text">Upholsterer: PTV, Göteborg</p>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- Card 5 slut -->
<!-- Card 6 start -->
<div class="col mb-4">
    <div class="card">
    <img src="assets/images/cover.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RITZY SOFA</h5>
                <div class="d-flex mb-3">
                    <div class="p-2 flex-fill">
                        <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris. Et harum quidem rerum facilis.</p>
                        <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <p class="card-text">Designer: BRUNO MATHSSON</p>
                        <p class="card-text">Årsmodell: 1970</p>
                        <p class="card-text">Skick: RENOVERAD</p>
                        <p class="card-text">Upholsterer: PTV, Göteborg</p>
                    </div>
                </div>
        </div>
    </div>
</div>
  <!-- Card 6 slut -->
  <!-- Card 7 start -->
  <div class="col mb-4">
    <div class="card">
      <img src="assets/images/cover.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">X</h5>
            <div class="d-flex mb-3">
                <div class="p-2 flex-fill">
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                </div>
                <div class="p-2 flex-fill">
                    <p class="card-text">Designer: DUX</p>
                    <p class="card-text">Årsmodell: 1982</p>
                    <p class="card-text">Skick: BRA</p>
                    <p class="card-text">Upholsterer: PTV, Göteborg</p>
                </div>
            </div>
      </div>
    </div>
  </div>
  <!-- Card 7 slut -->
  <!-- Card 8 start -->
  <div class="col mb-4">
    <div class="card">
      <img src="assets/images/cover2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Y</h5>
            <div class="d-flex mb-3">
                    <div class="p-2 flex-fill">
                        <p class="card-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris. Et harum quidem rerum facilis.</p>
                        <a href="product-detail.php" class="btn btn-outline-secondary">Read more</a>
                    </div>
                    <div class="p-2 flex-fill">
                        <p class="card-text">Designer: BRUNO MATHSSON</p>
                        <p class="card-text">Årsmodell: 1978</p>
                        <p class="card-text">Skick: NYRENOVERAD</p>
                        <p class="card-text">Upholsterer: PTV, Göteborg</p>
                    </div>
            </div>
      </div>
    </div>
  </div>
  <!-- Card 8 slut -->
</div>
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