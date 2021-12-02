<div class="container-fluid p-3">
	<h3>Input Data Buku Baru</h3>
</div>
<div class="container-fluid pr-5-sm">
	<form action="proses/buku-input-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	
	<table class="table table-striped table-responsive-sm">
		<tr>
			<td>ID Buku</td>
			<td>
					<input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="Masukkan ID Buku" required>
					<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><input type="text" name="judul_buku" class="form-control" id="judul_buku" placeholder="Masukkan Judul Buku" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Kategori Buku</td>
			<td>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="kategori" value="Ilmu Komputer" checked>Ilmu Komputer
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="kategori" value="Karya Sastra">Karya Sastra	
					</label>	
				</div>
                <div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="kategori" value="Ilmu Agama">Ilmu Agama	
					</label>	
				</div>
			</td>
		</tr>
		<tr>
			<td>Pengarang Buku</td>
			<td><input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Masukkan Nama Pengarang" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
        <tr>
			<td>Penerbit Buku</td>
			<td><input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Masukkan Nama Penerbit" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
	</form>
</div>