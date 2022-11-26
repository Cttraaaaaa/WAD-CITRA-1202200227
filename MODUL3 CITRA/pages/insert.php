<?php 
    include('connector.php') ;

    if (isset($_POST['submit'])){
        $nama_mobil = $_POST['nama_mobil'];
        $pemilik_mobil = $_POST['nama_pemilik'];
        $merk_mobil = $_POST['merk'];
        $tanggal_beli = $_POST['tgl_beli'];
        $deskripsi = $_POST['deskripsi'];
        $status_pembayaran = $_POST['stat'];
        $foto_mobil = $_FILES['foto_mobil']['nama_pemilik'];
        $tujuan = "img/".$foto_mobil;
        move_uploaded_file($foto_mobil, $tujuan);

        $query = "INSERT INTO showroom_nama_table VALUES ('$nama_mobil', '$pemilik_mobil','$merk_mobil', '$tanggal_beli', '$deskripsi','$foto_mobil' ,'$status_pembayaran')";
        $insert = mysqli_query($conn, $query);
    
        header('Location: ListCar-Citra.php');
    }
?>