<?php
    include('connector.php');

$id = $_GET ['id'];
$hapus = "DELETE FROM tabel_pembayaran WHERE id = '$id'";
$delete = mysqli_query($conn, $hapus);

header('Location: List-admin.php');
?>