<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinkyGames</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/st.css">

    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
</head>
                <div class="container mt-2">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <h2> <b>Pembayaran</b> </h2>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Nama Game</b>
                        </label>
                        <input type="text" class="form-control" placeholder="Valorant" name="nama_game" id="nama_game">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Pilih Kategori</b>
                        </label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="kategori" id="kategori" >
                            <option selected>Top Up</option>
                            <option value="Membership">Membership</option> 
                            <option value="Starlight">Starlight</option> 
                            <option value="Bundle pass">Bundle pass</option>
                            <option value="Akun">Akun</option>
                        </select>
                    </div>

                    <div class="mb-3"> 
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Item</b>
                        </label>
                        <input type="text" class="form-control" placeholder="Masukan jumlah yang diinginkan (5-..)" name="item" id="item">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Deskripsi</b>
                        </label>
                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi">
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto_bukti" class="Form-label">
                            <b>Foto Bukti Pembayaran</b>
                        </label>
                        <input type="file" class="form-control" name="foto_bukti" id="foto_bukti">
                    </div>
                    
                    <b>Pembayaran </b> 
                    <br>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="pembayaran" id="qris" value="qris">
                    <label class="form-check-label" for="qris">
                        Qris
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="pembayaran" id="gopay" value="gopay">
                    <label class="form-check-label" for="gopay">
                        Go-pay
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="pembayaran" id="ovo" value="ovo">
                    <label class="form-check-label" for="ovo">
                        Ovo
                    </label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="pembayaran" id="dana" value="dana" checked>
                    <label class="form-check-label" for="dana">
                        Dana
                    </label>
                    </div>

                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" value="Selesai">
                </form>
            </div>
</body>
</html>