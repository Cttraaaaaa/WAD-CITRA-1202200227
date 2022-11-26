<?php

    //koneksi kepada database
    $conn = mysqli_connect("localhost","root", "", "modul3");
    if (mysqli_connect_error()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>

