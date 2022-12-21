@extends('app')
@section('content')

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
  <!-- home -->
      <br>
      <br>
    <main class="content">
        <div class="row">
            <div class="col-8 py-5 ">
              <h1>SELAMAT DATANG DI SHOWROOM CITRA </h1>
              <p>Silahkan melihat mobil yang diinginkan <img src="{{ asset('img/HRV.png') }}" alt="" style="width: 500px;margin-left: 750px; border-radius: 10px;"></p>
            <div class="gap-2 col-6 mx-auto">
              <a class="btn btn-primary">MyCar</a>
            </div>
          </div>      
        </div>

    </main>        
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- home -->
@endsection