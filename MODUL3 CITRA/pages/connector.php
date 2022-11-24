<?php

    //koneksi kepada database
    $connect = mysqli_connect("localhost:8080","root", "", "modul3");
    if (mysqli_connect_error()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>

