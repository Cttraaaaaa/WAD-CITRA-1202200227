<?php

    //koneksi kepada database
    $conn = mysqli_connect("localhost","root", "", "modul3");
    if (mysqli_connect_error()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul 4</title>
  <link rel="stylesheet" href="style1.css">
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap links -->
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Home-Citra.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="ListCar-Citra.php">My Car</a>
            </div>
          </div>
          
    </nav>
  <!-- home -->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <section id="home">
        <div class="content">
          <h3>SELAMAT DATANG DI SHOWROOM CITRA </h3>
          <br>                  
          <a>Silahkan melihat mobil yang diinginkan </a>
          <br>
        </div>
        <div class="img">
          <img src="HRV.png" alt="">
        </div>      
      </section>
      <div class="gap-2 col-6 mx-auto">
        <a class="btn btn-secondary mx-auto" href="Add-Citra.php">MyCar</a>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- home -->
</body>
</html>