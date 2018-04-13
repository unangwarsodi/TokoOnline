<?php
include("koneksi.php");
$id = $_GET['id'];
$Nama_Toko = $_GET['nama_toko'];
$Nama = $_GET['nama'];
$Jumlah = $_GET['jumlah'];
$query2 = mysql_query("SELECT * FROM tbl_barang WHERE (nama='$Nama') AND (nama_toko='$Nama_Toko') ");
             	
				 while($data4 = mysql_fetch_array($query2)){	 
				 $jumlah1 =$data4['jumlah'] + $Jumlah;
					 }
			 	$query3 = mysql_query("UPDATE tbl_barang SET jumlah='$jumlah1' WHERE (nama='$Nama')");
if ($query3){   
$query = "DELETE FROM tbl_belanja WHERE id = '$id'";
$exe = mysql_query($query);
if ($exe){
header ('location:../daftar_belanjaan.php');
}
}
else{ echo 'gagal';
}
?>