<?php
include("koneksi.php");
session_start();
$id = $_GET[id];
$nama_toko = $_SESSION['nama_toko'];
$query = "DELETE FROM tbl_belanja WHERE id_pembeli = '$id' AND nama_toko='$nama_toko'";
$exe = mysql_query($query);
if ($exe){
header ('location:../detail_pembeli.php');
}
else{ echo 'gagal';
}
?>