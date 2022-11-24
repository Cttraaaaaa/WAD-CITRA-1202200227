<?php 
    include('connector.php') ;

    if (isset($_POST['proses'])){
        $nama_mobil = $_POST['nama_mobil'];
        $pemilik_mobil = $_POST['nama_pemilik'];
        $merk_mobil = $_POST['merk'];
        $tanggal_beli = $_POST['tgl_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['stat'];
        $foto_mobil = $_FILES['input_pg']['nama'];
        $tujuan = "img/".$input_pg;
        move_uploaded_file($input_pg, $tujuan);

        $query = "INSERT INTO showroom_nama_table VALUES ('', '$nama_mobil', '$pemilik_mobil','$merk_mobil', '$tanggal_mobil', '$deskripsi','$foto_mobil' ,'$status_pembayaran')";
        $insert = mysqli_query($connect, $query);
    
        header('Location: Add-Citra.php');
    }
?>

<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modul 3</title>
            <link rel="stylesheet" href="style1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            <!-- bootstrap links -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- bootstrap links -->
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
                                    <a class="nav-link" aria-current="page" href="Home-Citra.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="ListCar-Citra.php">My Car</a>
                                </div>
                            </div>
                        </nav>
                <!-- navbar -->
                <div class="container mt-5" style="width:50%">
                <form action="create.php" method="post">
                    <h2> Tambah Mobil </h2>
                    <a> Tambah baru mobil anda sekarang ! </a>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Nama Mobil
                        </label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Nama Pemilik
                        </label>
                        <input type="text" class="form-control" placeholder="Nama-nim" name="nama_pemilik">
                    </div>
                    <div class="mb-3"> 
                        <label for="exampleFormControlInput1" class="Form-label">
                            Merk
                        </label>
                        <input type="text" class="form-control" placeholder="BMW" name="merk">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            tanggal Beli
                        </label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_beli">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Deskripsi
                        </label>
                        <textarea class="form-control" rows="3" name="deskripsi">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Foto
                        </label>
                        <input type="file" class="form-control" name="input_pg">
                    </div>
                    
                    <b> Status Pembayaran </b> 
                    <br>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="stat" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Lunas
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="stat" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum lunas
                    </label>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Selesai">
                </form>
            </div>
</body>
</html>