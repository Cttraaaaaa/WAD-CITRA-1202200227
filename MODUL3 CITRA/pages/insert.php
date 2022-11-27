<?php 
    include('connector.php') ;

    if (isset($_POST['submit'])){
        $nama_mobil = $_POST['nama_mobil'];
        $pemilik_mobil = $_POST['pemilik_mobil'];
        $merk_mobil = $_POST['merk_mobil'];
        $tanggal_beli = $_POST['tanggal_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $foto = $_FILES['foto_mobil']['name'];
        $tmp = $_FILES['foto_mobil']['tmp_name'];
        $tujuan = "img/". $foto;
        move_uploaded_file($tmp, $tujuan);

        if (move_uploaded_file($_FILES['foto_mobil']['tmp_name'], $tujuan . $foto)) {
            $sql = "INSERT INTO showroom_nama_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil','$merk_mobil', '$tanggal_beli', '$deskripsi','$foto' ,'$status_pembayaran')";
            if (mysqli_query($conn,$sql)) {
                header("location: ../ListCar-Citra.php?message=success");
            } else {
                echo "Failed***";
            }
            } else {
            echo "***Failed";
        }

        $query = "INSERT INTO showroom_nama_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil','$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto' , '$status_pembayaran')";
        $insert = mysqli_query($conn, $query);

        
    
        header('Location: ListCar-Citra.php');
    }
?>