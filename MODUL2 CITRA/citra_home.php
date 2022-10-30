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

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="collapse navbar-collapse d-flex justify-content-center">
        <button
          class="navbar-toggler"
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
          </ul>
        </div>
      </div>
    </nav>
        <!-- banner -->
        <h2 class="display-3" id="Home"></h2>
        <br>
        <br>
        <br>     
      <div class="container text-center">
        <h2>WELCOME TO EAD RENT</h2>
        <a> Find your best deal, here!<a>
      </div>
     <!-- Jenis mobil -->
     <div class="container-fluid jenis pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="img/raize.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title"> Toyota Raize </h5>
                <p class="card-text-left">
                  Mulai Dari IDK 900.000/ Hari
                <ol class="list-group">
                  <li class="list-group-item" style="color:blue">4 Kursi</li>
                  <li class="list-group-item" style="color:blue"> 1200 cc</li>
                  <li class="list-group-item" style="color:blue">Matic</li>
                </ol> 
                <br>
                <form action="citra_booking.php" method="GET">
                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="Raize" name="booknow">Book Now</button>
                </form>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="img/pajero.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title"> Mitsubishi Pajero</h5>
                <p class="card-text">
                  Mulai Dari IDK 1000.000/ Hari
                  <ol class="list-group"> 
                    <li class="list-group-item" style="color:blue">5 Kursi</li>
                    <li class="list-group-item" style="color:blue">2442 cc</li>
                    <li class="list-group-item" style="color:blue">Matic</li>
                  </ol>
                  <br>
                  <form action="citra_booking.php" method="GET">
                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="Pajero" name="booknow">Book Now</button>
                </form>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="img/HRV.png"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Honda HRV</h5>
                <p class="card-text">
                  Mulai Dari IDK 900.000/ Hari
                  <ol class="list-group ">
                    <li class="list-group-item" style="color:blue">5 Kursi</li>
                    <li class="list-group-item" style="color:blue">1498 cc</li>
                    <li class="list-group-item" style="color:blue">Matic</li>
                  </ol>
                  <br>
                <form action="citra_booking.php" method="GET">
                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="HRV" name="booknow">Book Now</button>
                </form>
                </p>
              </div>
            </div>
          </div>
  </body>
</html>