<?php 
    include('connector.php') ;

    if (isset($_POST['submit'])){
        $nama_game = $_POST['nama_game'];
        $kategori = $_POST['kategori'];
        $item = $_POST['item'];
        $deskripsi = $_POST['deskripsi'];
        $pembayaran = $_POST['pembayaran'];
        $foto_bukti = $_FILES['foto_bukti']['name'];
        $tmp = $_FILES['foto_bukti']['tmp_name'];
        $tujuan = "images/". $foto;
        move_uploaded_file($tmp, $tujuan);

        if (move_uploaded_file($_FILES['foto_bukti']['tmp_name'], $tujuan . $foto_bukti)) {
            $sql = "INSERT INTO tabel_pembayaran (nama_game,kategori,item,deskripsi,foto_bukti,pembayaran) VALUES ('$nama_game', '$kategori','$item','$deskripsi','$foto_bukti' ,'$pembayaran')";
            if (mysqli_query($conn,$sql)) {
                header("location: ../List-Citra.php?message=success");
            } else {
                echo "Failed***";
            }
            } else {
            echo "***Failed";
        }

        
        $query = "INSERT INTO tabel_pembayaran (nama_game, kategori, item, deskripsi, foto_bukti, pembayaran) VALUES ('$nama_game', '$kategori','$item','$deskripsi','$foto_bukti' ,'$pembayaran')";
        $insert = mysqli_query($conn, $query);

        
    
        header('Location: List-Citra.php');
    }
?>