<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_toko";
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");
?>