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
          <?php
          $name = isset($_GET['name']) ? $_GET['name'] : '';
          $bookdate = isset($_GET['bookdate']) ? $_GET['bookdate'] : '';
          $time = isset($_GET['time']) ? $_GET['time'] : '';
          $Phone = isset($_GET['Phone']) ? $_GET['Phone'] : '';
          ?>

          <div class="container">
                      <h1 class="text-center">Thank You Citra_1202200227 For Reserving</h1>
                      <a> please double check your reservation details</a>
                      <table class="table">
                          <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">name</th>
                              <th scope="col">bookdate</th>
                              <th scope="col">time</th>
                              <th scope="col">Phone</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td><?php echo $name ?></td>
                              <td><?php echo $bookdate ?></td>
                              <td><?php echo $time ?></td>
                              <td><?php echo $Phone ?></td>
                          </tr>
                          </tbody>
                      </table>
                      <div class="mb-3">
                      <div class="d-flex justify-content-center">
                                  <a href="getInput.php" class="btn btn-outline-primary w-50"> Back</a>
                              </div>
                      </div>
                      </div>
          </body>