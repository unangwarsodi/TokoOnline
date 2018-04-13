		<?php 
		include 'koneksi.php';		
			 
			
			$Nama = $_POST['nama'];
			$Harga = $_POST['harga'];
            $ID = $_POST['id_pembeli'];
            $Id = $_POST['id'];
			$Id_barang = $_POST['id_barang'];
			$Total_Harga=$_POST['total_harga'];
            $Jumlah = $_POST['jumlah'];
			$Nama_Toko = $_POST['nama_toko'];
			$Nama_Pembeli = $_POST['nama_pembeli'];
			$Alamat = $_POST['alamat'];
			$Satuan = $_POST['satuan'];
			$total = $_POST['seni'];
			$total_belanjaan += $total;
            $jumlah_value=1;
            $Total_Harga_value=$Harga * $jumlah_value;
            $Total_Belanjaan = $Total_Harga;

            $search   = mysql_query("SELECT * FROM tbl_belanja WHERE id='$Id'");

			$result   = mysql_num_rows($search);
			
            if($result>0){
				$Nama = $_POST['nama'];
				$Harga = $_POST['harga'];
				$ID = $_POST['id_pembeli'];
				$Id_barang = $_POST['id_barang'];
				$Id = $_POST['id'];
				$Jumlah_Semula = $_POST['jumlah_semula'];
				$Jumlah = $_POST['jumlah'];
				$Total_Harga=$Harga * $Jumlah;
           		$Total_Belanjaan = $Total_Harga;
                $query = mysql_query("UPDATE tbl_belanja SET nama='$Nama', harga='$Harga', jumlah='$Jumlah', total_harga='$Total_Harga', total_belanjaan='$Total_Belanjaan', id_pembeli='$ID', nama_toko='$Nama_Toko', nama_pembeli='$Nama_Pembeli', alamat='$Alamat', satuan='$Satuan', id_barang='$Id_barang' WHERE id ='$Id'");
				$query2 = mysql_query("SELECT * FROM tbl_barang WHERE (nama='$Nama') AND (nama_toko='$Nama_Toko') ");
             	
				 while($data4 = mysql_fetch_array($query2)){	 
				 $jumlah1 =$data4['jumlah'] + $Jumlah_Semula ;
				 $jumlah2 = $jumlah1 - $Jumlah;
					 }
			 	$query3 = mysql_query("UPDATE tbl_barang SET jumlah='$jumlah2' WHERE (nama='$Nama')");
				if($query){
							echo "<script>window.location='../daftar_belanjaan.php';</script>";
						}else{
							echo 'GAGAL MENGUPLOAD GAMBAR';
						}		
            }
            else {

            $query = mysql_query("INSERT INTO tbl_belanja VALUES(NULL, '$Nama', '$Harga', '$jumlah_value', '$Total_Harga_value', '$total_belanjaan', '$ID', '$Nama_Toko', '$Nama_Pembeli', '$Alamat', '$Satuan', '$Id_barang')");
			$query2 = mysql_query("SELECT * FROM tbl_barang WHERE (nama='$Nama') AND (nama_toko='$Nama_Toko') ");
             while($data = mysql_fetch_array($query2)){
				 $jumlah1 = $data['jumlah'] - $jumlah_value;
			 }
			 $query3 = mysql_query("UPDATE tbl_barang SET jumlah='$jumlah1' WHERE nama ='$Nama'");		 
				
			 if($query){
				 			echo "<script>alert('Anda Berhasil Melakukan Pembelian');</script>";
							echo "<script>window.location='../daftar_belanjaan.php';</script>";
						}else{
							echo 'GAGAL MENGUPLOAD GAMBAR';
						}
            }
             
		?>
 