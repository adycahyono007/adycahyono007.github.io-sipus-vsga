<?php
	require_once "../modul/modul.php";
	extract(getPrintKartuBook ($_GET['id']));
?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  	<script src="../plugin/jquery-3.5.1.min.js"></script>
  	<script src="../plugin/popper-1.16.0.min.js"></script>
  	<script src="../plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3>Kartu Data Buku</h3>
		<div class="card" style="width:250px">
			<div class="card-body">
				<h4 class="card-title"><?php echo strtoupper($judul_buku); ?></h4>
				<p class="card-text">
					ID Buku: <?php echo $id_buku; ?><br />
                    Kategori Buku: <?php echo $kategori; ?><br />
                    Pengarang Buku: <?php echo $pengarang; ?><br />
                    Penerbit Buku: <?php echo $penerbit; ?><br />
                    Status Buku: <?php echo $statusbuku; ?><br />
				</p>
			</div>
		</div>
	</div>
<script>
	window.print();
</script>

</body>
</html>