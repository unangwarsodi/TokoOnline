<?php
include("koneksi.php");
$id = $_GET[id];
$query = "DELETE FROM tbl_belanja WHERE id = '$id'";
$exe = mysql_query($query);
if ($exe){
header ('location:../daftar_belanjaan.php');
}
else{ echo 'gagal';
}
?>