<?php  
require_once "modul/modul.php"; 
extract(getBookForUpdate($_GET)); 
?>

<div class="container-fluid p-3">
	<h3>Edit Data Buku</h3>
</div>
<div class="container-fluid">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	<!---- Menggunakan DIV --->
	<div class="form-group">
		<label for="id_anggota">ID Buku:</label>
		<input type="text" name="id_buku" value="<?php echo $id_buku; ?>" readonly="readonly" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

	<div class="form-group">
		<label for="nama">Judul Buku: </label>
		<input type="text" name="judul_buku" id="judulbuku" value="<?php echo $judul_buku; ?>" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

	<div class="form-group">
		<label>Kategori Buku: </label><br />
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Ilmu Komputer" 
				<?php if($kategori == "Ilmu Komputer") { ?>
				checked
				<?php } ?>
				>Ilmu Komputer
			</label>	
		</div>
	
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Karya Sastra" 
				<?php if ($kategori == "Karya Sastra") { ?>
					checked
				<?php } ?>
				>Karya Sastra
			</label>	
		</div>

        <div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Ilmu Agama" 
				<?php if ($kategori == "Ilmu Agama") { ?>
					checked
				<?php } ?>
				>Ilmu Agama
			</label>	
		</div>
	</div>

    <div class="form-group">
		<label for="nama">Pengarang Buku: </label>
		<input type="text" name="pengarang" id="pengarang" value="<?php echo $pengarang; ?>" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

    <div class="form-group">
		<label for="nama">Penerbit Buku: </label>
		<input type="text" name="penerbit" id="penerbit" value="<?php echo $penerbit; ?>" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

    <div class="form-group">
		<label>Status Buku: </label><br />
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="statusbuku" value="Dipinjam" 
				<?php if($statusbuku == "Dipinjam") { ?>
				checked
				<?php } ?>
				>Dipinjam
			</label>	
		</div>
	
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="statusbuku" value="Tersedia" 
				<?php if ($statusbuku == "Tersedia") { ?>
					checked
				<?php } ?>
				>Tersedia
			</label>	
		</div>

	</div>
	
	<div class="form-group">
		<input type="hidden" name="page" value="<?php echo $page; ?>" id="page">
		<input type="submit" name="update" value="Update" id="tombol-simpan" class="btn btn-primary">
	</div>
	<hr class="my-5">
	</form>
</div>