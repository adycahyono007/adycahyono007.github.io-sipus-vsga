<?php 
require_once "modul/modul.php"; 
getErrorLogin();
?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
	<link rel="stylesheet" href="plugin/style.css">
  	<script src="plugin/jquery-3.5.1.min.js"></script>
  	<script src="plugin/popper-1.16.0.min.js"></script>
  	<script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#343A40;">
	<!-- HEADER -->
	<div class="container-fluid p-3 bg-secondary text-white">
	<div class="row">
        <div class="col-md-12 text-center">
          <h1><b>PERPUSTAKAAN POLNES</b></h1>
          <p>Jl. Cipto Mangun Kusumo, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242, Telp: (0541) 260588</p>
        </div>
    </div>
	</div>

	<!-- INFO -->
	<div class="container-fluid p-3 bg-danger text-white">
      <div class="row">
        <div class="col-md-10">Vocational School Graduate Academy | VSGA</div>
        <div class="col-md-2">
          <span class="text"> Selamat Datang <?php echo$_SESSION['sesi']; ?>! </span>
        </div>
      </div>
    </div>

	<!--- MENU RESPONSIVE -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
		<!-- brand -->
		<a class="navbar-brand" href="#" style="font-style: italic">
			<img src="images/logo-perpustakaan3.png" width="50px" height="55px" />Perpustakaan Polnes
		</a>

		<!-- TAMPIL DATA KOTAK  -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuapp">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<!-- MEMBUAT MENU  -->
		<div class="collapse navbar-collapse" id="menuapp">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php?p=beranda">Beranda</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data MASTER</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?p=anggota">Data Anggota</a>
						<a class="dropdown-item" href="index.php?p=buku">Data Buku</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Transaksi</a>

					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
						<a class="dropdown-item" href="index.php?p=pengembalian">Transaksi Pengembalian</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?p=laporan">Laporan Transaksi</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid p-0 bg-white">
		<?php
			if (isset($_GET['p'])) {
				getPage ($_GET['p']);	
			}else{
				getPage ('beranda');
			}
		?>
	</div>

	<!--Social Media-->
	<div class="container1">
      <div class="row">
        <div class="col-md-12 col-sm-12 center-col text-center">
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-facebook btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-twitter btn-round"></i></a>
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-google-plus btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-tumblr btn-round"></i></a>
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-rss btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-instagram btn-round"></i></a>
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-github-alt btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-youtube btn-round"></i></a>
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-flickr btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-linkedin btn-round"></i></a>
          <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-dribbble btn-round"></i></a> <a href="#" class="btn social-icon button" data-abc="true"><i class="fa fa-vimeo-square btn-round"></i></a>
        </div>
      </div>
    </div>
    <!--Social Media-->
    <!-- footer -->
	<div>
    	<footer class="bg-secondary text-white text-center p-3">
      		<p>© 2021 Copyright : <a href="..." class="text-light fw-bold">ADI CAHYONO</a></p>
    	</footer>
	</div>
    <!-- footer -->
</body>
</html>