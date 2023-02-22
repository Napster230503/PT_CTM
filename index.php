<?
include 'partindex/script.php'
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT CTM</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/index.css" />
    <link rel="shortcut icon" href="../img/logo.png">
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
    color:white;
  }

  body{
    overflow-x:hidden;
  }

  .penampung a:hover{
    color: #800000;
  }

  .penampung a{
    color:grey;
  }

  .penampung h3{
    color:#800000;
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

          <div class="collapse navbar-collapse fs-5 ms-5 me-5" id="navbarSupportedContent">
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
          <?php echo "Tanggal Hari Ini: " . date("l, d F Y");?>
        </marquee>
      </p>
    </div>
    <!-- hero -->
    <div class="hero text-center" style="margin-top:-20px; padding:50px; color:white; font-family:arial;">
      <img src="img/logo.png" alt="logo">
      <h2 class="mt-4">Cepat Tanggap Medika</h2>
      <h6>Karena anda kami peduli</h6>
      <h6 class="mt-4">Bergerak dalam bidang pelayanan kesehatan yang meliputi perdagangan alat kesehatan, training, & jasa service management</h6>
    </div>
    <!-- akhir hero -->
  <!-- carousel -->
     <div class="galery mt-5">
      <center>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/logo.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/logo.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/logo.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
      </center>
     </div>
  <!-- akhir carousel -->
  <!-- awal konten -->
  <div class="penampung mt-5">
    <h3 class="text-center">Kabar Terbaru</h3>
    <div class="row mt-5">
      <div class="col-md-4 mt-4">
        <div class="card ms-5" >
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <a href="#" class="card-title fs-3" style="text-decoration:none; cursor:pointer; ">Bisakah influencer media sosial memengaruhi kehamilan dan pengasuhan anak?</a>
            <p class="card-text mt-3">Tinjauan sistematis yang diterbitkan dalam jurnal Kebidanan menjelaskan bahwa influencer dan blogger media sosial dapat memengaruhi ibu hamil dan orang tua baru secara negatif dan positif...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card">
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <a href="#" class="card-title fs-3" style="text-decoration:none; cursor:pointer; ">Fungsi & Tujuan Medical Center</a>
            <p class="card-text mt-3">Fungsi medical center: Memberikan pelayanan kesehatan baik umum maupun khusus, Memberikan konsultasi kesehatan secara umum, Memberikan pengobat...</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-4">
        <div class="card me-5" >
          <!-- <img src="..." class="card-img-top" alt="..."> -->
          <div class="card-body">
            <a href="#" class="card-title fs-3" style="text-decoration:none; cursor:pointer; ">Kegiatan yang dilakukan</a>
            <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A magni corrupti maiores quia voluptate ipsa sequi, dolores nulla. Inventore temporibus nesciunt assumenda quia voluptate aperi...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir konten -->
<br><br>
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
  <div class="col-sm-4 mb-sm-0 mt-4">
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
</body>

</html>