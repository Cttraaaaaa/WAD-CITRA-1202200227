<?php 
    include('connector.php') ;
    $query = "SELECT * FROM showroom_nama_table";
    $result = mysqli_query($connect,$query);
    $data = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modul 3</title>
            <link rel="shortcut icon" type="image" href="./image/logo2.png">
            <link rel="stylesheet" href="../style/style1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            <!-- bootstrap links -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- bootstrap links -->
            <!-- fonts links -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
            <!-- fonts links -->
        </head>
        <body>
            <div class="home-section">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg" id="navbar">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home-Citra.php">Home</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="ListCar-Citra.php">My Car</a>
                      </div>
                    </div>
                  </nav>
                <!-- navbar -->
            <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card cardcontent' style='width: 18rem;'>
                <img src='../assets/images/" . $row["foto_mobil"] . "' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                <div class='card-body'>
                <h5 class='card-title'>" . $row["nama_mobil"] . "</h5>
                <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                <span class='d-flex'>
                <a href='Detail-Citra.php?id=" . $row["id_mobil"] . "'class='btn btn-primary' style='font-family: Poppins; border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                <a href='delete.php?id=" . $row["id_mobil"] . "' class='btn btn-primary' style='font-family: Poppins; border-radius: 100px; width:140px; height: 36px; margin-left:20px;'>Delete</a>
                </span>
                </div>
                </div>";
              }
            } else {
              echo "0 results";
            }
            ?>
</body>
</html>

