<?php

// gunakan modul.php yang telah dibuat
require_once "../modul/modul.php";

// simpan seluruh variabel form ke dalam
// variabel array agar lebih mudah untuk di kirim
// ke proses data
$data = array(	"idbuku"=>htmlentities($_POST['id_buku'],ENT_QUOTES), 
				"judulbuku"=>htmlentities($_POST['judul_buku'],ENT_QUOTES), 
				"kategori"=>htmlentities($_POST['kategori'],ENT_QUOTES), 
				"pengarang"=>htmlentities($_POST['pengarang'], ENT_QUOTES),
                "penerbit"=>htmlentities($_POST['penerbit'], ENT_QUOTES)
            );

// jalankan fungsi processAddUser()
// untuk melakukan proses penyimpanan data
processAddBook ($data, $_POST["simpan"]);	

?>