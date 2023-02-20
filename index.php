<?
include '../script/script.php'
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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hepta+Slab&family=Kdam+Thmor+Pro&family=PT+Sans&family=Silkscreen&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

<style>
  section{
    background-color: #800000;
    font-family:Arial;
  }

  .nav-item:hover{
    background-color: red;
  }

  .nav-item dropdown{
    color: aliceblue;
    font-size: large;
  }
  
  .nav-link{
    color: aliceblue;
    font-size: large;
  }
</style>

</head>
<body>
    <section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 fs-3" href="#"> <img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse fs-5 ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> LAYANAN </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="#">PELAYANAN KESEHATAN</a></li>
                  <li><a class="dropdown-item" href="#">AMBULANCE SERVICE</a></li>
                  <li><a class="dropdown-item" href="#">MEDICAL EQUIPMENT SUPPLIES</a></li>
                  <li><a class="dropdown-item" href="#">TRAINING CENTER</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> PT CEPAT TANGGAP MEDIKA </a>
                <ul class="dropdown-menu" style="background-color: white">
                  <li><a class="dropdown-item" href="#">TENTANG KAMI</a></li>
                  <li><a class="dropdown-item" href="#">LEGALITAS PERUSAHAAN</a></li>
                  <li><a class="dropdown-item" href="#">VISI & MISI</a></li>
                  <li><a class="dropdown-item" href="#">PROFIL & KOMITMEN</a></li>
                </ul>
              </li>


              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">KONTAK</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">TIM KAMI</a>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </nav>
    </section>
    <div class="date" style="margin-right: 22px; font-size: x-large; font-family: arial;">
      <p class="inside_date">
        <?php
          echo date("d F Y");
        ?>
      </p>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>