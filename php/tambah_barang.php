		<?php 
		include 'koneksi.php';		
			$ekstensi_diperbolehkan	= array('png','jpg');
			$url = $_FILES['file']['name'];
			$x = explode('.', $url);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			
			session_start(); 
			$nama_toko = $_SESSION['nama_toko'];
			$Id = $_POST['id'];
			$Nama = $_POST['nama'];
			$Jenis = $_POST['jenis'];
			$Harga = $_POST['harga'];
			$Jumlah = $_POST['jumlah'];
			$Satuan = $_POST['satuan'];

			$search   = mysql_query("SELECT * FROM tbl_barang WHERE Id='$Id'");
			$result   = mysql_num_rows($search);
			if($result>0){
				
				if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, '../file/'.$url);
						$query = mysql_query("UPDATE tbl_barang SET nama='$Nama', jenis='$Jenis', harga='$Harga', foto='$url', jumlah='$Jumlah', nama_toko='$nama_toko', satuan='$Satuan' WHERE id ='$Id'");
						if($query){
							echo "<script>window.location='../tambah_barang.php';</script>";
						}else{
							echo 'GAGAL MENGUPLOAD GAMBAR';
						}
						}else{
							echo 'UKURAN FILE TERLALU BESAR';
						}
						}else{
							echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
						}
			}else {
					if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
					if($ukuran < 1044070){			
						move_uploaded_file($file_tmp, '../file/'.$url);
						$query = mysql_query("INSERT INTO tbl_barang VALUES(NULL, '$Nama', '$Jenis', '$Harga', '$url', '$Jumlah', '$nama_toko', '$Satuan')");
						if($query){
							echo "<script>window.location='../tambah_barang.php';</script>";
						}else{
							echo 'GAGAL MENGUPLOAD GAMBAR';
						}
						}else{
							echo 'UKURAN FILE TERLALU BESAR';
						}
						}else{
							echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
						}
			}
			
		
		?>
 