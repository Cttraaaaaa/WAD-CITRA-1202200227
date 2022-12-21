<?php

include('connector.php');
$id = $_GET['id'];
$query = "SELECT * FROM tabel_pembayaran WHERE id = '$id'";
$result = mysqli_query($conn, $query);


if (isset($_POST['submit'])) {
  $nama_game = $_POST['nama_game'];
  $kategori = $_POST['kategori'];
  $item = $_POST['item'];
  $deskripsi = $_POST['deskripsi'];
  $pembayaran = $_POST['pembayaran'];

  $edit = "UPDATE qtabel_pembayaran SET nama_game='$nama_game', kategori='$kategori' , item='$item' , deskripsi='$deskripsi', pembayaran='$pembayaran' where id = '$id' ";
  $update = mysqli_query($conn, $edit);

  header('Location: List-admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinkygames</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Pinky<span>Games</span></a>

    <nav class="navbar">
        <a href="admin_page.php">home</a>
        <a href="admin_page.php">about</a>
        <a href="admin_page.php">products</a>
        <a href="admin_page.php">services</a>
        <a href="admin_page.php">location</a>
        <a href="admin_page.php">contact</a>
    </nav>

    <div class="icons">
        <a href="Pro_user.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!--- Detail !--->
  <br><br>
  <div class="container mt-5 mb-5 p-5">
    <div class="card shadow-lg p-3 rounded border-0">
      <div class="row p-5">
        <?php
        $data = mysqli_fetch_array($result);
        ?>

      <h5><b>Detail Transaksi</b></h5>
      <br><br>

        <p class="card-text"><b>Nama game</b></p>
        <p class="card-text"><?= $data['nama_game']; ?></p>

        <p class="card-text"><b>Kategori</b></p>
        <p class="card-text"><?= $data['kategori']; ?></p>

        <p class="card-text"><b>Item yang dibeli</b></p>
        <p class="card-text"><?= $data['item']; ?></p>

        <p class="card-text"><b>Deskripsi</b></p>
        <p class="card-text"><?= $data['deskripsi']; ?></p>

        <p class="card-text"><b>Metode Pembayaran</b></p>
        <p class="card-text"><?= $data['pembayaran']; ?></p>

        <br><br>

        <div class='text-center'>
          <a href="delete.php?id=<?= $data["id"]; ?>" class="btn btn-danger" style="width:20%;">Selesai</a>
          <br>
          <br>
          <a href="admin_page.php" class="btn btn-primary" style="width:15%;">Back</a>
        </div>

      </div>
    </div>
  </div>