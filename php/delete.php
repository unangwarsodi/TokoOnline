<?php
include("koneksi.php");
$id = $_GET[id];
$query = "DELETE FROM tbl_barang WHERE id = '$id'";
$exe = mysql_query($query);
if ($exe){
header ('location:../tambah_barang.php');
}
else{ echo 'gagal';
}
?>