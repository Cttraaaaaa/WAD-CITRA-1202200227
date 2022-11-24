<?php 
    include('connector.php') ;

    if (isset($_POST['proses'])){
        $nama_mobil = $_POST['nama_mobil'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $merk = $_POST['merk'];
        $tgl_beli = $_POST['tgl_beli'];
        $deskripsi = $_POST['deskripsi'];
        $stat_pembayaran = $_POST['stat'];
        $input_pg = $_FILES['input_pg']['nama'];
        $tujuan = "img/".$input_pg;
        move_uploaded_file($input_pg, $tujuan);

        $query = "INSERT INTO showroom_nama_table VALUES ('', '$nama_mobil', '$pemilik_mobil','$merk_mobil', '$tanggal_mobil', '$deskripsi','$foto_mobil' ,'$status_pembayaran')";
        $insert = mysqli_query($connect, $query);
    
        header('Location: Add-Citra.php');
    }
?>