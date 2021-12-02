<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="style/style.css" />
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/popper-1.16.0.min.js"></script>
    <script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <title>Beranda</title>
</head>
<body>
     <!--Carousel-->
     <div id="carouselExampleIndicators" class="carousel slide p-3" data-ride="carousel" data-interval="10000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/imgSipus1.jpg" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/imgSipus2.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/imgSipus3.jpg" alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/imgSipus4.jpg" alt="Fourth slide" />
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--Carousel-->
    <!--Fitur-->
    <div class="container-fluid p-3 bg-secondary text-white">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>FITUR APLIKASI</h2>
        </div>
      </div>
      <div class="row" style="align-items: center">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-2 mb-3">
          <a href="...">
            <div class="card">
              <img src="images/user.png" class="card-img-top p-4" alt="fitur1" />
              <div class="card-body">
                <p class="card-text text-dark text-center"><b>Data Anggota</b></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 mb-3">
          <a href="...">
            <div class="card">
              <img src="images/open-book.png" class="card-img-top p-4 " alt="fitur2" />
              <div class="card-body">
                <p class="card-text text-dark text-center"><b>Data Buku</b></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 mb-3">
          <a href="...">
            <div class="card">
              <img src="images/loan.png" class="card-img-top p-4" alt="fitur3" />
              <div class="card-body">
                <p class="card-text text-dark text-center"><b>Transaksi Peminjaman</b></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2 mb-3">
          <a href="...">
            <div class="card">
              <img src="images/book.png" class="card-img-top p-4" alt="fitur4" />
              <div class="card-body">
                <p class="card-text text-dark text-center"><b>Transaksi Pengembalian</b></p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--Fitur-->
</body>
</html>