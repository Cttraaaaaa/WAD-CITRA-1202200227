<?php

include('connector.php');
$id = $_GET['id'];
$query = "SELECT * FROM showroom_nama_table WHERE id_mobil = '$id'";
$result = mysqli_query($conn, $query);


if (isset($_POST['submit'])) {
  $nama_mobil = $_POST['nama_mobil'];
  $pemilik_mobil = $_POST['pemilik_mobil'];
  $merk_mobil = $_POST['merk_mobil'];
  $tanggal_beli = $_POST['tanggal_beli'];
  $deskripsi = $_POST['deskripsi'];
  $status_pembayaran = $_POST['stat'];

  $edit = "UPDATE showroom_nama_table SET nama_mobil='$nama_mobil', pemilik_mobil='$pemilik_mobil' , merk_mobil='$merk_mobil' , tanggal_beli='$tanggal_beli' , deskripsi='$deskripsi', status_pembayaran='$status_pembayaran' where id_mobil = '$id' ";
  $update = mysqli_query($conn, $edit);

  header('Location: ListCar-Citra.php');
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
  <!--- Detail !--->
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container mt-5 mb-5 p-5">
    <div class="card shadow-lg p-3 rounded border-0">
      <div class="row p-5">
        <?php
        $data = mysqli_fetch_array($result);
        ?>

      <h5><b>Detail Mobil</b></h5>
      <br><br>
        <div class="col text-center">
          
          <img class="card card-img-left" src="<?php echo $data['foto_mobil'] ?>" alt="<?php echo $data['foto_mobil'] ?>">
          <hr style='height: 3px; border-radius: 5px; color: rgb(120, 229, 253);'>
        </div>

        <p class="card-text"><b>Nama Mobil</b></p>
        <p class="card-text"><?= $data['nama_mobil']; ?></p>

        <p class="card-text"><b>Pemilik Mobil</b></p>
        <p class="card-text"><?= $data['pemilik_mobil']; ?></p>

        <p class="card-text"><b>Merk Mobil</b></p>
        <p class="card-text"><?= $data['merk_mobil']; ?></p>

        <p class="card-text"><b>Tanggal Beli</b></p>
        <p class="card-text"><?= $data['tanggal_beli']; ?></p>

        <p class="card-text"><b>Deskripsi</b></p>
        <p class="card-text"><?= $data['deskripsi']; ?></p>

        <p class="card-text"><b>Status Pembayaran</b></p>
        <p class="card-text"><?= $data['status_pembayaran']; ?></p>

        <br><br>

        <div class='text-center'>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:20%">Ubah</button>
          <a href="delete.php?id=<?= $data["id_mobil"]; ?>" class="btn btn-danger" style="width:20%;">Hapus</a>
          <br>
          <br>
          <a href="Home-Citra.php" class="btn btn-primary" style="width:15%;">Back</a>
        </div>
      </div>
    </div>
  </div>
</body>