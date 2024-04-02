<?php
ob_start();

session_start();
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <title> Kecskemét T-Korpusz Innova Kft.| Élzárás| Lapszabászat| Bútor</title>
    <meta name="description" content="Cégünk 2021. -ben alakult. Célunk, hogy fiatal vállalkozásként a modernitást, lendületet képviseljük. Fő profilunk a lapszabászat, élzárás és az egyedi bútorgyártás.">
    <meta name="keywords" content="kecskemét, élzárás , lapszabászat , bútor, tkorpusz">

    <title>T-Korpusz Innova Kft.</title>
    <link rel="icon" type="image" href="assets/logo.png"/>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="hatterkep">
    <!-- Navbár-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <link href="lightbox/src/css/lightbox.css" rel="stylesheet"/>
    <script src="lightbox/src/js/lightbox.js"></script>
    <script src="js/getData.js"></script>
    <script src="js/inlineEdit_elzaras.js"></script>
    <script src="js/inlineEdit_szabas.js"></script>
    <script src="js/inlineEdit_egyeb.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <header class="sticky-top" id="fejlec">
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark mb-4 border-bottom" id="navbar1">
        <div class="container-fluid">
            <img src="assets/logo2.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-center mx-2 img-fluid">
          <a class="navbar-brand pc-text" href="index.php" id="logoszoveg"><b>T-K</b>orpusz Innova Kft.</a>
          <a class="navbar-brand mobile-text" href="index.php" id="logoszoveg"><b>T-K</b>orpusz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">

              <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" id="fooldalgomb" type="button" data-bs-toggle="dropdown" aria-expanded="false">Főoldal</a>
                    <ul class="dropdown-menu dropdown-menu-dark text-center">
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=fooldal.php#rolunk">Mivel foglalkozunk?</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=fooldal.php#tudnivalok">Tudnivalók</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=fooldal.php#anyagrendeles">Anyagrendelés</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item mx-3">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" id="arakgomb" type="button" data-bs-toggle="dropdown" aria-expanded="false">Árak</a>
                    <ul class="dropdown-menu dropdown-menu-dark text-center">
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=elzarasdijak.php">Élzárás</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=szabasdijak.php">Szabás díj</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=egyebdijak.php">Egyéb</a></li>
                    </ul>
                </div>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?prog=referenciak.php">Referenciák</a>
              </li>
              <?php
              if(isset($_SESSION['felhasznalonev'])){
      
                  echo "
                  <li class='nav-item mx-3'>
                    <a class='nav-link' href='index.php?prog=elzaras_adminpanel.php'>Adminpanel</a>
                  </li>
                  <li class='nav-item mx-3'>
                    <a class='nav-link' href='index.php?prog=logout.php'>Kilépés</a>
                  </li>
                  
                  ";
              }
              ?>

              <li class="nav-item mx-3 pr-5">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" id="kontaktgomb" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kontakt</a>
                    <ul class="dropdown-menu dropdown-menu-dark text-center dropdown-menu-start">
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=kontakt.php#telephely">Telephely</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=kontakt.php#nyitvatartas">Nyitvatartás</a></li>
                        <li><a class="dropdown-item dropdown-gombok" href="index.php?prog=kontakt.php#emailkuldo">Kapcsolat</a></li>
                    </ul>
                </div>
              </li>
              <li class="mx-3">
                <a class="" href=""></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <div id="tartalom" class="container" data-bs-spy="scroll" data-bs-target="#navbar1" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
    <?php
    extract($_GET);
    if(isset($_GET['prog']))
        include $prog;
    else
        include 'fooldal.php';

    ?>
  </div>
    <!--Footer-->
    <footer class="py-5 bg-dark my-10">
        <div class="px-4 px-lg-5 text-center">
          <p class="text-white text-center"><img src="assets/logo2.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center mx-2">Copyright &copy;T-Korpusz Innova Kft. | <a href="index.php?prog=jogiinformaciok.php">Minden jog fenntartva</a></p>
          <p class="text-white text-center py-2"><a href="tel:+36-30-5121311">+36305121311</a>  tkorpuszinnovakftweb@gmail.com</p>
          <p class="text-white text-center py-2">Adószám: 27525922-2-03</p>

          <button class="text-white btn bi bi-instagram ikon" href="#videok" id="gombalso1"></button>
          <button class="text-white btn bi bi-facebook ikon" href="#videok" id="gombalso2"></button>
          <button class="text-white btn bi bi-twitter ikon" href="#videok" id="gombalso3"></button>
        </div>
        <div class="d-flex flex-row-reverse">        
        <a href="index.php?prog=login.php" target="_blank" rel="noopener noreferrer">Login</a>
        </div>
    </footer>
  </body>
</html>
