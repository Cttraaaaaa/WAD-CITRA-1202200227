@extends('app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul </title>
  <link href="/css/app.css" rel="stylesheet">
  <!-- bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap links -->
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
        </button>
          <div class="navbar-nav w-100 d-flex justify-content-between">
                <a class="nav-link active" aria-current="page" href="{{ 'home' }}" style="color: black;">Home</a>
                <a class="nav-link" href="{{ 'login' }}" style="color: black;">Login</a>
          </div>
          </div>
          
    </nav>
                <!-- navbar -->
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="container mt-5" style="width:50%">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <h2> <b>Tambah Mobil</b> </h2>
                    <a> Tambah baru mobil anda sekarang ! </a>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Nama Mobil</b>
                        </label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_mobil" id="nama_mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Nama Pemilik</b>
                        </label>
                        <input type="text" class="form-control" placeholder="Nama-nim" name="pemilik_mobil" id="pemilik_mobil">
                    </div>
                    <div class="mb-3"> 
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Merk</b>
                        </label>
                        <input type="text" class="form-control" placeholder="BMW" name="merk_mobil" id="merk_mobil">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>tanggal Beli</b>
                        </label>
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tanggal_beli" id="tanggal_beli">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            <b>Deskripsi</b>
                        </label>
                        <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="foto_mobil" class="Form-label">
                            <b>Foto</b>
                        </label>
                        <input type="file" class="form-control" name="foto_mobil" id="foto_mobil">
                    </div>
                    
                    <b> Status Pembayaran </b> 
                    <br>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="lunas" value="lunas">
                    <label class="form-check-label" for="lunas">
                        Lunas
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_pembayaran" id="belum" value="belum" checked>
                    <label class="form-check-label" for="belum">
                        Belum lunas
                    </label>
                    </div>
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" value="Selesai">
                </form>
            </div>
            @endsection
</body>
</html>