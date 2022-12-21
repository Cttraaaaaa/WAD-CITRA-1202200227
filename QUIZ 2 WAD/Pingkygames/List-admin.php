<?php 
    include('connector.php') ;
    $query = "SELECT * FROM tabel_pembayaran";
    $result = mysqli_query($conn,$query);
    $data = mysqli_num_rows($result);
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
            <a href="Pro_admin.php" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->
    <br><br><br><br><br><br><br><br>
    <div class="text-center">
                </div>
                <div class="d-flex gap-5" style="padding-left: 100px ;">
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='card card-content' style='width: 18rem;'>
                            <img src=' images/" . $row["foto_bukti"] . "' class='card-img' alt='foto_bukti' style='padding: 16px;'>
                            <div class='card-body'>
                            <h3 class='card-title'>" . $row["nama_game"] . "</h3>
                            <p class='card-text'>" . substr($row["deskripsi"], 0, 50) . '...' . "</p>
                            <span class='d-flex'>
                            <br><br><br>
                            <a href='Detail.php?id=" . $row["id"] . "'class='btn btn-primary' style='font-family: Poppins; border-radius: 80px; width: 100px;px; height: 36px;'>Detail</a>
                            <a href='delete.php?id=" . $row["id"] . "' class='btn btn-primary' style='font-family: Poppins; border-radius: 80px; width:100px; height: 36px; margin-left:20px;'>Selesai</a>                            
                            </span>
                            </div>
                            </div>";
                        }
                        } else {
                        echo "Tidak ada transaksi, Transaksi sudah selesai";
                        }
                        ?>
                </div>

</body>
</html>