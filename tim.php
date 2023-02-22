<?
include 'partindex/script.php'
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT CTM</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <body>
    <style>
  section{
    background-color: #800000;
    font-family:Arial;
  }

  .move_date{
    background-color: chocolate;
    background: linear-gradient(to bottom, #d2691e, #FFFFFF);
  }

  /* .nav-item:hover{
    background-color: red;
  } */

  .nav-item dropdown{
    color: aliceblue;
    font-size: large;
  }
  
  .nav-link{
    color: aliceblue;
    font-size: large;
  }

  .carousel{
    width: 1000px;
  }

  .hero{
    background-color: #800000;
  }

  .hero img{
    opacity: 0.4;
  }
  .navbar .navbar-nav .nav-link:hover {
    border-bottom: 2px solid red;
  }

  @media only screen and (max-width: 576px) {
    .carousel {
      width: 450px;
    }
  }

</style>

</head>
<body>
    <section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="index.php"> <img src="img/logo.png" alt="" style="width:100px; height:100px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> LAYANAN </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="bag_layanan/pel_kesehatan.php">PELAYANAN KESEHATAN</a></li>
                  <li><a class="dropdown-item" href="bag_layanan/ambulance.php">AMBULANCE SERVICE</a></li>
                  <li><a class="dropdown-item" href="bag_layanan/med_equipment.php">MEDICAL EQUIPMENT SUPPLIES</a></li>
                  <li><a class="dropdown-item" href="bag_layanan/training_centre.php">TRAINING CENTER</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> PT CEPAT TANGGAP MEDIKA </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="bag_cepattanggap/tentang_kami.php">TENTANG KAMI</a></li>
                  <li><a class="dropdown-item" href="bag_cepattanggap/legalitas.php">LEGALITAS PERUSAHAAN</a></li>
                  <li><a class="dropdown-item" href="bag_cepattanggap/visi_misi.php">VISI & MISI</a></li>
                  <li><a class="dropdown-item" href="bag_cepattanggap/profil&komitmen.php">PROFIL & KOMITMEN</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="kontak.php">KONTAK</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tim.php">TIM KAMI</a>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </nav>
    </section>


    <div class="move_date" style=" font-size: x-large; font-family: arial;">
      <p class="inside_date">
        <marquee scrolldelay='250' direction="right">
          <?php echo "Tanggal Hari Ini: " . date("d F Y");?>
        </marquee>
      </p>
    </div>

<br>
    <center>
      <h1 style="font-size: xx-large; font-family:Arial; color:#800000;"><b>TIM KAMI</b></h1>
    <center>
</body>
<br><br>
<style>
  .row{
    font-family: arial;
  }

  .card-body{
    background-color: #800000;
    color: aliceblue;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 4);
    transition: 0,7s;
    cursor: pointer;
  }

  .card:hover{
    box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 8);
  }

  body{
    overflow-x:hidden;
  }
</style>
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card" style="width: 18rem;">
        <img src="img/Sri_Rohayati.jpg" class="card-img-top" alt="Sri Rohayati">
      <div class="card-body">
        <h1 class="card-text">CEO</h1>
          <hr>
        <p>Sri Rohayati</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="img/Tri_Handayani.jpg" class="card-img-top" alt="Tri Handayani">
      <div class="card-body">
        <h1 class="card-text">COO</h1>
          <hr>
        <p>Tri Handayani</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="width: 18rem;">
      <img src="img/Bambang_Nugroho.jpg" class="card-img-top" alt="Bambang Nugroho">
      <div class="card-body">
        <h1 class="card-text">CCO</h1>
        <hr>
        <p class=''>Bambang Nugroho</p>
      </div>
    </div>
  </div>
</div>
<br><br><br>

<style>
    footer{
        background-color: #800000;
        color: aliceblue;
        font-family: arial;
    }
</style>
<footer class="footer_end p-4">
<div class="row">
  <div class="col-sm-4 mb-5 mb-sm-0 mt-4">
    <img src="img/logo.png" alt="PT CTM">
  </div>
  <div class="col-sm-4">
    <h3>PT CEPAT TANGGAP MEDIKA</h3>
        <p class="mt-4">Lembah Griya Indah Citayam 
            JL.Garuda Raya  Blok AA1 No 11 
            RT 01 RW 013 Ragajaya 
            Bojonggede Bogor 16920
        </p>
  </div>
  <br>
  <div class="col-sm-4 mt-4">
    <h5>E-MAIL</h5>
        <p>cepattanggapmedika1320@gmail.com</p>
            <br>
    <h5 class="mt-4">CUSTOMER SUPPORT</h5>
        <p>+62 819-1674-9393</p>
  </div>
</div>
</footer>

</html>