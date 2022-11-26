<?php
    include('connector.php');

$id = $_GET ['id'];
$hapus = "DELETE FROM showroom_nama_table WHERE id_mobil = '$id'";
$delete = mysqli_query($conn, $hapus);

header('Location: ListCar-Citra.php');
?>