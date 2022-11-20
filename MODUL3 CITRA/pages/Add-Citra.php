<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modul 3</title>
            <link rel="stylesheet" href="../style/style1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
            <!-- bootstrap links -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- bootstrap links -->
            <!-- fonts links -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
            <!-- fonts links -->
        </head>
        <body>
            <div class="home-section">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg" id="navbar">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Home-Citra.php">Home</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="ListCar-Citra.php">My Car</a>
                      </div>
                    </div>
                  </nav>
                <!-- navbar -->
                <div class="container mt-5" style="width:50%">
                <form action="create.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Nama
                        </label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Email Address
                        </label>
                        <input type="email" class="form-control" placeholder="Nama@exam.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="Form-label">
                            Deskripsi
                        </label>
                        <textarea class="form-control" rows="3" name="deskripsi">
                        </textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('input[type="radio"]').click(function(){
                        var jk = $(this).val();
                        console.log(jk)
                        function setHide(){
                            setTimeout(function(){
                                $("#result").removeClass("d-block")
                                $("#result").addClass("d-none")
                            },2000)
                        }
                        $.ajax({
                            url: "proses.php",
                            method: "POST",
                            data: {gender: jk},
                            success: function(data){
                                $("#result").removeClass("d-none")
                                $("#result").addClass("d-block")
                                $("#result").html(data)
                                setHide()
                            }
                        })
                    })
                })
            </script>
</body>
</html>