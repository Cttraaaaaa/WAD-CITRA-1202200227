<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WAD CITRA 1202200227</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
</head>
  
  <body>
       <!-- navigasi -->
       <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="collapse navbar-collapse d-flex justify-content-center">
        <button
          class="navbar-toggler"
          action="citra_home.php"
          method="GET"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        </button>
            <div class="collapse navbar-collapse text" id="navbarText">
                <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="citra_home.php">Home</a>
                    </li>                      
                    <a class="nav-link" href="citra_booking.php">Booking</a>
                    </li>
        
    </nav>

    <!-- Pendaftaran Mobil -->
    <h2 class="display-3"></h2>
    <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
    <form action="citra_mybook" method="GET">
    <h1 class="text-center">Rent Your Car Now!</h1>
      <form action="getInput.php" method="GET">

        <div class="mb-3">
            <label for="Nama" class="form-label">Name</label>
            <input type="text" class="form-control" id="Nama" name="name" placeholder= " Masukan Nama Lengkapmu">
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">Book Date</label>
            <input type="date" class="form-control" id="bookdate" name="bookdate">
        </div>

        <div class="mb-3">
            <label for="Alamat" class="form-label">Start Time</label>
            <input type="text" class="form-control" id="time" name="time">
        </div>        

        <div class="mb-3">
            <label for="Alamat" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="Phone" name="Phone">
        </div>        

        <p>Car Type</p>
        <select class="form-select" aria-label="Default select example">
            <option selected>Honda HRV</option>
            <option value="1">Toyota Raize</option>
            <option value="2">Mitsubishi Pajero</option>
        </select>

          <br>

          <p>Add Service(s)</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Health protocol / Rp 25.000
          </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
            Driver / Rp.100.000
          </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
            Fuel filled / Rp.250.000
            </label>
        </div>

          <br>

        <div class="mb-3">
            <div class="d-flex justify-content-center">
            <form action="citra_mybook.php" method="GET">
                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="book" name="mybook">Book Now</button>
            </form>
        </div>
        </form>
    <body>
</html>